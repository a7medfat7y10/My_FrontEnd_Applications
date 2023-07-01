<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\Rule;


use App\User;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //by getRouteKeyName in the User Model we edited using $user instead of $id
    public function show(User $user)
    {
        //
        // return $user;

        return view('profiles.show',[
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->get()
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // //in case we didnot use policies
        // if($user->id != auth()->user()->id) {
        //     abort(404);
        // }

        $this->authorize('edit', $user);

        return view('profiles.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        //
        $this->authorize('edit', $user);

        $attributes = request()->validate([
            'username' => [
                'string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)
            ],
            'name' => ['string', 'required', 'max:255'],
            'avatar' => ['file'],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
        ]);

        $password = request('password');

        $attributes['password'] = bcrypt($password);

        //it uploads to the avatar to the storage folder in a folder named avatars
        //and returns the path of the avatar to save in the avatar column in db
        //avatars folder will be auto created in storage/app
        //we have to set in .env FILESYSTEM_DRIVER = public to store the avatars folder in public in the apps in storage
        //then we have to make php artisan storage:link for the structyre to be public/storage/avatars/photo.jpg
        if(request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('avatars');
        }



        $user->update($attributes);

        return redirect('/profiles' . '/' . $user->username);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
