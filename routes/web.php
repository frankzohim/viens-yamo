<?php

//Importing admin
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ReportController;

use App\Http\Controllers\Ads\AdsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginViewController;

use App\Http\Controllers\Ads\FilterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\User\LogoutController;

use App\Http\Controllers\Ads\AdsImageController;
use App\Http\Controllers\Escort\EscortController;
use App\Http\Controllers\Search\SearchController;
use App\Http\Controllers\User\ReviewUserController;


use App\Http\Controllers\Listing\LocationController;
use App\Http\Controllers\Escort\ChoosePlanController;
use App\Http\Controllers\Purchase\PurchaseController;

use App\Http\Controllers\ServerUnavailableController;
use App\Http\Controllers\Admin\User\AddUserController;
use App\Http\Controllers\User\SecureAccountController;

use App\Http\Controllers\Admin\Town\EditTownController;
use App\Http\Controllers\Admin\Town\ListTownController;
use App\Http\Controllers\Admin\User\ListUserController;
use App\Http\Controllers\Admin\Escort\ListEscortController;
use App\Http\Controllers\Auth\AutomaticLoginController;
use App\Http\Controllers\Escort\DetailEscortController;
use App\Http\Controllers\User\ChangePasswordController;
use App\Http\Controllers\Admin\Town\CreateTownController;
use App\Http\Controllers\Admin\Town\DeleteTownController;
use App\Http\Controllers\Purchase\PurchaseMomoController;
use App\Http\Controllers\Admin\User\SuspendUserController;
use App\Http\Controllers\Admin\User\DeleteUserController;
use App\Http\Controllers\Escort\Profile\StepOneController;
use App\Http\Controllers\Escort\Profile\StepTwoController;
use App\Http\Controllers\Memberships\MemberShipController;
use App\Http\Controllers\Admin\Report\EditReportController;
use App\Http\Controllers\Admin\Report\ListReportController;
use App\Http\Controllers\Admin\User\ActivateUserController;
use App\Http\Controllers\Dashboard\DashboardAdminController;
use App\Http\Controllers\Escort\Profile\StepFinalController;
use App\Http\Controllers\Escort\Profile\StepThreeController;
use App\Http\Controllers\Admin\Contact\EditContactController;
use App\Http\Controllers\Admin\Contact\ListContactController;
use App\Http\Controllers\Admin\Quarter\EditQuarterController;
use App\Http\Controllers\Admin\Quarter\ListQuarterController;


use App\Http\Controllers\Admin\Report\DeleteReportController;

//Importing Controllers for Membership
use App\Http\Controllers\Dashboard\DashboardEscortController;
use App\Http\Controllers\Admin\Contact\DeleteContactController;
use App\Http\Controllers\Admin\Quarter\CreateQuarterController;
use App\Http\Controllers\Admin\Quarter\DeleteQuarterController;

//Importing Contact Controller
use App\Http\Controllers\Dashboard\DashboardCustomerController;

//Importing Denounce Controller
use App\Http\Controllers\Purchase\CurrentUserPurchaseController;
use App\Http\Controllers\Admin\MemberShip\EditMemberShipController;

use App\Http\Controllers\Admin\MemberShip\ListMemberShipController;

use App\Http\Controllers\Admin\MemberShip\CreateMemberShipController;
use App\Http\Controllers\Admin\MemberShip\DeleteMemberShipController;

use App\Http\Controllers\Admin\Escort\VerifyEscortController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\User\GiveCreditController;
use App\Http\Controllers\User\UpdateUserController;

use App\Http\Controllers\Admin\Ads\AdController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[HomepageController::class,'homepage'])->name('homepage');
Route::get('/check-age',[HomepageController::class,'checkAge'])->name('check-age');
Route::get('/privacy',[PagesController::class,'privacy'])->name('privacy');
Route::get('/cgu',[PagesController::class,'cgu'])->name('cgu');
Route::get('/help',[PagesController::class,'help'])->name('help');
Route::get('/faq',[PagesController::class,'faq'])->name('faq');


//url ads cool pay

Route::get('/success/payment/ads',function(){
    return view('purchase.congrats-ads');
});

