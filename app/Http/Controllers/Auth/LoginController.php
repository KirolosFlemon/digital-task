<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * login user
     */
    public function login(StoreLoginRequest $request)
    {
        if (auth()->attempt($request->toArray())) {
            //generate the token for the user
            $user_login_token = auth()->user()->createToken('degital')->accessToken;
            //now return this token on success login attempt
            return response()->json(['token' => $user_login_token], 200);
        } else {
            //wrong login credentials, return, user not authorised to our system, return error code 401
            return response()->json(['error' => 'UnAuthorised Access'], 401);
        }
    }

    /**
     * returns User Login details
     */
    public function userLogin()
    {
        return response()->json(['data' => auth()->user()], 200);
    }

    /**
     * returns Specific User details
     */
    public function specificUser(User $user)
    {
        return response()->json(['data' => $user]);
    }


    /**
     * returns All User details
     */
    public function allUsers()
    {
        $user = User::get()->all();
        return response()->json(['data' => $user]);
    }

    /**
     * Update User details
     */
    public function update(UpdateUserRequest $request)
    {
        $user = User::find(Auth()->user()->id);
        $user->update($request->validated());
        return response()->json([
            'Message' => 'User Updated Successfully',
            'data' => $user,
        ]);
    }

    /**
     * Destroy User details
     */
    public function destroy(User $user)
    {
        //returns All User  details
        $user->delete();
        return response()->json([
            'Message' => 'User deleted Successfully',
        ]);
    }
}
