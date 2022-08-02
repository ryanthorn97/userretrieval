<?php

require_once 'vendor/autoload.php';

//base url for API
$baseurl = "https://reqres.in/api/users";

function performGetRequest($url){
    $http = curl_init();

    //set url and options
    curl_setopt($http, CURLOPT_URL, $url);
    curl_setopt($http, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($http, CURLOPT_TIMEOUT,10);

    // $response contains the output string
    $response = curl_exec($http);

    // $response contains the HTTP response code
    $status = curl_getinfo($http, CURLINFO_HTTP_CODE);

    curl_close($http);

    // check if request was succesful
    if($status == 200){
        return $response;
    } else{
        return false;
    }

}

function getUserByID($userID, $url){
    // build url
    $buildurl = $url . "/" . $userID;

    // perform get request
    $response = performGetRequest($buildurl);

    // if request was succesful return user
    if($response != false){  
        $data = json_decode($response, true);
        $user = json_encode(new \Ryan\Userretrieval\User($data), JSON_PRETTY_PRINT); 
        return $user;
    } else{
        return false;
    }
    
}

function getUserList($page, $url){
    // build url
    $buildurl = $url . "?page=" . $page;

    // perform get request
    $response = performGetRequest($buildurl);

    // if request was succesful return user
    if($response != false){  
        $data = json_decode($response, true);
        $userlist = json_encode(new \Ryan\Userretrieval\User($data), JSON_PRETTY_PRINT); 
        return $userlist;
    } else{
        return false;
    }
}

?>
