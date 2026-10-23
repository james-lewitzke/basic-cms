<?php

use Illuminate\Support\Facades\Route;
use App\Models\Page;

Route::get('/', function () {
    // 1. Look for a page in your database explicitly using the slug 'home'
    $page = App\Models\Page::where('slug', 'home')->first();

    // 2. Fallback: If you haven't created a 'home' page yet, show the default welcome screen
    if (! $page) {
        return view('welcome');
    }

    // 3. Security: If the home page is set to draft, do not let the public see it
    if ($page->status === 'draft') {
        abort(404);
    }

    // 4. Render your clean page layout layout using dot notation
    return view('front.page', ['page' => $page]);
});



Route::get('/{slug}', function (string $slug) {
    // 1. Look up the page matching the URL slug, or fail with a 404 if it doesn't exist
    $page = Page::where('slug', $slug)->firstOrFail();

    // 2. Security Check: If the page is a draft, do not let the public view it
    if ($page->status === 'draft') {
        abort(404);
    }

    // 3. Render the clean file inside the 'front' folder using dot notation
    return view('front.page', ['page' => $page]);
});
