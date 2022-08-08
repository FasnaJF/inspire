<?php
namespace Fasnajf\Inspire\Controllers;

use Illuminate\Http\Request;
use Fasnajf\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));   
     }
}