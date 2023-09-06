<?php
testfunc();
    function testfunc(){
        $arrResult = array('name' => 'John Doe', 'age' => '30', 'state' => 'CA');
        echo json_encode($arrResult);
    }

?>
