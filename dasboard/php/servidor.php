<?php
include './mysql.php';
$oMysql = new MySQL();
$response="";
$rq=$_POST['rq'];

if($rq== 1){
    $response=$oMysql->getRegistros();
}
else if($rq== 2){
    $response=$oMysql->getEdades();
}
else if($rq== 3){
    $response=$oMysql->getComentarios();
}else if($rq== 4){
    $response=$oMysql->getDatosGrafica();
}

echo $response;
