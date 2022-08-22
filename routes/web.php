<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ShopController;
use App\Http\Controllers\Client\ShoppingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Client\ProductController as ProductClient;
use App\Http\Controllers\CategoryController as CategoryServer;
use App\Http\Controllers\client\ContactClientController;
use App\Http\Controllers\client\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// use App\Http\Controllers\SigninController;
// use App\Http\Controllers\SignUpController;
use App\Http\Controllers\UserController;
use App\Models\Contact;
use Illuminate\Http\Response;

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

Route::get('/', function () {
    return view('client.home');
})->name('home');





// client 
Route::group(['prefix' => ''], function () {
    // home page
    Route::get('', [HomeController::class, 'index'])->name('home');

    // Route::get('/register-sendmail', [SignUpController::class, 'index']);
    // Route::get('/register', function () {
    //     return view('client.register');
    // })->name('register'); 
    // Route::get('/login', function () {
    //     return view('client.sign_in');
    // });

    // Route::get('/checkOrder',)
    Route::get('/search', [ProductClient::class, 'search2'])->name('searchProduct');
    Route::get('/don-hang', [ProfileController::class, 'profileOrder'])->name('checkOrder');
    Route::get('/chi-tiet-don-hang/{id}', [ProfileController::class, 'details'])->name('checkOrderDetail');



    // shopping
    Route::group(['prefix' => 'shop'], function () {
        // Route::get('/{cateName}', [ShopController::class, 'index'])->name('shop');
        // danh mục sản phẩm
        Route::group(['prefix' => '{cateName}', 'name' => 'shop'], function () {
            Route::get('', [CategoryController::class, 'index'])->name('shop');
            Route::get('/select', [ProductClient::class, 'select']);
            Route::get('/search', [ProductClient::class, 'search']);
            // chi tiết sản phẩm
            Route::get('{slug}', [ShopController::class, 'detail'])->name('detail');
        });
    });


    // liện hệ
    Route::get('lien-he', function () {
        return view('client.contact');
    })->name('contact');
    Route::post('lien-he', [ContactClientController::class, 'index'])->name('contact');



    // giỏ hàng
    Route::get('gio-hang', [ShoppingController::class, 'shopping'])->name('order');
    Route::get('UpdateCart', [ShoppingController::class, 'UpdateCart']);
    Route::get('deleteCart/{id}', [ShoppingController::class, 'deleteCart'])->name('deleteCart');
    Route::post('shoppingCart', [ShoppingController::class, 'index'])->name('cart');

    Route::get('thanh-toan', [ShoppingController::class, 'checkout'])->name('checkout');
    Route::post('thanh-toan', [ShoppingController::class, 'postCheckout'])->name('postCheckout');



    Route::get('dang-nhap', function () {
        return view('client.sign_in');
    })->name('login');
});
// end client









// đăng nhập bằng facebook

Route::get('/facebook-redirect', [AuthController::class, 'facebookRedirect'])->name('loginFacebook')->middleware('guest');
Route::get('/facebook-callback', [AuthController::class, 'facebookCallback'])->middleware('guest');
// đăng nhập bằng google



// login 
Route::group(['prefix' => '/auth', 'middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'getLogin'])->name('getLogin');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
    Route::get('/signUp', [AuthController::class, 'getSignUp'])->name('getSignUp');
    Route::post('/signUp', [AuthController::class, 'postSignUp'])->name('postSignUp');
    Route::get('/google-redirect', [AuthController::class, 'googleRedirect'])->name('loginGoogle');
    Route::get('/callback', [AuthController::class, 'googleCallback'])->name('callback');
});


// logout 
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('getLout')->middleware('auth');









// admin    
Route::middleware('authAdmin')->prefix('admin')->group(function () {

    Route::get('',[DashboardController::class, 'index'])->name('admin');

    Route::get('faker', function () {
        return view('list-user');
    });


    // crud products
    Route::group(['prefix' => 'products'], function () {
        Route::get('', [ProductController::class, 'index'])
            ->name('products');
        Route::get('create', [ProductController::class, 'create'])
            ->name('products.create');
        Route::post('store', [ProductController::class, 'store'])
            ->name('products.store');
        Route::get('edit/{id}', [ProductController::class, 'edit'])
            ->name('products.edit');
        Route::put('update/{id}', [ProductController::class, 'update'])
            ->name('products.update');
        Route::get('delete/{id}', [ProductController::class, 'delete'])
            ->name('products.delete');
        Route::get('search', [ProductController::class, 'search'])
            ->name('products.search');
        Route::get('deleteImage/{id}', [ProductController::class, 'DeleteImage'])
            ->name('products.deleteImage');
    });



    // category
    Route::group(['prefix' => 'category'], function () {
        Route::get('', [CategoryServer::class, 'index'])
            ->name('category');
        Route::get('create', [CategoryServer::class, 'create'])
            ->name('category.create');
        Route::post('store', [CategoryServer::class, 'store'])
            ->name('category.store');
        Route::get('edit/{id}', [CategoryServer::class, 'edit'])
            ->name('category.edit');
        Route::put('update/{id}', [CategoryServer::class, 'update'])
            ->name('category.update');
        Route::delete('delete/{id}', [CategoryServer::class, 'delete'])
            ->name('category.delete');
    });



    // order
    Route::group(['prefix' => 'orders'], function () {
        Route::get('', [OrderController::class, 'index'])
            ->name('orders');
        Route::put('update/{id}', [OrderController::class, 'update'])
            ->name('orders.update');
        Route::get('detail/{id}', [OrderController::class, 'details'])
            ->name('orders.detail');
        Route::delete('delete/{id}', [OrderController::class, 'delete'])
            ->name('orders.delete');
    });

    // contact
    Route::group(['prefix' => 'contacts'], function () {
        Route::get('', [ContactController::class, 'index'])
            ->name('contacts');

        Route::delete('delete/{id}', [OrderController::class, 'delete'])
            ->name('contacts.delete');
    });

    // contact
    Route::group(['prefix' => 'attributes'], function () {
        Route::get('', [AttributeController::class, 'index'])
            ->name('attributes');

        Route::get('create', [AttributeController::class, 'create'])
            ->name('attributes.create');        
        Route::post('store', [AttributeController::class, 'store'])
            ->name('attributes.store');
        Route::get('edit/{id}', [AttributeController::class, 'edit'])
            ->name('attributes.edit');
        Route::put('update/{id}', [AttributeController::class, 'update'])
            ->name('attributes.update');
        Route::delete('delete/{id}', [AttributeController::class, 'delete'])
            ->name('attributes.delete');
    });



    // crud user 
    Route::group(['prefix' => 'users'], function () {
        Route::get('', [UserController::class, 'index'])
            ->name('users');
        Route::get('create', [UserController::class, 'create'])
            ->name('users.create');
        Route::post('store', [UserController::class, 'store'])
            ->name('users.store');
        Route::get('edit/{id}', [UserController::class, 'edit'])
            ->name('users.edit');
        Route::put('update/{id}', [UserController::class, 'update'])
            ->name('users.update');
        Route::delete('delete/{id}', [UserController::class, 'delete'])
            ->name('users.delete');
        Route::get('search', [UserController::class, 'search'])
            ->name('users.search');
        Route::get('sort', [UserController::class, 'sort'])
            ->name('users.sort');
        Route::get('role/{id}', [UserController::class, 'updateRole'])
            ->name('users.role');
    });


});
