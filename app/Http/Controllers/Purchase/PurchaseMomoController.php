<?php

namespace App\Http\Controllers\Purchase;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Services\CheckPurchaseService;
use Illuminate\Support\Facades\Session;
use App\Services\Api\CurrentUserService;
use Illuminate\Support\Facades\Redirect;
use App\Services\Api\Purchase\PurchaseMembershipService;

class PurchaseMomoController extends Controller
{
    public function initPayment(Request $request){
        if(Session::has('paymentSession')){
            Session::forget('paymentSession');
        }else if(Session::has('announcement_id')){
            Session::forget('announcement_id');
        }else if(Session::has('membership_id')){
            Session::forget('membership_id');
        }
        try{
            $token=Session::get('tokenUser');
            //$initPaymentResponse=(new PurchaseMembershipService())->initPayment($request->price,$token);
             //$code=$initPaymentResponse->code ?? null;

                //Session::put('paymentSession',$initPaymentResponse->data);
                //Session::save();
                Session::put('announcement_id',$request->announcement_id);
                Session::save();
                Session::put('price',$request->price);
                Session::save();
                Session::put('membership_id',$request->membership_id);
                Session::save();
                //return Redirect::intended($initPaymentResponse->data->payment_url);
            return to_route('init-payment');
            //return $initPaymentResponse;
        }catch(Exception $e){
            dd($e->getMessage());
        }


    }

    public function openPopup(){

        $price=Session::get('price');
        $announcement=Session::get('announcement_id');
        $membership=Session::get('membership_id');



        $user=(new CurrentUserService())->currentUser();
        $transaction_id="REFADS".$announcement.rand(123456789, 100000000);
        $check=(new CheckPurchaseService())->checkEscortAds($user->id,$transaction_id,$membership,$announcement);

        return view('membership.test-popup',compact('price','transaction_id','membership','announcement'));
    }
    public function subscribePremium(Request $request){
        $price=$request->price;
        $membership=Session::get('membership_id');
        $user=(new CurrentUserService())->currentUser();
        $transaction_id="REFPRE".rand(123456789, 100000000);
        $check=(new CheckPurchaseService())->checkPlan($user->id,$transaction_id);
        return view('user.payment-momo',compact('price','membership'));
    }

    public function initPayWithCoolPay(Request $request){
            $announcement=$request->announcement_id;
        $membership=$request->membership_id;
            $transaction_id="COLADS".rand(123456789, 100000000);
            $user=(new CurrentUserService())->currentUser();
            $purchase=(new PurchaseMembershipService())->initPayCoolPay(100,$transaction_id);
            $transaction_ref=$purchase->transaction_ref ?? null;
            $url=$purchase->payment_url ?? null;
            $check=(new CheckPurchaseService())->initCoolpay($user->id,$transaction_ref,$membership,$announcement);
            return redirect()->intended($url);
    }

    public function initPayWithCoolPayCredit(Request $request){
        $transaction_id="COLCRE".rand(123456789, 100000000);
        $user=(new CurrentUserService())->currentUser();
        $purchase=(new PurchaseMembershipService())->initPayCoolPayCredit(100,$transaction_id);
        $transaction_ref=$purchase->transaction_ref ?? null;
        $url=$purchase->payment_url ?? null;
        $check=(new CheckPurchaseService())->initCoolpayCredit($user->id,$request->price,$transaction_ref);
        return redirect()->intended($url);
}
public function initPayWithCoolPayPlan(Request $request){
    $transaction_id="COLPl".rand(123456789, 100000000);
    $user=(new CurrentUserService())->currentUser();
    $purchase=(new PurchaseMembershipService())->initPayCoolPayPlan(100,$transaction_id);
    $transaction_ref=$purchase->transaction_ref ?? null;
    $url=$purchase->payment_url ?? null;
    $check=(new CheckPurchaseService())->initCoolpayPlan($user->id,$transaction_ref);
    return redirect()->intended($url);
}
}
