<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Player;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'in:player,coach,manager'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        $player = Player::create([
            'name' => $request->name,
            'user_id' => $user->id,
            'date_of_birth' => $request->date_of_birth, 
            'email' => $request->email,
            'phone_number' => $request->phone_number,

        ]);

        event(new Registered($user));

        Auth::login($user);
        $userRole=Auth::user()->role;
        switch($userRole){
            case 'manager':
                $this->redirect(route('manager', absolute: false));
                break;
            case 'coach':
                $this->redirect(route('coach', absolute: false));
                break;
            case 'player':
                $this->redirect(route('posts.index', absolute: false));
                break;
            default:
                return redirect(route('dashboard', absolute: false));
        }
        return redirect(route('/', absolute: false));
    }
    protected function generatePlayerId()
{
    return rand(100, 9999);
}
}
