<?php

namespace App\View\Components\User;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct(public Collection $users, public ?User $user = null)
    {
        //
    }

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
