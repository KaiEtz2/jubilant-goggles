<?php
    //echo "Hello World <br>"; 
    //first comment
  // echo testfunc(); 

?>

<!DOCTYPE html>
<html> 
    <?php include('templates/header.php') ?>
    <button id="callPhpFunction">Call PHP Function</button>
    <script>
        $(document).ready(function() {
            $("#callPhpFunction").click(function() {
                $.get("testfunc.php", function(data) {
                    alert("PHP function was called: " + data);
                }).fail(function(error) {
                    console.error('Error:', error);
                });
            });
        });
    </script>
</body>
</html>
