<?php
include_once('../common/include.php');
include_once('../common/encipher.php');

if(isAllow()){
    $product = $_GET['product'];
    
    sendResponse(200,getDetail($product),'Success');
}
else{
    sendResponse(400,$search,'Unauthorized');
}