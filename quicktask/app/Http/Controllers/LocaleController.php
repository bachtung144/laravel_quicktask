<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LocaleController extends Controller
{
    public function changeLanguage($language) {
        App::setlocale($language);
        session()->put('locale', $language);

        return redirect()->back();
    }
}
