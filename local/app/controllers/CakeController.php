<?php

class CakeController extends BaseController {

  //DISPLAY OF THE CAKES  
    public function order($id){
       $rules = array(
        'message'   => 'required', 
            'date'    => 'required',
            
        );
        $validator = Validator::make(Input::all(), $rules);

      $date = date("Y-m-d", strtotime(Input::get('date')));
      $message = Input::get('message');

       $select = Cake::where('id', '=', $id)->get(); 
       $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
       $user = $user[0];
       $select = $select[0];
       $order = new Order;

        $buyersName = $user['name'];
        $buyersAddress = $user['address'];

        $sellerID = $select['userfbId'];
        $name = $select['name'];
        $price = $select['price'];
        $category = $select['category'];
        $description = $select['description'];
        $image=$select['image'];



        $order->sellerID=$sellerID;
        $order->name=$name;
        $order->price=$price;
        $order->category=$category;
        $order->description=$description;
        $order->buyersID=$_SESSION['userFbID'];
        $order->buyersName = $buyersName;
        $order->buyersAddress = $buyersAddress;
        $order->message = $message;
        $order->deliveryDate = $date;
        $order->image=$image;
        $order->imageLB=$select['imageLB'];
        $order->modelID=$select['modelID'];

        $order->save();

       return Redirect::back(); 
     
    }
    
    
  
  public function addCake()
  { 
    $_SESSION['cakeModelID']=0;
       $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
       $cakes = Cake::where('userFbId', '=', $_SESSION['userFbID'])->get(); 
       return View::make('addCake', ['user'=>$user,'cakes'=>$cakes]);
      //return "aw";
  }  

  public function orderTab()
  { 
        $_SESSION['cakeModelID']=0;
        $order = Order::where('buyersID','=',$_SESSION['userFbID'])->get();
        $maker = Order::where('sellerID','=',$_SESSION['userFbID'])->get();
        $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
       $seller = DB::SELECT(DB::RAW("SELECT distinct u.name, u.fbId, u.email, u.image  from user u, cake c where u.fbId = c.userFbId AND u.fbId != '" .$_SESSION["userFbID"]."'"));
       return View::make('order',['orders'=>$order,'seller'=>$seller,'user'=>$user,'makers'=>$maker]);
     
  }

  public function saveCake()
  {
      // validate
        $rules = array(
            'name'    => 'required',
            'price'   => 'required',
            'category' => 'required',
            'description'   => 'required', 
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('addCake')
                ->withErrors($validator);
        } else {
          //IMAGEUPLOAD
          $image = Input::file('image');
      if($image) {
        $upload_folder = '/img/upload/';
        $file_name = str_random(30). '.' . $image->getClientOriginalExtension();
        $image->move(public_path() . $upload_folder, $file_name);
      }
      ///

      // store
            $cake = new Cake;
            $cake->name = Input::get('name');
            $cake->price = Input::get('price');
            $cake->category = Input::get('category');
            $cake->description = Input::get('description');
            
            

            //$findUser = User::all();
            $findUser=$_SESSION['userFbID'];
            //$seller = Seller::orderBy('created_at', 'desc')->first();
            //$fbId = $seller['fbId'];
            $cake->userFbId = $findUser;

           
            //IMAGEUPLOAD
            if($image) $cake->image = $file_name;
            ///////
            $cake->save();

            // redirect
            Session::flash('message', 'Successfully created Product!');
            return Redirect::to('myaccount');
        }
  }
    public function editCake($id)
    {
      $edit = Cake::find($id); 
      $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
       
      return View::make('updateCake', ['edit'=>$edit,'user'=>$user]); 
    }

    public function updateCake()
    { 

       $inputDetails = Input::all();
         $rules = array(
            'name'    => 'required',
            'price'   => 'required',
            'category' => 'required',
            'description'   => 'required', 
        );
        $validation = Validator::make($inputDetails, $rules);
  

       if($validation->passes())  
       {
         $image = Input::file('image');
            if($image) {
                $upload_folder = '/img/upload/';
                $file_name = str_random(30). '.' . $image->getClientOriginalExtension();
                $image->move(public_path() . $upload_folder, $file_name);
            }
            
          $id = $inputDetails['id'];  
           $editCake = Cake::find($id);   

           $editCake->name = $inputDetails['name'];
           $editCake->price = $inputDetails['price'];
           $editCake->category = $inputDetails['category'];
           $editCake->description = $inputDetails['description'];

            if($image) $cake->image = $file_name;
           $editCake->save();


          return Redirect::to('myaccount');
        }
      else
        return Redirect::back()->withInput()->withErrors($validation);
              
    }
    public function delete($id)
    { 
        $cake = Cake::find($id);

        DB::table('cake')->where('id', '=', $cake['id'])->delete();
       
        $cake->delete();  
       return Redirect::back();
    }  

