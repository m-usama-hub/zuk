<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserManagement;
use App\Http\Controllers\Backend\CmsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\BusinessController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnonymousController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Backend\PaymentController as BackendPaymentController;
use App\Http\Controllers\Frontend\ItemController;
use App\Http\Controllers\Frontend\HousemateController;
use App\Http\Controllers\Frontend\ProfessionalController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\PropertyController;
use App\Http\Controllers\Frontend\MessageController;
use App\Http\Controllers\Frontend\ListhubController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\GeneralController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AnonymousController::class, 'index']);
Route::get('/toggleLanguage', [AnonymousController::class, 'toggleLanguage'])->name('toggleLanguage');
Route::get('/find-professional', [AnonymousController::class, 'indexProfessional'])->name('indexProfessional');
Route::get('/buy-sell-item', [AnonymousController::class, 'indexItem'])->name('indexItem');
Route::get('/find-property', [AnonymousController::class, 'indexProperty'])->name('indexProperty');
Route::get('/find-housemate', [AnonymousController::class, 'indexHousemate'])->name('indexHousemate');
Route::get('/share-message', [AnonymousController::class, 'indexMessage'])->name('indexMessage');

Route::get('/getproperty/{id}', [ListhubController::class,'getproperty'])->name('getproperty');

Route::get('/property/{slug}', [AnonymousController::class, 'PropertyDetail'])->name('PropertyDetail');
Route::get('/message/{slug}', [AnonymousController::class, 'MessageDetail'])->name('MessageDetail');
Route::get('/housemate/{slug}', [AnonymousController::class, 'HousemateDetail'])->name('HousemateDetail');
Route::get('/item/{slug}', [AnonymousController::class, 'ItemDetail'])->name('ItemDetail');
Route::get('/professional/{slug}', [AnonymousController::class, 'ProfessionalDetail'])->name('ProfessionalDetail');
Route::get('/project/{slug}', [AnonymousController::class, 'projectDetail'])->name('projectDetail');
Route::get('/search', [AnonymousController::class, 'search'])->name('searchData');

Route::post('/claim', [AnonymousController::class, 'cliamBusiness'])->name('cliamBusiness');

Route::post('/ajaxlogin',[AnonymousController::class,'ajaxLogin'])->name('Ajaxlogin');

