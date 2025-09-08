<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class voiceagentaiavatarController extends Controller
{
    public function voiceagentaiavatar()
    {
        return view('pages.voiceagentaiavatar'); // This will look for resources/views/newpage.blade.php
    }
}
