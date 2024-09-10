<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingPage;
use App\Models\Section;
use App\Models\ApkStore;
use App\Models\ApkSelfStore;
use Exception;
use Illuminate\Support\Facades\Log;

class LandingPageController extends Controller
{
    public function index()
    {
        try {
            $mLandingPage = LandingPage::findOrFail(env('APP_LANDING_ID'));
            $mSection = Section::where('landing_page_id', $mLandingPage->id)->first();
            $mApkStore = ApkStore::where('landing_page_id', $mLandingPage->id)->first();
            $mApkSelfStore = ApkSelfStore::where('landing_page_id', $mLandingPage->id)->first();
            return view('welcome', compact('mLandingPage', 'mSection', 'mApkStore', 'mApkSelfStore'));
        } catch (Exception $e) {
            Log::error('Failed to find landing page: ' . $e->getMessage());
            return view('maintanance');
        }
    }

    public function privterms()
    {
        try {
            $mLandingPage = LandingPage::findOrFail(env('APP_LANDING_ID'));
            $mSection = Section::where('landing_page_id', $mLandingPage->id)->first();
            $mApkStore = ApkStore::where('landing_page_id', $mLandingPage->id)->first();
            $mApkSelfStore = ApkSelfStore::where('landing_page_id', $mLandingPage->id)->first();
            return view('privterms', compact('mLandingPage', 'mSection', 'mApkStore', 'mApkSelfStore'));
        } catch (Exception $e) {
            Log::error('Failed to find landing page: ' . $e->getMessage());
            return view('maintanance');
        }
    }
}
