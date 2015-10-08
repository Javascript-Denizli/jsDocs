<!DOCTYPE html>
<html>
<body>

<p>Press a key on the keyboard in the input field to find out if the ALT key was pressed or not.</p>

<input type="text" onkeydown="isKeyPressed(event)">

<p id="demo"></p>

<script>
function isKeyPressed(event) {
    var x = document.getElementById("demo");
    if (event.altKey) {
        x.innerHTML = "The ALT key was pressed!";
    } else {
        x.innerHTML = "The ALT key was NOT pressed!";
    }
}
</script>

</body>
</html>
<?php 


//yukarıdaki fonksiyonumuz textField e yazı yazarken 
// ALT tuşuna basıp basmadığımızı kontrol eder ve id si demo olan p tagları içerisine 
//eğer ALT basılmışsa 
// x.innerHTML = "The ALT key was pressed!";   bu kod çalışır.....
// eğer basılmamışsa
//x.innerHTML = "The ALT key was NOT pressed!";  bu kod çalışır.....

//HALİL BARIM

?>