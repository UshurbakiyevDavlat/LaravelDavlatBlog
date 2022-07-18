<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class EditController extends Controller
{
    public function __invoke(User $user): Factory|View|Application
    {
        $roles = User::getRoles();
        return view('admin.user.edit', compact('user','roles'));
    }
}
