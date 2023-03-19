<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $name = "";
    public $count = 0;

    public function mount()
    {
        $this->name = 'mount';
    }

    public function update()
    {
        $this->name = 'update';
    }

    public function mouseOver(){
        $this->name = 'ようお';
    }
    public function increment()
    {
        $this->count++;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
