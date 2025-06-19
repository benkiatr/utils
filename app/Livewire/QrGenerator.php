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
        $this->qrImage = QrCode::size(200)->format('png')->generate($this->qrText);
    }
    public function render()
    {
        return view('livewire.qr-generator');
    }
}
