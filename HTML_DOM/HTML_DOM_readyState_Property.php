<!DOCTYPE html>
<html>
<body>

<p>Click the button to display the loading status of the current document.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.readyState;
    document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html>


<?php 
 
//sayfa yüklendiğinde asagidaki kod çalışır
//var x = document.readyState;
//document.getElementById("demo").innerHTML = x;

//ekrana complete yazar
//
  
//HALİL_BARIM.


?>
