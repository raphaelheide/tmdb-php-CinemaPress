<?php
include('../index.php');
$input_line = $_SERVER['REQUEST_URI'];
preg_match("/([0-9]+)\/?/", $input_line, $output_array);
$jsondata = file_get_contents ('https://api.themoviedb.org/3/tv/'.  $output_array[1] .'?api_key=' . $api . '&language=' . $languageid . '');
$data = json_decode($jsondata, true);
echo '<title> ' . $data['name'] . '</title>';

?>


<?php
$info = 'http://www.omdbapi.com/?i=' . $data['imdb_id'] . '&apikey=b03d8538';
$info2 = 'http://www.omdbapi.com/?i=&apikey=b03d8538';
  if ($info == $info2)  {
	  echo ' ';
	   } else { 
	  $jsondata2 = file_get_contents ($info);  
	  $data2 = json_decode($jsondata2, true);
	  $subject2 = $data2['Awards'];
	  $imagemfundo = 'https://image.tmdb.org/t/p/original/'. $data['poster_path'] ;
	}
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
							<?php echo '<h2 class="font-extrabold tracking-wider" style="color:#fff">'.  $data['name'] . '</h2>'; ?>
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
				$jsondata = file_get_contents ('https://api.themoviedb.org/3/tv/'.  $output_array[1] .'/aggregate_credits?api_key=' . $api . '&language=' . $languageid . '');
				$data = json_decode($jsondata, true);
				?>
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
					   $jsondata = file_get_contents ('https://api.themoviedb.org/3/tv/'.  $output_array[1] .'/aggregate_credits?api_key=' . $api . '&language=' . $languageid . '');
					   $data = json_decode($jsondata, true);
						 foreach($data['cast'] as $query)
						   {
						   foreach($query['roles'] as $e){
							  ?>
				  <td style="width: 100%">
					 
					 <?php 
				   if (empty($query['profile_path'])) {
						echo '<a href="../../br/person/?' . $query['id'] . '/">' . '<img src="../../images/imagemator.jpg" class="img-responsive rounded-lg">' . '</a><br>';
						} else { 
					  echo '<a href="../../br/person/?' . $query['id'] . '/">' . '<img src="https://www.themoviedb.org/t/p/w66_and_h66_face' .  $query['profile_path']  . '" class="img-responsive rounded-lg" >' . '</a><br>';  
					 }
				 
					 
					 ?> 
		   
		   <?php                       
				  echo  '<a   href="../../br/person/?' . $query['id'] . '/">' . $query['name'] . '</a>';
				  ?>
				<br>
				  <?php
				  echo  $e['character'] .  " <br> ". $e['episode_count'] . ' episodes<br><br>';
			
				
			  
			   
			  
			  ?>
				  </td>
				  
			
				  </tr>
				  <?php   }
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
		  $jsondata = file_get_contents ('https://api.themoviedb.org/3/tv/'.  $output_array[1] .'/aggregate_credits?api_key=' . $api . '&language=' . $languageid . '');
		  $data = json_decode($jsondata, true);
		  ?>
		  <?php
		  echo $crew . ' ' . count ($data['crew']) . ' ' . $people;
		  ?>
			
		 
	   </h2>
		   </div>
		 <table style="width: 100%;">
				  <tbody>
				  <tr>
					 <?php
					   $input_line = $_SERVER['REQUEST_URI'];
					   preg_match("/([0-9]+)\/?/", $input_line, $output_array);
					   $jsondata = file_get_contents ('https://api.themoviedb.org/3/tv/'.  $output_array[1] .'/aggregate_credits?api_key=' . $api . '&language=' . $languageid . '');
					   $data = json_decode($jsondata, true);
						 foreach($data['crew'] as $query)
						   {
						   foreach($query['jobs'] as $e){
							  ?>
				  <td style="width: 100%">
					 
					 <?php 
					if (empty($query['profile_path'])) {
						echo '<a href="../../br/person/?' . $query['id'] . '/">' . '<img src="../../images/imagemator.jpg" class="img-responsive rounded-lg">' . '</a><br>';
						} else {
					  echo '<a href="../../br/person/?' . $query['id'] . '/">' . '<img src="https://www.themoviedb.org/t/p/w66_and_h66_face' .  $query['profile_path']  . '" class="img-responsive rounded-lg">' . '</a><br>';  
					 }
					 ?> 
					 <?php                       
							echo  '<a  href="../../br/person/?' . $query['id'] . '/">' . $query['name'] . '</a>';
							echo '<br>';
							?>
							
							<?php
							echo  $e['job'] .  " <br> ". $e['episode_count'] . ' episodes<br><br>';

						?>
		   
				  </td>
				 
				  </tr>
				  <?php   }
					}?>
				  </tbody>
			</table>
		  
	   </td>
	   </tr>
	   </tbody>
	   </table>
	   
	   
	   
  
  
	
 
