<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CenterController
{
    public function __invoke()
    {
        return view("center.index", [
            'centers' => DB::table("centers")->get()
        ]);
    }
}
