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
            // Get image file
            $image = $request->file('profile_image');
            // Make a image name based on user name and current timestamp
            $name = str::slug($request->input('name')).'_'.time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $user->profile_image = $filePath;
        }
        // Persist user record to database
        $user->save();
        //redirect with success
        return back()->withSuccess('Profile updated successfully.');
    }
}
