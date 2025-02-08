<?php

namespace App\Http\Controllers;

use App\Models\KaalosEntry;
use Inertia\Inertia;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboard(Request $request) {
        $user = $request->user();

        $personalKaalosEntries = KaalosEntry::query()
            ->where('user_id', $user->id)
            ->get();

        return Inertia::render('Dashboard', [
            'kaalosEntries' => $personalKaalosEntries
        ]);
    }
}
