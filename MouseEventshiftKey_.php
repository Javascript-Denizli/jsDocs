<!DOCTYPE html>
<html>
<body onmousedown="isKeyPressed(event)">

<p>Click somewhere in the document. An alert box will tell you if the SHIFT key was pressed when the onmousedown event occured.</p>

<p><strong>Tip:</strong> Try to press and hold down the SHIFT key (on your keyboard) before you click in the document.</p>

<script>
function isKeyPressed(event) {
    if (event.shiftKey) {
        alert("The SHIFT key was pressed!");
    } else {
        alert("The SHIFT key was NOT pressed!");
    }
}
</script>

</body>
</html>
<?php  

//yukarıdaki fonsiyonumuz klayveden SHİFT+MOUSE CLİCK eventini takip eder
//eger shift e basılı tutarak yazıya tıklanırsa 
//alert("The SHIFT key was pressed!");
//ibaresi alert kutusunda gözükür
//eğer shift e basmadan yazıya tıklanırsa
//alert("The SHIFT key was NOT pressed!");
//ibaresi gözükür

//HALİL BARIM

?>