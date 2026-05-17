<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstallController;

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

Route::get('/image-proxy', function () {
    $url = request('url');
    if (!$url) {
        abort(400, 'Missing url parameter');
    }

    $response = Http::withHeaders([
        'User-Agent' => 'Laravel-Image-Proxy'
    ])->get($url);

    return response($response->body(), $response->status())
        ->header('Content-Type', $response->header('Content-Type'))
        ->header('Access-Control-Allow-Origin', '*');
});

//Route::get('activation-check', [InstallController::class, 'getActivationCheckView'])->name('system.activation-check');
//Route::post('activation-check', [InstallController::class, 'activationCheck']);

Route::get('lang/{locale}', [LandingController::class, 'lang'])->name('lang');
Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('page/contact-us', [LandingController::class, 'contactUs'])->name('page.contact-us');

Route::get('como-funciona', [LandingController::class, 'comoFunciona'])->name('biscaja.como-funciona');
Route::get('seja-prestador', [LandingController::class, 'sejaPrestador'])->name('biscaja.seja-prestador');
Route::get('ajuda', [LandingController::class, 'ajuda'])->name('biscaja.ajuda');

Route::get('business-page/{slug}', [LandingController::class, 'dynamicPage'])->name('business.page.dynamic');

Route::get('maintenance-mode', [LandingController::class, 'maintenanceMode'])->name('maintenance-mode');
Route::post('subscribe-newsletter', [LandingController::class, 'subscribeNewsletter'])->name('subscribe-newsletter');

Route::get('/firebase-messaging-sw.js', function () {
    $content = "importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');
firebase.initializeApp({
    apiKey: \"" . env('FIREBASE_API_KEY') . "\",
    authDomain: \"" . env('FIREBASE_AUTH_DOMAIN') . "\",
    projectId: \"" . env('FIREBASE_PROJECT_ID') . "\",
    storageBucket: \"" . env('FIREBASE_STORAGE_BUCKET') . "\",
    messagingSenderId: \"" . env('FIREBASE_MESSAGING_SENDER_ID') . "\",
    appId: \"" . env('FIREBASE_APP_ID') . "\",
    measurementId: \"\"
});
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function (payload) {
    return self.registration.showNotification(payload.data.title, {
        body: payload.data.body ? payload.data.body : '',
        icon: payload.data.icon ? payload.data.icon : ''
    });
});";

    return response($content, 200, [
        'Content-Type' => 'application/javascript',
        'Cache-Control' => 'public, max-age=3600'
    ]);
});

Route::fallback(function () {
    return redirect('admin/auth/login');
});

Route::get('test', function () {
    //
});



