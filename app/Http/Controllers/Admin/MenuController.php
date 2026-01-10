<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuType;
use App\Models\Menu;

class MenuController extends Controller
{
    //

    public function index()
    {

        $menus = Menu::with('types')->latest()->paginate(20);
        $menuTypes = MenuType::all();

        return view('admin.menus.index', compact('menus','menuTypes'));
    }

    public function store(Request $request)
    {



        $validated = $request->validate([
            'name' => 'required',
            'menu_type_id' => 'required'
        ]);

    

        if (!$validated) {
            return back()->withErrors($validated, 'menuTypeCreate');
        }


        Menu::create([
            'name' => $request->name,
            'menu_type_id' => $request->menu_type_id,
            'status' => 'draft'

        ]);

        return redirect()->route('menus.index')->with('status', 'Menu  created successfully');
    }


    public function update(Request $request, Menu $menu)
    {

        $validated = $request->validate([
            'name' => 'required',
            'menu_type_id' => 'required'
        ]);

        $menu->update([
            'name' => $request->name,
            'menu_type_id' => $request->menu_type_id,
        ]);

        return redirect()->route('menus.index')->with('status', 'Menu updated successfully');
    }

    public function destroy(Request $request, Menu $menu)
    {

        $menu->delete();

        return redirect()->route('menus.index')->with('status', 'Menu deleted successfully');
    }
}
