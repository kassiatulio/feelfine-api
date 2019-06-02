<?php

namespace App\Http\Controllers\Activity;

use Illuminate\Http\Request;
use App\Activity;

class ListActivitiesAction
{
    public function __invoke(Request $request)
    { 
        return Activity::all();
    }
}