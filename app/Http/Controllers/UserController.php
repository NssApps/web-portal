<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WifiUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    //
    public function index() {
        return view('users.index');
    }

    public function csv(Request $request)
    {
        $search = $request->query('search');

        $users = WifiUser::where('name', 'like', '%' . $search . '%')
            ->orderBy('id', 'asc')
            ->get(['name', 'email']);

        $csv = implode(",", ['Nombre', 'Email']) . "\n";
        foreach ($users as $user) {
            $csv .= "\"{$user->name}\",\"{$user->email}\"\n";
        }

        return Response::streamDownload(function () use ($csv) {
            echo $csv;
        }, 'usuarios.csv', ['Content-Type' => 'text/csv']);
    }
}
