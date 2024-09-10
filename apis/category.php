<?php
include_once('../common/include.php');
include_once('../common/encipher.php');

if(isAllow()){
    sendResponse(200,getCategory(),'Success');
}
else{
    sendResponse(400,$search,'Unauthorized');
}