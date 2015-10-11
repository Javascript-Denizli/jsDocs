<!DOCTYPE html>
<html>
<body>

This document is displayed in IE<span id="demo"></span> mode

<p><b>Note:</b> The documentMode property is only supported in Internet Explorer, from IE8+</p>
<p><b>Note:</b> If no !DOCTYPE is specified, IE8 renders the page in IE5 mode!</p>

<script>
var x = document.documentMode;
document.getElementById("demo").innerHTML = x;
</script>

</body>
</html>



<?php 
 
//bu kod sayfanın modunu yani hangi sürümü kullanıdığını yazar 
//sadece İNTERNET EXPLORER için özel bir koddur 
//İE dışında hiç bir tarayıcıda desteklenmez...
//
//
  
//HALİL_BARIM.


?>
