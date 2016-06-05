<?php

namespace App\Http\Controllers;

class MasterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    //
    
    
    public function home()
    {
         return view('contents.home', (array) $this->data);
    }
}
