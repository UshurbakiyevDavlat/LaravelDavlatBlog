<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['password'] = Str::random(10);
        Mail::to($data['email'])->send(new PasswordMail($data['password']));
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data); // we do not need Service class here yet, until mode complicated logic
        event(new Registered($user));
        return redirect()->route('admin.user.index');
    }
}
