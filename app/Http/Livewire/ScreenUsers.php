<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class ScreenUsers extends Component
{
    use WithPagination;

    public function render()
    {
        $user = User::paginate(5);
        return view('livewire.screen-users', ['user' => $user]);
    }
}
