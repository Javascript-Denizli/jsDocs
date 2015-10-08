<!DOCTYPE html>
<html>
<body>

<iframe src="/default.asp" style="height:380px;width:520px;"></iframe>

<p>Click the "Try it" button to adopt and display the value of the first H1 element in the iframe (another document).</p>

<p><strong>Note:</strong> Internet explorer 8 and earlier does not support the adoptNode() method.</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
    var frame = document.getElementsByTagName("IFRAME")[0]
    var h = frame.contentWindow.document.getElementsByTagName("H1")[0];
    var x = document.adoptNode(h);
    document.body.appendChild(x);
}
</script>

</body>
</html>

<?php 

// anlamadım  
// yazarın notu: sanırım bu eleman bize iframe yi okuyor ve bize fonksiyonda iframe içindeki
//tagları gösteriyor tek tek ama 
//	TAM OLARAK ANLAŞILMADI.....
//
  

//HALİL BARIM
?>
