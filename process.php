<?php
require('db.php');
function genRandomStr(){
    $str="abcdefghijklmnopqrstuvwxyz".time();
    $str=str_shuffle($str);
    $str=str_split($str,1);
    $short="";
    for($i=0;$i<4;$i++){
        $short.=$str[rand(0,count($str)-1)];
    }
    return $short;
}
function shortLink($longurl){ 
    $db=$GLOBALS['db'];
    $response=array();
    if($longurl==''){
    $response['msg']="Long url is blank";
    $response['status']=false;
    return json_encode($response);
    }
    if(!filter_var($longurl,FILTER_VALIDATE_URL)){
        $response['msg']="Url is not valid!";
        $response['status']=false;
        return json_encode($response);
        }

        $short=genRandomStr();
        $validshort=false;
        while(!$validshort){
            $query="SELECT * from urltable WHERE short_url='$short'";  
            $run =mysqli_query($db,$query);
            $urls=mysqli_fetch_all($run);
            if(count($urls)>0){
               $short=genRandomStr();
            }
            else{
                $query2="INSERT INTO urltable(long_url,short_url) VALUES('$longurl','$short')";
              if ( mysqli_query($db,$query2)){
                $response['msg']="UrlShorted";
                $response['status']=true;
                $response['short']=$short;
                return json_encode($response);
              }
            }
        }
    
   
}

if(isset($_POST['longurl'])){
    $longurl=mysqli_real_escape_string($db,$_POST['longurl']);
    $v=shortLink($longurl);
    echo $v;
}

?>