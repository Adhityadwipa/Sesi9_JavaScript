<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript 03</title>
</head>
<body>
    <div id="artikel1">
       <h2> LE SSERAFIM "UNFORGIVEN" </h2>
       <h3> menggunakan ID </h3>
    </div>

    <hr>

    <div class="artikel2">
       <h2> NO-RETURN </h2>
       <h3>menggunakan class </h3>
    </div>

    <script>
        document.getElementById("artikel1").style.color= "red";

        const obj = document.getElementsByClassName("artikel2");
        obj[0].style.color = "blue";

        document.body.style.backgroundColor = "black";
    </script>
</body>
</html>