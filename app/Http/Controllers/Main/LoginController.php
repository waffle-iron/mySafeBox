<?php

namespace mySafebox\Http\Controllers\Main;

use Illuminate\Http\Request;

use mySafebox\Http\Requests;
use mySafebox\Http\Controllers\Controller;

use Auth;
use Hash;
use NewCrypt;

use mySafebox\Models\Login;

class LoginController extends Controller
{
   /**
	 * Create a new authentication controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logins = Auth::user()->logins()->get();
        return view('subviews.logins')
            ->with('logins', $logins );
    }

	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subviews.forms.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ( ! Hash::check( $request->input('account_password'), $request->user()->password) ) {
            $item = $request->input('name');
            $message = "could not be created, your password for mySafebox does not match.";

            return redirect('/logins')
                ->with('error', $message)
                ->with('item', $item);
        }

        NewCrypt::setKey(
            $request->input('account_password')
        );

        $encrypted = NewCrypt::encrypt(
            $request->input('password')
        );

    	$login = new Login(
            $request->only(
                'name',
                'username',
                'comment'
            )
        );
    	$login->user_id = $request->user()->id;
        $login->password = $encrypted;
    	$login->save();

        $item = $login->name;
        $message = "has been added.";

        return redirect('/logins')
            ->with('message', $message)
            ->with('item', $item);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request )
    {
        $login = Login::findOrFail( $request->input('id') );

        try {
            NewCrypt::setKey(
                $request->input('account_password')
            );
            $decrypted = NewCrypt::decrypt(
                $login->password
            );
        } catch (DecryptException $e) {
            return abort(403, 'Unauthorized action.');
        }

        $login->password = $decrypted;

        return $login;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ( ! Hash::check( $request->input('account_password'), $request->user()->password) ) {
            $item = $request->input('name');
            $message = "could not be modified, your password for mySafebox does not match.";

            return redirect('/logins')
                ->with('error', $message)
                ->with('item', $item);
        }

        $login = Login::findOrFail( $id );

        NewCrypt::setKey(
            $request->input('account_password')
        );

        $encrypted = NewCrypt::encrypt(
            $request->input('password')
        );
        
        $login->name = $request->input('name');
        $login->username = $request->input('username');
        $login->password = $encrypted;
        $login->comment = $request->input('comment');
        $login->save();

        $item = $login->name;
        $message = "has been modified.";

        return redirect('/logins')
            ->with('message', $message)
            ->with('item', $item);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $login = Login::findOrFail( $id );
        $login->delete();

        $item = $login->name;
        $message = "has been delete.";

        return redirect('/logins')
            ->with('message', $message)
            ->with('item', $item);
    }
}
