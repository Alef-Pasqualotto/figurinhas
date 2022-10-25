<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
 
class PacoteController extends Controller
{    
    public function show($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}