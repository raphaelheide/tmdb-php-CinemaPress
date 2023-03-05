<?php
$country = 'gb';
$countryprovider = 'GB';
$languageid = 'en-GB';
$countrylang = 'England - English';
$placeholder = 'SEARCH MOVIES, SHOWS AND PEOPLE';
$director = 'Director';
$cast = 'Cast';
$crew = 'Crew';
$genre = 'Genre';
$runtime = 'Runtime';
$original_title = 'Original title';
$original_language = 'Original language';
$budget = 'Budget';
$revenue = 'Revenue';
$released = 'Released';
$dvd = 'Available in streaming or DVD';
$rated = 'Rated';
$wheretowatch = 'Where to watch';
$minutes = ' minutes';
$dolars = ' dolars';
$people = 'people';
$credits = 'Credits';
$knownfor = 'Known for';
$birthdayandplace = 'Birthday';
$at = ' at ';
$alsoknownas = 'Also known as';
$deathday = 'Deathday';
$created_by = 'Created by';
$seasons= 'Seasons';
$number_of_episodes = 'Number of episodes';
$first_air_date = 'First air date';
$last_air_date = 'Last air date';
$free = 'Free: ';
$rent = 'Rent: ';
$runtimeavarage = ' minutes avarage';
$andmore = 'and more';
$allcast = ' All cast';
$inpeople = ' im people';
$inshows = ' in shows';
$inmovie = ' in movies';



//MONTHS AND RATED
$search3 = array(
	'Not Rated', 
	'Jan',
	'Feb', 
	'Mar',
	'Apr', 
	'May',
	'Jun',
	'Jul', 
	'Aug', 
	'Sep', 
	'Oct', 
	'Nov',
	'Dec', 
	'N/A', 
	'R', 
	'Passed', 
	'PG-13', 
	'PG', 
	'TV-MA'
);
$replace3 = array(
	'Not Rated', //Not Rated
	'January', //Jan
	'February', //Feb
	'March', //Mar
	'April', //Apr
	'May', //May
	'June', //Jun
	'July', //Jul
	'August', //Aug
	'September', //Sep
	'Octuber', //Oct
	'November', //Nov
	'December', //Dec
	'No information',  //N/A
	'R', //R
	'Passed', //Passed
	'PG-13',  //PG-13
	'PG', //PG
	'TV-MA' //TV-MA
);


//OSCAR AND NOMINATIONS

//LANGUAGES
 $search20 = array (
	 '_', 
	 ' ', 
	 'en', 
	 'es', 
	 'pt', 
	 'ja', 
	 'cn', 
	 'hi', 
	 'fr', 
	 'te'
 );
 $replace20 = array (
	 '+', 
	 '%20', 
	 'Inglês', 
	 'Espanhol', 
	 'Português', 
	 'Japonês', 
	 'Chinês', 
	 'Hindi', 
	 'Francês', 
	 'te');
	 
//DEPARTMENT

	 

//NO MODIFICATE
 $search = array (' ', 'Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'ç', 'ã', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
 $replace = array ('-', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u', 'c', 'a', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
 $search30 = array (' ', ':', 'Directing', 'Acting');
 $replace30 = array ('+', '', 'Directing', 'Acting');
 ?>



