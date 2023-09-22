<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name, $phone, $email, $password, $password_confirmation;
    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app')->section('content');
    }

    public function rules(){
        return [
            'name' => ['required', 'min:3'],
            'phone' => ['min:9', 'numeric'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed']
        ];
    }

    public function registerUser()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => bcrypt($this->password)
        ]);

        Auth::login($user, true);
        event(new Registered($user));
        return redirect()->to(RouteServiceProvider::HOME);
    }

}
