<!DOCTYPE html>
<html>
<body>

<p>Click the button to create, and add, a comment to the HTML document.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var c = document.createComment("My personal comments");
    document.body.appendChild(c);
    var x = document.getElementById("demo");
    x.innerHTML = "A comment was added to this document, but as you know, comments are invisible.";
}
</script>

</body>
</html>

<?php 

 
// yukarıdaki kod bloğunda bir yorum satırı eklenmiş fakat gizlenmiş butona tıklayın bu yorum satırı görünür 
//hale geliyor fakat çalışma mantıgını anlamadım......
//ARASTIRILACAK.......
//
//
  
//HALİL_BARIM.


?>
