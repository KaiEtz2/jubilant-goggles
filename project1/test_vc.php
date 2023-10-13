<?php
//break point
?>

<!DOCTYPE html>
<html> 
<?php include('templates/header.php') ?>
<a href="javascript:test();" class="button">Test Button</a>
<script>
    function test()
    {
        $('.loader').css('display','flex');
        jQuery.ajax({
            url: 'ajax.php',
            dataType: 'json',
            data: ({
                action:'Test'
            }),
            success: function(objData, strStatus, jqXHR ) {
                console.log(objData);
                if(objData.success == true)
                {
                    $('.loader').css('display','none');
                    alert(objData.results);
                }
            },
            error: function(objData, strStatus, jqXHR) { console.log(objData);}
        });
    }
</script>
</head>
</body>
</html>
