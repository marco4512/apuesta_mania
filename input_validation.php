<?php
function input_validation($input){
    $White_list_of_characters=['@','!','¡','.','-','_'];
    $Black_list_of_chatacters=['<','>',"'",'%', '(', ')', '&', '+','\'',"'","\""];
    $type_of_encoding=mb_detect_encoding($input);
    $input_validado='';
    if($type_of_encoding=='ASCII'){
        $input= utf8_encode($input);
        if (gettype($input == 'string')){
            $range =  30;
            if(strlen($input)<= $range ){
                foreach (str_split($input) as $fila){
                    if(!in_array($fila, $Black_list_of_chatacters)){
                        $input_validado=$input_validado.$fila;
                    }else{
                        $input_validado='';
                    }
                }
                if(strlen($input_validado)==strlen($input)){
                    return $input_validado;
                }
                else
                {
                    //echo("No valido");
                    return false;
                }
            }
            else{
                 //echo ('fuera de rango');
                return false;
            }
        }
        else{
            ///echo ("No string");
            return false;
        }
    }else{
        //echo ("No ASCII");
        return false;
    }

}
