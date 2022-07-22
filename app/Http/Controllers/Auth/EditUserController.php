<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EditUserController extends Controller
{
    public function destroy($id)
    {
       $user = User::findOrFail($id);

       $user->delete();

       return redirect('/');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([

            "password" => "required",
            "username" => "max:225",
            "name" => "max:225",
            "email" => "",
        ]);
        if(Hash::check($request->password,$user->password))
        {
            $user->username = $request->username;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
        }

        return redirect()->route('profile');
    }

}
