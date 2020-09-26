<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\laravelemailfile;

class server extends Controller
{
    public $file;
    public $all_data;

    public $file_name;
    public $mime_type;
    public $path;
    public function result(Request $data){
       $this->all_data = $data->all();
       $this->file = $data->file('fileupload');
       
      $this->file_name = $this->file->getClientOriginalName();

      $this->mime_type = $this->file->getMimeType();
      $this->path = $this->file->getPathname();
      \Mail::to($this->all_data['email'],)->send(new laravelemailfile(array(
          "subject" =>$this->all_data['subject'],
          "message" => $this->all_data['message'],
          "file_name" => $this->file_name,
          "mime_type" => $this->mime_type,
          "path" => $this->path
      )));
    }
}
