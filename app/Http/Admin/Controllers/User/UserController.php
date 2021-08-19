<?php

namespace CreatyDev\Http\Admin\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use CreatyDev\Domain\Users\Models\User;
use CreatyDev\App\Controllers\Controller;

class UserController extends Controller
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
        $this->authorize('create', User::class);

        $users = User::filter($request)->paginate();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', User::class);
        return view('admin.users.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', User::class);
        // dd($request);
        // $this->validate($request,[
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'username' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'password' => 'required'
        // ]);        
        $user = new User([
            'first_name' => $request->input('firts_name'),
            'last_name' => $request->input('last_name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'activated' => 1,
            'password' => Hash::make($request->input('password')),
        ]);
        // dd($request);
        $user->save();

        return redirect()->back()->with("status", "Your user has been created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \CreatyDev\Domain\Users\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \CreatyDev\Domain\Users\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update', User::class);

        $user = User::findOrFail($id);

        return view('admin.users.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \CreatyDev\Domain\Users\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('update', User::class);

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->first_name = $request->input('first_name') ;
        $user->last_name = $request->input('last_name') ;
        $user->username = $request->input('username') ;
        $user->email = $request->input('email') ;
        $user->phone = $request->input('phone') ;
        $user->save();


        return redirect()->back()->with("status", "User has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \CreatyDev\Domain\Users\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('delete', $user);
    }
}
