<!DOCTYPE html>
<html>
<body>

First Name: <input name="fname" type="text" value="Michael"><br>
First Name: <input name="fname" type="text" value="Doug">

<p>Click the button to get the tag name of the first element in the document that has a name attribute with the value "fname".</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementsByName("fname")[0].tagName;
    document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html>


<?php 
 
//yukarıdaki kod blogunda 
//name="fname" olan elementleri bir array içine alır 0. elementin tagName 'ini 
//id si demo olanın içine yazar......
//
//
  
//HALİL_BARIM.


?>
