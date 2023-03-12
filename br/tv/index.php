<?php
include('../index.php');
$input_line = $_SERVER['REQUEST_URI'];
preg_match("/([0-9]+)\/?/", $input_line, $output_array);
$jsondata = file_get_contents ('https://api.themoviedb.org/3/tv/'.  $output_array[1] .'?api_key=' . $api . '&language=' . $languageid . '');
$data = json_decode($jsondata, true);
echo '<title> ' . $data['name'] . '</title>';

?>

<?php
$info = 'http://www.omdbapi.com/?i=' . $data['imdb_id'] . '&apikey=YOUR API';
$info2 = 'http://www.omdbapi.com/?i=&apikey=YOUR API';
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
							<?php 
							if (! empty($data['poster_path'])){
							echo '<img src="https://image.tmdb.org/t/p/original/' . $data['poster_path'] . '" class="w-full md:w-auto rounded-lg" />'; 
							} else {
							}
							?>
						</div>
						<div class="w-full lg:w-2/3 mt-12 lg:mt-0">
							<?php echo '<h1 class="font-extrabold tracking-wider" style="color:#fff">'.  $data['name'] . '</h1>'; ?>
							<?php echo '<h4 style="font-style: italic; color:#fff">'.  $data['tagline'] . '</h4>'; ?>
							<?php echo '<p style="color:#fff">'.  $data['overview'] . '</p>'; ?>
							<div class="details block md:flex md:items-center md:justify-between md:items-center text-lg font-semibold tracking-widest mt-6">
								<div class="timing flex items-center ml-0 md:ml-4 mt-2 md:mt-0">
									
								</div>
								<div class="rating flex items-center ml-0 md:ml-4 mt-2 md:mt-0">
									<img class="w-4" src="/images/007-star.svg" alt="rating" />
									<?php echo '<span class="ml-2" style="color:#fff">' . $data['vote_average'] . '</span>'; ?>
								</div>
							</div>
							<br>
							<br>
						  
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
			 $jsondatanome = file_get_contents ('https://api.themoviedb.org/3/tv/' . $output_array[1] .'?api_key=' . $api . '&language=' . $languageid . '');
			 $datanome = json_decode($jsondatanome, true);
			 $nomepuro = $datanome['title'];
			 $nome = str_replace($search20, $replace20, $datanome['name']);
			 $nome2 = str_replace($search30, $replace30, $datanome['name']);
			 $jsonfinal = file_get_contents ('https://mypixeland.com/feed/json/?s=' . $nome2 . '');
			 $datafinal = json_decode($jsonfinal, true);
			
			$jsondatacreditos = file_get_contents ('https://api.themoviedb.org/3/tv/' . $output_array[1] .'/credits?api_key=' . $api . '&language='  . $languageid . '');	
			$datacreditos = json_decode($jsondatacreditos, true);
			echo '<br><strong>' . $created_by . '</strong><br> '; 
			$counter = 0;
			foreach($data['created_by'] as $criado) {
			
				echo '<a style="text-decoration: underline;" href="../../' . $country . '/person/?' . $criado['id'] . '/' . str_replace($search, $replace, $criado['name']) . '">' . $criado['name'] . '</a>  | ' ;
			if($counter++ == 4) {
			 break;
			
			}
			}
		echo '<br><br><strong>' . $cast . '</strong><br> '; 
		$counter = 0;
		foreach($datacreditos['cast'] as $credito) {
		 echo '<a style="text-decoration: underline;" href="../../' . $country . '/person/?' . $credito['id'] . '/' . str_replace($search, $replace, $credito['name']) . '">' . $credito['name'] . '</a>  | ';
		 if($counter++ == 4) {
			 break;
		 }
		 }
		echo '<a href="../../' . $country . '/tvcredits/?' . $data['id'] . '/' . str_replace($search, $replace, $data['title']) . '">' . $andmore . '...</a>';
		 echo '<br><a href="../../' . $country . '/tvcredits/?' . $data['id'] . '/' . str_replace($search, $replace, $data['title']) . '">→ ' . $allcast . '</a>'; ?>
	 <br><br><strong><?php echo $genre ?></strong><br> <?php foreach($data['genres'] as $genre){
		  echo $genre['name'] . '  ' ;
	  }
	  ?>
	  <br>
	 <br><strong><?php echo $runtime ?></strong><br> <?php echo $data['episode_run_time']['0'] . $runtimeavarage ?><br>
	 <br><strong><?php echo $original_title ?></strong><br> <?php echo $data['original_name'] ?><br>
	 <br><strong><?php echo $original_language ?></strong><br> <?php echo str_replace($search20, $replace20, $data['original_language']) ?><br>
	 <br><strong><?php echo $seasons ?></strong><br> 
	 <?php  
	 
	 foreach ($data['seasons'] as $temporada) {
		 echo $temporada['name'];
		 if( !empty ($temporada['overview'])){
		 echo ' - ' . $temporada['overview'];
		 } else {
		 }
	    echo '<br>'; }
		?>
	
	 <br><strong><?php echo $number_of_episodes ?></strong><br> <?php echo $data['number_of_episodes'] ?><br>


	 <br><strong><?php echo $first_air_date ?></strong><br> <?php  echo date('m d Y', strtotime($data['first_air_date'])) ?><br>
	 <br><strong><?php echo $last_air_date ?></strong><br> <?php  echo date('m d Y', strtotime($data['last_air_date'])) ?><br>

	 <br><strong><?php echo $wheretowatch ?></strong><br>
  <?php
	  
	  $input_line = $_SERVER['REQUEST_URI'];
	  preg_match("/([0-9]+)\/?/", $input_line, $output_array);

	  $jsondataprovider = file_get_contents ('https://api.themoviedb.org/3/tv/' . $output_array[1] .'/watch/providers?api_key=' . $api . '');
	  $dataprovider = json_decode($jsondataprovider, true);
	  

 if( !empty ($dataprovider['results']['' . $countryprovider . '']['flatrate'])){
		   echo 'Streaming: <a href="http://www.' . str_replace($search10, $replace10, $dataprovider['results']['' . $countryprovider . '']['flatrate']['0']['provider_name']) . '" target="_blank">' . $dataprovider['results']['' . $countryprovider . '']['flatrate']['0']['provider_name'] . '</a> ';
		} else {
		   echo ' ';
		};
 if( !empty ($dataprovider['results']['' . $countryprovider . '']['flatrate']['1'])){
		   echo '| <a href="http://www.' . str_replace($search10, $replace10, $dataprovider['results']['' . $countryprovider . '']['flatrate']['1']['provider_name']) . '" target="_blank">' . $dataprovider['results']['' . $countryprovider . '']['flatrate']['1']['provider_name'] . '</a> ';
		} else {
		};	
 if( !empty ($dataprovider['results']['' . $countryprovider . '']['flatrate']['2'])){
		   echo '| <a href="http://www.' . str_replace($search10, $replace10, $dataprovider['results']['' . $countryprovider . '']['flatrate']['2']['provider_name']) . '" target="_blank">' . $dataprovider['results']['' . $countryprovider . '']['flatrate']['2']['provider_name'] . '</a> ';
		} else {
		};		
 if( !empty ($dataprovider['results']['' . $countryprovider . '']['flatrate']['3'])){
		   echo '| <a href="http://www.' . str_replace($search10, $replace10, $dataprovider['results']['' . $countryprovider . '']['flatrate']['3']['provider_name']) . '" target="_blank">' . $dataprovider['results']['' . $countryprovider . '']['flatrate']['3']['provider_name'] . '</a> ';
		} else {
		};			
		
 if( !empty ($dataprovider['results']['' . $countryprovider . '']['ads'])){
				   echo '<br>' . $free . ' <a href="http://www.' . str_replace($search10, $replace10, $dataprovider['results']['' . $countryprovider . '']['ads']['0']['provider_name']) . '" target="_blank">' . $dataprovider['results']['' . $countryprovider . '']['ads']['0']['provider_name'] . '</a> ';
				} else {
				   echo ' ';
				};
		 if( !empty ($dataprovider['results']['' . $countryprovider . '']['ads']['1'])){
				   echo '| <a href="http://www.' . str_replace($search10, $replace10, $dataprovider['results']['' . $countryprovider . '']['ads']['1']['provider_name']) . '" target="_blank">' . $dataprovider['results']['' . $countryprovider . '']['ads']['1']['provider_name'] . '</a> ';
				} else {
				};	
		 if( !empty ($dataprovider['results']['' . $countryprovider . '']['ads']['2'])){
				   echo '| <a href="http://www.' . str_replace($search10, $replace10, $dataprovider['results']['' . $countryprovider . '']['ads']['2']['provider_name']) . '" target="_blank">' . $dataprovider['results']['' . $countryprovider . '']['ads']['2']['provider_name'] . '</a> ';
				} else {
				};	
				
