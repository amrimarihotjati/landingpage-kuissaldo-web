<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingPage;
use App\Models\Section;
use App\Models\ApkStore;
use App\Models\ApkSelfStore;
use App\Models\Article;

use Purifier;

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
            $mArticle = Article::where('landing_page_id', $mLandingPage->id)->get();
            foreach ($mArticle as $article) {
                $article->content = Purifier::clean($article->content);
            }
            return view('welcome', compact('mLandingPage', 'mSection', 'mApkStore', 'mApkSelfStore', 'mArticle'));
        } catch (Exception $e) {
            Log::error('Failed to find landing page: ' . $e->getMessage());
            return view('maintanance');
        }
    }

    public function indexArticleContent($route_page)
    {
        try {
            $mLandingPage = LandingPage::findOrFail(env('APP_LANDING_ID'));
            $mArticle = Article::where('route_page', $route_page)->first();
            $mArticle->content = Purifier::clean($mArticle->content);
            return view('content-placeholder', compact('mLandingPage', 'mArticle'));
        } catch (Exception $e) {
            Log::error('Failed to find landing page: ' . $e->getMessage());
            return view('maintanance');
        }
    }
}
