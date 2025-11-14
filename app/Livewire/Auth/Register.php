<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Register extends Component
{
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    protected function rules(): array
    {
        return [
            'first_name' => ['required','string','max:255'],
            'last_name' => ['nullable','string','max:255'],
            'email' => ['required','email','max:255','unique:'.User::class],
            'password' => ['required','confirmed','min:8'],
        ];
    }

    public function register(): void
    {
        $validated = $this->validate();
        $combinedName = trim(($validated['first_name'] ?? '').' '.($validated['last_name'] ?? ''));

        $user = User::create([
            'name' => $combinedName,
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'nick_name' => $validated['first_name'] ?? $combinedName,
            'company_id' => 0,
            'device_type' => 'Android',
            'fcm_token' => '',
            'created_time' => now(),
            'isAdmin' => 0,
            'isActive' => 1,
            'isDeleted' => 0,
        ]);

        Auth::login($user);

        $this->redirectIntended(route('admin.dashboard'), navigate: true);
    }
    
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.auth.register');
           
    }
}
