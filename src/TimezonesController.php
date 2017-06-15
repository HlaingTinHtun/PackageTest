<?php
/**
 * Created by PhpStorm.
 * User: HlaingTinHtun
 * Date: 6/14/17
 * Time: 4:10 PM
 */

namespace Laraveldaily\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{

    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('timezones::time', compact('current_time'));
    }


}