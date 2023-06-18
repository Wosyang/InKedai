<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Pembeli;
use Illuminate\Support\Facades\Auth;
use resources\views\Pembeli\login_pembeli;
use resources\views\Pembeli\register_pembeli;
use resources\views\Pembeli\homePembeli;
use resources\views\dashboard;

 
class PembeliController extends Controller
{
 
    public function index()
    {
        return view('pembeli.login_pembeli');
        
    }   
       
 
    public function authLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
      
    
        $credentials = $request->only('email', 'password');
        if (Auth::guard('pembelis')->attempt($credentials)) {
            return redirect('homePembeli')->withSuccess('Signed in');
        }

        return redirect("login_pembeli")->withSuccess('Login details are not valid');
    }
 
 
 
    public function registration()
    {
        return view('pembeli.register_pembeli');
    }
       
 
    public function authRegis(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:pembelis',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|min:6|same:password',
        ]);
            
        $data = $request->all();
        $check = $this->create($data);
          
        return redirect("login_pembeli")->withSuccess('You have signed-up');
    }
 
 
    public function create(array $data)
    {
      return Pembeli::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
     
 
    public function homePembeli()
    {
        if(Auth::check()){
            return view('pembeli.homePembeli');
        }
   
        return redirect("login_pembeli")->withSuccess('You are not allowed to access');
    }
     
 
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return Redirect('login_pembeli');
    }

    public function topup() {
   
        return view('pembeli.topup');
    }
}