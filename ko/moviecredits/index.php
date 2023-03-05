<?php
include('../index.php');
$input_line = $_SERVER['REQUEST_URI'];
preg_match("/([0-9]+)\/?/", $input_line, $output_array);
$jsondata = file_get_contents ('https://api.themoviedb.org/3/movie/'.  $output_array[1] .'?api_key=' . $api . '&language=' . $languageid . '');
$data = json_decode($jsondata, true);
echo '<title> ' . $data['title'] . '</title>';

?>


<?php
	//Codigo pegar cor principal
	$image=imagecreatefromjpeg("$imagemfundo");
	$thumb=imagecreatetruecolor(1,1);
	imagecopyresampled($thumb,$image,0,0,0,0,1,1,imagesx($image),imagesy($image));
	$mainColor=strtoupper(dechex(imagecolorat($thumb,0,0)));
	$hex = "#" . $mainColor;
	list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
	$somar = array ($r, -50);
	$somag = array ($g, -50);
	$somab = array ($b, -50);
	$corr = (array_sum($somar));
	$corg = (array_sum($somag));
	$corb = (array_sum($somab));
	?>	
<br>
  <div class="mx-auto " align="center" >
			<div class="content bg-center" align="center" >
				<?php
				echo '<div class="p-8 z-8 relative  hero-image   container rounded-lg" style="background-repeat: no-repeat; width:94%; background-image:linear-gradient(to bottom, rgba( 0, 0, 0, 10%),  rgba(' . $corr .',' . $corg . ',' . $corb . ', 20%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 30%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 50%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 60%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 60%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 90%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 99%), rgba(' . $corr .',' . $corg . ',' . $corb . ') 100%), url(https://image.tmdb.org/t/p/original' . $data['backdrop_path'] . ');  background-size: cover; " >'; 
					?>
					<div align="center" class="flex flex-col lg:flex-row lg:justify-between items-center mt-12 lg:mt-64 ml-0 sm:ml-0 md:ml-24">
						<div class="w-full lg:w-1/3 px-0 sm:px-0 md:px-0 lg:px-8">
							<?php echo '<img src="https://image.tmdb.org/t/p/original/' . $data['poster_path'] . '" class="w-full md:w-auto rounded-lg" />'; ?>
						</div>
						<div class="w-full lg:w-2/3 mt-12 lg:mt-0">
							<?php echo '<h2 class="font-extrabold tracking-wider" style="color:#fff">'.  $data['title'] . '</h2>'; ?>
							<?php echo '<h4 style="font-style: italic; color:#fff">'.  $data['tagline'] . '</h4>'; ?>
							<?php echo '<p style="color:#fff">' . $credits . '</p>'; ?>
							
							<br>
							<br>
						  
						</div>
					</div>
				</div>
			</div>
		</div>
		

	
	
	<style>
	   table, td, tr {
		 border: 0px solid transparent;
	   }
	   
	   table {
		 border-collapse: collapse;
		 width: 100%;
		 empty-cells: hide; 
	   }
	   td {
		  vertical-align: top;
	   }
	   th {
		 height: 0px;
	   }
	   
	  
	</style>
	 
 <div class="p-8 z-8 relative hero-image   container rounded-lg" >
	   <div class="content bg-center" align="center" > 
		<style>
		   table, td, tr {
			 border: 0px solid transparent;
		   }
		   
		   table {
			 border-collapse: collapse;
			 width: 100%;
			 empty-cells: hide; 
		   }
		   td {
			  vertical-align: top;
		   }
		   th {
			 height: 0px;
		   }
		   
		</style>

		   <table style="width: 100%; " align="center">
		   <tbody align="center">
		   <tr align="center">
		   <td style="width: 49%%; ">
			  <div>
				 <h2>
					<?php
					 $input_line = $_SERVER['REQUEST_URI'];
					 preg_match("/([0-9]+)\/?/", $input_line, $output_array);
					$jsondata = file_get_contents ('https://api.themoviedb.org/3/movie/'.  $output_array[1] .'/credits?api_key=3a0913c4785d5437033b17d0d3240f8b&language=' . $languageid . '');
					$data = json_decode($jsondata, true);
					?>
				   <p style="font-size:21px;">
				   <?php
				   echo $cast . ' ' . count ($data['cast']) . ' ' . $people;
				   ?>
			
				 </h2>
			  </div>
			  <table style="width: 100%; " align="center">
				  
					 <tbody style="border-color:transparent;">
					 <tr style="border-color:transparent;">
						<?php
						  $input_line = $_SERVER['REQUEST_URI'];
						  preg_match("/([0-9]+)\/?/", $input_line, $output_array);
						  $jsondata = file_get_contents ('https://api.themoviedb.org/3/movie/'.  $output_array[1] .'/credits?api_key=3a0913c4785d5437033b17d0d3240f8b&language=' . $languageid . '');
						  $data = json_decode($jsondata, true);
						   foreach($data['cast'] as $query)
							{
							   ?>
					 <td style="width: 100%" align="center">
						
					   <?php 
						 if (empty($query['profile_path'])) {
							 echo '<a href="../../' . $country . '/person/?' . $query['id'] . '/">' . '<img src="../../images/imagemator.jpg" class="img-responsive rounded-lg">' . '</a><br>';
							 } else { 
						   echo '<a href="../../' . $country . '/person/?' . $query['id'] . '/">' . '<img src="https://www.themoviedb.org/t/p/w66_and_h66_face' .  $query['profile_path']  . '" class="img-responsive rounded-lg" >' . '</a><br>';  
						  }
						  echo  '<a href="../../' . $country . '/person/?' . $query['id'] . '/">' . $query['name'] . '</a>';
							echo '<br>';
							echo  $query['character'];
							echo '<br><br>';
						  ?> 
					 </td>
					 </tr>
					 <?php   
					   }?>
					 </tbody>
			   </table>

		   </td>
		   <td style="width: 2%">
		   </td>
		   <td style="width: 49%" align="center">
			  <div>
				  <h2>
			   <?php
				 $input_line = $_SERVER['REQUEST_URI'];
				 preg_match("/([0-9]+)\/?/", $input_line, $output_array);
				$jsondata = file_get_contents ('https://api.themoviedb.org/3/movie/'.  $output_array[1] .'/credits?api_key=3a0913c4785d5437033b17d0d3240f8b&language=' . $languageid . '');
				$data = json_decode($jsondata, true);
				?>
				<p style="font-size:21px;">
				<?php
				echo $crew . ' ' . count ($data['crew']) . ' ' . $people;
				?>
				
			 
		   </h2>
			   </div>
			  <table style="width: 100%;" align="center">
					  <tbody align="center">
					  <tr align="center">
						 <?php
						   $input_line = $_SERVER['REQUEST_URI'];
						   preg_match("/([0-9]+)\/?/", $input_line, $output_array);
						   $jsondata = file_get_contents ('https://api.themoviedb.org/3/movie/'.  $output_array[1] .'/credits?api_key=3a0913c4785d5437033b17d0d3240f8b&language=' . $languageid . '');
						   $data = json_decode($jsondata, true);
							foreach($data['crew'] as $query)
							 {
								?>
					  <td style="width: 100%" align="center">
						 
						<?php 
						  if (empty($query['profile_path'])) {
							  echo '<a href="../../' . $country . '/person/?' . $query['id'] . '/">' . '<img src="https://mypixeland.com/images/imagemator.jpg" class="img-responsive rounded-lg">' . '</a><br>';
							  } else { 
							echo '<a href="../../' . $country . '/person/?' . $query['id'] . '/">' . '<img src="https://www.themoviedb.org/t/p/w66_and_h66_face' .  $query['profile_path']  . '" class="img-responsive rounded-lg" >' . '</a><br>';  
						   }
						echo  '<a  href="../../' . $country . '/person/?' . $query['id'] . '/">' . $query['name'] . '</a>';
						   echo '<br>';
						   echo  $query['job'];
						   echo '<br><br>';
		
						   
						   ?> 
			   
					 
					  </tr>
					  <?php   
						}?>
					  </tbody>
				</table>
			  
		   </td>
		   </tr>
		   </tbody>
		   </table>
		</div>
		</div>
