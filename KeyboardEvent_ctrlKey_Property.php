<!DOCTYPE html>
<html>
<body>

<p>Press a key on the keyboard in the input field to find out if the CTRL key was pressed or not.</p>

<input type="text" onkeydown="isKeyPressed(event)">

<p id="demo"></p>

<script>
function isKeyPressed(event) {
    var x = document.getElementById("demo");
    if (event.ctrlKey) {
        x.innerHTML = "The CTRL key was pressed!";
    } else {
        x.innerHTML = "The CTRL key was NOT pressed!";
    }
}
</script>

</body>
</html>
<?php 

//yuarıdaki kod Text Fielde yazı yazarken CTRL tuşuna basıp basmadığımızı yazar 
//çalışma mantığı ise
//eğer basıldıysa x.innerHTML = "The CTRL key was pressed!";  bu kod çalışır...
//eğer basılmadıysa  x.innerHTML = "The CTRL key was NOT pressed!"; bu kod çalışır...


//HALİL BARIM



?>