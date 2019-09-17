<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Hash;
use App\Message;

class UserController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
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
    public function store(Request $request) {
        
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
    public function update_profile(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:55',
            'email' => 'required|string|email|max:255',
            //'userName' => 'required|alpha_num|max:30',
            //'gender' => 'required',
            'phone' => 'required',
            'street_line' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required|max:6',
        ]);
        $id = Auth::User()->id;
        try {
            $user = User::findOrFail($id);
            $msg = 'Profile Updated successfully';
            $user->name = $request->name;
            //$user->username = $request->userName;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->gender = $request->gender_m_f;
            $user->street_line = $request->street_line;
            $user->city = $request->city;
            $user->state = $request->state;
            $user->country = $request->country;
            $user->postal_code = $request->postal_code;
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'PNG', 'gif', 'bmp'];
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
            $user->save();
            return Redirect::back()->with('success', $msg);
        } catch (Exception $ex) {
            return Redirect::back()->with('error', 'Some error occur!! Please try again.');
        }
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_profile() {
        $id = Auth::User()->id;
        $countries = DB::table('countries')->where('country_id', '=', 'US')
                ->orderBy('country_name', 'ASC')->get();
        $states = DB::table('states')->where('country_id', '=', 'US')->get();
        $user = User::select('id', 'name', 'username', 'email', 'phone', 'gender',
                'avatar', 'street_line', 'city', 'state', 'country', 'postal_code')->findOrFail($id);
        return view('user.edit_profile', compact('user', 'countries', 'states'));
    }

    /**
     * Show the form for changing existing password.
     *
     * @return \Illuminate\Http\Response
     */
    public function change_pwd() {
        return view('user.change_password');
    }

    /**
     * Update the changed password in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_changed_pwd(Request $request) {
        $this->validate($request, [
            'current-password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $request_data = $request->All();
        $current_password = Auth::User()->password;

        if (Hash::check($request_data['current-password'], $current_password)) {
            $user_id = Auth::User()->id;
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request_data['password']);
            $obj_user->save();
            return redirect()->route('edit_profile')->with("success", "Password changed successfully!");
        } else {
            return redirect()->back()->with("error", "Please enter correct current password");
        }
    }

    public function rate_your_seller() {
        $id = Auth::User()->id;
        //DB::enableQueryLog();
        $my_sellers = DB::table('orders')
                ->leftJoin('order_items', 'orders.id', '=', 'order_items.order_id')
                ->leftJoin('books', 'books.id', '=', 'order_items.book_id')
                ->leftJoin('users', 'users.id', '=', 'books.user_id')
                ->leftJoin('seller_rating', 'seller_rating.seller_id', '=', 'books.user_id')
                //->leftJoin('messages', 'seller_rating.seller_id', '=', 'messages.sender_id')
                ->select('users.id', 'users.name', 'seller_rating.rating', 'seller_rating.buyer_id')
                ->where('orders.user_id', $id)
				->where(function($query) use ($id)
				{
					$query->where('seller_rating.buyer_id', '=', $id)
						  ->orWhereNull('seller_rating.buyer_id');
				})
                //->where('messages.receiver_id', $id)
                ->groupBy('users.id')
                ->groupBy('users.name')
                ->groupBy('seller_rating.rating')
				->groupBy('seller_rating.buyer_id')
                //->groupBy('messages.read_msg')
                ->get();
				//dd(DB::getQueryLog());
        $msg_read_status = DB::table('orders')
                ->leftJoin('order_items', 'orders.id', '=', 'order_items.order_id')
                ->leftJoin('books', 'books.id', '=', 'order_items.book_id')
                ->leftJoin('messages', 'books.user_id', '=', 'messages.sender_id')
                ->select('books.user_id', 'messages.read_msg')
                ->where('orders.user_id', $id)
                ->where('messages.receiver_id', $id)
                ->where('messages.read_msg', 1)
                ->groupBy('books.user_id')
                ->groupBy('messages.read_msg')
                ->get()->toArray();
        $msg_read_status = array_column($msg_read_status, 'read_msg', 'user_id');
        //dd(DB::getQueryLog());
        return view('user.seller_rating', compact('my_sellers', 'msg_read_status'));
    }

    public function post_rating(Request $request) {
        $buyer_id = Auth::User()->id;
        $seller_id = $request->seller_id;
        try {
            DB::table('seller_rating')
            ->updateOrInsert(
                ['seller_id' => $seller_id, 'buyer_id' => $buyer_id],
                ['rating' => $request->user_rating, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]
            );
            return response()->json(['success' => 'Thanks for your valuable rating.']);
        } catch (Exception $ex) {
            return response()->json(['error' => 'Some error occur!! Please try again.']);
        }
    }
	// messaging
	public function messaging($seller_id){
        $buyer_id = Auth::User()->id;
        $messages =  Message::select(DB::raw("messages.message, messages.created_at,
                    (CASE WHEN (users.id = " . $buyer_id .") THEN 'Me' ELSE users.name END) as sender_name"))
                //->select('messages.message', 'IF("users.id" = ' . $buyer_id .', "Me", "Ano")','users.name as sender_name')
                    ->leftJoin('users', 'users.id', '=', 'messages.sender_id')
                    ->where(function($query) use ($buyer_id, $seller_id) {
                        $query->where('sender_id', $buyer_id);
                        $query->where('receiver_id', $seller_id);
                    })
                    ->orWhere(function($query) use ($buyer_id, $seller_id) {
                        $query->where('sender_id', $seller_id);
                        $query->where('receiver_id', $buyer_id);
                    })
                    ->get();
        $change_read_status = Message::where('sender_id', '=', $seller_id)->where('receiver_id', '=', $buyer_id)->update(array('read_msg' => 0));
        self::set_session_for_read_status();
        return view('user.messages', compact('messages', 'seller_id'));
    }
    
    public function post_message(Request $request, $seller_id){
        $this->validate($request, [
            'message' => 'required',
        ]);
        $buyer_id = Auth::User()->id;
        try {
            $message = new Message;
            $message->message = $request->message;
            $message->sender_id = $buyer_id;
            $message->receiver_id = $seller_id;
            $message->save();
            return redirect()->back()->with("success",
                    "Your message has been sent successfully.");
        } catch (Exception $ex) {
            return redirect()->back()->with("error",
                    "Some error occur!! Please try again.");
        }
    }
    
    public function my_buyer_list() {
        $seller_id = Auth::User()->id;
        $my_buyers = DB::table('orders')->leftJoin('order_items', 'orders.id', '=', 'order_items.order_id')
                ->leftJoin('books', 'books.id', '=', 'order_items.book_id')
                ->leftJoin('users', 'users.id', '=', 'orders.user_id')
                //->leftJoin('messages', 'messages.sender_id', '=', 'orders.user_id')
                ->select('users.id', 'users.name')
                ->where('books.user_id', $seller_id)
                ->groupBy('users.id')
                ->groupBy('users.name')
                //->groupBy('users.name')
                ->get();
        $msg_read_status = DB::table('orders')->leftJoin('order_items', 'orders.id', '=', 'order_items.order_id')
                ->leftJoin('books', 'books.id', '=', 'order_items.book_id')
                ->leftJoin('messages', 'messages.sender_id', '=', 'orders.user_id')
                ->select('orders.user_id', 'messages.read_msg')
                ->where('books.user_id', $seller_id)
                ->where('messages.receiver_id', $seller_id)
                ->where('messages.read_msg', 1)
                ->groupBy('orders.user_id')
                ->groupBy('messages.read_msg')
                ->get()->toArray();
        $msg_read_status = array_column($msg_read_status, 'read_msg', 'user_id');
        return view('user.my_buyer_list', compact('my_buyers', 'msg_read_status'));
    }
    
    public static function set_session_for_read_status(){
        $id = Auth::User()->id;
        $seller_read_status = DB::table('orders')
                ->leftJoin('order_items', 'orders.id', '=', 'order_items.order_id')
                ->leftJoin('books', 'books.id', '=', 'order_items.book_id')
                ->leftJoin('messages', 'books.user_id', '=', 'messages.sender_id')
                ->select('books.user_id', 'messages.read_msg')
                ->where('orders.user_id', $id)
                ->where('messages.receiver_id', $id)
                ->where('messages.read_msg', 1)
                ->groupBy('books.user_id')
                ->groupBy('messages.read_msg')
                ->get();
        if($seller_read_status->isNotEmpty()){
            session()->put('seller_msg', 1);
        } else {
            session()->put('seller_msg', 0);
        }
        $buyer_read_status = DB::table('orders')->leftJoin('order_items', 'orders.id', '=', 'order_items.order_id')
                ->leftJoin('books', 'books.id', '=', 'order_items.book_id')
                ->leftJoin('messages', 'messages.sender_id', '=', 'orders.user_id')
                ->select('orders.user_id', 'messages.read_msg')
                ->where('books.user_id', $id)
                ->where('messages.receiver_id', $id)
                ->where('messages.read_msg', 1)
                ->groupBy('orders.user_id')
                ->groupBy('messages.read_msg')
                ->get();
        if($buyer_read_status->isNotEmpty()){
            session()->put('buyer_msg', 1);
        }   else {
            session()->put('buyer_msg', 0);
        }
    }

}
