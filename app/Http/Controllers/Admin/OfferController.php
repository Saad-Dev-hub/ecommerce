<?php

namespace App\Http\Controllers\Admin;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Requests\OfferRequest;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::all();
        $products = Product::with('offer')->where('offer_id', !null)->get();
        return view('admin.offers.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products=\App\Models\Product::all();

        return view('admin.offers.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validated();
        //save data to database
        $offer = new Offer();
        $offer->start_date = $request->start_date;
        $offer->end_date = $request->end_date;
        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->status = $request->status;
        $offer->discount = $request->discount;
        $offer->save();
        //redirect to offers page
        toastr()->success('Offer created successfully!');
        return redirect()->route('admin.offers.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $offer = Offer::find($id);
        $products=Product::all();
        return view('admin.offers.edit',compact('offer','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OfferRequest $request, $id)
    {
        $request->validated();
        //save data to database
        $offer = Offer::find($id);
        $offer->start_date = $request->start_date;
        $offer->end_date = $request->end_date;
        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->status = $request->status;
        $offer->discount = $request->discount;
        $offer->save();
        //redirect to offers page
        toastr()->success('Offer updated successfully!');
        return redirect()->route('admin.offers.index');


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
        $offer = Offer::find($id);
        $products = Product::where('offer_id', $id)->get();
        dd($products);
        $offer->delete();
        toastr()->success('Offer deleted successfully!');
        return redirect()->route('admin.offers.index');
    }
}
