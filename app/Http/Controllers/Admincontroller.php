<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Admincontroller extends Controller
{
       public function user()
    { 
    $data=user::all();
    return view("admin.user",compact("data"));
    }
      public function deleteuser($id)
    { 
    $data=user::find($id);
    $data->delete();
    return  redirect()->back();
    }

        
}
