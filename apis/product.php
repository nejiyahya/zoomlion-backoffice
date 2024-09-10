<?php
include_once('../common/include.php');
include_once('../common/encipher.php');

if(isAllow()){
    $slug = $_GET['category'];
    $category = getCategory($slug);

    sendResponse(200,getProduct($category['id']),'Success');
}
else{
    sendResponse(400,$search,'Unauthorized');
}