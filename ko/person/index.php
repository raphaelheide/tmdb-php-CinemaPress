<?php
include('../index.php');
$input_line = $_SERVER['QUERY_STRING'];
preg_match("/([0-9]+)\/?/", $input_line, $output_array);
$jsondata = file_get_contents ('https://api.themoviedb.org/3/person/'.  $output_array[1] .'?api_key=' . $api . '&language=' . $languageid . '');
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
				echo '<div class="p-8 z-8 relative  hero-image   container rounded-lg" style="background-repeat: no-repeat; width:94%; background-image:linear-gradient(to bottom, rgba( 0, 0, 0, 10%),  rgba(' . $corr .',' . $corg . ',' . $corb . ', 20%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 30%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 50%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 60%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 60%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 90%), rgba(' . $corr .',' . $corg . ',' . $corb . ', 99%), rgba(' . $corr .',' . $corg . ',' . $corb . ') 100%), url(https://image.tmdb.org/t/p/original' . $data['profile_path'] . ');  background-size: cover; " >'; 
					?>
					<div align="center" class="flex flex-col lg:flex-row lg:justify-between items-center mt-12 lg:mt-64 ml-0 sm:ml-0 md:ml-24">
						<div class="w-full lg:w-1/3 px-0 sm:px-0 md:px-0 lg:px-8">
							<?php 
							if (! empty($data['profile_path'])) {
							echo '<img src="https://image.tmdb.org/t/p/original/' . $data['profile_path'] . '" class="w-full md:w-auto rounded-lg" />'; 
						} else {} ?>
						</div>
						<div class="w-full lg:w-2/3 mt-12 lg:mt-0">
							<?php echo '<h1 class="font-extrabold tracking-wider" style="color:#fff">'.  $data['name'] . '</h1>'; ?>
							<?php echo '<p style="color:#fff">'.  $data['biography'] . '</p>'; ?>

						
						</div>
					</div>
				</div>
			</div>
		</div>
		<div align="center">
			<br>
		<?php 	  echo '<h3>'. str_replace($search2, $replace2, $subject2) . '</h3>' ?>
		</div>

	

<div class="mx-auto "  style="width: 90%; ">
	 <div class="movie-heading" >

			 <?php 
			 $input_line = $_SERVER['REQUEST_URI'];

			$jsondatacreditos = file_get_contents ('https://api.themoviedb.org/3/person/' . $output_array[1] .'/credits?api_key=' . $api . '');	
			$datacreditos = json_decode($jsondatacreditos, true);
			echo '<br><strong>' .  $knownfor . '</strong><br> '; 
			echo str_replace($search30, $replace30, $data['known_for_department']);
		echo '<br><br><strong>' . $birthdayandplace . '</strong><br> '; 
		echo date('m d Y', strtotime($data['birthday']))  . $at  . $data['place_of_birth'] . '<br>';
		
		if( !empty ($data['deathday'])){
		echo '<br><strong>' . $deathday . '</strong><br> '; 	
		echo date('m d Y', strtotime($data['deathday'])) . '<br>';
		}else{}
	    
		if( !empty ($data['also_known_as']['0'])){
		echo '<br><strong>' . $alsoknownas . '</strong><br> '; 
		echo $data['also_known_as']['0'];
		} else {}
		if( !empty ($data['also_known_as']['1'])){
			echo '<br>'. $data['also_known_as']['1'];
		} else {}
		if( !empty ($data['also_known_as']['2'])){
		echo '<br>'. $data['also_known_as']['2'];
		} else {}
		if( !empty ($data['also_known_as']['3'])){
		echo '<br>'. $data['also_known_as']['3'];
		} else {}
		if( !empty ($data['also_known_as']['4'])){
		echo '<br>'. $data['also_known_as']['4'];
		} else {}
		if( !empty ($data['also_known_as']['5'])){
		echo '<br>'. $data['also_known_as']['5'];
		} else {}
		if( !empty ($data['also_known_as']['6'])){
		echo '<br>'. $data['also_known_as']['6'];
		} else {}
		if( !empty ($data['also_known_as']['7'])){
		echo '<br>'. $data['also_known_as']['7'];
		} else {}
		if( !empty ($data['also_known_as']['8'])){
		echo '<br>'. $data['also_known_as']['8'];
		} else {}
		if( !empty ($data['also_known_as']['9'])){
		echo '<br>'. $data['also_known_as']['9'];
		} else {}
	 ?>
	 <br><br>
	
		
	<?php include 'listapessoa.php'; ?>	
	 </div>
	 </div>
	 <br>
  
  
	
 
