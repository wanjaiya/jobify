<?php

use App\Models\Menu;

if (!function_exists('mainMenu')) {

   function mainMenu()
   {
      if (Auth::user()) {
         $menus = Menu::where('menu_type_id', 1)->orWhere('menu_type_id', 2)
            ->published()
            ->ordered('asc')
            ->get();
      } else {
         $menus = Menu::where('menu_type_id', 1)
            ->published()
            ->ordered('asc')
            ->get();
      }


      return $menus;
   }
}
