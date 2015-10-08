<!DOCTYPE html>
<html>
<head>
<style>
.democlass {
    color: red;
}
</style>
</head>
<body>

<h1>Hello World</h1>

<p>Click the button to create a "class" attribute with the value "democlass" and insert it to the H1 element above.</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
    var h1 = document.getElementsByTagName("H1")[0];
    var att = document.createAttribute("class");
    att.value = "democlass";
    h1.setAttributeNode(att);
}
</script>

</body>
</html>


<?php 

 
//H1 tagına sahip tüm elementlerin (bir den fazla olabilir) 
//üzerinde değişiklik yapar ama tam olarak nasıl yapıldığıni bilmiyorum
//ARASTIRILCAK
//
//
  
//HALİL_BARIM.


?>
