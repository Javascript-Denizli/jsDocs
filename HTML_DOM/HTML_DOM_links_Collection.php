<!DOCTYPE html>
<html>
<body>

<img src ="planets.gif" width="145" height="126" alt="Planets" usemap ="#planetmap">

<map name="planetmap">
  <area shape="rect" coords="0,0,82,126" href="sun.htm" alt="Sun">
  <area shape="circle" coords="90,58,3" href="mercur.htm" alt="Mercury">
  <area shape="circle" coords="124,58,8" href="venus.htm" alt="Venus">
</map>

<p>
  <a href="/html/default.asp">HTML</a><br>
  <a href="/css/default.asp">CSS</a>
</p>

<p>Click the button to display the number of links in the document.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x = document.links.length;
    document.getElementById("demo").innerHTML = x;
}
</script>

</body>
</html> 



<?php 
 
//sayfana kaç tane bağlantı (link) oldugunu sayfaya yazar.
//YAZARIN KİŞİSEL NOTU: çıktı da 5 geliyor ama ben gözle saydığımda 3 tane sayabildim 
//gözden kaçan ufak bir ayrıntı var dikkat edelim
//düzeltelim bu yazıyı
//İNCELENECEK.
  
//HALİL_BARIM.


?>
