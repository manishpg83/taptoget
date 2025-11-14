<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
#[Title('Sign In')]
class Login extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    protected function rules(): array
    {
        return [
            'email' => ['required','email'],
            'password' => ['required'],
        ];
    }

    public function login(): void
    {
        $this->validate();

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            throw ValidationException::withMessages([
                'email' => __("These credentials do not match our records."),
            ]);
        }

        request()->session()->regenerate();

        $this->redirectIntended(route('admin.dashboard'), navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
