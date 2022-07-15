<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CreateController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
        return view('admin.user.create');
    }
}
