<?php

namespace Laraveldaily\TimezonesSpecific;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{

    public function getUTC($timezone)
    {
        return Carbon::now($timezone)->toDateTimeString();
    }

}