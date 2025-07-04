<?php

namespace App\Livewire;

use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrGenerator extends Component
{
    public $qrText;
    public $qrImage;

    public function generateQr()
    {
        $relativePath = "qrcodes".DIRECTORY_SEPARATOR.$this->generateNameFile().".png";
        $path = public_path($relativePath);
        QrCode::size(200)->format('png')->generate($this->qrText, $path);
        $this->qrImage = asset($relativePath);
    }
    public function render()
    {
        return view('livewire.qr-generator');
    }

    private function generateNameFile()
    {
        return md5($this->qrText);
    }
}
