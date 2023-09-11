<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use MongoDB\Driver\Session;

class ShopController extends Controller
{
    //Show all shops
    public function index(){

        if (auth()->check()) {
            $shops=auth()->user()->shops()->paginate(5);
        }else{
            $shops=Shop::latest()
                ->filterUser(request('user'))
                ->filterCategory(request('category'))
                ->filter(request('search'))
                ->paginate(5);
        }

        return view('shops.index',[
            'shops'=>$shops
//            'shops' => Shop::latest()
//                ->filterUser(request('user'))
//                ->filterCategory(request('category'))
//                ->filter(request('search'))
//                ->paginate(5)
        ]);
    }

    //Show single shop
    public function show(Shop $shop){
        return view('shops.show',[
            'shop' => $shop
        ]);
    }

    public function create(){
        return view('shops.create',['categories'=>Category::all()]);
    }

    //Store shop data
    public function store(Request $request){

        $formFields=$request->validate([
           'name'=>['required',Rule::unique('shops','name')],
           'category_id' => 'required',
           'description' => 'required',
           'open_hours' => 'required',
           'city' => 'required',
           'address' => 'nullable'
        ]);


        if($request->hasFile('logo')){
            $formFields['logo']= $request->file('logo')->store('logos','public');
        }
        $formFields['user_id']=auth()->id();
        Shop::create($formFields);



        return redirect('/')->with('message','Listing created successfully!');
    }

    //Show Edit Form
    public function edit(Shop $shop){
        return view('shops.edit',['shop'=>$shop,'categories'=>Category::all()]);
    }

    //Update shop data
    public function update(Request $request, Shop $shop){

        if($shop->user_id != auth()->id()){
            abort(403,'Unathorized Action');
        }

        $formFields=$request->validate([
            'name'=>'required',
            'category_id' => 'required',
            'description' => 'required',
            'open_hours' => 'required',
            'city' => 'required',
            'address' => 'nullable'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo']= $request->file('logo')->store('logos','public');
        }
        $formFields['user_id']=auth()->id();
        $shop->update($formFields);



        return back()->with('message','Listing updated successfully!');
    }

    //Delete Listing
    public function destroy(Shop $shop){
        if($shop->user_id != auth()->id()){
            abort(403,'Unathorized Action');
        }
        $shop->delete();
        return redirect('/')->with('message','Shop deleted successfully');
    }

    //Manage Shops
    public function manage(){
        return view('shops.manage',['shops'=>auth()->user()->shops()->get()]);
    }
}
