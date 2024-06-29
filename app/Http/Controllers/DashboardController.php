<?php
namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Alternative;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $criteriaCount = Criteria::where('user_id', $userId)->count();
        $alternativesCount = Alternative::where('user_id', $userId)->count();

        return view('dashboard', compact('criteriaCount', 'alternativesCount'));
    }
}
