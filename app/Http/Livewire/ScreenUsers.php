<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class ScreenUsers extends Component
{
    use WithPagination;

    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'password' => 'required|min:6|max:20',
    ];

    public function render()
    {
        $user = User::paginate(5);
        return view('livewire.screen-users', ['user' => $user]);
    }

    public function getOneUser($id) {
        $user = User::find($id);
        return view('livewire.screen-users', [
            'name'      => $user->name,
            'email'     => $user->email,
            'password'  => $user->password,
        ]);
    }

    public function submit()
    {
        $this->validate();
 
        User::create([
            'name'      => $this->name,
            'email'     => $this->email,
            'password'  => $this->password,
        ]);
    }

    public function deletePost($id)
    {
        User::destroy($id);
    }
}
