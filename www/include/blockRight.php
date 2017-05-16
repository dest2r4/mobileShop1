<!--      -->

<div id="blockCategories">
	<p class="headerTitle">Категории товаров</p>
	<ul>
		<li><a href="#" id="index1"><img src="image/mobileCat.png" id="mobileImage"></img>Мобильные телефоны</a>
		<ul class="catSection">
			<li><a href="#">Все модели</a></li>
<?php


	$sql  = "SELECT * FROM categoties WHERE productType='mobile' ";
	$result=mysqli_query($link,$sql);


	 if (mysqli_num_rows($result) > 0)
	 {
	 	$row=mysqli_fetch_array($result);
	 }


	 do {
	 	echo '
	 	<li><a href="viewCat.php?cat='.$row["brand"].'&type='.$row["productType"].'">'.$row["brand"].'</a></li>
				
				';}
				while ( $row=mysqli_fetch_array($result));

?>



















		</ul>
		</li>


		<li><a href="#" id="index2"><img src="image/notebookCat.png" id="noteImage"></img>Ноутбуки</a>
			<ul class="catSection">
	<?php


	$sql  = "SELECT * FROM categoties WHERE productType='notebook' ";
	$result=mysqli_query($link,$sql);


	 if (mysqli_num_rows($result) > 0)
	 {
	 	$row=mysqli_fetch_array($result);
	 }


	 do {
	 	echo '
	 	<li><a href="viewCat.php?cat='.$row["brand"].'&type='.$row["productType"].'">'.$row["brand"].'</a></li>
				
				';}
				while ( $row=mysqli_fetch_array($result));

?>
		</ul>


		</li>
		<li><a href="#" id="index3"><img src="image/laptopCat.jpg" id="laptopImage"></img>Планшеты</a>
			<ul class="catSection">
			<li><a href="#">Все модели</a></li>
<?php


	$sql  = "SELECT * FROM categoties WHERE productType='notepad' ";
	$result=mysqli_query($link,$sql);


	 if (mysqli_num_rows($result) > 0)
	 {
	 	$row=mysqli_fetch_array($result);
	 }


	 do {
	 	echo '
	 	<li><a href="viewCat.php?cat='.$row["brand"].'&type='.$row["productType"].'">'.$row["brand"].'</a></li>
				
				';}
				while ( $row=mysqli_fetch_array($result));

?>
		</ul>
		</li>
	</ul>
	
</div>

