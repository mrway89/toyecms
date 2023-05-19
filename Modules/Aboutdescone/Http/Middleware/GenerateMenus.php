<?php

namespace Modules\Aboutdescone\Http\Middleware;

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

            // Aboutdescones
            $menu->add('<i class="nav-icon fa-regular fa-sun"></i> About Description 1', [
                'route' => 'backend.aboutdescones.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 75,
                'activematches' => ['admin/aboutdescones*'],
                'permission'    => ['view_aboutdescones'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
