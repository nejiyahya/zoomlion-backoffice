<?php
    function getCategory($slug=null){
        $path = '../data/category.json';
        $jsonString = file_get_contents($path);
        $jsonData = json_decode($jsonString, true);

        if(!empty($slug)){
            foreach($jsonData as $key => $value){
                if($value['slug']==$slug){
                    return $value;
                    die();
                }
            }
        }
        else{
            return $jsonData;
        }
    }

    function getProduct($category = null){
        $path = '../data/product.json';
        $jsonString = file_get_contents($path);
        $jsonData = json_decode($jsonString, true);

        if(!empty($category)){
            $ret = [];
            foreach($jsonData as $key => $value){
                if($value['category_id']==$category){
                    $ret[]=$value;
                }
            }
            return $ret;
        }
        else{
            return $jsonData;
        }
    }

    function getDetail($product = null){
        $path = '../data/detail.json';
        $jsonString = file_get_contents($path);
        $jsonData = json_decode($jsonString, true);

        if(!empty($product)){
            foreach($jsonData as $key => $value){
                if($value['product_id']==$product){
                    return $value;
                    die();
                }
            }
        }
        else{
            return $jsonData;
        }
    }

    function updateUser($data){
        try{
            $path = '../data/user.json';
            $jsonString = json_encode($data, JSON_PRETTY_PRINT);
            $fp = fopen($path, 'w');
            fwrite($fp, $jsonString);
            fclose($fp);
            return true;
        }catch(Exception $e){
            return false;
        }
    }
