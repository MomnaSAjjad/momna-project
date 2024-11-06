<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\RemindersController;
use App\Http\Controllers\CostsController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Adsressbook;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\WebhookController;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use TCG\Voyager\Facades\Voyager;

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

// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
// Route::get('registration', [AuthController::class, 'registration'])->name('register');
// Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
// Route::get('dashboard', [AuthController::class, 'dashboard']);
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('check/post/2fa',[AuthController::class, 'two_fa_form'])->name('2_fa_form');
Route::post('/two-factor-verify', [AuthController::class, 'verify'])->name('two_factor_verify');

Route::post('/customers/store', [RegisterController::class, 'customerStore'])->name('customers.store');

Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
// Route::middleware(['auth'])->group(function () {
    Route::get('/subscription', [SubscriptionController::class, 'showSubscriptionForm'])->name('subscription.show');
    Route::post('/subscription', [SubscriptionController::class, 'createSubscription'])->name('subscription.create');
    Route::get('/billing/payment/{id}', [SubscriptionController::class, 'confirmPayment'])->name('billing.payment');
// });

// Stripe Webhook
Route::post('/stripe/webhook', [WebhookController::class, 'handleWebhook'])->name('cashier.webhook');;

// TEMP false
Auth::routes(['register' => false]);
// TEMP false


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout.index');
// Route::get('register', [App\Http\Controllers\RegisterController::class, 'index']);
Route::get('forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail'])->name('auth.forget-password');
Route::post('forgot-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('auth.forget-password-post');
Route::get('reset-password/{token}',[App\Http\Controllers\Auth\ForgotPasswordController::class, 'getReset'])->name('password.reset');
Route::post('reset-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'updatePassword'])->name('updatePassword');
Route::get('forgot-password/success', function () {
    return view('auth.forget-password-success');
})->name('auth.forget-password-success');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'perform'])->name('register.perform');
Route::post('/set-language', [LanguageController::class, 'setLanguage'])->middleware('auth');
Route::post('/set-languages', [LanguageController::class, 'Language'])->name('set.languages');
Route::post('/set-languagezz', [LanguageController::class, 'setLanguages'])->name('set.languageszz');
Route::post('/user/settings/language', [UsersController::class, 'saveLanguage'])->name('user.settings.language');

/**
 * Free Trial Routes
 */
Route::get('/free-trial', [App\Http\Controllers\Auth\FreeTrialController::class, 'show'])->name('free-trial.show');
Route::post('/free-trial', [App\Http\Controllers\Auth\FreeTrialController::class, 'perform'])->name('free-trial.perform');

Route::get('/en', function (Request $request) {
    return view('locale');
});
Route::get('/sv', function (Request $request) {
    return view('locale');
});

Route::group(['middleware' => ['guest']], function() {
    /**
     * Register Routes
     */


    // Route::get('/demo', [App\Http\Controllers\Auth\AuthController::class, 'index'])->name('login');
	// Route::post('/demo', [App\Http\Controllers\Auth\AuthController::class, 'postLogin'])->name('login.post');
    // Route::post('/free-trial', [App\Http\Controllers\Auth\FreeTrialController::class, 'perform'])->name('free-trial.perform');

	Route::get('/demo', function () {
	    return redirect('login/?type=demo');
	});

    /**
     * Login Routes
     */
    // Route::get('/login', 'LoginController@show')->name('login.show');
    // Route::post('/login', 'LoginController@login')->name('login.perform');
    Route::get('login', [AuthController::class, 'index'])->name('login');
	Route::post('post-login', [AuthController::class, 'postLogin'])->name('login_post');
    Route::get('/resend_code', [AuthController::class, 'resendCode'])->name('resend_code');



});

Route::get('become-a-customer', function (){
	Auth::logout();
	return redirect('register');
});


