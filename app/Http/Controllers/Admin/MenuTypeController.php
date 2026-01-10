<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuType;


class MenuTypeController extends Controller
{
    //

    public function index (){
        $types = MenuType::latest()->paginate(20);
        return view('admin.menu-types.index', compact('types'));
    }

    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required',
        ]);

          if(!$validated){
            return back()->withErrors($validated,'menuTypeCreate');
        }
        

        MenuType::create([
            'name' => $request->name,
            'status' => 'draft'
            
        ]);

        return redirect()->route('menuTypes.index')->with('status','Menu Type created successfully');

    }


    public function update(Request $request, MenuType $menuType){

        $validated = $request->validate([
            'name' => 'required',
        ]);

        $menuType->update([
            'name' => $request->name,
            
        ]);

        return redirect()->route('menuTypes.index')->with('status','Menu Type updated successfully');

    }
    public function destroy(Request $request, MenuType $menuType){

        $menuType->delete();

        return redirect()->route('menuTypes.index')->with('status','Menu Type deleted successfully');

    }

    
}
