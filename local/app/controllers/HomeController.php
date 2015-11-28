<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function home(){
        $_SESSION['cakeModelID'] =0;
		$user = User::where('fbId','=',$_SESSION['userFbID'])->get();
		return View::make('home')->with('user',$user);
	}

    public function location(){
        $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
        if( $user[0]->address == "" && $user[0]->country == "")
            return View::make('location')->with('user',$user);
        else
            return Redirect::to('/home');
    }

    public function locationSave()
    {
        $rules = array(
            'country'    => 'required',
            'address'   => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator);
        } 
        else {
            // store
            $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
            $user = User::find($user[0]->id);


            $user->country = Input::get('country');
            $user->address = Input::get('address');
            
            $user->save();

            return Redirect::to('/home');
        }
    
    }
	// public function listOfOrderedCakes()
 //    {   $_SESSION['cakeModelID']=0;
 //        $order = Order::where('buyersID','=',$_SESSION['userFbID'])->get();
 //         $maker = Order::where('sellerID','=',$_SESSION['userFbID'])->get();
 //        $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
 //        $cakes = Cake::where('userFbId', '=', $_SESSION['userFbID'])->get(); 
 //        return View::make('myaccount', ['orders'=>$order,'user'=>$user,'cakes'=>$cakes,'makers'=>$maker]);
 //    }

    public function listOfCakes()
    {   $_SESSION['cakeModelID'] =0;
        $cakes = Cake::where('userFbId','!=',$_SESSION['userFbID'])->get(); 
        $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
        return View::make('products', ['cakes'=>$cakes,'user'=>$user]);
    }
    // public function listOfSellers(){
    //     $_SESSION['cakeModelID']=0;
    //     //$ = User::where('fbId','!=',$_SESSION['userFbID'])->get();

    //      $seller = DB::table('user')
    //         ->join('cake', 'cake.userfbId', '=','user.fbId')
    //         ->select('user.fbId','user.name','user.image','user.email')
    //         ->distinct()   
    //         ->get();
    //     //$seller = DB::SELECT(DB::RAW("SELECT u.name, u.fbId, u.email, u.image from user u, cake c where u.fbId = c.userFbId AND u.fbId != '" .$_SESSION["userFbID"]."'"));
    //     $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
    //     return View::make('singlepageSeller',['seller'=>$seller,'user'=>$user]);
    // }
    public function viewProducts($fbId){
        $_SESSION['cakeModelID']=0;
    	$view = Cake::where('userFbId','=',$fbId)->get();
    	$user = User::where('fbId','=',$_SESSION['userFbID'])->get();
    	//dd($view);
    	//$viewCake = Cake::where('');
    	//$view = Seller::where('sellerID','=',$id);
    	return View::make('viewProducts',['views'=>$view,'user'=>$user]);
    }
    
}
