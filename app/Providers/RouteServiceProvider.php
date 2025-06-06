<?php

namespace App\Providers;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\Income;
use App\Models\IncomeCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Vinkla\Hashids\Facades\Hashids;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });

        Route::bind('productCategory', function ($value) {
            $decoded = Hashids::decode($value);
            if (empty($decoded)) abort(404);
            return ProductCategory::findOrFail($decoded[0]);
        });

        Route::bind('product', function ($value) {
            $decoded = Hashids::decode($value);
            if (empty($decoded)) abort(404);
            return Product::findOrFail($decoded[0]);
        });

        Route::bind('expense', function ($value) {
            $decoded = Hashids::decode($value);
            if (empty($decoded)) abort(404);
            return Expense::findOrFail($decoded[0]);
        });

        Route::bind('expenseCategory', function ($value) {
            $decoded = Hashids::decode($value);
            if (empty($decoded)) abort(404);
            return ExpenseCategory::findOrFail($decoded[0]);
        });

        Route::bind('income', function ($value) {
            $decoded = Hashids::decode($value);
            if (empty($decoded)) abort(404);
            return Income::findOrFail($decoded[0]);
        });

        Route::bind('incomeCategory', function ($value) {
            $decoded = Hashids::decode($value);
            if (empty($decoded)) abort(404);
            return IncomeCategory::findOrFail($decoded[0]);
        });
    }
}
