<?php 

namespace App\Http\Controllers\Register;

use Illuminate\Http\Request;
use App\Http\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('backend.registers.index');
    }
    public function create()
    {
        return view('backend.registers.create');
    }
    public function()
    {
        return view('backend.registers.show');
    }
}