Route::get('/fail/payment/ads',function(){
    return view('purchase.fail-ads');
});

Route::get('/cancel/payment/ads',function(){
    return view('purchase.cancel-ads');
});

//url credit cool pay

Route::get('/success/payment/credits',function(){
    return view('purchase.congrats-credit');
});

Route::get('/fail/payment/credits',function(){
    return view('purchase.fail-credit');
});
Route::get('/cancel/payment/credits',function(){
    return view('purchase.cancel-credit');
});

//url Cool Pay plan

Route::get('/success/payment/plan',function(){
    return view('purchase.congrats-plan');
});

Route::get('/fail/payment/plan',function(){
    return view('purchase.fail-plan');
});

Route::get('/cancel/payment/plan',function(){
    return view('purchase.cancel-plan');
});

//Middleware check age
Route::middleware(['checkAge'])->group(function () {

     //SEARCH GROUP URL
    Route::get('search',[SearchController::class,'search'])->name('search');

    Route::post('/answer/verify',[ChangePasswordController::class,'answerVerify'])->name('answer-verify');
    Route::get('/answer/verify/change-password',[ChangePasswordController::class,'passwordView'])->name('password-view');
    Route::post('/answer/verify/change-password',[ChangePasswordController::class,'change'])->name('password-change');
    Route::get('/check-number/answer-question',[ChangePasswordController::class,'answerView'])->name('answerView')->middleware('preventBack');
    Route::get('/check-number',[ChangePasswordController::class,'checkNumber'])->name('check-number')->middleware('preventBack');
    Route::post('/check-number',[ChangePasswordController::class,'verify'])->name('number-verify')->middleware('preventBack');


    Route::post('/login',[LoginController::class,'login'])->name('login');
    Route::get('/loginAuto',[AutomaticLoginController::class,'login'])->name('loginAuto');
    Route::get('/server-notFound',[ServerUnavailableController::class,'unavailable'])->name('unavailable');

    //REPORT GROUP URL
    Route::get('/report/{id}/{type}',[ReportController::class,'create'])->name('report');
    Route::post('/report',[ReportController::class,'store'])->name('report.store');

    Route::get('ads/list/filter',[FilterController::class,'filter'])->name('ads.filter');
    Route::get('/list',[LocationController::class,'index'])->name('list');
    Route::get('/list',[LocationController::class,'index'])->name('list');
    Route::get('/adstown',[AdsController::class, 'adsTown'])->name('adstown');
    Route::get('/adstown/{id}',[AdsController::class, 'adsByTown'])->name('ads.town');
    Route::get('/adsquarter/{id}',[AdsController::class, 'adsByQuarter'])->name('ads.quarter');
    Route::get('/adscategory/{id}',[AdsController::class, 'adsByCategory'])->name('ads.category');
    Route::get('escorts/{id}',[DetailEscortController::class, 'show'])->name('escort.details');
    Route::get('displayProfil/{id}/{path}',[EscortController::class, 'displayProfil'])->name('display.profil');
    Route::get('escort/list/{id?}',[EscortController::class, 'list'])->name('escort.list');
    Route::get('escortbyquarter/{quarterID}',[EscortController::class, 'escortByQuater'])->name('escort.quarter');
    Route::get('ads/list/{membership?}',[AdsController::class, 'list'])->name('ads.list');
    Route::get('ads/nonvip',[AdsController::class, 'nonvip'])->name('ads.nonvip');
    Route::get('ads/{username}/{slug}',[AdsController::class, 'show'])->name('ads.details');


    Route::post('ads/image',[AdsImageController::class, 'images'])->name('ads.image');

    Route::get('/contact',[ContactController::class,'create'])->name('contact');
    Route::post('/contact',[ContactController::class,'store'])->name('contact.store');


    Route::post('/review/{escortId}',[ReviewUserController::class,'review'])->name('review.user')->middleware('customer');


});


    Route::get('displayadsimage/{id}/{path}',[AdsImageController::class, 'displayAdsImage'])->name('display.ads.image');
    Route::get('/displayVideo/{id}/{path}',[AdsController::class,'displayAdsVideo'])->name('displayVideo');
    Route::get('/displaybanner/{id}',[BannerController::class,'displayBanner'])->name('display.banner');