Route::group(['middleware' => ['auth']], function() {

	Route::post('/send-attach-email', [ContractController::class, 'sendAttachEmail'])->name('send.attachemail');

	Route::group(['middleware' => ['role:superuser']], function () {
        // Routes accessible only to SuperUsers with the manage-companies permission
        Route::resource('companies', CompanyController::class);
        Route::post('/companies/store', [CompanyController::class, 'store'])->name('fcompanies.stores');
		Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
		Route::put('/companies/update/{id}', [CompanyController::class, 'update'])->name('companies.updates');
		Route::get('/customers', [UsersController::class, 'customers'])->name('customers');
		Route::get('/customer/{id}', [UsersController::class, 'customerShow'])->name('customers.show');
		Route::get('/customers/create', [UsersController::class, 'customerCreate'])->name('customers.create');
		Route::put('/customers/update/{id}', [UsersController::class, 'customerUpdate'])->name('customers.update');

		Route::get('/search-companies', [UsersController::class, 'search'])->name('companies.search');
    });

	// Route::get('/certificates/not-accepted/',[App\Http\Controllers\CertificatesController::class, 'listNotAccepted'])->name('certificates.listNotAccepted');
	// Route::post('/certificates/acceptCertificate/',[App\Http\Controllers\CertificatesController::class, 'acceptCertificate'])->name('certificates.acceptCertificate');
	// Route::post('/certificates/acceptAllCertificates/',[App\Http\Controllers\CertificatesController::class, 'acceptAllCertificates'])->name('certificates.acceptAllCertificates');
	// Route::post('/certificates/delete-certificate',[App\Http\Controllers\CertificatesController::class,'deleteCertificate'])->name('certificates.deleteCertificate');
	// Route::get('/certificates/history/',[App\Http\Controllers\CertificatesController::class, 'uploadHistory'])->name('certificates.uploadHistory');

    Route::resource('roles', RoleController::class);
	// Route::get('/users/settings/',[App\Http\Controllers\UserController::class, 'settings'])->name('certificates.settings');
    // Route::resource('users', UserController::class);
	// Route::post('/users/updateSelf/',[App\Http\Controllers\UserController::class, 'updateSelf'])->name('users.updateSelf');
	// // Route::resource('certificates', CertificatesController::class);
	// Route::post('/users/delete-user',[App\Http\Controllers\UserController::class,'deleteUser'])->name('users.deleteUser');
    // Categories
    Route::resource('categories', CategoryController::class);
	Route::post('/categories/store', [CategoryController::class, 'store'])->name('category.store');
	Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
	// Route::post('/categories/update', [CategoryController::class, 'update'])->name('category.update');
	Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('category.update');

	// Route::resource('contract', ContractController::class);
	Route::get('/contract/register', [ContractController::class, 'register'])->name('register');
	Route::get('/contract/register/import', [ContractController::class, 'registerImport'])->name('registerImport');
	Route::get('/contract/register/register-steps/{id}', [ContractController::class, 'registerSteps'])->name('registerSteps');
	Route::get('/contract/list', [ContractController::class, 'list'])->name('list');
    Route::get('/contract/ending/{color}', [ContractController::class, 'ending'])->where('color', 'red|orange|gray|green');
	Route::post('/contract/save-step', [ContractController::class, 'saveStep'])->name('save.step');
	Route::post('/contract/store', [ContractController::class, 'store'])->name('contract.store');
	Route::get('/contract/{contractNumber}', [ContractController::class, 'show'])->name('contract.show');

	Route::get('/costs', [CostsController::class, 'index'])->name('costs.index');

	Route::get('/reminders', [RemindersController::class, 'index'])->name('reminders.index');

	Route::get('/users', [UsersController::class, 'index'])->name('users.index');
	Route::get('/users/create', [UsersController::class, 'create'])->name('create');
	Route::get('/users/edit', [UsersController::class, 'edit'])->name('edit');
    Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');

	Route::post('/users/two-factor-auth', [UsersController::class, 'two_factor_auth'])->name('TwoFactor');
	Route::get('/settings', [UsersController::class, 'user_settings'])->name('UserSettings');
    Route::post('/change-password', [UsersController::class, 'changePassword'])->name('change-password');

	Route::get('/archive', [ArchiveController::class, 'index'])->name('archive.index');
	Route::get('/address-book', [Adsressbook::class, 'index'])->name('address.index');

	// Route::get('/agreement/register/customer', [App\Http\Controllers\AgreementController::class, 'registerCustomer'])->name('registerCustomer');
	// Route::get('/agreement/register/hr', [App\Http\Controllers\AgreementController::class, 'registerHr'])->name('registerHr');
	// Route::get('/agreement/register/supplier-subscription', [App\Http\Controllers\AgreementController::class, 'registerSupplierSubscription'])->name('registerSupplierSubscription');

	Route::post('add-user', [UsersController::class, 'addUser'])->name('user.add');
    // Route::get('/users/create', [UsersController::class, 'createUser'])->name('users.create');

    Route::get('/permissions', [UsersController::class, 'showPermissions'])->name('permissions.index');
    Route::get('/permissions/create', [UsersController::class, 'createPermission'])->name('permissions.create');
    Route::post('/permissions', [UsersController::class, 'storePermission'])->name('permissions.store');
    Route::delete('/permissions/{id}', [UsersController::class, 'destroyperm'])->name('permissions.destroy');
});
// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });
