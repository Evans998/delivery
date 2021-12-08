<?php

namespace App\Http\Controllers;

use App\Product;
use App\Restourant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RestourantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $restourants = Restourant::all();

        return view('restourants.index',compact('restourants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('restourants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $restourant = new Restourant();

        $restourant ->rest_name = $request->rest_name;
        $restourant ->rest_desc = $request->rest_desc;

        if ($request->file('rest_img')){
            $path = Storage::putFile('public', $request->file('rest_img'));
            $url = Storage::url($path);
            $restourant->rest_img = $url;
        }

        $restourant->save();

        return redirect()->route('restourant.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show($id)
    {
        $products = Product::where('productRest_id', '=', $id)
                    ->get();

        return view('products.index', compact('products'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $restourant = Restourant::find($id)
                        ->get();

        return view('restourants.edit', compact('restourant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
