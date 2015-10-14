<script type="text/javascript">
function javascriptile_ekranda_goster1(){
	ekran.innerHTML=TEXTAREADAKIVERI.value;
}
</script>
<?php 
/*

1.ekranda gösterme: 
-html taglarını ekranda gösterme 
-html taglarını çalışmayacak şekilde ekranda gösterme
-css ayarları
-javascript kullanımı 
2.veri girme gönderme ve alma get metodu ile 
3.veri girme gönderme ve alma post metodu ile
4.for döngüsü
5.if else
6.json kullanımı
7.


*/

//1.
function ekranda_goster(){

//$divin_icinde_goster=<<<lag başlangıcı
	$divin_icinde_goster=<<<lag
echo"1.selam halil";
echo"</br>";

echo'2.selam halil nasılsın<br>';
echo"</br>";

echo "3.selam halil 2kere 2= ".(2*2).'eder'."<br>";
echo"</br>";
$kelime="elma";
echo"</br>";
$kelime2='karpuz';
echo"</br>";
$meyveler= array('armut',"patates",'ayva',55);
echo"</br>";

echo"4.meyvelerimiz $kelime";
echo"</br>";



echo'5.meyvelerimiz2 $kelime';//tek tırnak arasında değişkeni gösteremezsinv çift tırnakta gösterebilirsiniz.
echo"</br>";

echo '6.meyvelerimiz3 '.kelime;
echo"</br>";

echo $meyveler; //echo ile array yazdırılamaz fakat dizi indexi ile ulaşabiliriz hepsini yazdırmak istersen for döngüsü kullanırız
echo"</br>";

echo $kelime;
echo"</br>";
echo $kelime2;

echo"</br>";
echo "7 <div style='background-color:red; width:300px; height:400px;'>divimiz</div>";
echo"</br>";

echo "8 <div onclick='oyna()' style='background-color:red; width:300px; height:400px;'>divimiz2</div>";
echo"</br>";

echo <<<tuk
9 öptüm canlarım
tuk;


echo"</br>";

$degisken=<<<ktl
bizde sizleri öptük  
ktl;
//<<<ktl den sonra boşluk içermicek   sondaki ktl den önce boşluk içermicek
echo"</br>";

// echo 10.$degisken; bu ifade çalışmayacaktır 

echo"</br>";
echo "10".$degisken;
echo "105".$degisken;

print_r("11 aaaa".$kelime.'</br>');
print_r("12".$kelime2);
echo"</br>";
print_r("13".$meyveler); //diziyi başka bir ifade ile birlikte yazamam
echo"</br>";
print_r("13 5");
echo"</br>";
print_r($meyveler);  //diziyi tek başına olduğu için içindekileri gösteririm
echo"</br>";
echo("14".$meyveler); //echo ile dizi yazdırılamaz KURALLL...! 
echo"</br>15.";
echo($meyveler);  //echo ile dizi yazdırılamaz KURALLL...! 
echo"</br>";
print_r("16".$kelime); 
echo"</br>";
print_r("17".$degisken);
echo"</br>17 5.";
print_r($degisken); 
echo"</br>";


//tek tırnak içindeki herşey, değişkenler dahil string olarak ekrana basılır...
//echo ile print_r nin farkı

//echo da tek tek yazdırabiliriz
//dizinin içini tek bir komutta görmek istiyorsan print_r
lag;
//$divin_icinde_goster; değişken sonu
echo $divin_icinde_goster;
echo"333<textarea id='TEXTAREADAKIVERI'>".$divin_icinde_goster."</textarea>";
}

echo "du bakalım nolcek bu işler<br> tıklayın görün";


ekranda_goster();
/*
echo"444<textarea id='TEXTAREADAKIVERI1'>".$divin_icinde_goster."</textarea>";
echo "<button id='btn' onclick='ekranda_goster()'>dıgılaaa..!</button>";
echo "<button id='btn' onclick='javascriptile_ekranda_goster1()'>javascriptile_ekranda_goster1</button>";


echo "<div id='ekran' style='background-color:orange; width:300px; height:400px;'>divimiz</div>";


//__________________________________________________________________________________________________________

echo <<<tuk
9 öptüm canlarım
tuk;


echo"</br>";

$degisken=<<<ktl
__________________________________________________________________________________________________________
bizde sizleri öptük  
ktl;
//<<<ktl den sonra boşluk içermicek   sondaki ktl den önce boşluk içermicek
echo"</br>";

*/
?>
