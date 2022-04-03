<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OffersController extends Controller
{
    public function index () {
        $offers = Offer::all();
        return view("home", compact("offers"));
    }
}
