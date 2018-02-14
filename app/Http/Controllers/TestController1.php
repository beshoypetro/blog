<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController1 extends Controller
{
    public function test(){

        return response()->json('jsihdjsjdjsd');
    }
    public function contact(){

        return redirect('extras.contactUs');

    }
    public function terms(){

        return view('extras.termsAndConditions');
    }
    public function service(){

        return view('extras.privacy');
    }
}
