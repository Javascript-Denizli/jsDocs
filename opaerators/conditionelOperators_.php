<!DOCTYPE html>
<html>
<body>

<p>Input your age and click the button:</p>

<input id="age" value="18">

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var age, voteable;
    age = document.getElementById("age").value;
    voteable = (age < 18) ? "Too young":"Old enough";
    document.getElementById("demo").innerHTML = voteable + " to vote.";
}
</script>
<?php
//Koşul operatorü bir değişken durumuna göre bir değer atar
?>
</body>
</html>
