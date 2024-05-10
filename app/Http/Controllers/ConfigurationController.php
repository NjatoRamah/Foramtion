<?php

namespace App\Http\Controllers;
use App\Models\Configurations;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function index(){
        $allConfigurations = Configuration::latest()->paginate(10);
        return view('admin/page/config/index', compact('allConfigurations'));
    }
}
