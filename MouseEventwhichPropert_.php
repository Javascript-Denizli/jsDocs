<!DOCTYPE html>
<html>
<body>

<div onmousedown="WhichButton(event)">Click this text with one of your mouse buttons to return a number.
  <p>1 = The left mouse button</p>
  <p>2 = The middle mouse button</p>
  <p>3 = The right mouse button</p>
</div>

<p><strong>Note:</strong> The which property is not supported in IE8 and earlier versions.</p>

<script>
function WhichButton(event) {
    alert("You pressed button: " + event.which)
}
</script>

</body>
</html>
<?php  



//yukarıdaki fonksiyonumuz 
//mouse tuşlarını dinler ona göre bize ekrana alert kurusunda çıktı verir



//HALİL BARIM

 ?>