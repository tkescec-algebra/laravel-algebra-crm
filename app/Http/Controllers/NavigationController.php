<?php

namespace App\Http\Controllers;

use App\Models\Navigation;
use App\Http\Requests\StoreNavigationRequest;
use App\Http\Requests\UpdateNavigationRequest;

class NavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $navigations = Navigation::all();
        dump($navigations);
        //return view('navigations.index', compact('navigations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('navigations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNavigationRequest $request)
    {
        $validatedData = $request->validated();
        Navigation::create($validatedData);

        return redirect()
            ->route('navigations.index')
            ->with('success', 'Navigation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Navigation $navigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Navigation $navigation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNavigationRequest $request, Navigation $navigation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Navigation $navigation)
    {
        //
    }
}