    public function cancelOrder($id)
    { 
        $order = Order::find($id);

        DB::table('order')->where('id', '=', $order['id'])->delete();
       
        $order->delete();  
       return Redirect::back();
    } 

    public function delivered($id)
    { 
        $order = Order::find($id);

      DB::table('order')->where('id', '=', $order['id'])->delete();
       
        $order->delete();  
       return Redirect::back();
    } 
     

  public function saveToppers()
  {
      // validate
        $rules = array(
            'name'    => 'required', 
            'category' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('addCake')
                ->withErrors($validator);
        } else {
          //IMAGEUPLOAD
          $image = Input::file('image');
      if($image) {
        $upload_folder = '/img/upload/';
        $file_name = str_random(30). '.' . $image->getClientOriginalExtension();
        $image->move(public_path() . $upload_folder, $file_name);
      }
      ///

      // store
            $toppers = new Toppers;
            $toppers->name = Input::get('name');
            $toppers->category = Input::get('category');
            
            $findUser=$_SESSION['userFbID'];
            $toppers->userId = $findUser;

           
            //IMAGEUPLOAD
            if($image) $toppers->image = $file_name;
            ///////
            $toppers->save();

            // redirect
            Session::flash('message', 'Successfully created Product!');
            return Redirect::back();
        }
  }
  public function saveDesign()
  {
      // validate
        $rules = array(
            'name'    => 'required', 
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('addCake')
                ->withErrors($validator);
        } else {
          //IMAGEUPLOAD
          $image = Input::file('image');
      if($image) {
        $upload_folder = '/img/upload/';
        $file_name = str_random(30). '.' . $image->getClientOriginalExtension();
        $image->move(public_path() . $upload_folder, $file_name);
      }
      ///

      // store
            $designs = new Designs;
            $designs->name = Input::get('name');
            
            $findUser=$_SESSION['userFbID'];
            $designs->userId = $findUser;

           
            //IMAGEUPLOAD
            if($image) $designs->image = $file_name;
            ///////
            $designs->save();

            // redirect
            Session::flash('message', 'Successfully created Product!');
            return Redirect::back();
        }
  }
    public function saveBorder()
  {
      // validate
        $rules = array(
            'name'    => 'required', 
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('addCake')
                ->withErrors($validator);
        } else {
          //IMAGEUPLOAD
          $image = Input::file('image');
      if($image) {
        $upload_folder = '/img/upload/';
        $file_name = str_random(30). '.' . $image->getClientOriginalExtension();
        $image->move(public_path() . $upload_folder, $file_name);
      }
      ///

      // store
            $borders = new Borders;
            $borders->name = Input::get('name');
            
            $findUser=$_SESSION['userFbID'];
            $borders->userId = $findUser;

           
            //IMAGEUPLOAD
            if($image) $borders->image = $file_name;
            ///////
            $borders->save();

            // redirect
            Session::flash('message', 'Successfully created Product!');
            return Redirect::back();
        }
  }


//CREATE MODEL CAKE
    public function createCake(){
      // return View::make('createCake');

    $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
    $layers = layer::all();
    $cake = new cakeModel;


          $sellers = DB::table('user')
            ->join('cake', 'cake.userfbId', '=','user.fbId')
            ->where('cake.userfbId','!=',$_SESSION['userFbID'])
            ->select('user.fbId','user.name') 
            ->distinct()  
            ->get();


    
    $cake->ownerID =$_SESSION['userFbID'];
    $cake->description ='';
    $cake->image ='';
    $cake->layer1 =0;
    $cake->layer2 =0;
    $cake->layer3 =0;
    $cake->layer1topper =0;
    $cake->layer2topper =0;
    $cake->layer3topper =0;
   
    $passFindLayer='BaseLayer';
    if( $_SESSION['cakeModelID']==NULL)
    {
      $cake->save();
    $_SESSION['cakeModelID'] = $cake->id;
    }
    

      

      $findCaketogenerateModel= cakeModel::find($_SESSION['cakeModelID']);
      //var_dump($findCaketogenerateModel);

      return View::make('createCake')
      ->with('layers', $layers)
      ->with('user',$user)
      ->with('sellers',$sellers)
      ->with('findCaketogenerateModel',$findCaketogenerateModel)
      ->with('passFindLayer',$passFindLayer);


    }

