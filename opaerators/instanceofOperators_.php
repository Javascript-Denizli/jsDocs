<!DOCTYPE html>
<html>
<body>

<p>The instanceof operator returns true if the specified object is an instance of the specified object.</p>

<p id="demo"></p>

<script>
var cars = ["Saab", "Volvo", "BMW"];

document.getElementById("demo").innerHTML =
    (cars instanceof Array) + "<br>" + 
    (cars instanceof Object) + "<br>" +
    (cars instanceof String) + "<br>" +
    (cars instanceof Number);
</script>
<?php
//Eğer belirtilen nesne belirtildiği grubun içerisindeyse doğru yazdırılır değilse yanlış yazdırılır.
?>
</body>
</html>