<!DOCTYPE html>
<html>
<body>

<h2 class="example">A heading with class="example"</h2>
<p class="example">A paragraph with class="example".</p> 

<p>Click the button to add a background color to the first element in the document with class="example" (index 0).</p>

<button onclick="myFunction()">Try it</button>

<p><strong>Note:</strong> The querySelectorAll() method is not supported in Internet Explorer 8 and earlier versions.</p>

<script>
function myFunction() {
    var x = document.querySelectorAll(".example");
    x[0].style.backgroundColor = "red";
}
</script>

</body>


<?php 
 

 //butona basıldığında class adı example olan bütün elementlerin arkaplan rengini red yapar..
 //
 //
 //
 //
   
//HALİL_BARIM.


?>
