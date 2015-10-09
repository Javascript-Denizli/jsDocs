<!DOCTYPE html>
<html>
<body>

<p id="demo">Click the button to find out if the first attribute in this P element is an ID attribute</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
    var x = document.getElementById("demo");
    x.innerHTML = x.attributes[0].isId;
}
</script>

<p><strong>Note:</strong> The isId property is not supported in any of the major browsers.</p>

</body>
</html>



<?php 
 
//demo id li elementin ilk niteliğinin id olup olmadığını kontrol eder 
//fakat her ne hikmettense artık hiç bir tarayıcıda çalışmamaktadır 
//GENEL KÜLTÜR OLARAK BİLİN YETER.... :)
//
//
  
//HALİL_BARIM.


?>
