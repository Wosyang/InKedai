<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Pembeli;
use App\Models\Penjual;
use Illuminate\Support\Facades\Auth;
use resources\views\Pembeli\login_pembeli;
use resources\views\Penjual\login_penjual;
use resources\views\dashboard;

 
class LoginController extends Controller
{
 
    public function index()
    {
        return view('login');
    }   
}