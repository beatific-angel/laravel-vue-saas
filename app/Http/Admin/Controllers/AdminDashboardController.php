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
        $today_users = User::whereDate('created_at', today())->count();
        $yesterday_users = User::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = User::whereDate('created_at', today()->subDays(2))->count();
        // Billing
        $today_billings = DB::table('subscriptions')->whereDate('created_at', today())->count();
        $yesterday_billings = DB::table('subscriptions')->whereDate('created_at', today()->subDays(1))->count();
        $billings_2_days_ago = DB::table('subscriptions')->whereDate('created_at', today()->subDays(2))->count();
        
        // Visitors log graph
        $today_visitors = DB::table('visitlogs')->whereDate('updated_at', today())->count();
        $yesterday_visitors = DB::table('visitlogs')->whereDate('updated_at', today()->subDays(1))->count();
        $visitors_2_days_ago = DB::table('visitlogs')->whereDate('updated_at', today()->subDays(2))->count();

        $chart = new UsersChart;
        $chart->labels(['2 days ago', 'Yesterday', 'Today']);
        $chart->dataset('User Registration', 'line', [$users_2_days_ago, $yesterday_users, $today_users]);

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
        // Get all the users
        $user_count = User::all()->count();
        $newTicket = Ticket::where('status', 'Open')->count();
        $unique_visitors = DB::table('visitlogs')->get()->count();
        $total_subscription = DB::table('subscriptions')->get()->count();
        return ['users' => $user_count, 
                'newTicket' => $newTicket, 
                'unique_visitors' => $unique_visitors,
                'total_subscription' => $total_subscription
                ];

    }

    public function visitlog(){
        $visitlogs = VisitLog::all();
        // dd($visitlogs);
        return view('admin.visitlog.index', compact('visitlogs'));
    }
}
