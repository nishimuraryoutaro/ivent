<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required|string|max:225',
        'email' => 'required|string|email|max:225|unique:users',
        'password' => 'required|string|min:8',
    ];


    public function register()
    {
        $this->validate();

        // バリデーション失敗の場合、ここまで実行されない

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('message', '登録okです');
        //to-routeでリダイレクト(laravel^9)
        return to_route('livewire-test.index');
    }
    public function render()
    {
        return view('livewire.register');
    }


}
