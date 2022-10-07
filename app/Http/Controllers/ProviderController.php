<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Iva;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = Provider::all();
        return view('providers.index', ['providers' => $providers]);
    }

    public function create()
    {
        $cities = City::all();
        $ivas = Iva::all();
        return view('providers.create', ['cities'=>$cities, 'ivas'=>$ivas]);
    }

    public function store(Request $request)
    {
        $provider = new Provider();
        $provider -> name = $request -> input('input_name');
        $provider -> business_name = $request -> input('input_business_name');
        $provider -> address = $request -> input('input_address');
        $provider -> cp = $request -> input('input_cp');
        $provider -> email = $request -> input('input_email');
        $provider -> website = $request -> input('input_website');
        $provider -> city_id = $request -> input('input_city_id');
        $provider -> fiscal_condition_id = $request -> input('input_ficalcondition_id');
        $provider -> save();
        return to_route('providers');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cities = City::all();
        $ivas = Iva::all();
        return view('providers.show', ['item' => Provider::find($id), 'cities'=> $cities, 'ivas'=> $ivas, 'editable' => true]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
