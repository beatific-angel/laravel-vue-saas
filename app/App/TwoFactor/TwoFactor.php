<?php
/**
 * Created by PhpStorm.
 * User: CreatyDev
 * Date: 3/9/2018
 * Time: 2:58 PM
 */

namespace CreatyDev\App\TwoFactor;

use CreatyDev\Domain\Users\Models\User;

interface TwoFactor
{
    /**
     * Registers a user.
     *
     * @param User $user
     * @return mixed
     */
    public function register(User $user);

    /**
     * Validates user's token.
     *
     * @param User $user
     * @param $token
     * @return mixed
     */
    public function validateToken(User $user, $token);

    /**
     * Removes user from the 'auth provider' app.
     *
     * @param User $user
     * @return mixed
     */
    public function delete(User $user);
}