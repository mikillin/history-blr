<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="ru">
  <head>

<!-- ***Include Header*** -->
<? include ("../_include/header_dates.php"); ?>
  
  <!-- ***Content & Sidebars*** -->
  <div class="container-fluid">
  

      <!-- ***Sidebar Left - include CurrentDir*** -->
<? include ("../_include/dir_dates.php"); ?>

	
    <!-- ***Page Content*** -->
    <div class="col-md-8">
		<h3>Июнь</h3>
		
		<div class="col-md-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Дата</th>
					<th>Событие</th>
				</tr>
			</thead>
			<tbody>
			
				<tr>
					<td>5</td>
					<td>
						<ul>
							<li>День памяти <a href="../figures/efrosinia.php">св. Ефросинии Полоцкой</a> — покровительницы просвещения</li>
						</ul>
					</td>
				</tr>

				<tr>
					<td>9</td>
					<td>
						<ul>
							<li>1881 Родился <a href="../figures/luckiewicz_ivan.php">Иван Луцкевич</a> — культуртрегер Беларуси</li>
						</ul>
					</td>
				</tr>
				
				<tr>
					<td>12</td>
					<td>
						<ul>
							<li>1881 Родился <a href="../figures/skosyrew.php">Скосырев Борис</a> — король Андорры из <a href="../places/wilno.php">Вильно</a></li>
						</ul>
					</td>
				</tr>

				<tr>
					<td>18</td>
					<td>
						<ul>
							<li>1806 Родился <a href="../figures/volovicz.php">Михаил Волович</a> — участник восстания 1830 г., наследник составителя Статута ВКЛ</li>
						</ul>
					</td>
				</tr>

				<tr>
					<td>28</td>
					<td>
						<ul>
							<li><a href="../events/battle_polonka.php">Битва под Полонкой</a> с Московским царством, 1660</li>
						</ul>
					</td>
				</tr>
								
			</tbody>
		</table>
	</div>
	
	</div>
	
	<!-- ***Sidebar Right*** -->

	<? include ("../_include/right_sidebar_dates.php"); ?>

	
</div>

<!-- ***Include Footer*** -->
<? include ("../_include/footer.php"); ?>