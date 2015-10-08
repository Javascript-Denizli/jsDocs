<!DOCTYPE html>
<html>
<head>
<style>
#cc {
    font-size: 20px;
    color: red;
}
</style>
</head>
<body onload="normPara()">

<p id="demo">Click one button to add text to the document, click the other button to normalize the document.</p>

<button onclick="addTextNode()">Add a Text Node</button>

<button onclick="normPara()">Normalize the Document</button>

<p>The document has <span id="cc">1</span> child node(s).</p>

<script>
function addTextNode() {
    var x = document.createTextNode(" Click again.");
    var y = document.body;
    y.appendChild(x);
    var x = document.getElementById("cc");
    x.innerHTML = y.childNodes.length;
}

function normPara() {
    document.normalize();
    var x = document.body;
    var y = document.getElementById("cc");
    y.innerHTML = x.childNodes.length;
}
</script>

</body>
</html>



<?php 
 
//Normalize () yöntemi boş Metin düğümleri kaldırır ve komşu Metin düğümleri ekler.
//ANLAMADIM..
//
//
//
  
//HALİL_BARIM.


?>
