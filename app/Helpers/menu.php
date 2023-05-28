<?php

use App\Models\Menu\Admin as MenuAdmin;
use App\Models\Menu\Frontend as MenuFrontend;
use App\Models\Portfolio\Kategori as PortfolioKategori;
use Illuminate\Support\Facades\Route;

if (!function_exists('menu_parse')) {
    /**
     * Helpers for build menu.
     *
     * @return array
     */
    function menu_parse($items, $navigation = '')
    {
        $active = function ($route, $navigation) {
            if (in_array($route, ['', null])) return false;
            return request()->routeIs($route) || $navigation == $route;
        };

        $parent = [];
        foreach ($items as $v) {
            if (is_null($v->parent_id)) $parent[] = (array)$v;
        }
        $menus = [];
        foreach ($parent as $p) {
            $children = [];
            $parent_active = $active($p['route'], $navigation);
            $child_active = false;
            foreach ($items as $v) {
                if ($v->parent_id == $p['id']) {
                    $c = (array)$v;
                    $c['active'] = $active($c['route'], $navigation);
                    $c['url'] = Route::has($c['route']) ? route($c['route']) : '#';
                    $children[] = $c;
                    if ($c['active']) $child_active = $c['active'];
                }
            }
            $p['active'] = $parent_active || $child_active;
            $p['url'] = Route::has($p['route']) ? route($p['route']) : '#';
            $menus[] = array_merge($p, ['children' => $children]);
        }
        return $menus;
    }
}

if (!function_exists('menu_parse_frontend')) {
    /**
     * Helpers for build menu.
     *
     * @return array
     */
    function menu_parse_frontend($items, $navigation = '')
    {
        $active = function ($route, $navigation) {
            if (in_array($route, ['', null])) return false;
            return request()->routeIs($route) || $navigation == $route;
        };

        $parent = [];
        foreach ($items as $v) {
            if (is_null($v->parent_id)) $parent[] = (array)$v;
        }
        $menus = [];
        foreach ($parent as $p) {
            $children = [];
            $parent_active = $active($p['route'], $navigation);
            $child_active = false;
            foreach ($items as $v) {
                if ($v->parent_id == $p['id']) {
                    $c = (array)$v;
                    $c['active'] = $active($c['route'], $navigation);
                    $c['url'] = Route::has($c['route']) ? route($c['route']) : '#';
                    $children[] = $c;
                    if ($c['active']) $child_active = $c['active'];
                }
            }
            $p['active'] = $parent_active || $child_active;
            $p['url'] = Route::has($p['route']) ? route($p['route']) : '#';
            $menus[] = array_merge($p, ['children' => $children]);
        }
        return $menus;
    }
}

if (!function_exists('menu')) {
    /**
     * Helpers for build menu.
     *
     * @return array
     */
    function menu(?int $user_id = null)
    {
        $menu = MenuAdmin::menuHasRole($user_id);
        return menu_parse($menu);
    }
}

if (!function_exists('menu_frontend')) {
    /**
     * Helpers for build menu_frontend.
     *
     * @return array
     */
    function menu_frontend()
    {
        $menu = MenuFrontend::getFeViewData();
        return menu_parse($menu);
    }
}

if (!function_exists('sidebar_menu_admin')) {
    /**
     * Helpers for build menu admin sidebar admin.
     *
     * @return array
     */
    function sidebar_menu_admin($navigation = null)
    {
        // $user_id = auth_has_role(config('app.role_super_admin')) ? null : auth()->user()->id;
        $user_id = auth()->user()->id;
        $menus = menu($user_id);
        $menu_body = '';
        foreach ($menus as $m) {
            $menu = (object)$m;

            // 1 check separator
            $separator = $menu->type == 0;

            // active
            $menu->active = $menu->active || ($menu->route === $navigation);
            $active_class = $menu->active ? 'mm-active' : '';
            $active_class_1 = $menu->active ? 'aria-expanded="true"' : '';

            if ($separator) {
                // separator
                $menu_body .= "<li class=\"menu-label\">{$menu->title}</li>";
            } elseif ($menu->children) {
                $child_menu = '';
                $child_active = false;
                foreach ($menu->children as $c) {
                    $child = (object)$c;
                    $child->active = $child->active || ($child->route === $navigation);
                    $active = $child->active ? 'mm-active' : '';
                    $active_1 = $child->active ? 'aria-expanded="true"' : '';
                    $child_menu .= <<<HTML
                        <li class="$active">
                            <a href="$child->url" $active_1><i class="bx bx-radio-circle"></i>$child->title</a>
                        </li>
                    HTML;
                    if ($child->active) $child_active = $child->active;
                }

                $active_1 = ($menu->active || $child_active) ? 'mm-active' : '';
                $active_2 = ($menu->active || $child_active) ? 'aria-expanded="true"' : '';
                $menu_body .= <<<HTML
                    <li class="$active_1">
                        <a href="javascript:void(0);" class="has-arrow" $active_2>
                            <div class="parent-icon"><i class="$menu->icon"></i> </div>
                            <div class="menu-title">$menu->title</div>
                        </a>
                        <ul>
                            $child_menu
                        </ul>
                    </li>
                HTML;
            } else {
                $menu_body .= <<<HTML
                    <li class="$active_class">
                        <a href="$menu->url" $active_class_1>
                            <div class="parent-icon"><i class="$menu->icon"></i></div>
                            <div class="menu-title">$menu->title</div>
                        </a>
                    </li>
                HTML;
            }
        }

        // head element
        $menu_head = '<ul class="metismenu" id="menu">';
        $menu_footer = '</ul>';
        return $menu_head . $menu_body . $menu_footer;
    }
}

