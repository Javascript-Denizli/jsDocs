<!DOCTYPE html>
<html>
<body>

<p>Click the button to get the value of the onclick attribute of the button element.</p>

<button onclick="myFunction()">Try it</button>

<p><strong>Note:</strong> Internet Explorer 8 and earlier does not support the getNamedItem method.</p>

<p id="demo"></p>

<script>
function myFunction() {
    var a = document.getElementsByTagName("BUTTON")[0];
    var x = a.attributes.getNamedItem("onclick").value;  
    document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html>



<?php 
 
//button tagname sahip elementin onclick niteliğinin değerini yazdırır.
//
//
//
//
  
//HALİL_BARIM.


?>