  public function updateCakeModel(){
      // return View::make('createCake');
 $_SESSION['fixOrder']=0;
    $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
    $layers = layer::all();


     $sellers = DB::table('user')
            ->join('cake', 'cake.userfbId', '=','user.fbId')
            ->where('cake.userfbId','!=',$_SESSION['userFbID'])
            ->select('user.fbId','user.name') 
            ->distinct()  
            ->get();
  
   

    $passFindLayer='BaseLayer';
   
    $_SESSION['SellCakeID']=Input::get('id');
    $cakeInfo = Cake::find($_SESSION['SellCakeID']); 
    $_SESSION['cakeModelID']=$cakeInfo['modelID'];  
    $findCaketogenerateModel= cakeModel::find($_SESSION['cakeModelID']);
    

    $textSell = 'Sell';

      return View::make('updateCakeModel')
      ->with('layers', $layers)
      ->with('user',$user)
      ->with('cakeInfo',$cakeInfo)
      ->with('sellers',$sellers)
      ->with('findCaketogenerateModel',$findCaketogenerateModel)
      ->with('passFindLayer',$passFindLayer)
         ->with('ItemTo',$textSell);


    }
      public function updateCakeModelOrder(){
      // return View::make('createCake');

    $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
    $layers = layer::all();


     $sellers = DB::table('user')
            ->join('cake', 'cake.userfbId', '=','user.fbId')
            ->where('cake.userfbId','!=',$_SESSION['userFbID'])
            ->select('user.fbId','user.name') 
            ->distinct()  
            ->get();
  
   

    $passFindLayer='BaseLayer';
   
    $_SESSION['SellCakeID']=Input::get('id');
    $cakeInfo = Cake::find($_SESSION['SellCakeID']); 
    $_SESSION['cakeModelID']=$cakeInfo['modelID'];  
    $findCaketogenerateModel= cakeModel::find($_SESSION['cakeModelID']);
    
 $_SESSION['fixOrder']=0;
$textBuy = 'Buy';

      return View::make('updateCakeModel')
      ->with('layers', $layers)
      ->with('user',$user)
      ->with('cakeInfo',$cakeInfo)
      ->with('sellers',$sellers)
      ->with('findCaketogenerateModel',$findCaketogenerateModel)
      ->with('passFindLayer',$passFindLayer)
       ->with('ItemTo',$textBuy);


    }

