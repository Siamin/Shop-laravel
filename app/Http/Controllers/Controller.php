<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\SettingShop;



class Controller extends BaseController
{
    public $BasePath = "/upload/image/";
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function uploadFile($file,$path)
    {
        $name = $file->getClientOriginalName();
        $type = $file->getClientOriginalExtension();
        $size = $file->getSize();
        $url = $this->BasePath.$path;
        $file->move(public_path($url), $name);

        return $name;
    }
    
    public function getDataShop(){
        $Setting = SettingShop::all();
        $setting = [];
        foreach ($Setting as $st) {
            $setting += [$st->key => $st->value];
        }

        return $setting;
    }

    public function DeleteFile($fileName,$path){
        // Value is not URL but directory file path
        $image_path = $this->BasePath . $path . '/' . $fileName;
        return File::delete(public_path($image_path));
    }
}