// for google signup and login with laravel socialite package
Route::get('auth/google',[App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle'])->name('google-auth');
Route::get('auth/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'handleGoogleCallback']);

// for Facebook signup and login with laravel socialite package
Route::get('auth/facebook', [App\Http\Controllers\Auth\FacebookController::class, 'redirectToFacebook'])->name('facebook-auth');
Route::get('auth/facebook/callback', [App\Http\Controllers\Auth\FacebookController::class, 'handleFacebookCallback']);


Auth::routes(['verify' => true]);

Route::group([
    'middleware' => 'auth',
],function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    // Web route group
    Route::group([
        'middleware' => 'verified',
    ],function(){


        Route::get('/messages',function(){
            return redirect()->route('chatify');
        })->name('messages');

        Route::group([
            'prefix' => 'feed',
        ],function(){
            Route::feeds();
        });
        

        Route::post('/addUserInterest', [ProfileController::class,'addUserInterest']);
        Route::post('/addUserBusinessService', [ProfileController::class,'addUserBusinessService']);
        Route::post('/addUserBusinessCategory', [ProfileController::class,'addUserBusinessCategory']);
        Route::post('/deleteUserInterest', [ProfileController::class,'deleteUserInterest']);
        Route::post('/deleteUserBusinessService', [ProfileController::class,'deleteUserBusinessService']);
        Route::post('/deleteUserBusinessCategory', [ProfileController::class,'deleteUserBusinessCategory']);
        Route::patch('/updateProfile', [ProfileController::class,'updateProfile'])->name('updateProfile');
        Route::patch('/UpdateBusinessData', [ProfileController::class,'UpdateBusinessData'])->name('UpdateBusinessData');
        Route::post('/UpdatePrivacySettings', [ProfileController::class,'UpdatePrivacySettings']);
        Route::post('/paymentPost', [PaymentController::class,'paymentPost']);
        Route::post('/phone/verify', [VerificationController::class,'SendVerificationSMS']);
        Route::post('/phone/verify/code', [VerificationController::class,'verifySMS']);

        Route::resource('item',ItemController::class);
        Route::resource('housemate',HousemateController::class);
        Route::resource('professional',ProfessionalController::class);
        Route::resource('project',ProjectController::class);
        Route::resource('property',PropertyController::class);
        Route::resource('message',MessageController::class);

        Route::post('/deletePost', [GeneralController::class,'deletePost']);
        Route::post('/getPackagePrice', [GeneralController::class,'getPackagePrice']);
        Route::post('/deleteImage', [GeneralController::class,'deleteImage']);
        Route::get('/getPostData', [GeneralController::class,'getPostData']);
        Route::post('/sendMessage', [GeneralController::class,'sendMessage']);
        Route::post('/DoUnfav', [GeneralController::class,'DoUnfav']);
        Route::post('/Dofav', [GeneralController::class,'Dofav']);
        Route::post('/LikeToggle/{id}', [GeneralController::class,'LikeToggle'])->name('liketoggle');
        Route::post('/Doreply/{id}', [GeneralController::class,'Doreply'])->name('doreply');
        Route::post('/deleteReply/{id}', [GeneralController::class,'deleteReply'])->name('deleteReply');

        Route::post('/reportUser', [GeneralController::class,'reportUser']);

        Route::post('/postReview', [ProfessionalController::class,'PostReview'])->name('PostReview');

    });

    // Admin route group
    Route::group([
        'prefix' => 'admin',
    ],function(){

        Route::get('/chat',function(){
            return view('Backend.chat');
        })->name('chat');

        Route::resource('role',UserManagement\RoleController::class);
        Route::resource('user',UserManagement\UserController::class);
        Route::get('/user/create',[UserManagement\UserController::class,'create'])->name("user.create");
        Route::resource('create-permission',UserManagement\PermissionController::class);
        Route::resource('setting',CmsController::class);
        Route::patch('setting', [CmsController::class,'updateLinks'])->name('setting.updateLinks');
        Route::post('/edit-permission',[UserManagement\PermissionController::class,'EditPermission']);
        Route::post('/delete-permission',[UserManagement\PermissionController::class,'DeletePermission']);
        Route::resource('category',CategoryController::class);
        Route::resource('business',BusinessController::class);
        Route::resource('items',ItemController::class);
        Route::resource('housemates',HousemateController::class);
        Route::resource('projects',ProjectController::class);
        Route::resource('properties',PropertyController::class);
        Route::resource('messages',MessageController::class);
        Route::resource('payments',BackendPaymentController::class);

        Route::get('header',[CmsController::class,'header'])->name('header');
        Route::get('pages',[CmsController::class,'pages'])->name('pages');
        Route::get('menu',[CmsController::class,'menu'])->name('menu');
        Route::get('translation',[CmsController::class,'translation'])->name('translation');
        Route::get('privacy-policy',[CmsController::class,'privacypolicy'])->name('privacy-policy');
        Route::get('about-us',[CmsController::class,'aboutus'])->name('about-us');
        Route::get('footer',[CmsController::class,'footer'])->name('footer');
        Route::get('web-content',[CmsController::class,'webcontent'])->name('web-content');
        Route::get('services',[CmsController::class,'services'])->name('services');
        Route::get('add-translation',[CmsController::class,'add_translation'])->name('add_translation');
        Route::post('edit-translation/{id}',[CmsController::class,'edit_translation'])->name('edit_translation');
        Route::get('edit_show/{id}',[CmsController::class,'edit_show'])->name('edit_show');
        Route::post('add-translation',[CmsController::class,'add_translation'])->name('post_translation');
        Route::post('updateService/{id}',[CmsController::class,'updateService'])->name('updateService');

        Route::post('import',[CmsController::class,'import'])->name('import');
        Route::post('editpageCMS/{pageId}',[CmsController::class,'editpageCMS'])->name('editpageCMS');

    });


});

Route::get('/clear-all', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('route:clear');
    Artisan::call('optimize:clear');
    return "Config - Route - Cache is cleared";
});
