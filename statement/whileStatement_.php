<!DOCTYPE html>
<html>
<body>

<p>Click the button to loop through the indices of an array, in ascending order.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var cars = ["BMW", "Volvo", "Saab", "Ford"];
    var text = "";
    var i = 0;
    while (i < cars.length) {
        text += cars[i] + "<br>";
        i++;
    }
    document.getElementById("demo").innerHTML = text;
}
</script>
<?php
//While döngüsünde kod tanımlandığı şart doğrulandığı sürece çalıştırılır
?>,
</body>
</html>