<?php

namespace Modules\Product\Http\Middleware;

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
        \Menu::make('admin_sidebar', function ($menu) {

            // Product Dropdown
            $products_menu = $menu->add('<i class="nav-icon fas fa-shopping-cart"></i> '.__('Product List'), [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 77,
                'activematches' => [
                    'admin/products*',
                    'admin/categoriesproducts*',
                ],
                'permission' => ['view_products', 'view_categoriesproducts'],
            ]);
            $products_menu->link->attr([
                'class' => 'nav-link nav-group-toggle',
                'href'  => '#',
            ]);

            // Submenu: Product
            $products_menu->add('<i class="nav-icon fas fa-solid fa-pen-to-square"></i> '.__('Product'), [
                'route' => 'backend.products.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 78,
                'activematches' => 'admin/products*',
                'permission'    => ['edit_products'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
            // Submenu: Categories
            $products_menu->add('<i class="nav-icon fas fa-sitemap"></i> '.__('Categories'), [
                'route' => 'backend.categoriesproducts.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 79,
                'activematches' => 'admin/categoriesproducts*',
                'permission'    => ['edit_categoriesproducts'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