// le middleware preventBack permet de proteger les routes de connexion et d'inscription lorsque un utilisateur est connecté
    Route::get('/register', [CreateUserController::class, 'create'])->name("register")->middleware('preventBack');
    Route::get('/login',[LoginViewController::class,'getViewLogin'])->middleware('preventBack');

//middleware user

Route::middleware(['user'])->group(function () {
    Route::post('update/user/{id}',[UpdateUserController::class,'update'])->name('user.update');
    Route::get('payment/fail',[PurchaseController::class,'purchaseFail'])->name('congrats-fail');
    Route::get("/secure-account/confirm",[SecureAccountController::class,'confirm'])->name('confirm');
    Route::post("/answer",[SecureAccountController::class,'answer'])->name('answer');
    Route::post("/answerStore",[SecureAccountController::class,'answerStore'])->name('answer-store');
    Route::get("/secure-account/questions",[SecureAccountController::class,'answerView'])->name('give-answer');
    Route::get('/secure-account',[SecureAccountController::class,'selectQuestion'])->name('selectQuestion');
    Route::get('purchase/credit',[PurchaseController::class,'purchaseCredit'])->name('purchase.credit');
    Route::post('/logout',[LogoutController::class,'logout'])
    ->name('logout');
    Route::post('init/pay/with-coolpay/credits',[PurchaseMomoController::class,'initPayWithCoolPayCredit'])->name('init-cool-pay.credit');
    Route::get('choice/payment/type',[PurchaseController::class,'choicePaymentType'])->name('choice.type.payment');
    Route::get('success/payment',[PurchaseController::class,'purchaseSuccess'])->name('purchase-credit-success');
    Route::get('success/payment/credit',[PurchaseController::class,'purchaseSuccessCredit']);
    Route::get('success/payment/plan',[PurchaseController::class,'purchaseSuccessPlan']);
    Route::prefix('dashboard')->group(function () {
        Route::get('index', [DashboardEscortController::class, 'index'])->name('db.escort.index');
    });
});



//Route escort  completed profile middleware
Route::middleware(['escort'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('index', [DashboardEscortController::class, 'index'])->name('db.escort.index');
        Route::get('profil', [DashboardEscortController::class, 'profil'])->name('db.escort.profil');
        Route::get('ads', [DashboardEscortController::class, 'ads'])->name('db.escort.ads');
        Route::get('messages', [DashboardEscortController::class, 'messages'])->name('db.escort.messages');
        Route::get('mes-paiements', [DashboardEscortController::class, 'finance'])->name('db.escort.finance');
        Route::get('advertise', [DashboardEscortController::class, 'advertise'])->name('db.escort.advertise');
        Route::get('settings', [DashboardEscortController::class, 'settings'])->name('db.escort.settings');
    });
    Route::get('/payment',[PurchaseMomoController::class,'openPopup'])->name('init-payment');

    Route::post('init/payment',[PurchaseMomoController::class,'initPayment'])->name('initPayment');
    Route::post('init/pay/with-coolpay',[PurchaseMomoController::class,'initPayWithCoolPay'])->name('init-cool-pay');
    Route::get('choosePlan/{id}',[ChoosePlanController::class,'PlanShow'])->name('show.plan');




    //Memberships GROUP URL
    Route::get('/memberships/{adsId}',[MemberShipController::class, 'display'])->name('membership.display');
    Route::get('/memberships',[MemberShipController::class, 'index'])->name('membership.index');

    //Annoucements GROUP URL
    Route::get('/ads',[AdsController::class, 'create'])->name('ads.create');
    Route::get('/ads/deleteImage',[AdsImageController::class, 'deleteImage'])->name('deleteImage');
    Route::get('/ads/deletePicture/{id}/{path}',[AdsImageController::class, 'deletePicture'])->name('deletePicture');
    Route::get('/editads/{id}',[AdsController::class, 'edit'])->name('ads.edit');

    Route::post('/ads',[AdsController::class, 'save'])->name('ads.save');
    Route::post('/ads/update',[AdsController::class, 'update'])->name('ads.update');

    Route::post('ads/delete/{id}',[AdsController::class, 'delete'])->name('ads.delete');



    Route::post('ads/updateimage',[AdsImageController::class, 'updateImage'])->name('update.image');

    Route::get('/mes-abonnements',[CurrentUserPurchaseController::class,'currentPurchase'])->name('my-purchase');
        //Memberships GROUP URL
    Route::get('/memberships/{adsId}',[MemberShipController::class, 'display'])->name('membership.display');
    Route::get('/step-one',[StepOneController::class,'stepOne'])->name('step-one');
    Route::post('/step-one-store',[StepOneController::class,'stepOneStore'])->name('step-one-store');
    Route::get('/step-two',[StepTwoController::class,'stepTwo'])->name('step-two');
    Route::post('/step-two-store',[StepTwoController::class,'stepTwoStore'])->name('step-two-store');
    Route::get('/step-three',[StepThreeController::class,'stepThree'])->name('step-three');
    Route::post('/step-three-store',[StepThreeController::class,'stepThreeStore'])->name('step-three-store');
    Route::post('/profile-images',[StepThreeController::class,'images'])->name('profile-images');
    Route::get('/step-final',[StepFinalController::class,'stepFinal'])->name('step.final');
    Route::post('/purchaseWithCredit',[PurchaseController::class,'purchaseWithCredit'])->name('purchase-with-credit');
    Route::get('/congratulation/{membership}/{announce}',[PurchaseController::class,'purchaseFinal'])->name('congrats-purchase');

    //Route::get('congratulations/momo',[PurchaseController::class,'purchaseFinalMomo'])->name('congrats-purchase-momo');

    Route::post('purchase/credit',[PurchaseController::class,'purchaseInitCredit'])->name('purchase.init.credit');
    Route::get('purchase/credit/successfully/{price}',[PurchaseController::class,'purchaseStoreCredit'])->name('purchase.store.credit');

});