     public function editModeltoOrder(){
      // return View::make('createCake');

    $user = User::where('fbId','=',$_SESSION['userFbID'])->get();
    $layers = layer::all();


     $sellers = DB::table('user')
            ->join('cake', 'cake.userfbId', '=','user.fbId')
            ->where('cake.userfbId','!=',$_SESSION['userFbID'])
            ->select('user.fbId','user.name') 
            ->distinct()  
            ->get();
  
   

    $passFindLayer='BaseLayer';
   
    $_SESSION['SellCakeID']=Input::get('id');
    $cakeInfo = Cake::find($_SESSION['SellCakeID']); 
    $_SESSION['cakeModelID']=$cakeInfo['modelID'];  
    $originalModel= cakeModel::find($_SESSION['cakeModelID']);
    
    $newModelToEdit = new cakeModel;

     $newModelToEdit->ownerID=$_SESSION['userFbID'];
    $newModelToEdit->layer1 =$originalModel['layer1'];
    $newModelToEdit->colorlayer1=$originalModel['colorlayer1'];
    $newModelToEdit->layer2 =$originalModel['layer2'];
    $newModelToEdit->colorlayer2=$originalModel['colorlayer2'];
    $newModelToEdit->layer3 =$originalModel['layer3'];
    $newModelToEdit->colorlayer3=$originalModel['colorlayer3'];
    $newModelToEdit->layer1topper =$originalModel['layer1topper'];
    $newModelToEdit->layer2topper =$originalModel['layer2topper'];
    $newModelToEdit->layer3topper =$originalModel['layer3topper'];
    $newModelToEdit->borderlayer1lower=$originalModel['borderlayer1lower'];
    $newModelToEdit->borderlayer1upper=$originalModel['borderlayer1upper'];
    $newModelToEdit->borderlayer2lower=$originalModel['borderlayer2lower'];
    $newModelToEdit->borderlayer2upper=$originalModel['borderlayer2upper'];
    $newModelToEdit->borderlayer3lower=$originalModel['borderlayer3lower'];
    $newModelToEdit->borderlayer3upper=$originalModel['borderlayer3upper'];
    $newModelToEdit->save();
    $_SESSION['cakeModelID'] = $newModelToEdit->id;
    
     $findCaketogenerateModel= cakeModel::find($_SESSION['cakeModelID']);
     $_SESSION['fixOrder']=1;
      $textBuy = 'Buy';

      return View::make('updateCakeModel')
      ->with('layers', $layers)
      ->with('user',$user)
      ->with('cakeInfo',$cakeInfo)
      ->with('sellers',$sellers)
      ->with('findCaketogenerateModel',$findCaketogenerateModel)
      ->with('passFindLayer',$passFindLayer)
       ->with('ItemTo',$textBuy);


    }
 
    

   public function addItemCakeModel(){
      // return View::make('createCake');
    
     $id = Input::get("id");
     $box = Input::get("box");

      $Layers= layer::find($id);

      $findCaketogenerateModel = cakeModel::find($_SESSION['cakeModelID']);
     

  if($Layers['BaseLayer']==1||$Layers['BaseLayer']>0){
    //layers
      if($box=='layer1')
       { 
        $findCaketogenerateModel->layer1=$id;
        $findCaketogenerateModel->colorlayer1='#804000';
        $findCaketogenerateModel->save();      
       }
       elseif($box=='layer2')
       {
        $findCaketogenerateModel->layer2=$id;
        $findCaketogenerateModel->colorlayer2='#804000';
        $findCaketogenerateModel->save();
       
       }
         elseif($box=='layer3')
       {
        $findCaketogenerateModel->layer3=$id;
        $findCaketogenerateModel->colorlayer3='#804000';
        $findCaketogenerateModel->save();
        
       }
  } 
  elseif($Layers['Toppers']==1||$Layers['Toppers']>0){
      //toppers
      if($box=='topper1')
       { 
        $findCaketogenerateModel->layer1topper=$id;
        $findCaketogenerateModel->save();

       }
       elseif($box=='topper2')
       {
        $findCaketogenerateModel->layer2topper=$id;
        $findCaketogenerateModel->save();
      
    
       }
         elseif($box=='topper3')
       {
        $findCaketogenerateModel->layer3topper=$id;
        $findCaketogenerateModel->save();
        
      
       }
  }
    elseif($Layers['Borders']==1||$Layers['Borders']>0){
      //toppers
      if($box=='borderlayer1lower')
       { 
        $findCaketogenerateModel->borderlayer1lower=$id;
        $findCaketogenerateModel->save();

       }
       elseif($box=='borderlayer1upper')
       {
        $findCaketogenerateModel->borderlayer1upper=$id;
        $findCaketogenerateModel->save();    
       }
        elseif($box=='borderlayer2lower')
       {
        $findCaketogenerateModel->borderlayer2lower=$id;
        $findCaketogenerateModel->save();    
       }
        elseif($box=='borderlayer2upper')
       {
        $findCaketogenerateModel->borderlayer2upper=$id;
        $findCaketogenerateModel->save();    
       }
          elseif($box=='borderlayer3lower')
       {
        $findCaketogenerateModel->borderlayer3lower=$id;
        $findCaketogenerateModel->save();    
       }
        elseif($box=='borderlayer3upper')
       {
        $findCaketogenerateModel->borderlayer3upper=$id;
        $findCaketogenerateModel->save();    
       }
  }   
  elseif($Layers['Decoration']==1||$Layers['Decoration']>0){
      if($box=='decoration1stlayermidmid')
       { 
        $findCaketogenerateModel->decoration1stlayermidmid=$id;
        $findCaketogenerateModel->save();

       }
     }

    // $findCaketogenerateModel= cakeModel::find($_SESSION['cakeModelID']);
    
 return Redirect::back()->with('findCaketogenerateModel',$findCaketogenerateModel);
/*->with('findCaketogenerateModel',$findCaketogenerateModel)*/;
    }

