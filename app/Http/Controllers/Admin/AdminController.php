<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;

class AdminController extends Controller
{
    //
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $user = auth()->user();

       
        $contacts = $user->contacts()->paginate(5); 

        return view("auth.admin.index",compact("user","contacts"));
    }




    public function store(Request $request)
    {   
        $user = User::find($request->only(['user_id']));       

       $user[0]->contacts()->create( $request->only(['number']));

       return redirect()->to("/user");
        
      
        
    }

    public function listContacts()
    {
       $contacts = $this->user()->contacts; 

       return $contacts;
    }
}
