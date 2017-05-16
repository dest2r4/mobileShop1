<?php
	include ("include/dbConnect.php");

$sorting=$_GET["sort"];

switch ($sorting) {
	case 'priceAsc':
		# code...
		$sorting='price ASC';
		$sortName='От дешевых к дорогим';
		break;
		case 'priceDesc':
		# code...
		$sorting='price DESC';
		$sortName='От дорогих к дешевым';
		break;
		case 'top':
		# code...
		$sorting='count DESC';
		$sortName='Популярное';
		break;
		case 'new':
		# code...
		$sorting='dateTime DESC';
		$sortName='Новинки';
		break;
		case 'brand': 
		# code...
		$sorting='brandIdNumber';
		$sortName='От А до Я';
		break;
	default:
		
		$sorting='productId DESC';
		$sortName='Нет сортировки';


		break;
}






?>









<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="main.js"></script>
	<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js">	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
<script >
	$(document).ready(function(){
    $("#styleGrid").click(function(){
        $("#productBlock").show();
          $("#productBlockList").hide();
    });
    $("#styleList").click(function(){
        $("#productBlockList").show();
         $("#productBlock").hide();
    });

    $("#selectSort").click(function()
{
	$("#sortingList").slideToggle(200);
});

  $('#blockCategories>ul>li>a'),click(function()
  {
  	if ($(this).attr('class') != 'active')
  	{
  		$('#blockCategories>ul>li>ul').slideUp (400);
  		$(this).next().slideToggle(400);
  			$('#blockCategories>ul>li>a').removeClass('active');
  			$(this).addClass ('active');
  			$cookie('selectCat',$(this).attr('id'));
  	}
  	else
  	{
  		$('#blockCategories>ul>li>a').removeClass('active');
  		$('#blockCategories>ul>li>ul').slideUp (400);
  		$cookie('selectCat','');
  	}
  });
if ($.cookie('selectCat')!='') {
	$('#blockCategories>ul>li#'+$.cookie('selectCat')).addClass('active').next().show();
}

});		
</script>
	
	<title>Магазин цифровой техники </title>
</head>
<body>

<div id="blockBody">
<?php
	include ("include/blockHeader.php");
?>
<div id="blockRight">
	<?php
		include ("include/blockRight.php");
		include ("include/paramsRight.php");
		include ("include/newsRightBlock.php");
	?>
</div>
<div id="blockContent">
<div id="blockSorting">
	<p id="navBreadcrumb"><a href="index.php">Главная</a>\<span>все товары</span></p>
	<ul id="optionList">
		<li>Вид :</li>
		<li><a href="#" id="styleGrid"><img  src="image/grid1.png" alt=""></a></li>
		<li><a href="#" id="styleList"><img  src="image/grid2.jpg" alt=""></a></li>
		<li>Сортировать</li>
		<li><a id="selectSort" href="#"><?php echo $sortName;  ?></a>
		<ul id="sortingList"> 
			<li><a href="index.php?sort=priceAsc">От дешовых к дорогим</a></li>
			<li><a href="index.php?sort=priceDesc">от дорогим к дешевым</a></li>
			<li><a href="index.php?sort=top">популярное</a></li>
			<li><a href="index.php?sort=new">новинки</a></li>
			<li><a href="index.php?sort=brand">от А до Я</a></li>
		</ul>
		</li>
	</ul>
</div>

<ul id="productBlock">

<?php


$sql  = "SELECT * FROM tableProducts WHERE visible='1' ORDER BY $sorting ";
$result=mysqli_query($link,$sql);


 if (mysqli_num_rows($result) > 0)
 {
 	$row=mysqli_fetch_array($result);
 }


 do {
 	echo '
<li>
<div class="blockImages">
<img src="uploadFiles/'.$row["img"].'">
</div>
<p class="styleTitle"><a href="#">'.$row["title"].'</a></p>
<ul class="rewievsCounts">

<li><img src="image/commend1.png" alt=""><p>0</p></li>
<li><img src="image/eye1.png" alt=""><p>0</p></li>
</ul>
<a href="" class="addCartStyle"><img src="image/cart.png" alt=""></a>
<p class="priceStyle">'.$row["price"].' грн</p>
<div class="miniFeature">
'.$row["miniFeature"].'
</div>


</li>
';
} 
while ( $row=mysqli_fetch_array($result));

?>
</ul>


<ul id="productBlockList">

<?php


$sql  = "SELECT * FROM tableProducts WHERE visible='1' ORDER BY $sorting";
$result=mysqli_query($link,$sql);


 if (mysqli_num_rows($result) > 0)
 {
 	$row=mysqli_fetch_array($result);
 }


 do {
 	echo '
<li>
<div class="blockImagesList">
<img src="uploadFiles/'.$row["img"].'">
</div>




<ul class="rewievsCountsList">
<li><img src="image/commend1.png" alt=""><p>0</p></li>
<li><img src="image/eye1.png" alt=""><p>0</p></li>
</ul>
<p class="styleTitleList"><a href="#">'.$row["title"].'</a></p>
<a href="" class="addCartStyleList"><img src="image/cart.png" alt=""></a>

<p class="priceStyleList"><span>'.$row["price"].'</span> грн</p>
<div class="miniFeatureList">
'.$row["miniDescription"].'
</div>


</li>
';
} 
while ( $row=mysqli_fetch_array($result));

?>
</ul>
</div>


<div id="blockFooter">
	<?php
	include ("include/blockFooter.php")
?>
</div>
</body>
</html>