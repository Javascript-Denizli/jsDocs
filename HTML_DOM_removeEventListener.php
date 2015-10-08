<!DOCTYPE html>
<html>
<body>

<p>This document has an onmousemove event handler that displays a random number every time you move your mouse in this document.</p>

<p>Click the button to remove the event handler.</p>

<button onclick="removeHandler()">Try it</button>

<p><strong>Note:</strong> The addEventListener() and removeEventListener() methods are not supported in Internet Explorer 8 and earlier versions.</p>

<p id="demo"></p>

<script>
document.addEventListener("mousemove", myFunction);

function myFunction() {
    document.getElementById("demo").innerHTML = Math.random();
}

function removeHandler() {
    document.removeEventListener("mousemove", myFunction);
}
</script>

</body>
</html>

<?php 
 
//butona basıldığında mouse hareket ettikçe üretilen random sayı eventini durdurur
//temizler kaldırır vs......
//
//
//
  
//HALİL_BARIM.


?>
