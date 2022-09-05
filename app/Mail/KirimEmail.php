<?php

    namespace App\Mail;
    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;
        
    class KirimEmail extends Mailable
    {
        use Queueable, SerializesModels;
        public $details;
        
        public function __construct($details)
        {
            $this->details = $details;
        }
        
        public function build()
        {
            return $this->subject('ini adalah conatoh kirim email dengan laravel')->view('contoh_email');
        }
    }
      