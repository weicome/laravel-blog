<?php

namespace App\Livewire\User;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;

class UserIndex extends \Livewire\Component
{
    public Collection $users;
    public ?User $user = null;

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('livewire.user.list');
    }

    public function mount(): void
    {
        $this->users = User::query()->get();
    }
    public function getUsers(): void
    {

    }
}
