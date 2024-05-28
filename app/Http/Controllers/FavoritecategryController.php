<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favoritecategory;

class FavoritecategryController extends Controller
{
    public function favoritecategory(Favoritecategory $favoritecategory)
    {
        return $favoritecategory->get();
    }
}
