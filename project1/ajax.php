<?php
namespace SB\Marketplace\Vault;
//Form validation
$strAction = $_REQUEST['action'];

switch ($strAction) {

    case 'Test':
        Test();
        break;

    case 'UserLogin':
        userLogin();
        break;

    case 'SetSessionVar':
        setSessionVar();
        break;

    case 'LookupItem':
        lookupItem();
        break;
}
function Test(){
    
    $result = 'Hello Walrus!';
    $arrResult = array('success' => true, 'message' => 'success', 'results' => $result);
    echo json_encode($arrResult);
    //echo...
}
function userLogin(){
    //credentials 
}
function setSessionVar(){
    //set session 
}
function lookupItem(){
    //item
}
?>
