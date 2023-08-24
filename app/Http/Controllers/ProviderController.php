<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;
use App\Models\City;

class ProviderController extends Controller
{
    public function index()
    {
        return view('providers.index', [
            'providers'=> Provider::paginate()
        ]);
    }

    public function create()
    {
        $cities = City::orderby('name')->get();
        return view('providers.create', compact('cities'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required|max:255',
            'lastname'=> 'required|max:255',
            'document'=> 'required|max:255',
            'email'=> 'required|max:255',
            'phone'=> 'required|max:255',
            'address'=> 'required|max:255',
            'city_id'=> 'required|integer',

        ]);
        Provider::create($data);

        return back()->with('message', 'Provider created');
    }

    public function edit(Provider $provider)
    {
        $cities = City::orderBy('name')->get();
        return view('providers.edit', compact('provider', 'cities'));
    }

    public function update(Provider $provider, Request $request)
    {
        $data = $request->validate([
            'name'=> 'required|max:255',
            'lastname'=> 'required|max:255',
            'document'=> 'required|max:255',
            'email'=> 'required|max:255',
            'phone'=> 'required|max:255',
            'address'=> 'required|max:255',
            'city_id'=> 'required|integer',
        ]);

        $provider->update($data);

        return back()->with('message', 'Provider updated');
    }

    public function destroy(Provider $provider)
    {
        $provider->delete();

        return back()->with('message', 'Provider deleted.');
    }
}


