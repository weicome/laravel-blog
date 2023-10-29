<?php

namespace App\View\Components\User;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Create extends Component
{
    #[Rule('required|string|max:255|min:4')]
    public string $name = '';
    #[Rule('required|string|max:255|min:5')]
    public string $email = '';
    #[Rule('required|string|max:255|min:6')]
    public string $password = '';

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('livewire.user.create');
    }

    public function store(): void
    {
        $validated = $this->validate();
        User::create($validated);
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }
}
