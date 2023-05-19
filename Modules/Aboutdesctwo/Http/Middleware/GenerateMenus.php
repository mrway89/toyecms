<?php

namespace Modules\Aboutdesctwo\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
         *
         * Module Menu for Admin Backend
         *
         * *********************************************************************
         */
        \Menu::make('admin_sidebar', function ($menu) {

            // Aboutdesctwos
            $menu->add('<i class="nav-icon fa-regular fa-sun"></i> About Description 2', [
                'route' => 'backend.aboutdesctwos.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 76,
                'activematches' => ['admin/aboutdesctwos*'],
                'permission'    => ['view_aboutdesctwos'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