if (!function_exists('navbar_menu_front')) {
    function navbar_menu_front($navigation = '')
    {
        // route builder
        $route_build = function (string $route) {
            if (Route::has($route)) {
                return route($route);
            } else {
                if ($route == '' || $route == '#') {
                    return '#';
                } else {
                    return str_parse($route);
                }
            }
        };

        // get menu list
        $menus = menu_parse(MenuFrontend::getFeViewData());
        $menu_body = '';

        // active class
        $active_class_src = 'class="active"';
        foreach ($menus as $m) {
            $menu = (object)$m;

            // 1 check separator
            $separator = $menu->type == 0;
            // menu_url
            $menu->url = $route_build($menu->route);
            // active
            $menu->active = $menu->active || ($menu->route === $navigation) || $menu->url == current_url();
            $active_class = $menu->active ? $active_class_src : '';
            // dd($active_class);
            if ($separator) {
                // separator
                // $menu_body .= "<li class=\"sub-category\"><h3>{$menu->title}</h3></li> ";
            } elseif ($menu->icon == "__layanan__") { // khusus
                $kategories = PortfolioKategori::getNavData();
                $child_menu = '';
                $menu_parent_active = false;
                foreach ($kategories as $c) {
                    $sub_str = '';
                    $is_active = false;
                    foreach ($c->sub as $sub) {
                        $link = url('layanan/' . $sub->slug);
                        $check_menu_active = ($link == current_url());

                        $menu_active_class = $check_menu_active ? 'style="color:var(--tg-primary-color);"' : '';

                        if ($check_menu_active) {
                            $menu_parent_active = true;
                            $is_active = true;
                        }

                        $sub_str .= <<<HTML
                            <li><a $menu_active_class href="{$link}">{$sub->nama}</a></li>
                        HTML;
                    }

                    $menu_active_class = $is_active ? 'style="color:var(--tg-primary-color);"' : '';
                    $child_menu .= <<<HTML
                        <li class="menu-item-has-children"><a $menu_active_class href="#">{$c->nama}</a>
                            <ul class="sub-menu">
                                {$sub_str}
                            </ul>
                        </li>
                    HTML;
                }

                $menu_active_class = $menu_parent_active ? 'active' : '';
                $menu_body .= <<<HTML
                            <li class="menu-item-has-children $menu_active_class"><a href="javascript:void(0)">$menu->title</a>
                                <ul class="sub-menu">
                                    {$child_menu}
                                </ul>
                            </li>
                HTML;
            } elseif ($menu->children) {
                $child_menu = '';
                $child_active = false;
                foreach ($menu->children as $c) {
                    $child = (object)$c;
                    $child->url = $route_build($child->route);
                    $child->active = $child->active || ($child->route === $navigation) || $child->url == current_url();;
                    $menu_active = $child->active ? $active_class_src : '';

                    $child_menu .= "<li $menu_active><a href=\"$child->url\">$child->title</a></li>";;
                    if ($child->active) $child_active = $child->active;
                }

                $menu_active = ($menu->active || $child_active) ? 'active' : '';
                $menu_body .= <<<HTML
                            <li class="menu-item-has-children $menu_active"><a href="javascript:void(0)">$menu->title</a>
                                <ul class="sub-menu">
                                    $child_menu
                                </ul>
                            </li>
                HTML;
            } else {
                $menu_body .= "<li $active_class><a href=\"$menu->url\">$menu->title</a></li>";
            }
        }
        return $menu_body;
    }
}
