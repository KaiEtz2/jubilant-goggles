<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON in HTML</title>
</head>
<body>
    <div id="jsonContainer"></div>
    <a href="javascript:generateJSON();" class="button">Test Button</a>
    <script>
        function generateJSON() {
            // Create a JSON object
            var jsonObject = {
                name: "John Doe",
                age: 30,
                city: "New York"
            };

            // Convert the JSON object to a string for display
            var jsonString = JSON.stringify(jsonObject, null, 2);

            // Display the JSON in an HTML element
            document.getElementById("jsonContainer").innerText = jsonString;
        }

        
    </script>
</body>
</html>
