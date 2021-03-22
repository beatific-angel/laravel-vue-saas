<?php

namespace CreatyDev\Http\Admin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use CreatyDev\Charts\UsersChart;
use CreatyDev\Domain\Users\Models\User;
use CreatyDev\App\Controllers\Controller;
use Sarfraznawaz2005\VisitLog\Facades\VisitLog;
use CreatyDev\Domain\Ticket\Models\Ticket;

class AdminDashboardController extends Controller
{
    /**
     * Display admin dashboard view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        
        $chart->dataset('User Subscription', 'line', [$billings_2_days_ago, $yesterday_billings, $today_billings])->options([
            'color' => '#ff0000',
            'backgroundColor'=> 'rgba(240, 127, 110, 0.3)',
        ]);

        $chart->dataset('Visitors', 'line', [$visitors_2_days_ago, $yesterday_visitors, $today_visitors])->options([
            // 'color' => '#ff0000',
            'backgroundColor'=> 'rgba(890, 111, 10, 0.3)',
        ]);

        return view('admin.dashboard.index', compact('chart','user_count','newTicket'));
    }

    public function statistics(){
       

    }

    public function visitlog(){
        $visitlogs = VisitLog::all();
        // dd($visitlogs);
        return view('admin.visitlog.index', compact('visitlogs'));
    }
}
