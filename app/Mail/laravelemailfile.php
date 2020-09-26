<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class laravelemailfile extends Mailable
{
    use Queueable, SerializesModels;
    public $file_info;
    public $all_data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->all_data = $data;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->file_info = array(
            "as" => $this->all_data['file_name'],
            "mime" => $this->all_data['mime_type']
        );

        return $this->subject($this->all_data['subject'])->view('content',array("data"=>$this->all_data['message']))->attach($this->all_data['path'],$this->file_info);
    }
}
