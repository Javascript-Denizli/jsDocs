<!DOCTYPE html>
<html>
<head>
<style>
.example {
    color: red;
    padding: 5px;
    width: 150px;
    font-size: 15px;
}
</style>
</head>
<body>

<p>Click the button to get the name of the button element's first attribute.</p>

<button onclick="myFunction()" class="example">Try it</button>

<p>In this example, the name of the first attribute is "onclick", and the second is "class".</p>

<p><strong>Note:</strong> In Internet Explorer 8 and earlier, the attributes property will return a collection of all possible attributes for the element, and will, in this example, display the name of a different attribute.</p>

<p id="demo"></p>

<script>
function myFunction() {
    var a = document.getElementsByTagName("BUTTON")[0];
    var x = a.attributes.item(0).name;  
    document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html>


<?php 
 
//buton elementinin ilk niteliği yazar 
//
//
//
//
  
//HALİL_BARIM.


?>
