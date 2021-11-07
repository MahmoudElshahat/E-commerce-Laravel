<?php

namespace App\Providers;
// use app\Http\Middleware\admin;
use Illuminate\Support\Facades\Auth;
use app\http\Controllers\admin;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use app\http\Requests\loginRequests;
class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    // protected $namespace = 'App\Http\Controllers';
    public const HOME = '/';// i del it home
    public const Admin = '/admin';// i del it / admin


    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                // ->middleware('api')
                // ->this->namespace($this->namespace)
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));
// ===============================================                //

            Route::middleware('web')
            // prefix('site')
                //  ->
                // ->this->namespace($this->namespace)
                // ->namespace($this->namespace)
                ->namespace('App\Http\Controllers')
                ->group(base_path('routes/web.php'));

// =============================================
            Route::prefix('admin')
                ->middleware('web')
                // ->namespace($this->namespace)
                ->namespace('App\Http\Controllers')
                ->group(base_path('routes/admin.php')) ;
                // Route::middleware('web')
                // ->namespace('App\Http\Controllers')
                // ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
