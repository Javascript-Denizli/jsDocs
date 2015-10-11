<!DOCTYPE html>
<html>
<body>

<p>Assign 5 to x, and display the value of the comparison (x == 8):</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x = 5;
    document.getElementById("demo").innerHTML = (x == 8);
}
</script>
<?php
//değişkene bağlı olarak eşitlik sağlanmadığı durumda ekrana eşitliğin sağlanmadığını söyleyip "false" yazdırır
?>
</body>
</html>
