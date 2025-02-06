<?php

namespace App\Http\Controllers;

use App\Http\Resources\KaalosEntryResource;
use App\Models\KaalosEntry;
use Illuminate\Http\Request;
use Inertia\Inertia;

class KaalosEntryController extends Controller
{

    public function count()
    {
        return response()->json([
            'data' => KaalosEntry::all()->count()
        ]);
    }

    public function search(Request $request)
    {

        // TODO: Search engine like Meili or Elastic.
        $searchResults = KaalosEntry::query()->where('url', 'like', '%'.$request->query('search_string', '').'%')->get();
        return Inertia::render('KaalosEntries/KaalosEntryCollection', [
            'kaalosEntries' => $searchResults
        ]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(KaalosEntry $kaalosEntry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KaalosEntry $kaalosEntry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KaalosEntry $kaalosEntry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KaalosEntry $kaalosEntry)
    {
    }
}
