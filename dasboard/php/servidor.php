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
    $response=$oMysql->getColegios();
}else if($rq== 4){
    $response=$oMysql->getDatosGrafica();
}
else if($rq== 5){
    $response=$oMysql->getMasculino();
}
else if($rq== 6){
    $response=$oMysql->getFemenino();
}
else if($rq== 7){
    $response=$oMysql->getGraficaColegios();
}

echo $response;