//Customer group route
Route::get('/upgrade-plan',[MemberShipController::class,'showPremium'])->name('upgrade-plan')->middleware('customer');
Route::post('/upgrade-plan/coolpay',[PurchaseMomoController::class,'initPayWithCoolPayPlan'])->name('init-cool-pay-plan')->middleware('customer');
Route::middleware(['customer'])->prefix('customer')->group(function () {

    Route::get('/congratulations',[PurchaseController::class,'purchaseUserMomo'])->name('congratulations');
    Route::get('/felicitations',[PurchaseController::class,'purchaseUserCredit'])->name('congratulations-credits');
    Route::get('/payment-mobile-money',[PurchaseMomoController::class,'subscribePremium'])->name('subscribe-premium');
        Route::get('index', [DashboardCustomerController::class, 'index'])->name('db.customer.index');
        Route::get('plan/premium',[ChoosePlanController::class,'PlanPremium'])->name('plan.premium');
        Route::get('profil', [DashboardCustomerController::class, 'profil'])->name('db.customer.profil');
        Route::get('ads', [DashboardCustomerController::class, 'ads'])->name('db.customer.ads');
        Route::get('messages', [DashboardCustomerController::class, 'messages'])->name('db.customer.messages');
        Route::get('user/payments', [DashboardCustomerController::class, 'finance'])->name('db.customer.finance');
        Route::get('advertise', [DashboardCustomerController::class, 'advertise'])->name('db.customer.advertise');
        Route::get('settings', [DashboardCustomerController::class, 'settings'])->name('db.customer.settings');
        Route::get('purchase/credit/successfully/{price}',[PurchaseController::class,'purchaseStoreCredit'])->name('purchase.store.credit');

    });




