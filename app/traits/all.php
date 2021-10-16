<?php

namespace app\traits;

trait all
{
//#################### get locale value from api-route ####################
public function get_cureny_lang(){
    return app()->getlocale();
}

//################### start rturn error function ###########################
public function return_error($err_num , $msg){
    return response() -> json([
        'status'        => false,
        'errorNumber'   =>$err_num,
        'massage'       =>$msg

    ]);
}
//################### start rturn error function ###########################
public function return_succes($err_num='5000' , $msg){
    return response() -> json([
        'status'        => true,
        'errorNumber'   =>$err_num,
        'massage'       =>$msg

    ]);


}
// ######################## return data ###################
public function return_data($key,$value,$msg='',$err_num=''){
    return response() -> json([
        'status'        => true,
        'errorNumber'   =>$err_num,
        'massage'       =>$msg,
        $key => $value

    ]);
}
// ##############



}// end file
