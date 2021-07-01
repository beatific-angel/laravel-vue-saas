<?php

namespace CreatyDev\Http\Account\Controllers;

use Illuminate\Http\Request;
use CreatyDev\App\Traits\UploadTrait;
use CreatyDev\Domain\Users\Models\User;
use CreatyDev\App\Controllers\Controller;
use CreatyDev\Domain\Account\Requests\ProfileStoreRequest;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    use UploadTrait;

    /**
     * Show the user profile view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.profile.index');
    }

    /**
     * Store user's profile details in storage.
     *
     * @param ProfileStoreRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileStoreRequest $request)
    {
        //update user
        $request->user()->update($request->only(['first_name', 'last_name', 'username', 'email', 'phone']));

        // Get current user
        $user = User::findOrFail(auth()->user()->id);

        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {
            $image = $request->file('profile_image');
            $name = str::slug($request->input('name')).'_'.time();
            $folder = '/uploads/images/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public', $name);
            $user->profile_image = $filePath;
        }
        $user->save();
        return back()->withSuccess('Profile updated successfully.');
    }
}
