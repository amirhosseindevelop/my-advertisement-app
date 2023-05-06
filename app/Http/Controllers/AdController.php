<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class AdController extends Controller
{
    public function render()
    {
        return view('create-ads');
    }

    public function createAdsAction(Request $request)
    {
        $ad = new Ad;
        $ad->name = $request->name;
        $ad->price = $request->price;
        $ad->description = $request->desc;
        $ad->save();

        return redirect('/');
    }

    public function getAds()
    {
        $ads = Ad::all();

        return view('welcome', ['ads' => $ads]);
    }

    public function loadAds($adName)
    {
        $adsDetail = DB::table('ads')->where('name', $adName)->first();

        return view('loadAds', ['info' => $adsDetail]);
    }
}
