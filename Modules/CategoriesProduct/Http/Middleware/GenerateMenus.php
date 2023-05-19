<?php

namespace Modules\CategoriesProduct\Http\Middleware;

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
        /*\Menu::make('admin_sidebar', function ($menu) {

            // CategoriesProducts
            $menu->add('<i class="nav-icon fa-regular fa-sun" style="display: none;"></i> '.__(''), [
                'route' => 'backend.categoriesproducts.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 770,
                'activematches' => ['admin/categoriesproducts*'],
                'permission'    => ['view_categoriesproducts'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');*/

        return $next($request);
    }
}
