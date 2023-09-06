<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $tasks = Task::where('user_id', '=', Auth::user()->id)->latest('id')->get();
        return view('users.index',compact('tasks'));
    }

    public function userProfile($id){
        $user = User::findOrFail($id);
        return view('users.profile', compact('user'));
    }

    public function profileUpdate(Request $request){
        $request->validate([
            'photo' => 'image|mimes:jpg,png,gif|max:5120',
            'surname' => 'required',
            'name' => 'required',
            'email' => 'required',
        ]);

        $id = Auth::user()->id;
        $data = User::find($id);

        $data->surname = $request->surname;
        $data->name = $request->name;
        $data->email = $request->email;
        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('assets/img/users/'.$data->photo)); //replace prvious photo in the folder
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('assets/img/users'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        return redirect()->back()->with('successmessage','User profile updated successfully');
    }

    public function userPasswordUpdate(Request $request){
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        //Matching password

        if(!Hash::check($request->current_password, Auth::user()->password)){
            return redirect()->back()->with('errormessage','Old Password does not match');
        }
        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return redirect()->back()->with('successmessage','Password Updated successfully');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
