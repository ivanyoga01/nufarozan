<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NufarozanEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nama, $alamat, $nohp)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->nohp = $nohp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from('admin@lynxitboyolali.com')
                 ->view('email_pendaftaran')
                 ->with(
                  [
                      'nama' => $this->nama,
                      'alamat' => $this->alamat,
                      'nohp' => $this->nohp,
                  ]);
    }
}
