<?php
/**
 * Created by PhpStorm.
 * User: HlaingTinHtun
 * Date: 6/14/17
 * Time: 4:16 PM
 */

Route::get('timezones/{timezone?}', 'laraveldaily\timezones\TimezonesController@index');