<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\Frontend\HomeController;
use \App\Http\Controllers\Frontend\LoginController;
use \App\Http\Controllers\Frontend\ShopController;
use \App\Http\Controllers\Frontend\ProductController;
use \App\Http\Controllers\Frontend\CartController;
use \App\Http\Controllers\Frontend\CheckoutController;
use \App\Http\Controllers\Frontend\DesignersController;

use \App\Http\Controllers\Frontend\StyleController;
use \App\Http\Controllers\Frontend\PostController;
use \App\Http\Controllers\Frontend\DesignerProfileController;

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

Route::get('link', function () {
    exec(symlink('/home/gscbcom/public_html/dev.fashfans/engine/storage/app/public', '/home/gscbcom/public_html/dev.fashfans/storage'));

});


//Frontend

Route::post('/language', [\App\Http\Controllers\Frontend\LanguageController::class, 'changeLanguage'])->name('language.change');
Route::get('/product/{slug}', 'HomeController@product')->name('product');
Route::post('/subcategories/get_subcategories_by_category', [\App\Http\Controllers\ControlPanel\SubCategoryController::class, 'get_subcategories_by_category'])->name('subcategories.get_subcategories_by_category');
//Route::post('/subcategories/get_subcategories_by_category', 'SubCategoryController@get_subcategories_by_category')->name('subcategories.get_subcategories_by_category');
Route::post('/subsubcategories/get_subsubcategories_by_subcategory', [\App\Http\Controllers\ControlPanel\SubSubCategoryController::class, 'get_subsubcategories_by_subcategory'])->name('subsubcategories.get_subsubcategories_by_subcategory');
Route::post('/subsubcategories/get_brands_by_subsubcategory', [\App\Http\Controllers\ControlPanel\SubSubCategoryController::class, 'get_brands_by_subsubcategory'])->name('subsubcategories.get_brands_by_subsubcategory');

Route::get('/shops/visit/{slug}', 'HomeController@shop')->name('shop.visit');

Route::get('/', [HomeController::class, 'index']);
Route::get('get/posts/for/home/page', [HomeController::class, 'getPostsForHomePage']);
Route::get('get/featured/categories/for/home/page', [HomeController::class, 'getFeaturedCategories']);

Route::get('shop/{subsubcategory_id?}', [ShopController::class, 'index']);
Route::get('get/products/for/shop', [ShopController::class, 'getProductsForShop']);

Route::get('product/{product_id}', [ProductController::class, 'index']);
Route::get('get/other/related/products', [ProductController::class, 'getOtherRelatedProducts']);

Route::get('cart', [CartController::class, 'index']);
Route::get('get/cart/items', [CartController::class, 'getCartItems']);
Route::get('add/to/cart', [CartController::class, 'addToCart']);

Route::get('designers', [DesignersController::class, 'index']);
Route::get('get/designers', [DesignersController::class, 'getDesigners']);

Route::get('designer-profile/{designer_id}', [DesignerProfileController::class, 'index']);
Route::get('get/posts/for/designer/profile/feed', [DesignerProfileController::class, 'getPostsForDesignerProfileFeed']);
Route::get('get/products/for/designer/profile/shop', [DesignerProfileController::class, 'getProductsForDesignerProfileShop']);


Route::get('styles', [StyleController::class, 'index']);
Route::get('get/styles', [StyleController::class, 'getStyles']);

Route::get('check/account/login/status', [CheckoutController::class, 'checkAccountLoginStatus']);
Route::get('is/user/logged/in', [LoginController::class, 'isUserLoggedIn']);

Route::get('checkout/as/guest', [CheckoutController::class, 'checkoutAsGuest']);
Route::get('checkout', [CheckoutController::class, 'index']);
Route::post('execute/checkout', [CheckoutController::class, 'executeCheckout']);
Route::get('checkout/success/{order_id}', [CheckoutController::class, 'checkoutSuccess']);




