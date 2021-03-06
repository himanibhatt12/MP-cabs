<?php

Route::namespace ('Api')->middleware(['throttle'])->group(function () {
    Route::post('/login', 'Auth@login');
    Route::post('/user-registration', 'UsersApi@user_registration');
    Route::post('/user-login', 'UsersApi@user_login'); //without social media connected
    Route::post('/user-login-sm', 'UsersApi@login_with_sm'); //login through social media
    Route::post('/forgot-password', 'UsersApi@forgot_password');
    Route::post('/get-settings', 'DriversApi@get_settings');
    Route::get('/codes', 'DriversApi@get_code');
    Route::post('register-driver', 'MPCabsDriversApi@register_driver');
});

Route::namespace ('Api')->middleware(['throttle', 'auth:api'])->group(function () {
    Route::post('/edit-user-profile', 'UsersApi@edit_profile');
    Route::post('/change-password', 'UsersApi@change_password');
    Route::post('/message-us', 'UsersApi@message_us');
    Route::post('/book-now', 'UsersApi@book_now');
    Route::post('/book-later', 'UsersApi@book_later');
    Route::post('/update-destination', 'UsersApi@update_destination');
    Route::post('/review', 'UsersApi@review');
    Route::post('/ride-history', 'UsersApi@ride_history');
    Route::post('/user-single-ride', 'UsersApi@user_single_ride_info');
    Route::post('/get-reviews', 'UsersApi@get_reviews');
    Route::post('/user-logout', 'UsersApi@user_logout');
    Route::post('/change-availability', 'DriversApi@change_availability');
    Route::post('/ride-requests', 'DriversApi@ride_requests');
    Route::post('/single-ride-request', 'DriversApi@single_ride_request');
    Route::post('/accept-ride-request', 'DriversApi@accept_ride_request');
    Route::post('/cancel-ride-request', 'DriversApi@cancel_ride_request');
    Route::post('/reject-ride-request', 'DriversApi@reject_ride_request');
    Route::post('/driver-rides', 'DriversApi@driver_rides');
    Route::post('/single-ride-info', 'DriversApi@single_ride_info');
    Route::post('/start-ride', 'DriversApi@start_ride');
    Route::post('/destination-reached', 'DriversApi@destination_reached');
    Route::post('/confirm-payment', 'DriversApi@confirm_payment');
    Route::post('/active-drivers', 'DriversApi@active_drivers');

    // customers APIs
    Route::post('offers', 'MPCabsCustomersApi@offers');
    Route::post('apply-coupon', 'MPCabsCustomersApi@apply_coupon');
    Route::post('packages', 'MPCabsCustomersApi@packages');
    Route::post('fare-calculation', 'MPCabsCustomersApi@fare_calculation');
    Route::post('booking-history', 'MPCabsCustomersApi@booking_history');
    Route::post('routes', 'MPCabsCustomersApi@routes');
    Route::post('booking-details', 'MPCabsCustomersApi@booking_details');
    Route::post('new-booking', 'MPCabsCustomersApi@new_booking'); // incomplete
    Route::post('send-ride-request', 'MPCabsCustomersApi@request_offer'); // incomplete
    Route::post('book-package', 'MPCabsCustomersApi@book_package'); // incomplete
    Route::post('book-route', 'MPCabsCustomersApi@book_route'); // incomplete

    // drivers APIs
    Route::post('add-offer', 'MPCabsDriversApi@add_offer'); // charges
    Route::post('edit-offer', 'MPCabsDriversApi@edit_offer'); // charges
    Route::post('single-ride-offer', 'MPCabsDriversApi@single_offer');
    Route::post('delete-ride-offer', 'MPCabsDriversApi@delete_offer');
    Route::post('customer-offer-requests', 'MPCabsDriversApi@customer_offer_requests');
    Route::post('my-offers', 'MPCabsDriversApi@my_offers');
    Route::post('vehicle-info', 'MPCabsDriversApi@vehicle_info');
    Route::post('register-vehicle', 'MPCabsDriversApi@register_vehicle');
    Route::post('tax-calculation', 'MPCabsDriversApi@tax_calculation');

    // unused routes
    Route::post('vehicle-make', 'MPCabsDriversApi@make');
    Route::post('vehicle-colors', 'MPCabsDriversApi@colors');
    Route::post('vehicle-model', 'MPCabsDriversApi@models');
    Route::post('vehicle-types', 'MPCabsDriversApi@types');
    Route::post('vehicles', 'MPCabsDriversApi@vehicles');
    Route::post('vehicle-documents', 'MPCabsDriversApi@vehicle_document');
});
