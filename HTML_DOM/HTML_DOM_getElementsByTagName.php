<!DOCTYPE html>
<html>
<body>

<p>An unordered list:</p>
<ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
</ul>

<p>Click the button to display the innerHTML of the second li element (index 1).</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementsByTagName("LI");
    document.getElementById("demo").innerHTML = x[1].innerHTML;
}
</script>

</body>
</html>


<?php 
 
//
// <li>Coffee</li>  0.index    1.element
 // <li>Tea</li>	1.index    2.element
 // <li>Milk</li>	2.index    3.element
//	butoan tıklandıgında index numarası 1 olan (yani ikinci element ) elementin içindeki yazıyı ekrana basar..
//
//
  
//HALİL_BARIM.


?>
