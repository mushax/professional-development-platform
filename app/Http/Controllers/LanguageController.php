<?php

namespace App\Http\Controllers;

 use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\App;
    use Illuminate\Support\Facades\Session;

    class LanguageController extends Controller
    {
        /**
         * Switch the application locale.
         */
        public function switch(string $locale): RedirectResponse
        {
            if (in_array($locale, config('app.available_locales'))) {
                Session::put('locale', $locale);
                App::setLocale($locale);
            }

            return redirect()->back();
        }
    }