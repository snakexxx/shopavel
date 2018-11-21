<?php

namespace Fireapps\Shopavel\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppsController extends Controller
{
    public function install()
    {
        return view('shopavel::apps.installcd');
    }
}
