<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="ru">
  <head>

<!-- ***Include Header*** -->
<? include ("../_include/header_download.php"); ?>
  
  <!-- ***Content & Sidebars*** -->
  <div class="container-fluid">
  

      <!-- ***Sidebar Left - include CurrentDir*** -->
<? include ("../_include/dir_download.php"); ?>

	
    <!-- ***Page Content*** -->
    <div class="col-md-8">
		<h3>Скачивать или нет</h3>
		<p>
			Возможно, хранить информацию на своем диске это уже олдскул. Так я и сам олдскул. 
			</br>Мне больше нравится тратить гагабайты винчестера, а не минуты своей жизни для доступа к нужной информации.
			</br>Мне больше нравится рассматривать <a href="map_radziwill.php">карту</a> в хорошей печати, чем таскать ее по монитору.
			</br>Возможно, я не одинок в этом. 
			</br>В любом случае
			</br>Enjoy		
		</p>
		<p>
		<small>
			Основной картографический материал предоставила <a href="https://www.facebook.com/pages/%D0%9C%D0%B0%D0%B9%D1%81%D1%82%D1%8D%D1%80%D0%BD%D1%8F-%D1%81%D1%82%D0%B0%D1%80%D0%B0%D0%B4%D0%B0%D1%9E%D0%BD%D1%96%D1%85-%D0%B3%D0%B5%D0%B0%D0%B3%D1%80%D0%B0%D1%84%D1%96%D1%87%D0%BD%D1%8B%D1%85-%D0%BC%D0%B0%D0%BF/527727034041838">
			Майстэрня старадаўніх геаграфічных мап </a> 
		</small>
		</p>
		
		<p class="img-float-center">
			<img src="../../images/img-download/map_radziwill.jpg" />
		</p>
		
	</div>
	
	<!-- ***Sidebar Right*** -->

	<? include ("../_include/right_sidebar_download.php"); ?>

	
</div>

<!-- ***Include Footer*** -->
<? include ("../_include/footer.php"); ?>