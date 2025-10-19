<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    // Display all countries
public function index(Request $request)
    {
        $search = $request->input('search');

        $countries = Country::when($search, function ($query, $search) {
            $query->where('name', 'like', "%{$search}%");
        })
        ->orderBy('name')
        ->paginate(10)
        ->withQueryString();

        if ($request->ajax()) {
            return view('countries.partials.table', compact('countries'))->render();
        }

        return view('backendpages.countries.index', compact('countries'));
    }

    // Show form to add a country
    public function create()
    {
        return view('backendpages.countries.create');
    }

    // Store new country
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:countries,name',
        ]);

        Country::create([
            'name' => $request->name,
        ]);

        return redirect()->route('countries.index')->with('success', 'Country added successfully!');
    }

    // Show edit form
    public function edit(Country $country)
    {
        return view('backendpages.countries.edit', compact('country'));
    }

    // Update a country
    public function update(Request $request, Country $country)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:countries,name,' . $country->id,
        ]);

        $country->update([
            'name' => $request->name,
        ]);

        return redirect()->route('countries.index')->with('success', 'Country updated successfully!');
    }

    // Delete a country
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('countries.index')->with('success', 'Country deleted successfully!');
    }
}
