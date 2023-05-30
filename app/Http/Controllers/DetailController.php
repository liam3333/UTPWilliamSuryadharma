<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreDetailRequest;
use App\Http\Requests\UpdateDetailRequest;

class DetailController extends Controller
{
    public function detail($id) {
        $book = Detail::find($id);

        return view('detail', compact('book'));    
    }
}
