<?php

namespace App\Livewire;

use App\Models\Tenant;
use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Livewire\Forms\TenantForm;
use App\Providers\RouteServiceProvider;

class CreateTenant extends Component
{
    public $id = '';
    public $domain = '';

    public function render()
    {
        return view('livewire.tenants.create-tenant');
    }

    public function save()
    {
        $validated = $this->validate([
            'id' => 'required|min:3|unique:tenants',
        ]);

        $validate = $this->validate([
            'domain' => 'required|min:3|unique:domains|string'
        ]);

        $tenant = Tenant::create($validated);

        $tenant->domains()->create($validate);

        $this->reset();

        return $this->redirect(RouteServiceProvider::HOME);
    }

    public function show()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }


}
