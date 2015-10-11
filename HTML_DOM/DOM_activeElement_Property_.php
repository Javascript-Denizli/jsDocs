<!DOCTYPE html>
<html>
<body onclick="myFunction()">

<p>Click anywhere in the document to display the active element.</p>
<input type="text" value="An input field">
<button>A Button</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.activeElement.tagName;
    document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html>


<?php 
 

 // yukarıdaki fonksiyon    
 // bize tıklanılan öğenin hangi tipte(tag) oldugunu 
 // document.getElementById("demo").innerHTML = x;
 // ile id si demo olan öğenin içine yazdırır...
 //
 //
  //HALİL BARIM
   

?>
