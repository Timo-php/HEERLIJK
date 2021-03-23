<?php

namespace HEERLIJK\PartnerModule;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PartnerSelectController extends Controller
{
    public function partnerselect()
    {
        print_r('Hier gaat die een partner selecteren en alles doorgeven, wow is dit dan dadelijk de adapter!?');
    }

    public function otherFunctions()
    {
        print_r('En hier kunnen dus de algemene functies worden aangeroepen');
    }

}
