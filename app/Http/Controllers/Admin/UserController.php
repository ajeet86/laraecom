<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Hash;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id = null) {
        try{
            if(isset($id)){
                if ($request->password != '') {
                    $this->validate($request, [
                    'name' => 'required|string|max:55',
                    'email' => 'required|string|email|max:255',
                    'password' => 'required|min:8|same:confirmpassword',
					'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg,bmp|max:2048'
                ]);
                }else{
                    $this->validate($request, [
                    'name' => 'required|string|max:55',
                    'email' => 'required|string|email|max:255',
					'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg,bmp|max:2048'
                ]);
                }
                
                $user = User::findOrFail($id);
                $msg = 'User updated successfully';
            } else {
                $this->validate($request, [
                    'name' => 'required|string|max:55',
                    'email' => 'required|string|email|max:255',
					'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg,bmp|max:2048'
                    //'userName' => 'required|alpha_num|max:30',
                    
                ]);
                $user = new User;
                $msg = 'User added successfully';
            }
            $user->name = $request->name;
            //$user->username = $request->userName;
            $user->email = $request->email;
            if ($request->password != '') {
                 $user->password = Hash::make($request->password);
            }
           
            $user->phone = $request->phone;
            $user->gender = $request->gender;
            $allowedExtensions = ['jpeg', 'jpg', 'png', 'PNG', 'gif', 'svg', 'bmp'];
            // upload user avatar
            if ($request->hasFile('avatar')) {
                $destinationPath = public_path('/images/users');
                if (isset($id) && file_exists($destinationPath . '/' . $user->avatar)) {
                    @unlink($destinationPath . '/' . $user->avatar);
                }
                $file = $request->file('avatar');
                $extension = $file->getClientOriginalExtension();
                $fileName = rand(10000, 99999) . '.' . $extension;
                if (in_array($extension, $allowedExtensions)) {

                    $file->move($destinationPath, $fileName);
                }
                $user->avatar = $fileName;
            }
            $user->email_verified_at = \Carbon\Carbon::now();
            $user->save();
            return Redirect::to('/admin/user_list')->with('success', $msg);
        } catch (Exception $ex) {
            return Redirect::back()->with('error', 'Some error occur!! Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        try {
            $user = User::findOrFail($id);
            $destinationPath = public_path('/images/users');
            if (file_exists($destinationPath . '/' . $user->avatar)) {
                @unlink($destinationPath . '/' . $user->avatar);
            }
            $user->delete();
            return Redirect::back()->with('success', 'User Deleted Successfully');
        } catch (Exception $ex) {
            return Redirect::back()->with('error', 'Some error occur!! Please try again.');
        }
    }

    /**
     * List all the registered user on admin Panel
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function user_list() {
        return view('admin.user_list');
    }

    /**
     * Fetch all the users from database table.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetchUsers() {

        $start = Input::get('iDisplayStart');      // Offset
        $length = Input::get('iDisplayLength');     // Limit
        $sSearch = Input::get('sSearch');            // Search string
        $col = Input::get('iSortCol_0');         // Column number for sorting
        $sortType = Input::get('sSortDir_0');         // Sort type
        $where = '';

        // Datatable column number to table column name mapping
        $arr = array(
            0 => 't1.id',
            1 => 't1.name',
            //2 => 't1.username',
            2 => 't1.email',
            3 => 't1.phone',
            4 => 't1.gender',
            5 => 't1.created_at',
        );

        // Map the sorting column index to the column name
        $sortBy = $arr[$col];
        if ($sortBy == '') {
            $sortBy = "t1.id";
        }

        if ($sSearch != '') {
			$sSearch = addslashes($sSearch);
            $where = " WHERE t1.name LIKE ('%" . $sSearch . "%') OR t1.username LIKE ('%" . $sSearch . "%') OR t1.email LIKE ('%" . $sSearch . "%') OR t1.phone LIKE ('%" . $sSearch . "%')";
        }
        // Get the records after applying the datatable filters
        $users = DB::select(
                        DB::raw("SELECT t1.id, t1.name, t1.username, t1.email, t1.phone, t1.gender, t1.created_at FROM users t1 " .
                                $where . " ORDER BY " . $sortBy . " " . $sortType . " LIMIT " . $start . ", " . $length)
        );

        // Get the total count without any condition to maintian the pagination
        $userCount = DB::select(
                        DB::raw("SELECT t1.id, t1.name, t1.username, t1.email, t1.phone, t1.gender, t1.created_at FROM users t1 " .
                                $where)
        );

        // Assign it to the datatable pagination variable
        $iTotal = count($userCount);

        $response = array(
            'iTotalRecords' => $iTotal,
            'iTotalDisplayRecords' => $iTotal,
            'aaData' => array()
        );

        $k = 0;
        if (count($users) > 0) {
            foreach ($users as $user) {
                $response['aaData'][$k] = array(
                    0 => $k + 1,
                    1 => $user->name,
                    //2 => $user->username,
                    2 => $user->email,
                    3 => $user->phone,
                    4 => $user->gender,
                    5 => date('d-m-Y', strtotime($user->created_at)),
                    6 => '<a href="user/' . $user->id . '" '
                    . 'class="delete hidden-xs hidden-sm" title="Edit">'
                    . '<i class="fa fa-pencil text-warning"></i></a> &nbsp;'
                    . ' <a href="user/delete/' . $user->id . '"'
                    . ' class="delete hidden-xs hidden-sm" title="Delete"'
                    . 'onclick=\'return confirm("Are you sure you want to delete this user?")\'>'
                    . '<i class="fa fa-trash text-danger"></i></a>',
                );
                $k++;
            }
        }
        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_add_user($id = null) {
        if(isset($id)){
        $user = User::select('id', 'name', 'username', 'email', 'phone',
                'gender', 'avatar')->findOrFail($id);
        return view('admin.add_user', compact('user'));
        } else {
            return view('admin.add_user');
        }
    }

}
