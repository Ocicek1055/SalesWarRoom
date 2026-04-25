<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Contractor;
use App\Models\SalesActivity;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $totalResidences = Project::sum('number_of_residences');
        $totalContractors = Contractor::count();
        $todaySalesActivities = SalesActivity::whereDate('activity_date', Carbon::today())->count();
        $activeProjects = Project::where('end_date', '>=', Carbon::today())->orWhereNull('end_date')->count();

        return view('welcome', compact('totalResidences', 'totalContractors', 'todaySalesActivities', 'activeProjects'));
    }
}
