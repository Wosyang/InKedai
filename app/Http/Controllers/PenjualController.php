<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Penjual;
use Illuminate\Support\Facades\Auth;
use resources\views\Penjual\login_penjual;
use resources\views\Penjual\register_penjual;
use resources\views\Penjual\homePenjual;
use resources\views\dashboard;

 
class PenjualController extends Controller
{
 
    public function index()
    {
        return view('penjual.login_penjual');
    }   
 
    public function authLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
    
        $credentials = $request->only('email', 'password');
        if (Auth::guard('penjuals')->attempt($credentials)) {
            return redirect('homePenjual')->withSuccess('Signed in');
        }
   
        return redirect("login_penjual")->withSuccess('Login details are not valid');
    }
 
 
 
    public function registration()
    {
        return view('penjual.register_penjual');
    }
       
 
    public function authRegis(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:penjuals',
            'password' => 'required|min:6',
            'confirmpassword' => 'required|min:6|same:password',
        ]);
            
        $data = $request->all();
        $check = $this->create($data);
          
        return redirect("login_penjual")->withSuccess('You have signed-up');
    }
 
 
    public function create(array $data)
    {
      return Penjual::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
     
 
    public function homePenjual()
    {
        if(Auth::check()){
            return view('Penjual.homePenjual');
        }
   
        return redirect("login_penjual")->withSuccess('You are not allowed to access');
    }
     
 
    public function signOut() {
        Session::flush();
        Auth::logout();
   
        return Redirect('login_penjual');
    }

    public function menu(){
        return view('MenuPenjual.menu');
    }

    public function daftarPesanan(){
        return view('Penjual.daftarPesanan');
    }
}