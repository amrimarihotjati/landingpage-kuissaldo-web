<?php

use Illuminate\Support\Facades\Route;

use App\Models\LandingPage;
use App\Models\Section;
use App\Models\ApkStore;
use App\Models\ApkSelfStore;

Route::get('/', function () {
    try {
        $mLandingPage = LandingPage::findOrFail(env('APP_LANDING_ID'));
        $mSection = Section::where('landing_page_id', $mLandingPage->id)->first();
        $mApkStore = ApkStore::where('landing_page_id', $mLandingPage->id)->first();
        $mApkSelfStore = ApkSelfStore::where('landing_page_id', $mLandingPage->id)->first();
        return view('welcome', compact('mLandingPage', 'mSection', 'mApkStore', 'mApkSelfStore'));
    } catch (Exception $e) {
        Log::error('Failed to find landing page: ' . $e->getMessage());
    }
});

Route::get('/privterms', function () {
    return view('privterms');
});
