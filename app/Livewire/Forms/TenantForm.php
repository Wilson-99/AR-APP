<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class TenantForm extends Form
{
    #[Rule('required|min:5')]
    public $id = '';

   /* #[Rule('required|min:5|unique|string')]
    public $domain = '';*/
}