Route::get('auth/google/redirect', [LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

Route::get('auth/facebook/redirect', [LoginController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

Route::get('admin/login', [LoginController::class, 'loadControlPanelLogin']);
Route::post('authenticate/admin/login', [LoginController::class, 'authenticateControlPanelLogin']);

Route::get('logout', [LoginController::class, 'logout'])->name('logout');




//////////////////////////////USER PANEL////////////////////////////////////////////////

Route::group(['middleware' => ['user', 'verified']], function(){
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::get('/profile', 'HomeController@profile')->name('profile');
    Route::post('/customer/update-profile', 'HomeController@customer_update_profile')->name('customer.profile.update');
    Route::post('/seller/update-profile', 'HomeController@seller_update_profile')->name('seller.profile.update');

    Route::resource('purchase_history','PurchaseHistoryController');
    Route::post('/purchase_history/details', 'PurchaseHistoryController@purchase_history_details')->name('purchase_history.details');
    Route::get('/purchase_history/destroy/{id}', 'PurchaseHistoryController@destroy')->name('purchase_history.destroy');

    Route::resource('wishlists','WishlistController');
    Route::post('/wishlists/remove', 'WishlistController@remove')->name('wishlists.remove');

    Route::get('/wallet', 'WalletController@index')->name('wallet.index');
    Route::post('/recharge', 'WalletController@recharge')->name('wallet.recharge');

    Route::resource('support_ticket',\App\Http\Controllers\ControlPanel\SupportTicketController::class);
    Route::post('support_ticket/reply',[\App\Http\Controllers\ControlPanel\SupportTicketController::class, 'seller_store'])->name('support_ticket.seller_store');
});

Route::group(['prefix' =>'seller', 'middleware' => ['seller', 'verified']], function(){
    Route::get('/products', 'HomeController@seller_product_list')->name('seller.products');
    Route::get('/product/upload', 'HomeController@show_product_upload_form')->name('seller.products.upload');
    Route::get('/product/{id}/edit', 'HomeController@show_product_edit_form')->name('seller.products.edit');
    Route::resource('payments','PaymentController');

    Route::get('/shop/apply_for_verification', 'ShopController@verify_form')->name('shop.verify');
    Route::post('/shop/apply_for_verification', 'ShopController@verify_form_store')->name('shop.verify.store');

    Route::get('/reviews', 'ReviewController@seller_reviews')->name('reviews.seller');
});

Route::group(['middleware' => ['auth']], function(){
    Route::post('/products/store/','ProductController@store')->name('products.store');
    Route::post('/products/update/{id}',[\App\Http\Controllers\ControlPanel\ProductController::class, 'update'])->name('products.update');
    Route::get('/products/destroy/{id}', [\App\Http\Controllers\ControlPanel\ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/products/duplicate/{id}', 'ProductController@duplicate')->name('products.duplicate');
    Route::post('/products/sku_combination', [\App\Http\Controllers\ControlPanel\ProductController::class, 'sku_combination'])->name('products.sku_combination');
    Route::post('/products/sku_combination_edit', [\App\Http\Controllers\ControlPanel\ProductController::class, 'sku_combination_edit'])->name('products.sku_combination_edit');
    Route::post('/products/featured', 'ProductController@updateFeatured')->name('products.featured');
    Route::post('/products/published', 'ProductController@updatePublished')->name('products.published');

    Route::get('invoice/customer/{order_id}', 'InvoiceController@customer_invoice_download')->name('customer.invoice.download');
    Route::get('invoice/seller/{order_id}', 'InvoiceController@seller_invoice_download')->name('seller.invoice.download');

    Route::resource('orders',\App\Http\Controllers\ControlPanel\OrderController::class);
    Route::get('/orders/destroy/{id}', [\App\Http\Controllers\ControlPanel\OrderController::class, 'destroy'])->name('orders.destroy');
    Route::post('/orders/details', [\App\Http\Controllers\ControlPanel\OrderController::class, 'order_details'])->name('orders.details');
    Route::post('/orders/update_delivery_status', [\App\Http\Controllers\ControlPanel\OrderController::class, 'update_delivery_status'])->name('orders.update_delivery_status');
    Route::post('/orders/update_payment_status', [\App\Http\Controllers\ControlPanel\OrderController::class, 'update_payment_status'])->name('orders.update_payment_status');

    Route::resource('/reviews', \App\Http\Controllers\ControlPanel\ReviewController::class);

    Route::resource('/withdraw_requests', \App\Http\Controllers\ControlPanel\SellerWithdrawRequestController::class);
    Route::get('/withdraw_requests_all', [\App\Http\Controllers\ControlPanel\SellerWithdrawRequestController::class, 'request_index'])->name('withdraw_requests_all');
    Route::post('/withdraw_request/payment_modal', [\App\Http\Controllers\ControlPanel\SellerWithdrawRequestController::class, 'payment_modal'])->name('withdraw_request.payment_modal');
    Route::post('/withdraw_request/message_modal', [\App\Http\Controllers\ControlPanel\SellerWithdrawRequestController::class, 'message_modal'])->name('withdraw_request.message_modal');

    Route::resource('conversations',\App\Http\Controllers\ControlPanel\ConversationController::class);
    Route::post('conversations/refresh',[\App\Http\Controllers\ControlPanel\ConversationController::class, 'refresh'])->name('conversations.refresh');
    Route::resource('messages',\App\Http\Controllers\ControlPanel\MessageController::class);
});




/////////////////////////////////ADMIN PANEL////////////////////////////////////

Route::get('/admin/dashboard', [\App\Http\Controllers\ControlPanel\DashboardController::class, 'loadDashboard'])->name('admin.dashboard')->middleware('redirect.to.dashboard.if.authenticated');
Route::group(['prefix' =>'admin', 'middleware' => ['redirect.to.dashboard.if.authenticated']], function(){
    Route::resource('categories',\App\Http\Controllers\ControlPanel\CategoryController::class);

    Route::get('/categories/destroy/{id}', [\App\Http\Controllers\ControlPanel\CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::post('/categories/featured', [\App\Http\Controllers\ControlPanel\CategoryController::class, 'updateFeatured'])->name('categories.featured');

    Route::resource('subcategories',\App\Http\Controllers\ControlPanel\SubCategoryController::class);
    Route::get('/subcategories/destroy/{id}', [\App\Http\Controllers\ControlPanel\SubCategoryController::class, 'destroy'])->name('subcategories.destroy');

    Route::resource('subsubcategories',\App\Http\Controllers\ControlPanel\SubSubCategoryController::class);
    Route::get('/subsubcategories/destroy/{id}', [\App\Http\Controllers\ControlPanel\SubSubCategoryController::class, 'destroy'])->name('subsubcategories.destroy');

    Route::resource('brands',\App\Http\Controllers\ControlPanel\BrandController::class);
    Route::get('/brands/destroy/{id}', [\App\Http\Controllers\ControlPanel\BrandController::class, 'destroy'])->name('brands.destroy');

    Route::get('/products/admin',[\App\Http\Controllers\ControlPanel\ProductController::class, 'admin_products'])->name('products.admin');
    Route::get('/products/seller', [\App\Http\Controllers\ControlPanel\ProductController::class, 'seller_products'])->name('products.seller');
    Route::get('/products/create',[\App\Http\Controllers\ControlPanel\ProductController::class, 'create'])->name('products.create');
    Route::get('/products/admin/{id}/edit',[\App\Http\Controllers\ControlPanel\ProductController::class, 'admin_product_edit'])->name('products.admin.edit');
    Route::get('/products/seller/{id}/edit',[\App\Http\Controllers\ControlPanel\ProductController::class, 'seller_product_edit'])->name('products.seller.edit');
    Route::post('/products/todays_deal', [\App\Http\Controllers\ControlPanel\ProductController::class, 'updateTodaysDeal'])->name('products.todays_deal');
    Route::post('/products/get_products_by_subsubcategory', [\App\Http\Controllers\ControlPanel\ProductController::class, 'get_products_by_subsubcategory'])->name('products.get_products_by_subsubcategory');

    Route::resource('sellers',\App\Http\Controllers\ControlPanel\SellerController::class);
    Route::get('/sellers/destroy/{id}', [\App\Http\Controllers\ControlPanel\SellerController::class, 'destroy'])->name('sellers.destroy');
    Route::get('/sellers/view/{id}/verification', [\App\Http\Controllers\ControlPanel\SellerController::class, 'show_verification_request'])->name('sellers.show_verification_request');
    Route::get('/sellers/approve/{id}', [\App\Http\Controllers\ControlPanel\SellerController::class, 'approve_seller'])->name('sellers.approve');
    Route::get('/sellers/reject/{id}', [\App\Http\Controllers\ControlPanel\SellerController::class, 'reject_seller'])->name('sellers.reject');
    Route::post('/sellers/payment_modal', [\App\Http\Controllers\ControlPanel\SellerController::class, 'payment_modal'])->name('sellers.payment_modal');
    Route::get('/seller/payments', [\App\Http\Controllers\ControlPanel\PaymentController::class, 'payment_histories'])->name('sellers.payment_histories');
    Route::get('/seller/payments/show/{id}', [\App\Http\Controllers\ControlPanel\PaymentController::class, 'show'])->name('sellers.payment_history');

    Route::resource('customers',\App\Http\Controllers\ControlPanel\CustomerController::class);
    Route::get('/customers/destroy/{id}', [\App\Http\Controllers\ControlPanel\CustomerController::class, 'destroy'])->name('customers.destroy');

    Route::get('/newsletter', [\App\Http\Controllers\ControlPanel\NewsletterController::class, 'index'])->name('newsletters.index');
    Route::post('/newsletter/send', [\App\Http\Controllers\ControlPanel\NewsletterController::class, 'send'])->name('newsletters.send');

    Route::resource('profile',\App\Http\Controllers\ControlPanel\ProfileController::class);

    Route::post('/business-settings/update', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'update'])->name('business_settings.update');
    Route::post('/business-settings/update/activation', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'updateActivationSettings'])->name('business_settings.update.activation');
    Route::get('/activation', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'activation'])->name('activation.index');
    Route::get('/payment-method', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'payment_method'])->name('payment_method.index');


    Route::get('/social-login', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'social_login'])->name('social_login.index');
    Route::get('/smtp-settings', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'smtp_settings'])->name('smtp_settings.index');
    Route::get('/google-analytics', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'google_analytics'])->name('google_analytics.index');
    Route::get('/facebook-chat', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'facebook_chat'])->name('facebook_chat.index');
    Route::post('/env_key_update', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'env_key_update'])->name('env_key_update.update');
    Route::post('/payment_method_update', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'payment_method_update'])->name('payment_method.update');
    Route::post('/google_analytics', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'google_analytics_update'])->name('google_analytics.update');
    Route::post('/facebook_chat', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'facebook_chat_update'])->name('facebook_chat.update');
    Route::post('/facebook_pixel', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'facebook_pixel_update'])->name('facebook_pixel.update');
    Route::get('/currency', [\App\Http\Controllers\ControlPanel\CurrencyController::class, 'currency'])->name('currency.index');
    Route::post('/currency/update', [\App\Http\Controllers\ControlPanel\CurrencyController::class, 'updateCurrency'])->name('currency.update');
    Route::post('/your-currency/update', [\App\Http\Controllers\ControlPanel\CurrencyController::class, 'updateYourCurrency'])->name('your_currency.update');
    Route::get('/currency/create', [\App\Http\Controllers\ControlPanel\CurrencyController::class, 'create'])->name('currency.create');
    Route::post('/currency/store', [\App\Http\Controllers\ControlPanel\CurrencyController::class, 'store'])->name('currency.store');
    Route::post('/currency/currency_edit', [\App\Http\Controllers\ControlPanel\CurrencyController::class, 'edit'])->name('currency.edit');
    Route::post('/currency/update_status', [\App\Http\Controllers\ControlPanel\CurrencyController::class, 'update_status'])->name('currency.update_status');
    Route::get('/verification/form', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'seller_verification_form'])->name('seller_verification_form.index');
    Route::post('/verification/form', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'seller_verification_form_update'])->name('seller_verification_form.update');
    Route::get('/vendor_commission', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'vendor_commission'])->name('business_settings.vendor_commission');
    Route::post('/vendor_commission_update', [\App\Http\Controllers\ControlPanel\BusinessSettingsController::class, 'vendor_commission_update'])->name('business_settings.vendor_commission.update');

    Route::resource('/languages', \App\Http\Controllers\ControlPanel\LanguageController::class);
    Route::post('/languages/update_rtl_status', [\App\Http\Controllers\ControlPanel\LanguageController::class, 'update_rtl_status'])->name('languages.update_rtl_status');
    Route::get('/languages/destroy/{id}', [\App\Http\Controllers\ControlPanel\LanguageController::class, 'destroy'])->name('languages.destroy');
    Route::get('/languages/{id}/edit', [\App\Http\Controllers\ControlPanel\LanguageController::class, 'edit'])->name('languages.edit');
    Route::post('/languages/{id}/update', [\App\Http\Controllers\ControlPanel\LanguageController::class, 'update'])->name('languages.update');
    Route::post('/languages/key_value_store', [\App\Http\Controllers\ControlPanel\LanguageController::class, 'key_value_store'])->name('languages.key_value_store');

    Route::get('/frontend_settings/home', [\App\Http\Controllers\ControlPanel\HomeController::class, 'home_settings'])->name('home_settings.index');
    Route::post('/frontend_settings/home/top_10', [\App\Http\Controllers\ControlPanel\HomeController::class, 'top_10_settings'])->name('top_10_settings.store');
    Route::get('/sellerpolicy/{type}', [\App\Http\Controllers\ControlPanel\PolicyController::class, 'index'])->name('sellerpolicy.index');
    Route::get('/returnpolicy/{type}', [\App\Http\Controllers\ControlPanel\PolicyController::class, 'index'])->name('returnpolicy.index');
    Route::get('/supportpolicy/{type}', [\App\Http\Controllers\ControlPanel\PolicyController::class, 'index'])->name('supportpolicy.index');
    Route::get('/terms/{type}', [\App\Http\Controllers\ControlPanel\PolicyController::class, 'index'])->name('terms.index');
    Route::get('/privacypolicy/{type}', [\App\Http\Controllers\ControlPanel\PolicyController::class, 'index'])->name('privacypolicy.index');

    //Policy Controller
    Route::post('/policies/store', [\App\Http\Controllers\ControlPanel\PolicyController::class, 'store'])->name('policies.store');

    Route::group(['prefix' => 'frontend_settings'], function(){
        Route::resource('sliders',\App\Http\Controllers\ControlPanel\SliderController::class);
        Route::get('/sliders/destroy/{id}', [\App\Http\Controllers\ControlPanel\SliderController::class, 'destroy'])->name('sliders.destroy');

        Route::resource('home_banners',\App\Http\Controllers\ControlPanel\BannerController::class);
        Route::get('/home_banners/create/{position}', [\App\Http\Controllers\ControlPanel\BannerController::class, 'create'])->name('home_banners.create');
        Route::post('/home_banners/update_status', [\App\Http\Controllers\ControlPanel\BannerController::class, 'update_status'])->name('home_banners.update_status');
        Route::get('/home_banners/destroy/{id}', [\App\Http\Controllers\ControlPanel\BannerController::class, 'destroy'])->name('home_banners.destroy');

        Route::resource('home_categories',\App\Http\Controllers\ControlPanel\HomeCategoryController::class);
        Route::get('/home_categories/destroy/{id}', [\App\Http\Controllers\ControlPanel\HomeCategoryController::class, 'destroy'])->name('home_categories.destroy');
        Route::post('/home_categories/update_status', [\App\Http\Controllers\ControlPanel\HomeCategoryController::class, 'update_status'])->name('home_categories.update_status');
        Route::post('/home_categories/get_subsubcategories_by_category', [\App\Http\Controllers\ControlPanel\HomeCategoryController::class, 'getSubSubCategories'])->name('home_categories.get_subsubcategories_by_category');
    });

    Route::resource('roles',\App\Http\Controllers\ControlPanel\RoleController::class);
    Route::get('/roles/destroy/{id}', [\App\Http\Controllers\ControlPanel\RoleController::class, 'destroy'])->name('roles.destroy');

    Route::resource('staffs',\App\Http\Controllers\ControlPanel\StaffController::class);
    Route::get('/staffs/destroy/{id}', [\App\Http\Controllers\ControlPanel\StaffController::class, 'destroy'])->name('staffs.destroy');

    Route::resource('flash_deals',\App\Http\Controllers\ControlPanel\FlashDealController::class);
    Route::get('/flash_deals/destroy/{id}', [\App\Http\Controllers\ControlPanel\FlashDealController::class, 'destroy'])->name('flash_deals.destroy');
    Route::post('/flash_deals/update_status', [\App\Http\Controllers\ControlPanel\FlashDealController::class, 'update_status'])->name('flash_deals.update_status');
    Route::post('/flash_deals/update_featured', [\App\Http\Controllers\ControlPanel\FlashDealController::class, 'update_featured'])->name('flash_deals.update_featured');
    Route::post('/flash_deals/product_discount', [\App\Http\Controllers\ControlPanel\FlashDealController::class, 'product_discount'])->name('flash_deals.product_discount');
    Route::post('/flash_deals/product_discount_edit', [\App\Http\Controllers\ControlPanel\FlashDealController::class, 'product_discount_edit'])->name('flash_deals.product_discount_edit');

    Route::get('/orders', [\App\Http\Controllers\ControlPanel\OrderController::class, 'admin_orders'])->name('orders.index.admin');
    Route::get('/orders/{id}/show', [\App\Http\Controllers\ControlPanel\OrderController::class, 'show'])->name('orders.show');
    Route::get('/sales/{id}/show', [\App\Http\Controllers\ControlPanel\OrderController::class, 'sales_show'])->name('sales.show');
    Route::get('/orders/destroy/{id}', [\App\Http\Controllers\ControlPanel\OrderController::class, 'destroy'])->name('orders.destroy');
    Route::get('/sales', [\App\Http\Controllers\ControlPanel\OrderController::class, 'sales'])->name('sales.index');

    Route::resource('links',\App\Http\Controllers\ControlPanel\LinkController::class);
    Route::get('/links/destroy/{id}', [\App\Http\Controllers\ControlPanel\LinkController::class, 'destroy'])->name('links.destroy');

    Route::resource('generalsettings',\App\Http\Controllers\ControlPanel\GeneralSettingController::class);
    Route::get('/logo',[\App\Http\Controllers\ControlPanel\GeneralSettingController::class, 'logo'])->name('generalsettings.logo');
    Route::post('/logo',[\App\Http\Controllers\ControlPanel\GeneralSettingController::class, 'storeLogo'])->name('generalsettings.logo.store');
    Route::get('/color',[\App\Http\Controllers\ControlPanel\GeneralSettingController::class, 'color'])->name('generalsettings.color');
    Route::post('/color',[\App\Http\Controllers\ControlPanel\GeneralSettingController::class, 'storeColor'])->name('generalsettings.color.store');

    Route::resource('seosetting',\App\Http\Controllers\ControlPanel\SEOController::class);

    Route::post('/pay_to_seller', [\App\Http\Controllers\ControlPanel\CommissionController::class, 'pay_to_seller'])->name('commissions.pay_to_seller');

    //Reports
    Route::get('/stock_report', [\App\Http\Controllers\ControlPanel\ReportController::class, 'stock_report'])->name('stock_report.index');
    Route::get('/in_house_sale_report', [\App\Http\Controllers\ControlPanel\ReportController::class, 'in_house_sale_report'])->name('in_house_sale_report.index');
    Route::get('/seller_report', [\App\Http\Controllers\ControlPanel\ReportController::class, 'seller_report'])->name('seller_report.index');
    Route::get('/seller_sale_report', [\App\Http\Controllers\ControlPanel\ReportController::class, 'seller_sale_report'])->name('seller_sale_report.index');
    Route::get('/wish_report', [\App\Http\Controllers\ControlPanel\ReportController::class, 'wish_report'])->name('wish_report.index');

    //Coupons
    Route::resource('coupon',\App\Http\Controllers\ControlPanel\CouponController::class);
    Route::post('/coupon/get_form', [\App\Http\Controllers\ControlPanel\CouponController::class, 'get_coupon_form'])->name('coupon.get_coupon_form');
    Route::post('/coupon/get_form_edit', [\App\Http\Controllers\ControlPanel\CouponController::class, 'get_coupon_form_edit'])->name('coupon.get_coupon_form_edit');
    Route::get('/coupon/destroy/{id}', [\App\Http\Controllers\ControlPanel\CouponController::class, 'destroy'])->name('coupon.destroy');

    //Reviews
    Route::get('/reviews', [\App\Http\Controllers\ControlPanel\ReviewController::class, 'index'])->name('reviews.index');
    Route::post('/reviews/published', [\App\Http\Controllers\ControlPanel\ReviewController::class, 'updatePublished'])->name('reviews.published');

    //Support_Ticket
    Route::get('support_ticket/',[\App\Http\Controllers\ControlPanel\SupportTicketController::class, 'admin_index'])->name('support_ticket.admin_index');
    Route::get('support_ticket/{id}/show',[\App\Http\Controllers\ControlPanel\SupportTicketController::class, 'admin_show'])->name('support_ticket.admin_show');
    Route::post('support_ticket/reply',[\App\Http\Controllers\ControlPanel\SupportTicketController::class, 'admin_store'])->name('support_ticket.admin_store');

    //Pickup_Points
    Route::resource('pick_up_points',\App\Http\Controllers\ControlPanel\PickupPointController::class);
    Route::get('/pick_up_points/destroy/{id}', [\App\Http\Controllers\ControlPanel\PickupPointController::class, 'destroy'])->name('pick_up_points.destroy');


    Route::get('orders_by_pickup_point',[\App\Http\Controllers\ControlPanel\OrderController::class, 'order_index'])->name('pick_up_point.order_index');
    Route::get('/orders_by_pickup_point/{id}/show', [\App\Http\Controllers\ControlPanel\OrderController::class, 'pickup_point_order_sales_show'])->name('pick_up_point.order_show');

    Route::get('invoice/admin/{order_id}', [\App\Http\Controllers\ControlPanel\InvoiceController::class, 'admin_invoice_download'])->name('admin.invoice.download');

    //conversation of seller customer
    Route::get('conversations',[\App\Http\Controllers\ControlPanel\ConversationController::class, 'admin_index'])->name('conversations.admin_index');
    Route::get('conversations/{id}/show',[\App\Http\Controllers\ControlPanel\ConversationController::class, 'admin_show'])->name('conversations.admin_show');
    Route::get('/conversations/destroy/{id}', [\App\Http\Controllers\ControlPanel\ConversationController::class, 'destroy'])->name('conversations.destroy');


    Route::post('/sellers/profile_modal', [\App\Http\Controllers\ControlPanel\SellerController::class, 'profile_modal'])->name('sellers.profile_modal');
    Route::post('/sellers/approved', [\App\Http\Controllers\ControlPanel\SellerController::class, 'updateApproved'])->name('sellers.approved');

    Route::post('/sellers/approved', [\App\Http\Controllers\ControlPanel\SellerController::class, 'updateApproved'])->name('sellers.approved');

});









