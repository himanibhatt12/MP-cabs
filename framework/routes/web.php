<?php
// Route::get('test', 'Frontend\FrontendController@test');

// bookings
Route::post('local-booking', 'Frontend\BookingController@local_booking')->middleware('CustomerLogin');
Route::post('one-way-booking', 'Frontend\BookingController@oneway_booking')->middleware('CustomerLogin');
Route::post('round-trip', 'Frontend\BookingController@round_trip')->middleware('CustomerLogin');

Route::get('/', 'Frontend\FrontendController@home');
Route::get('about', 'Frontend\FrontendController@about');
Route::get('availabilities', 'Frontend\FrontendController@availabilities');
Route::get('fixed-routes', 'Frontend\FrontendController@fixed_routes');
Route::get('contact-us', 'Frontend\FrontendController@contact_us');
Route::get('review-us', 'Frontend\FrontendController@review_us');
Route::post('review-us', 'Frontend\FrontendController@post_review_us');
Route::get('brands', 'Frontend\FrontendController@brands');
Route::get('faq', 'Frontend\FrontendController@faq');
Route::post('subscribe', 'Frontend\FrontendController@subscribe');
Route::post('message-us', 'Frontend\FrontendController@message_us');

Route::get('forget-password', 'Frontend\ResetPasswordController@forget_password');
Route::post('forget-password', 'Frontend\ResetPasswordController@send_reset_link');

Route::get('reset-password/{token}', 'Frontend\ResetPasswordController@reset');
Route::post('reset-password', 'Frontend\ResetPasswordController@reset_password');

// driver
Route::get('driver-register', 'Frontend\DriversController@register');
Route::get('driver-login', 'Frontend\DriversController@login');
Route::post('driver-login', 'Frontend\DriversController@driver_login');
Route::post('driver-register', 'Frontend\DriversController@driver_register');

Route::post('user-logout', 'Frontend\CustomersController@user_logout');
// customer
Route::get('user-register', 'Frontend\CustomersController@register');
Route::get('user-login', 'Frontend\CustomersController@login');
Route::post('user-login', 'Frontend\CustomersController@customer_login');
Route::post('user-register', 'Frontend\CustomersController@customer_register');

// stripe payment integration
Route::get('stripe/{booking_id}', 'PaymentController@stripe');
Route::get('stripe-success', 'PaymentController@stripe_success');
Route::get('stripe-cancel', 'PaymentController@stripe_cancel');

// razorpay payment integration
Route::get('razorpay/{booking_id}', 'PaymentController@razorpay');
Route::post('razorpay-success', 'PaymentController@razorpay_success');
Route::get('razorpay-failed', 'PaymentController@razorpay_failed');

// cash payment
Route::get('cash/{booking_id}', 'PaymentController@cash');

Route::get('sample-payment', function () {
    return view('payments.test_pay');
});

// Route::post('redirect-payment', 'PaymentController@redirect_payment');

// Route::get('all-data', function () {
//     $bookings = BookingPaymentsModel::latest()->get();
//     foreach ($bookings as $booking) {
//         if ($booking->payment_details != null) {
//             echo "<pre>";
//             print_r(json_decode($booking->payment_details));
//             echo "---------------------------------------------<br>";
//         }
//     }
// });

Route::get('installation', 'LaravelWebInstaller@index');
Route::post('installed', 'LaravelWebInstaller@install');
Route::get('installed', 'LaravelWebInstaller@index');
Route::get('migrate', 'LaravelWebInstaller@db_migration');
Route::get('migration', 'LaravelWebInstaller@migration');
Route::get('upgrade', 'UpdateVersion@upgrade')->middleware('canInstall');
Route::get('upgrade3', 'UpdateVersion@upgrade3')->middleware('canInstall');
Route::get('upgrade4', 'UpdateVersion@upgrade4')->middleware('canInstall');
Route::get('upgrade4.0.2', 'UpdateVersion@upgrade402')->middleware('canInstall');
