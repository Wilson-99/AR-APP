<?php

namespace App\Livewire;

use Livewire\Component;
use Stancl\Tenancy\Database\Models\Domain;

class Tenant extends Component
{
    public $domains = [];

    public function mount(){
        $this->domains= Domain::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        //$domains = Domain::orderBy('created_at', 'desc')->get();
        return view('livewire.tenants.tenant');
    }
}