if( !empty ($dataprovider['results']['' . $countryprovider . '']['rent'])){
						   echo '<br>' . $rent . '<a href="http://www.' . str_replace($search10, $replace10, $dataprovider['results']['' . $countryprovider . '']['rent']['0']['provider_name']) . '" target="_blank">' . $dataprovider['results']['' . $countryprovider . '']['rent']['0']['provider_name'] . '</a> ';
						} else {
						   echo ' ';
						};
				 if( !empty ($dataprovider['results']['' . $countryprovider . '']['rent']['1'])){
						   echo '| <a href="http://www.' . str_replace($search10, $replace10, $dataprovider['results']['' . $countryprovider . '']['rent']['1']['provider_name']) . '" target="_blank">' . $dataprovider['results']['' . $countryprovider . '']['rent']['1']['provider_name'] . '</a> ';
						} else {
						};	
				 if( !empty ($dataprovider['results']['' . $countryprovider . '']['rent']['2'])){
						   echo '| <a href="http://www.' . str_replace($search10, $replace10, $dataprovider['results']['' . $countryprovider . '']['rent']['2']['provider_name']) . '" target="_blank">' . $dataprovider['results']['' . $countryprovider . '']['rent']['2']['provider_name'] . '</a> ';
						} else {
						};									
?>
<br>
<br>
  			
  <?php
   $input_line = $_SERVER['REQUEST_URI'];
   preg_match("/([0-9]+)\/?/", $input_line, $output_array);
  $infovideo = 'https://api.themoviedb.org/3/tv/' . $output_array[1] . '/videos?api_key=' . $api . '';
  $trailer = "Trailer";
  $jsondataA3 = file_get_contents ($infovideo);  
  $datavideo = json_decode($jsondataA3, true);
  ?>
  
  <?php
  foreach ($datavideo['results'] as $video)
	  {
	  if ($video['type'] == $trailer)
		  {
	  echo '<iframe width="100%" height="315" src="https://www.youtube.com/embed/' . $video['key'] . '"></iframe><br>';
	  } else {
	  echo ' ';
	   }  
	  }
	  ?>
  
	
 