//middleware admin

Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('give/credit/{id}',[GiveCreditController::class,'creditView'])->name('credit.view');
    Route::post('give/credit/{id}',[GiveCreditController::class,'giveCredit'])->name('give.credit');
    Route::post('update/profile',[ProfilController::class,'updateProfile'])->name('admin.update.profile');
    Route::get('/profil',[ProfilController::class,'profile'])->name('admin.profile');
   Route::get('dashboard',[DashboardAdminController::class,'index'])->name('admin.dashboard');
    Route::resource('faqs',FaqController::class);
   Route::get('escorts',[ListEscortController::class,'listEscort'])->name('escorts');
   Route::get('users',[ListUserController::class,'listUser'])->name('users');
   Route::get('users/create',[AddUserController::class,'addView'])->name('users.create');
   Route::post('users/create',[AddUserController::class,'storeUser'])->name('users.create');
   Route::get('users/suspend',[ListUserController::class,'listUserBan'])->name('users.suspend');
   Route::get('users/role/',[ListUserController::class,'userByRole'])->name('user-by-role');
   Route::get('users/delete/{id}',[DeleteUserController::class,'delete'])->name('user-delete');
   Route::get('suspend/user/{id}',[SuspendUserController::class,'ban'])->name('suspend-user');
   Route::get('activate/user/{id}',[ActivateUserController::class,'activate'])->name('activate-user');


   Route::get('memberships',[ListMemberShipController::class,'index'])->name('memberships');
   Route::get('memberships/create',[CreateMemberShipController::class,'addView'])->name('memberships.create');
   Route::post('memberships/create',[CreateMemberShipController::class,'store'])->name('memberships.create');
   Route::get('memberships/edit/{id}',[EditMemberShipController::class,'edit'])->name('memberships.edit');
   Route::post('memberships/update',[EditMemberShipController::class,'update'])->name('memberships.update');
   Route::post('memberships/delete/{id}',[DeleteMemberShipController::class,'delete'])->name('memberships.delete');

   Route::get('towns',[ListTownController::class,'index'])->name('towns');
   Route::get('towns/create',[CreateTownController::class,'addView'])->name('towns.create');
   Route::post('towns/create',[CreateTownController::class,'store'])->name('towns.create');
   Route::get('towns/edit/{id}',[EditTownController::class,'edit'])->name('towns.edit');
   Route::post('towns/update',[EditTownController::class,'update'])->name('towns.update');
   Route::post('towns/delete/{id}',[DeleteTownController::class,'delete'])->name('towns.delete');


   Route::get('quarters',[ListQuarterController::class,'index'])->name('quarters');
   Route::get('quarters/create',[CreateQuarterController::class,'addView'])->name('quarters.create');
   Route::post('quarters/create',[CreateQuarterController::class,'store'])->name('quarters.create');
   Route::get('quarters/edit/{id}',[EditQuarterController::class,'edit'])->name('quarters.edit');
   Route::post('quarters/update',[EditQuarterController::class,'update'])->name('quarters.update');
   Route::post('quarters/delete/{id}',[DeleteQuarterController::class,'delete'])->name('quarters.delete');


   Route::get('contacts',[ListContactController::class,'index'])->name('contacts');
   Route::get('contacts/edit/{id}',[EditContactController::class,'edit'])->name('contacts.edit');
   Route::post('contacts/update',[EditContactController::class,'update'])->name('contacts.update');
   Route::post('contacts/delete/{id}',[DeleteContactController::class,'delete'])->name('contacts.delete');

   Route::get('reports',[ListReportController::class,'index'])->name('reports');
   Route::get('reports/edit/{id}',[EditReportController::class,'edit'])->name('reports.edit');
   Route::post('reports/update',[EditReportController::class,'update'])->name('reports.update');
   Route::post('reports/delete/{id}',[DeleteReportController::class,'delete'])->name('reports.delete');
   Route::get('displayreportimage/{id}/{adsId}',[EditReportController::class, 'displayReportImage'])->name('display.report.image');

   Route::get('banners',[BannerController::class,'index'])->name('banners');
   Route::get('banners/edit/{id}',[BannerController::class,'edit'])->name('banners.edit');
   Route::post('banners/update',[BannerController::class,'update'])->name('banners.update');

   Route::get('ads',[AdController::class,'index'])->name('admin.ads');
   Route::get('ads/edit/{id}',[AdController::class,'edit'])->name('admin.ads.edit');
   Route::post('ads/update',[AdController::class,'update'])->name('admin.ads.update');
   Route::get('ads/delete/{id}',[AdController::class,'delete'])->name('admin.ads.delete');

   //Verify Escort
   Route::post('escort/verify/{id}',[VerifyEscortController::class,'verify'])->name('verify');
});




