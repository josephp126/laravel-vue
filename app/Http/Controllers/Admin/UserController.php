<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Jobs\SaveImageJob;
use App\Jobs\SaveAddressJob;
use App\Models\User;
use App\Models\State;
use Illuminate\Http\Request;

class UserController extends Controller {
    /**
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */

    public function index( Request $request ) {
        $users = User::paginate( $request->get( 'perPage', 50 ) );

        return view( 'admin.users.index', compact( 'users' ) );
    }

    /**
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */

    public function create( Request $request ) {
        $states = State::all( ['id', 'name'] );
        return view( 'admin.users.create', compact( 'states' ) );
    }

    /**
    * @param \App\Http\Requests\Admin\UserStoreRequest $request
    * @return \Illuminate\Http\Response
    */

    public function store( UserStoreRequest $request ) {
        $user = User::create( $request->validated() );

        if ( $request['is_active'] == null ) {
            $user->delete();
        }

        $this->dispatch( new SaveImageJob( $user, $request->file( 'file' ) ) );
        $this->dispatch( new SaveAddressJob( $user, $request['address'], $request['zip'], $request['state'], $request['city'] ) );

        $request->session()->flash( 'user.id', $user->id );

        return redirect()->route( 'admin.user.index' );
    }

    /**
    * @param \Illuminate\Http\Request $request
    * @param \App\Models\User $user
    * @return \Illuminate\Http\Response
    */

    public function show( Request $request, User $user ) {
        return view( 'admin.users.show', compact( 'user' ) );
    }

    /**
    * @param \Illuminate\Http\Request $request
    * @param \App\Models\User $user
    * @return \Illuminate\Http\Response
    */

    public function edit( Request $request, User $user ) {

        $address = $user->address;
        $user['address'] = $address->address ?? '';
        $user['zip'] = $address->zip ?? '';
        $user['state'] = $address->state_id ?? '';
        $user['city'] = $address->city ?? '';

        $states = State::all( ['id', 'name'] );

        return view( 'admin.users.edit', compact( ['user', 'states'] ) );
    }

    /**
    * @param \App\Http\Requests\Admin\UserUpdateRequest $request
    * @param \App\Models\User $user
    * @return \Illuminate\Http\Response
    */

    public function update( UserUpdateRequest $request, User $user ) {
        if ( $request->get( 'action' ) == 'remove-logo' ) {
            $user->image()->delete();

            return redirect()->route( 'admin.user.index' );
        }

        $user->update( ['first_name' => $request->first_name, 'last_name' => $request->last_name, 'username' => $request->username,
        'email' => $request->email, 'date_joined' => $request->date_joined, 'phone' => $request->phone] );

        if ( $request->password != null ) {
            $user->update( ['password' => $request->password] );
        }

        if ( $request['is_active'] == null ) {
            $user->delete();
        }

        $this->dispatch( new SaveImageJob( $user, $request->file( 'file' ) ) );
        $this->dispatch( new SaveAddressJob( $user, $request['address'], $request['zip'], $request['state'], $request['city'] ) );

        $request->session()->flash( 'user.id', $user->id );

        return redirect()->route( 'admin.user.index' );
    }

    /**
    * @param \Illuminate\Http\Request $request
    * @param \App\Models\User $user
    * @return \Illuminate\Http\Response
    */

    public function destroy( Request $request, User $user ) {
        $user->delete();

        return redirect()->route( 'admin.user.index' );
    }
}
