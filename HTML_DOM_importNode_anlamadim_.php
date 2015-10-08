<!DOCTYPE html>
<html>
<body>

<iframe src="/default.asp" style="height:380px;width:520px;"></iframe>

<p>Click the "Try it" button to get and display the value of the first H1 element in the iframe (another document).</p>

<p><strong>Note:</strong> Internet explorer 8 and earlier does not support the importNode() method.</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
    var frame = document.getElementsByTagName("IFRAME")[0]
    var h = frame.contentWindow.document.getElementsByTagName("H1")[0];
    var x = document.importNode(h, true);
    document.body.appendChild(x);
}
</script>

</body>
</html>




<?php 
 
//iframe içindeki index numarası 0 olan Tagı ekrana yazar...
//ARASTIR..
//
//
//
  
//HALİL_BARIM.


?>
