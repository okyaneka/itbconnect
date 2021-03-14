<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BusinessInformation extends Component
{
    public $prod_or_servs = [];

    protected $listeners = ['updateProdPreview'];

    public function __construct()
    {
        $this->addProdOrServ();
    }

    public function addProdOrServ()
    {
        array_push($this->prod_or_servs, [
            'name' => '',
            'photo_preview' => '',
        ]);
    }

    public function updateProdPreview($data)
    {
        $this->prod_or_servs[$data[0]]['photo_preview'] = $data[1];
    }

    public function deleteProdOrServ($key)
    {
        array_splice($this->prod_or_servs, $key, 1);
    }

    public function render()
    {
        return view('livewire.business-information');
    }
}
