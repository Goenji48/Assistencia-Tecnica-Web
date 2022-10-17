<?php

$url = "https://tccassistencia.herokuapp.com/";
        
function encode($url){
        $urlCripto = "?url=";
        $encode = base64_encode($url);
        $final = $url . $urlCripto . $encode;
        return $final;    
}        

?>