     public function findLayer(){//menu box sa kilid , pili2 layer,toppers,borders,design
  //return ra gihapon sa user
    $user = User::where('fbId','=',$_SESSION['userFbID'])->get();  
      //katong model
      $findCaketogenerateModel= cakeModel::find($_SESSION['cakeModelID']);
     //g pasa ra ang sud sa select input nga menuboxlayer para adto sa helper ra bahigon
     $passFindLayer = Input::get('findLayer');
      
         $sellers = DB::table('user')
            ->join('cake', 'cake.userfbId', '=','user.fbId')
            ->select('user.fbId','user.name')
            ->distinct()   
            ->get();

    
    return View::make('createCake')
    ->with('user',$user)
     ->with('sellers',$sellers)
    ->with('findCaketogenerateModel',$findCaketogenerateModel)
    ->with('passFindLayer',$passFindLayer);

}
  public function findLayer2(){//menu box sa kilid , pili2 layer,toppers,borders,design
  //return ra gihapon sa user
    $user = User::where('fbId','=',$_SESSION['userFbID'])->get();  
      //katong model
      $findCaketogenerateModel= cakeModel::find($_SESSION['cakeModelID']);
     //g pasa ra ang sud sa select input nga menuboxlayer para adto sa helper ra bahigon
     $passFindLayer = Input::get('findLayer');
      
         $sellers = DB::table('user')
            ->join('cake', 'cake.userfbId', '=','user.fbId')
            ->select('user.fbId','user.name')
            ->distinct()   
            ->get();
          $cakeInfo = Cake::find($_SESSION['SellCakeID']);
     $textBuy = 'Buy';
 
    return View::make('updateCakeModel')
    ->with('cakeInfo',$cakeInfo)
    ->with('user',$user)
     ->with('sellers',$sellers)
    ->with('findCaketogenerateModel',$findCaketogenerateModel)
    ->with('passFindLayer',$passFindLayer)
    ->with('ItemTo',$textBuy);

}


   public function savePrintscreen(){
   $CakeModel = cakeModel::find($_SESSION['cakeModelID']);

   $actionTB=Input::get('cakeInfoAction');
   $category_string = implode(', ', Input::get('cake_category'));
   if($actionTB=='Buy')
   {

     $order = new Order;
     $order->name           = Input::get('cake_name');
     $order->price          = Input::get('cake_price');
     $order->category       = $category_string;
     $order->description    = Input::get('cake_description');
     $order->buyersID       = $_SESSION['userFbID'];
     $order->sellerID       = Input::get('seller');
     $order->imageLB          = Input::get('image');
     $order->modelID        = $_SESSION['cakeModelID'];

     $order->save();

   }
  elseif($actionTB=='Sell')
  {

      $Cake = new Cake;
     $Cake->name           = Input::get('cake_name');
     $Cake->price          = Input::get('cake_price');
     $Cake->category       = $category_string;
     $Cake->description    = Input::get('cake_description');
     $Cake->imageLB          = Input::get('image');
     $Cake->modelID        = $_SESSION['cakeModelID']; 
     $Cake->userfbId       = $_SESSION['userFbID'];
     $Cake->save();
  }
 $_SESSION['cakeModelID']=0; 
 /*return Redirect::to('myaccount');*/
 
}
   public function saveUpdateCakeModelAndPrintscreen(){
 

   $actionTB=Input::get('cakeInfoAction');
   
   if($actionTB=='Buy')
   {
     $order = Order::find($_SESSION['SellCakeID']);
     $order->name           = Input::get('cake_name');
     $order->price          = Input::get('cake_price');
     $order->category       = Input::get('cake_category');
     $order->description    = Input::get('cake_description');
     $order->buyersID       = $_SESSION['userFbID'];
     $order->sellerID       = Input::get('seller');
     $order->imageLB          = Input::get('image');
     $order->modelID        = $_SESSION['cakeModelID'];
     var_dump($order);
     $order->save();

   }
  elseif($actionTB=='Sell')
  {
     $Cake = Cake::find($_SESSION['SellCakeID']);
     $Cake->name           = Input::get('cake_name');
     $Cake->price          = Input::get('cake_price');
     $Cake->category       = Input::get('cake_category');
     $Cake->description    = Input::get('cake_description');
     $Cake->imageLB        = Input::get('image');
     $Cake->modelID        = $_SESSION['cakeModelID']; 
     $Cake->userfbId       = $_SESSION['userFbID'];
     $Cake->save();

  }
/* $_SESSION['fixOrder']=0; 
 $_SESSION['cakeModelID']=0; 
 $_SESSION['SellCakeID']=0;*/
 return Redirect::to('myaccount');
 
}

