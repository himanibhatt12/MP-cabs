<?php

return [

    'name' => str_replace("_", " ", env('APP_NAME', 'Fleet Manager')),
    'env' => "local",
    'debug' => true,
    'url' => env('APP_URL'),
    'timezone' => 'UTC',
    'locale' => 'English-en',
    'fallback_locale' => 'English-en',
    'key' => 'base64:maxQFpmbI6x32vwUXFjpYdELc+wBpMb9y8PaXugSaf8=',
    'cipher' => 'AES-256-CBC',
    'log' => 'errorlog',
    'log_level' => 'error',
    'providers' => [

        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,
        Laravel\Tinker\TinkerServiceProvider::class,
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        Collective\Html\HtmlServiceProvider::class,
        LaravelFCM\FCMServiceProvider::class,
        Davibennun\LaravelPushNotification\LaravelPushNotificationServiceProvider::class,
        Cornford\Backup\Providers\BackupServiceProvider::class,
        SafeStudio\Firebase\FirebaseServiceProvider::class,
        Cyberduck\LaravelExcel\ExcelLegacyServiceProvider::class,

    ],

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,
        'Form' => Collective\Html\FormFacade::class,
        'Html' => Collective\Html\HtmlFacade::class,
        'Input' => Illuminate\Support\Facades\Input::class,
        'Hyvikk' => App\Model\Hyvikk::class,
        'FCM' => LaravelFCM\Facades\FCM::class,
        'FCMGroup' => LaravelFCM\Facades\FCMGroup::class,
        'PushNotification' => Davibennun\LaravelPushNotification\Facades\PushNotification::class,
        'Backup' => 'Cornford\Backup\Facades\Backup',
        'Firebase' => SafeStudio\Firebase\Facades\FirebaseFacades::class,

    ],

    'debug_blacklist' => [
        '_COOKIE' => array_keys($_COOKIE),
        '_SERVER' => array_keys($_SERVER),
        '_ENV' => array_keys($_ENV),
    ],

];
