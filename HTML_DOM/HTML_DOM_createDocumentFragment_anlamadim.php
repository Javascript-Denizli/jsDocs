<!DOCTYPE html>
<html>
<body>

<p>Click the button to make changes to a list item, using the createDocumentFragment method, then appending the list item as the last child of the list.</p>

<ul><li>Coffee</li><li>Tea</li></ul>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
    var d = document.createDocumentFragment();
    d.appendChild(document.getElementsByTagName("LI")[0]);
    d.childNodes[0].childNodes[0].nodeValue = "Milk";
    document.getElementsByTagName("UL")[0].appendChild(d);
}
</script>

</body>
</html>


<?php 
 
//anlamadım.......
//ARASTIRILCAK...
//
//
//
  
//HALİL_BARIM.


?>
