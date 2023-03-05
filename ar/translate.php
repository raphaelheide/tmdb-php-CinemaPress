<?php
$country = 'ar';
$countryprovider = 'AR';
$languageid = 'es-AR';
$countrylang = 'Argentina - Español';
$placeholder = 'BÚSQUEDA DE PELÍCULAS, SERIES Y PERSONAS';
$director = 'Dirección';
$cast = 'Elenco';
$crew = 'Producción';
$genre = 'Género';
$runtime = 'Duración';
$original_title = 'Título original';
$original_language = 'Idioma original';
$budget = 'Presupuesto';
$revenue = 'Recopilación';
$released = 'Lanzamiento';
$dvd = 'Disponible en streaming o DVD';
$rated = 'Clasificación';
$wheretowatch = 'Donde mirar';
$minutes = ' minutos';
$dolars = ' dolares';
$people = 'gente';
$credits = 'Créditos';
$knownfor = 'Conocido por';
$birthdayandplace = 'Nacimiento';
$at = ' en ';
$alsoknownas = 'También conocido como';
$deathday = 'Muerte';
$created_by = 'Criado por';
$seasons= 'Temporadas';
$number_of_episodes = 'Número de episodios';
$first_air_date = 'Primer episodio';
$last_air_date = 'Último episodio';
$free = 'Gratis: ';
$rent = 'Alquilar: ';
$runtimeavarage = ' minutos en promedio';
$andmore = 'y más';
$allcast = ' Todos los creditos';
$inpeople = ' en las personas';
$inshows = ' en series';
$inmovie = ' en películas';

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
	'Sin clasificar', //Sin clasificar
	'Enero', //Enero
	'febrero', //febrero
	'marzo', //marzo
	'abril', //abril
	'Mayo', //Mayo
	'Junio', //Junio
	'Julio', //Julio
	'agosto', //agosto
	'septiembre', //septiembre
	'Octubre', //Octubre
	'Noviembre', //Noviembre
	'Diciembre', //diciembre
	'Sin información', //N/A
	'18 años', //R
	'Libre', // Aprobado
	'12 años', //PG-13
	'Libre', //PG
	'No apto para menores de 17 años' //TV-MA
);


//OSCAR AND NOMINATIONS
 $search2 = array(
	 'Won', 
	 'wins', 
	 'nominations total', 
	 'nominations', 
	 'Oscars.', 
	 '&', 
	 'Nominated for', 
	 'N/A', 
	 'win', 
	 'Oscar.', 
	 'nomination'
 );
 $replace2 = array(
	'ganado',
	'premios',
	'indicaciones en total',
	'nominaciones a premios',
	'Oscar, ganó',
	'y',
	'Indicado para',
	'Esta película no tiene nominaciones a premios',
	'otorgar',
	'Óscar',
	'recomendación',
 );

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
	 'Inglés',
	 'Español',
	 'Portugués',
	 'Japonés',
	 'Chino',
	 'Hindi',
	 'Francés', 
	 'te');
	 
//DEPARTMENT
$depart1 = array(
	'Various Characters', 
	'Creative', 
	'Animation Department Coordinator', 
	'Author', 
	'Original Music Composer', 
	'Songs', 
	'Additional Voices', 
	'Theme Song Performance', 
	'Music', 
	'Additional Soundtrack', 
	'Soundtrack',  
	'Voice', 
	'Visual Effects Art Director', 
	'uncredited', 
	'Performer', 
	'voice', 
	'Narrator', 
	'Host', 
	'Guest', 
	'Herself', 
	'Consultant', 
	'Visual Effects', 
	'Visual Effects Art Director', 
	'Art Direction', 
	'Executive Producer', 
	'Producer', 
	'Self (archive footage)', 
	'(archive footage)', 
	'Self', 
	'Director', 
	'Editor', 
	'Screenplay', 
	'Story', 
	'Characters', 
	' (Archival Footage)', 
	'Filmmaker', 
	'Creator', 
	'Himself', 
	'Production Assistant', 
	'Cinematography', 
	'Writer', 
	'Visual Effects Design Consultant', 
	'Thanks', 
	'Production Design'
);
$depart2 = array(
	'Elenco - varios',
	'Creativo',
	'Coordinador del Departamento de Animación',
	'Autor',
	'Música original',
	'Canciones',
	'Voces Adicionales',
	'Tema musical',
	'Música',
	'Banda sonora adicional',
	'Banda sonora',
	'Voz',
	'Dirección de Arte de Efectos Visuales',
	'sin crédito',
	'preforma',
	'voz',
	'Narración',
	'Anfitrión',
	'Invitado',
	'Sí misma',
	' - Consultor',
	'Efectos visuales',
	'Dirección de Arte de Efectos Visuales',
	'Dirección artística',
	'Producción ejecutiva',
	'Producción',
	'Él/ella misma',
	'(archivo personal)',
	'Él/ella misma',
	'Dirección',
	'Edición',
	'Mapa vial',
	'Estructura narrativa',
	'Elenco',
	' (Archivos de película)',
	'Cineasta',
	'Creación',
	'Él mismo',
	'Asistente de producción',
	'Cinematografía',
	'Mapa vial',
	'Consultor de diseño de efectos visuales',
	'Agradecimientos',
	'Diseño de producción'
);
	 

//NO MODIFICATE
 $search = array (' ', 'Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'ç', 'ã', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
 $replace = array ('-', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u', 'c', 'a', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
 $search30 = array (' ', ':', 'Directing', 'Acting');
 $replace30 = array ('+', '', 'Direção', 'Atuação');
 ?>



