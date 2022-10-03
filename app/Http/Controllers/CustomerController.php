<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

use App\Models\Customer;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();

        return view('customers.create', [ 'cities' => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer-> name = $request -> input('input_name');
        $customer-> surname = $request -> input('input_surname');
        $customer-> email = $request -> input('input_email');
        $customer-> city_id = $request-> input('select_city_id');
        $customer-> save();
        return back()->with('success', 'Cliente guardado');
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
        $customer = Customer::find($id);

        return view('customers.customerDetail', ['customer' => Customer :: find($id), 'cities' => City::All()]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     return view('customers.edit', ['customer' => Customer :: find($id), 'cities' => City::All()]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer-> name = $request -> input('input_name');
        $customer-> surname = $request -> input('input_surname');
        $customer-> email = $request -> input('input_email');
        // $customer-> state_id = $request-> input('state_id');
        // $customer-> city_id = $request-> input('city_id');
        $customer-> save();

        return Redirect()->action([CustomerController::class, 'index']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::destroy($id);
        return back()->with('success', 'Cliente eliminado');

    }
}
