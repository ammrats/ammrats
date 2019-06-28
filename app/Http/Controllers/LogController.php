<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class LogController extends Controller
{
    public function index()
    {
        log::debug('showメソッド実行');
    }
}
