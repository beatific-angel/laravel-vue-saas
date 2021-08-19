<?php

namespace CreatyDev\Http\Admin\Controllers\User;

use CreatyDev\Domain\Users\Models\Permission;
use Illuminate\Http\Request;
use CreatyDev\App\Controllers\Controller;

class PermissionStatusController extends Controller
{
    /**
     * Update the specified resource status in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \CreatyDev\Domain\Users\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function toggleStatus(Request $request, Permission $permission)
    {
        $permission->fill([
            'usable' => $permission->usable == true ? false : true
        ]);

        $permission->save();

        return back()->withSuccess("{$permission->name} status updated successfully.");
    }
}
