<?php

namespace heerlijk\partnermodule;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    public function test()
    {
        print_r('check, de controllert werkt');
    }
}
