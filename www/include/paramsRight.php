<!--    -->
<div id="paramsRight">
	<p class="headerTitle">Поиск по параметрам</p>
	<p class="titleFilter">Стоимость товара</p>
	<form action="#" method="GET"> 
		 <div id="inputPrice">
		 	<ul>
		 		<li><p>от</p></li>
		 		<li><input type="text" id="startPrice" name="startPrice" value="0"></li>
		 		<li><p>до</p></li>
		 		<li><input type="text" id="lastPrice" name="lastPrice" value="100000"></li>
		 		<li><p>грн</p></li>
		 	</ul>
		 </div>
	<!-- блок, который потом на Джиквери реализируется в ползунок цен   -->
	<div id="blockTrackBar"></div>
	
	<p class="titleFilter">Производители</p>
	<ul class="checkboxBrand">
		<li><input type="checkbox" id="checkBrend1" /><label for="checkBrend1">Бренд 1</label></li>
		<li><input type="checkbox" id="checkBrend2" /><label for="checkBrend2">Бренд 2</label></li>
		<li><input type="checkbox" id="checkBrend3" /><label for="checkBrend3">Бренд 3</label></li>
		<li><input type="checkbox" id="checkBrend4" /><label for="checkBrend4">Бренд 4</label></li>
	</ul>
	<center><input type="submit" name="submit" id="searchButtonParams" value="Найти" ></center>



	</form>
	

</div>