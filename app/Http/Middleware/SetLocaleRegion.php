<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SetLocaleRegion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1);
        $region = $request->segment(2);

        if( $locale == NULL )
        {
            /*
             * Check if requested locale is null
             * if so get its value form cookie
             * if it is not set save it and redirect
             */
            $locale = $request->cookie('locale') ? $request->cookie('locale') : config('app.locale');
            $region = $request->cookie('region') ? $request->cookie('region') : config('app.region');

            Cookie::queue('locale', $locale, 5256000);
            Cookie::queue('region', $region, 5256000);

            app()->setLocale($locale);

            return redirect()->route('home', ['locale' => $locale, 'region' => $region]);
        }
        elseif( $region == NULL )
        {
            /*
             * Check if requested region is null
             * if so get its value form cookie
             * if it is not set save it and redirect
             */

            if( !in_array( $locale, config('app.locale_array')) )
            {
                $locale = $request->cookie('locale') && in_array( $request->cookie('locale'), config('app.locale_array')) ? $request->cookie('locale') : config('app.locale');
            }

            $region = $request->cookie('region') ? $request->cookie('region') : config('app.region');

            Cookie::queue('region', $region, 5256000);

            app()->setLocale($locale);

            return redirect()->route('home', ['locale' => $locale, 'region' => $region]);
        }
        else
        {
            /*
             * Check if requested locale, region is in our locale, region array
             * if not redirect to default locale, region
             */
            if( !in_array( $locale, config('app.locale_array')) || !in_array( $region, config('app.region_array')) )
            {
                if( !in_array( $locale, config('app.locale_array')) )
                {
                    $locale = $request->cookie('locale') ? $request->cookie('locale') : config('app.locale');
                }

                if( !in_array( $region, config('app.region_array')) )
                {
                    $region = $request->cookie('region') ? $request->cookie('region') : config('app.region');
                }

                $route = $request->route()->getName();

                Cookie::queue('locale', $locale, 5256000);
                Cookie::queue('region', $region, 5256000);

                return redirect()->route($route, ['locale' => $locale, 'region' => $region]);
            }

            app()->setLocale($locale);

            Cookie::queue('locale', $locale, 5256000);
            Cookie::queue('region', $region, 5256000);
        }

        return $next($request);
    }
}
