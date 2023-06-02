<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\client_data;
use App\Models\admin_user;
use Illuminate\Support\Facades\Auth;
use App\Models\newuser;
use App\Models\partner;
use App\Models\owner_login;





class MemberController extends Controller
{
    //
 function AddData(Request $req)
    {
    $member = new Member;
    $member->name=$req->name;
    $member->email=$req->email;
    $member->password=$req->password;
    $member->save();
    return redirect()->intended('/');

    }

    function clientData(Request $req)
    {
    $client_data = new client_data;
    $client_data->name=$req->name;
    $client_data->phone=$req->phone;
    $client_data->email=$req->email; 
    $client_data->address=$req->address;   
    $client_data->offer=$req->offer;
    $client_data->date=$req->date;
    $client_data->save();
    return redirect()->intended('/thanks');

    }  

    function adminCheck(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    $user = admin_user::where('email', $email, 'password',$password);
    if ($password == 'admin123') {
        return redirect()->intended('/admin');
    }

    abort(401, 'Unauthorized');
}

function AddUser(Request $req)
{
    $newuser = new newuser;
    $newuser->name=$req->name;
    $newuser->email=$req->email;
    $newuser->password=$req->password;
    $newuser->save();
    return redirect()->intended('/');

}
    
function  PartnerCheck(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');
    $user = partner::where('email', $email, 'password',$password);
    if ($password == 'admin123') {
        return redirect()->intended('/partner');
    }

    abort(401, 'Unauthorized');
}


function  ownerCheck(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');
    $user = owner_login::where('email', $email, 'password',$password);
    if ($password == 'admin123') {
        return redirect()->intended('/owner');
    }

    abort(401, 'Unauthorized');
}

}
