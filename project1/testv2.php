<?php

?>

<!DOCTYPE html>
<?php include('templates/header.php') ?>
<a href="javascript:test();" class="button">Test Button</a>

<script>
  function test(){
  $(document).ready(function() {
     $.get("ajax.php", {action: "Test"} , function(data) {
                    alert("PHP function was called: " + data);
                }).fail(function(error) {
                    console.error('Error:', error);
                });
      });
    }
</script>

</body>
</html>