<?php

namespace App\Http\Controllers;

use App\Models\KaalosEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
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
        $loggedIn = $request->user() === null;
        // TODO: Search engine like Meili or Elastic.
        $searchResults = KaalosEntry::query()->where('url', 'like', '%'.$request->query('search_string', '').'%')->get();
        return Inertia::render('Search', [
            'kaalosEntries' => $searchResults,
            'canLogin' => $loggedIn,
            'canRegister' => $loggedIn
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

        $executed = RateLimiter::attempt(
            'send-message:' . $request->user()->id,
            $perMinute = 1,
            function() use ($request) {
                KaalosEntry::query()->firstOrCreate(
                    [
                        ...$request->validate([
                            'url' => 'required|string',
                            'description' => 'required|string',
                            'tags' => 'required|string',
                        ]),
                        'downvotes' => 0,
                        'upvotes' => 0,
                        'user_id' => $request->user()->id
                    ]);
            }
        );

        if(!$executed) {
            $request->session()->flash('flash.banner', 'Rate limit exceeded. Only one insert per minute.');
            $request->session()->flash('flash.bannerStyle', 'danger');
            return to_route('dashboard');
        }

        return to_route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(KaalosEntry $kaalosEntry)
    {
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

    public function delete(int $id)
    {
        KaalosEntry::query()
            ->find($id)
        ?->delete();

        return to_route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KaalosEntry $kaalosEntry)
    {
        KaalosEntry::destroy($kaalosEntry);
    }
}
