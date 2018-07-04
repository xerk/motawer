<?php

namespace App\Http\Controllers;

use App\Banar;
use App\BanarMain;
use App\BanarDetail;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index() {
        return view("index");
    }

    public function about() {
        return view("about", compact('name'));
    }

    public function proLang() {
        return view("proLanguage");
    }

    public function project() {
        return view("project");
    }
    
    public function motaba() {

        $banar_1 = BanarMain::where('banar', 'first')->first();
        $banar_2 = BanarMain::where('banar', 'second')->first();
        $banar_3 = BanarMain::where('banar', 'thired')->first();
        $banar_4 = BanarMain::where('banar', 'four')->first();
        $banar_5 = BanarMain::where('banar', 'five')->first();

        return view("motaba", [
            'banar_1' => $banar_1,
            'banar_2' => $banar_2,
            'banar_3' => $banar_3,
            'banar_4' => $banar_4,
            'banar_5' => $banar_5,
        ]);
    }

    public function motabap() {

        $banar_1 = Banar::where('category', 'Student')->first();
        $banar_2 = Banar::where('category', 'Parents')->first();
        $banar_3 = Banar::where('category', 'Teachers')->first();
        $banar_4 = Banar::where('category', 'Administrators')->first();
        $banar_5 = Banar::where('category', 'Staff')->first();
        $banar_6 = Banar::where('category', 'Managers')->first();
        $banar_7 = Banar::where('category', 'Teachers2')->first();
        $banar_8 = Banar::where('category', 'Administrators2')->first();
        $banar_9 = Banar::where('category', 'Managers2')->first();

        return view("motabap", [
            'banar_1' => $banar_1,
            'banar_2' => $banar_2,
            'banar_3' => $banar_3,
            'banar_4' => $banar_4,
            'banar_5' => $banar_5,
            'banar_6' => $banar_6,
            'banar_7' => $banar_7,
            'banar_8' => $banar_8,
            'banar_9' => $banar_9,
        ]);
    }

    public function showmo($id) {

        $banar = BanarDetail::where('banar_id', $id)->first();
       

        return view("motaba-details", [
            'banar' => $banar,
        ]);
    }
    
    public function aboutus() {
        return view("aboutus");
    }

    public function contact() {
        return view("contact");
    }
}
