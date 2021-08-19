<?php

namespace CreatyDev\Http\Admin\Controllers\Annoucement;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use CreatyDev\Domain\Users\Models\User;
use CreatyDev\App\Controllers\Controller;
use Illuminate\Foundation\Console\Presets\Vue;

use CreatyDev\Domain\Notifications\Annoucement;

class AnnoucementController extends Controller
{
        
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Request $request)
    {
        
        
    }

    public function create(){
        return View('admin.annoucement.create');
    }

    public function store(Request $request){
        $message = $request->all();
        $users = User::all();
        Notification::send($users, new Annoucement($message));

        return redirect()->back()->with("status", "Your notification sent successfully.");

    }


}
