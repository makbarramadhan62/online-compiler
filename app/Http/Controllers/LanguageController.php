<?php

namespace App\Http\Controllers;

use App\Services\judge0\Languages;
use App\Services\ServiceHelper;

class LanguageController extends Controller
{
    public function list() {
        $languages = new Languages();
        $languageList =  $languages->list();
        
        $decodedLanguages = json_decode($languageList, true); 
    
        return view('home', ['languages' => $decodedLanguages]);
    }
}
