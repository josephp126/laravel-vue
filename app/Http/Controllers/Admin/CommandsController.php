<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Artisan;

class CommandsController extends Controller
{
    public function index()
    {
        return view('admin.commands.index');
    }

    public function migrations()
    {
        Artisan::call('migrate');

        logger(sprintf("admin_id: %s manually ran migrations from admin", auth()->id()));
        session()->flash('info', 'Migrations Ran');
        return redirect()->back();
    }
}
