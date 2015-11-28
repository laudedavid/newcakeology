<?php

class Helper {
	public static function Display($layer,$findLayers){
        $Layers = Layer::all();
		$output = "";
        $cakeid=$_SESSION['cakeModelID'];
        //$layer-mao ni ang box nga gi buhat sa html
       // $category=$_SESSION['Category'];


        foreach($Layers as $layerss)
        {   
            if($layer=='choosebox')//ang pilianan
            {       	if($findLayers=='BaseLayer' && $layerss['BaseLayer']==1){
             		$output .= "\t\t\t<div id='" . $layerss["id"] . "'>" . '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="100" /> ' .
                    "</div>\n";}

                        elseif($findLayers=='Toppers' && $layerss['Toppers']==1){
                    $output .= "\t\t\t<div id='" . $layerss["id"] . "'>" . '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="100" /> ' .
                    "</div>\n";}
                     elseif($findLayers=='Borders' && $layerss['Borders']==1){
                    $output .= "\t\t\t<div id='" . $layerss["id"] . "'>" . '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="50" width="100" /> ' .
                    "</div>\n";}
                    elseif($findLayers=='Decoration' && $layerss['Decoration']==1){
                    $output .= "\t\t\t<div id='" . $layerss["id"] . "'>" . '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="50" width="50" /> ' .
                    "</div>\n";}

            }//ang gi pang drag drop
              elseif($findLayers=='BaseLayer')
                    {        //query ang cake model where kato gi pasa nga findLayer nako nga id sa cakemodel
                             $cakeModel = cakeModel::where('id','=',$cakeid)->get();
                            foreach($cakeModel as $model){
                                //gi query ang cake nya gi compare2 if unsai sud && gi tanaw unsa na box ang outputan
                                if($model['layer1']==$layerss["id"]&&$layer=='layer1'){

                             /*   $output .= "\t\t\t<div id='" . $layerss["id"] . "'>" . '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="100" /> ' .
                                "</div>\n";*/
                                
                                }
                                elseif($model['layer2']==$layerss["id"]&&$layer=='layer2'){
                                /*$output .= "\t\t\t<div id='" . $layerss["id"] . "'>" . '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="100" /> ' .
                                "</div>\n";*/
                                } 
                                elseif($model['layer3']==$layerss["id"]&&$layer=='layer3'){
                               /* $output .= "\t\t\t<div id='" . $layerss["id"] . "'>" . '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="100" /> ' .
                                "</div>\n";*/
                                }  
                            }        

                    }
                    elseif($findLayers=='Toppers')
                    {        //query ang cake model where kato gi pasa nga findLayer nako nga id sa cakemodel
                             $cakeModel = cakeModel::where('id','=',$cakeid)->get();
                            foreach($cakeModel as $model){
                                //gi query ang cake nya gi compare2 if unsai sud && gi tanaw unsa na box ang outputan
                                if($model['layer1topper']==$layerss["id"]&&$layer=='topper1'){

                               /* $output .= "\t\t\t<div id='" . $layerss["id"] . "'>" . '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="100" /> ' .
                                "</div>\n";*/
                                
                                }
                                elseif($model['layer2topper']==$layerss["id"]&&$layer=='topper2'){
                               /* $output .= "\t\t\t<div id='" . $layerss["id"] . "'>" . '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="100" /> ' .
                                "</div>\n";*/
                                } 
                                elseif($model['layer3topper']==$layerss["id"]&&$layer=='topper3'){
                               /* $output .= "\t\t\t<div id='" . $layerss["id"] . "'>" . '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="100" /> ' .
                                "</div>\n";*/
                                }  
                            }        

                    }
                        elseif($findLayers=='Borders')
                    {        //query ang cake model where kato gi pasa nga findLayer nako nga id sa cakemodel
                             $cakeModel = cakeModel::where('id','=',$cakeid)->get();
                            foreach($cakeModel as $model){
                                //gi query ang cake nya gi compare2 if unsai sud && gi tanaw unsa na box ang outputan
                                if($model['borderlayer1lower']==$layerss["id"]&&$layer=='borderlayer1lower'){

                               /* $output .= "\t\t\t<div id='" . $layerss["id"] . "'>" . '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="300" /> ' .
                                "</div>\n";*/
                                
                                }
                                elseif($model['borderlayer1upper']==$layerss["id"]&&$layer=='borderlayer1upper'){
                               /* $output .= "\t\t\t<div id='" . $layerss["id"] . "'>" . '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="300" /> ' .
                                "</div>\n";*/
                                }
                                 elseif($model['borderlayer2lower']==$layerss["id"]&&$layer=='borderlayer2lower'){
                               /* $output .= "\t\t\t<div id='" . $layerss["id"] . "'>" .'<center>'. '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="250" /> ' .'<center>'.
                                "</div>\n";*/
                                } 
                                 elseif($model['borderlayer2upper']==$layerss["id"]&&$layer=='borderlayer2upper'){
                                /*$output .= "\t\t\t<div id='" . $layerss["id"] . "'>" .'<center>'. '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="250" /> ' .'</center>'.
                                "</div>\n";*/
                                }
                                    elseif($model['borderlayer3lower']==$layerss["id"]&&$layer=='borderlayer3lower'){
                               /* $output .= "\t\t\t<div id='" . $layerss["id"] . "'>" .'<center>'. '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="200" /> ' .'<center>'.
                                "</div>\n";*/
                                } 
                                 elseif($model['borderlayer3upper']==$layerss["id"]&&$layer=='borderlayer3upper'){
                               /* $output .= "\t\t\t<div id='" . $layerss["id"] . "'>" .'<center>'. '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="200" /> ' .'</center>'.
                                "</div>\n";*/
                                } 
                             /*   elseif($model['layer3topper']==$layerss["id"]&&$layer=='topper3'){
                                $output .= "\t\t\t<div id='" . $layerss["id"] . "'>" . '<img src="'. URL::asset('img/upload/layers/'.$layerss['image']).'" height="100" width="100" /> ' .
                                "</div>\n";
                                }*/  
                            }        

                    }

        }

        return $output;
	}

    public static function ReturnImage($idtopper){
       
        $Layer = Layer::where('id','=',$idtopper)->get();
       
    if($Layer!=NULL)
    {   foreach($Layer as $Layers)
        {}return $Layers['image'];
             }else return $idtopper;
 
       

    }

}