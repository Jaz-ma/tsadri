<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditUserController extends Controller
{
    public function destroy($id)
    {
       $user = User::findOrFail($id);

       $user->delete();

       return redirect('/');
    }

    public function create()
    {
        return view();
    }
}
