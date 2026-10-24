<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        $query = Country::query();

        // Фільтр за регіоном: якщо параметра немає, показуємо всі країни
        if ($request->filled('region')) {
            $query->where('region', $request->query('region'));
        }

        $countries = $query->orderBy('name')
            ->paginate(10)
            ->withQueryString();

        $regions = Country::query()->distinct()->orderBy('region')->pluck('region');

        return view('countries.index', compact('countries', 'regions'));
    }

    public function create()
    {
        return view('countries.create');
    }

    public function store(CountryRequest $request)
    {
        Country::create($request->validated());

        return redirect()->route('countries.index')->with('success', 'Країну додано.');
    }

    public function show(Country $country)
    {
        return view('countries.show', compact('country'));
    }

    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    public function update(CountryRequest $request, Country $country)
    {
        $country->update($request->validated());

        return redirect()->route('countries.index')->with('success', 'Дані країни оновлено.');
    }

    public function destroy(Country $country)
    {
        $country->delete();

        return redirect()->route('countries.index')->with('success', 'Країну видалено.');
    }
}
