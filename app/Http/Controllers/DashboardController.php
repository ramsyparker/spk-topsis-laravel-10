<?php
namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Alternative;

class DashboardController extends Controller
{
    public function index()
    {
        $criteriaCount = Criteria::count();
        $alternativesCount = Alternative::count();
        
        return view('dashboard', compact('criteriaCount', 'alternativesCount'));
    }
}
