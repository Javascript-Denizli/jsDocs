<!DOCTYPE html>
<html>
<body>

<div class="example">First div element with class="example".</div>

<div class="example">Second div element with class="example".</div>

<p>Click the button to change the text of the first div element with class="example" (index 0).</p>

<button onclick="myFunction()">Try it</button>

<p><strong>Note:</strong> The getElementsByClassName() method is not supported in Internet Explorer 8 and earlier versions.</p>

<script>
function myFunction() {
    var x = document.getElementsByClassName("example");
    x[0].innerHTML = "Hello World!";
}
</script>

</body>
</html>


<?php 
 
//class name'i "example" olan elementlerin hepsini bir array içine atar 
//x[0] ıncı dizisinde olan elementin (first elementy) içine Hello world yazar... 
//
//
//
  
//HALİL_BARIM.


?>
