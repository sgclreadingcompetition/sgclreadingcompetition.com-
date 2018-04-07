<?php

namespace App\Http\Controllers;

class DownloadController extends Controller{

    public function getDownload($name){
        return response()->download(public_path(). "/download/".$name);
    }

}