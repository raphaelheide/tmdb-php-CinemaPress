
<!doctype html>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<br>
<div align="center">
	<?php
	include ('../../api.php');
	include ('../api.php');
	include ('translate.php');
	include ('../channels.php');
	include ('../../channels.php');
	include ('../menu.php');
	include ('../../menu.php');	
	?>
</div>
	


<link rel="stylesheet" href="../css/mypixeland.css">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/search.css">
<link rel="stylesheet" href="../css/appmy.min.css">
<link rel="stylesheet" href="../css/glide.core.min.css">

<br>



<style>
:root {
	--primary-color: #00bcd4;
	--accent-color: #f50057;

	--text-color: #263238;
	--body-color: #fff;
	--main-font: 'roboto';
	--font-bold: 700;
	--font-regular: 400;
}
* { box-sizing: border-box }

body {
	color: var(--text-color);
	background-color: var(--body-color);
	font-family: var(--main-font), Arial;
	font-weight: var(--font-regular);
}
main{ 
	display: content;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	width: 100vw;
	height: 50px;
	padding-left: 5%;
	padding-right: 5%;
}
h1 { font-weight: var(--font-bold) }
input, 
button {
	border: none;
	background: none;
	outline: 0;
}
button {cursor: pointer}
.SearchBox-input::placeholder {/* No es un seudoelemento estandar */
 color:white;
	opacity: .6;
}
/* Chrome, Opera ySafari */
.SearchBox-input::-webkit-input-placeholder {
  color: white;
}
/* Firefox 19+ */
.SearchBox-input::-moz-placeholder {
  color: white;
}
/* IE 10+ y Edge */
.SearchBox-input:-ms-input-placeholder {
  color: white;
}
/* Firefox 18- */
#formGroupExampleInput:-moz-placeholder {
  color: white;
}



.SearchBox {
	--height: 4em;
	display: flex;
	
	border-radius: var(--height);
	background-color: var(--primary-color);
	height: var(--height);
}
	.SearchBox:hover .SearchBox-input {
		padding-left: 2em;
		padding-right: 1em;
		width: 240px;
	}
	.SearchBox-input {
		width: 350px;
		font-size: 1.2em;
		padding-left: 20px;
		color: #fff;
		transition: .45s;
	}
	.SearchBox-button {
		display: flex;
		border-radius: 50%;
		width: var(--height);
		height: var(--height);
		background-color: var(--accent-color);
		transition: .3s;
	}
	
	.SearchBox-icon {
		margin: auto;
		color: #fff;
		margin-right: 10px;
	}


@media screen and (min-width: 320px){
	.SearchBox:hover .SearchBox-input {
		width: 100%;
	}
}
</style>

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<main>

	<?php echo '<form action="' . $site . '/' . $country . '" method="get">'; ?>
	<div class="SearchBox">
		
		<input type="text"  class="SearchBox-input" name="cinemapress" placeholder="<?php echo $placeholder ?> ">
	
				<i class="SearchBox-icon  material-icons">search</i>
		
		
	</div>
	</form>
</main>


<?php
$input_line = $_SERVER['QUERY_STRING'];
$buscar = array ('', 'cinemapress=', 'buscar=', ' ', 'Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'ç', 'ã', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
$mudar = array ('', '', '', '-', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u', 'c', 'a', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
preg_match("/([0-9]+)\/?/", $input_line, $output_array);
$infogeral = 'https://api.themoviedb.org/3/search/multi?api_key='. $api . '&query=' .  str_replace($buscar, $mudar, $input_line) . '&include_adult=false&language=' . $languageid . '';
$jsondatageral= file_get_contents ($infogeral);  
$datageral = json_decode($jsondatageral, true);

?>


<br>
 <div class="mx-auto " align="center" >
	<div class="rz-explore-listings">
<?php 
	foreach ($datageral['results'] as $resultado) {
		if ( ($resultado['media_type']) == 'person') {
		echo '<a href="../' . $country . '/person/?'. $resultado['id'] . '/' . str_replace($buscar, $mudar, $resultado['name']) . '"><strong>' .$resultado['name'] . '</strong></a>';
		echo $inpeople;
	
	} 
		if ( ($resultado['media_type']) == 'tv') {
		echo '<a href="../' . $country . '/tv/?'. $resultado['id'] . '/' . str_replace($buscar, $mudar, $resultado['name']) . '">' .$resultado['name'] . '</a>';
		echo $inshows . '  - '  . date('Y', strtotime($resultado['first_air_date']))  ;
	
	} 
		if ( ($resultado['media_type']) == 'movie') {
		echo '<a href="../' . $country . '/movie/?'. $resultado['id'] . '/' . str_replace($buscar, $mudar, $resultado['title']) . '">' . $resultado['title'] . '</a>';
		echo $inmovie . ' - ' . date('Y', strtotime($resultado['release_date']))  ;
	
		} 
		echo '<br>';
	}
	
	?>  

	</div>

</div>
