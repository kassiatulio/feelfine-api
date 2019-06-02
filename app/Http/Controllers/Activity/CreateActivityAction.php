<?php

namespace App\Http\Controllers\Activity;

use Illuminate\Http\Request;
use App\Activity;

class CreateActivityAction
{
    public function __invoke(Request $request)
    { 
        $activity = new Activity();
        $activity->activity = $request->activity;
        $activity->created_at = $request->created_at;

        $activity->save();

        return $activity;
    }
}