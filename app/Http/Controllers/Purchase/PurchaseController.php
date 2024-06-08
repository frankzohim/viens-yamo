<?php

namespace App\Http\Controllers\Purchase;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Services\CheckPurchaseService;
use Illuminate\Support\Facades\Session;
use App\Services\Api\CurrentUserService;
use App\Mail\SuccessfulMembershipPayment;
use  App\Services\Api\MemberShip\MemberShipService;
use App\Services\Api\Purchase\PurchaseCreditService;
use App\Services\Api\Purchase\PurchaseMembershipService;

class PurchaseController extends Controller
{
    public function purchaseWithCredit(Request $request){
        $purchaseService=(new PurchaseMembershipService())->purchaseWithCredit($request->membership_id,$request->announcement_id);
        dd($purchaseService);
        if($purchaseService->code===200){

            return view('membership.congrats');


        }
    }


    public function purchaseFinal($membership_id,$announcement_id){

            $verifyPaymentResponse=(new PurchaseMembershipService())->verifyPayment($membership_id,$announcement_id);

            //return $verifyPaymentResponse;

            //Send mail to admin
            $membership = (new MemberShipService)->getMemberShip($membership_id);

              Mail::to('delanofofe@gmail.com')
                ->send(new SuccessfulMembershipPayment($membership));

                 Mail::to('temerprodesign@yahoo.fr')
                ->send(new SuccessfulMembershipPayment($membership));

        return view('membership.congrats');
    }

    public function purchaseFail(){

        return view('membership.fail');

    }

    public function purchaseCredit(?string $price = null){
        //dd($price);
        return view('purchase.purchase-credit', compact('price'));
    }

    public function purchaseInitCredit(Request $request){
        $price=$request->price;
        $user=(new CurrentUserService())->currentUser();
        $transaction_id="REFCRE".rand(123456789, 100000000);
        $check=(new CheckPurchaseService())->checkCredit($price,$user->id,$transaction_id);
        return view('purchase.purchase-credit-with-momo',compact('price','transaction_id'));
    }

    public function choicePaymentType(Request $request){

        //dd($request->price);
        return redirect()->route('purchase.credit', ['price'=>$request->price]);
        // return back()->with('price',$request->price);
    }

    public function purchaseStoreCredit($price){
        $purchaseResponse=(new PurchaseCreditService())->purchaseCredit($price);

        return view('purchase.congrats-credit');
    }

    public function purchaseSuccess(){

        return view('purchase.congrats-ads');
    }



    public function purchaseUserMomo(){
        $verifyPaymentResponse=(new PurchaseMembershipService())->verifyUserPayment();
        $membership = (new MemberShipService)->getMemberShip(4);

              Mail::to('delanofofe@gmail.com')
                ->send(new SuccessfulMembershipPayment($membership));

                 Mail::to('temerprodesign@yahoo.fr')
                ->send(new SuccessfulMembershipPayment($membership));
        return view('membership.congrats-premium');
    }

    public function purchaseUserCredit(){
        $verifyPaymentResponse=(new PurchaseMembershipService())->verifyUserPaymentWithCredit();
        $membership = (new MemberShipService)->getMemberShip(4);


        return view('membership.congrats-premium');
    }
    public function purchaseSuccessCredit(){

        return view('purchase.congrats-credit');
    }

    public function purchaseSuccessPlan(){
        return view('purchase.congrats-plan');
    }

}
