<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use File;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    private $headers = array();
    private $deviceToken = null;

     private function setResponse(array $response) {
            header('Content-Type: application/json');
            echo json_encode($response);
            exit;
}

public function success($msg = "Success", $data = array()) {
    return $this->setResponse(array('code' => "200", 'success' => true, 'messages' => $msg, 'data' => $data ) );
}

public function error($messages = "Error", $data = null, $code = 400) {
    return $this->setResponse(array('code' => $code, 'success' => false, 'messages' => $messages, 'data'=> $data));
}


public function validation($request='', $rules = [], $messages = [])
{
    $validator = Validator::make($request, $rules, $messages);

    if ($validator->fails()) {
        $this->error(@$validator->errors()->all()[0]);
    }
}

public  function UploadImages($filename,$file,$images){

    $path = 'public/'.$filename.'/'.$file;

    $path1 = $filename.'/'.$file;
    if (!File::exists($path)){
    }else{
        Storage::makeDirectory($path);
    }
    if(!empty($images)){
        $imageName = date('YmdHis').'.'.$images->getClientOriginalExtension();
        Storage::put($path.'/'. $imageName, file_get_contents($images));
        $images =$path1.'/'.$imageName;
    }else{
        $images='';
    }
    return $images;
}



public  function multipleUploads($file,$getImgName,$i){

    $path = 'public/Slider';
    $images = "";
    if(!empty($getImgName)){
        $images=$getImgName;
    }
    if($file){
            if (!File::exists($path)){
            }else{
                Storage::makeDirectory($path);
            }
            if(!empty($file)){
                $imageName = date('YmdHis').$i.'.'.$file->getClientOriginalExtension();
                Storage::put($path.'/'. $imageName, file_get_contents($file));

                $images= $imageName;

            }else{
                $images='';
            }
        }


    return $images;
}


}
