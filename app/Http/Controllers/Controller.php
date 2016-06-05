<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    var $data;
    public function __construct()
    {
        //Creating global data
        $this->data = new \stdClass();
        
        //Setting path to assets directories
        $this->data->{'url'} = new \stdClass();
        
        $assetUrl = app('url')->asset('/').'assets/';
        
        $this->data->url->{'assets'} = $assetUrl;
        $this->data->url->{'img'} = $assetUrl."img/";
        $this->data->url->{'js'} = $assetUrl."javascripts/";
        $this->data->url->{'css'} = $assetUrl."stylesheets/";      
    }
}