   public function addItemColor(){

    $color = Input::get('colorit');
    $layer = Input::get('layer');
    $edit = cakeModel::find($_SESSION['cakeModelID']);
   if($layer==1)
   {
    $edit->colorlayer1=$color;
    $edit->save();
    }
    elseif($layer==2)
    {$edit->colorlayer2=$color;
    $edit->save();}
    elseif($layer==3)
    {$edit->colorlayer3=$color;
    $edit->save();}
     $findCaketogenerateModel = cakeModel::find($_SESSION['cakeModelID']);
      return Redirect::back()->with('findCaketogenerateModel',$findCaketogenerateModel);

}

   public function actionTo(){
 $val = Input::get('val');
$model = cakeModel::find($_SESSION['cakeModelID']); 
$model->description=$val;
$model->save();


}
   public function deleteLayer(){
  $item = Input::get('data');
  $findModel = cakeModel::find($_SESSION['cakeModelID']);

  if($item=='layer1')
  {
    $findModel->description ='';
    $findModel->image ='';
    $findModel->layer1 =0;
    $findModel->colorlayer1='';
    $findModel->layer2 =0;
    $findModel->colorlayer2='';
    $findModel->layer3 =0;
    $findModel->colorlayer3='';
    $findModel->layer1topper =0;
    $findModel->layer2topper =0;
    $findModel->layer3topper =0;
    $findModel->borderlayer1lower='';
    $findModel->borderlayer1upper='';
    $findModel->borderlayer2lower='';
    $findModel->borderlayer2upper='';
    $findModel->borderlayer3lower='';
    $findModel->borderlayer3upper='';
    $findModel->save();
  }
    elseif($item=='layer2')
  {


    $findModel->layer2 =0;
    $findModel->colorlayer2='';
    $findModel->layer3 =0;
    $findModel->colorlayer3='';
    $findModel->layer2topper =0;
    $findModel->layer3topper =0;
    $findModel->borderlayer2lower='';
    $findModel->borderlayer2upper='';
    $findModel->borderlayer3lower='';
    $findModel->borderlayer3upper='';
    $findModel->save();
  }

      elseif($item=='layer3')
  {


   
    $findModel->layer3 =0;
    $findModel->colorlayer3='';
    $findModel->layer3topper =0;
    $findModel->borderlayer3lower='';
    $findModel->borderlayer3upper='';
    $findModel->save();
  }
        elseif($item=='layer1topper')
  {

      $findModel->layer1topper ='';
      $findModel->save();
   
  }

      elseif($item=='layer2topper')
  {

      $findModel->layer2topper ='';
      $findModel->save();
   
  }

        elseif($item=='layer3topper')
  {

      $findModel->layer3topper ='';
      $findModel->save();
   
  }
          elseif($item=='borderlayer1lower')
  {

      $findModel->borderlayer1lower ='';
      $findModel->save();
   
  }
          elseif($item=='borderlayer1upper')
  {

      $findModel->borderlayer1upper ='';
      $findModel->save();
   
  }
          elseif($item=='borderlayer2lower')
  {

      $findModel->borderlayer2lower ='';
      $findModel->save();
   
  }
          elseif($item=='borderlayer2upper')
  {

      $findModel->borderlayer2upper ='';
      $findModel->save();
   
  }
          elseif($item=='borderlayer3lower')
  {

      $findModel->borderlayer3lower ='';
      $findModel->save();
   
  }
          elseif($item=='borderlayer3upper')
  {

      $findModel->borderlayer3upper ='';
      $findModel->save();
   
  }



}


   public function fuck(){
  return Redirect::to('/'); 
}

    
     




     
}

 

?>