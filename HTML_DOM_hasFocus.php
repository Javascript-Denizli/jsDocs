<!DOCTYPE html>
<html>
<body>

<p>Click anywhere in the document (the right frame) to get focus. If you click outside the document, it will lose focus.</p>

<p id="demo"></p>

<script>
setInterval("myFunction()", 1);

function myFunction() {
    var x = document.getElementById("demo");
    if (document.hasFocus()) {
        x.innerHTML = "The document has focus.";
    } else {
        x.innerHTML = "The document DOES NOT have focus.";
    }
}
</script>

</body>
</html>



<?php 
 
//sayfaya tıklandığında x.innerHTML = "The document has focus."; çalışır
//sayfanın dışında başka bir yere tıklandığında  x.innerHTML = "The document DOES NOT have focus."; çalışır
//
//
//
  
//HALİL_BARIM.


?>
