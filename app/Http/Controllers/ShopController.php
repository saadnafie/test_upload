<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\AdminPermission;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function get_all_shops()
    {
        $shops = Shop::all();
        return view('home');
    }


    public function shop_activation(Request $request){
        $shop = Shop::find($request->id)->update(['isActive',$request->status]);
        return redirect()->back();
    }

    public function get_all_shop_permissions($id)
    {
        //$permissions = AdminPermission::where('shop_id',$id)->get();
        $permissions = AdminPermission::all();
        return view('home');
    }

    public function shop_permission_activation(Request $request){
        $permission = AdminPermission::find($request->id)->update(['isActive',$request->status]);
        return redirect()->back();
    }

}
