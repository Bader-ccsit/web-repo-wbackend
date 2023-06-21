

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>





<body>
    <h1>Share your opinion about us:</h1>
    <form action="connection.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
    <br><br>
        <label for="rate">Rate Us from {0 - 5}</label>
        <input type="range" min="0" max="5" step="0.5" name="rate" id="rate" required>
        <p>Value: <span id="demo"></span></p>
    <br><br>
        <label for="comment">Help Us Improve:</label>
        <input type="text" name="comment">
        <br>
    <input type="submit">
    </form>

    <script>
        
    var slider = document.getElementById("rate");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
    output.innerHTML = this.value;
    }

    </script>
</body>
</html>