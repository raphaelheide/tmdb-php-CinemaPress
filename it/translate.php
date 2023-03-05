<?php
$country = 'it';
$countryprovider = 'IT';
$languageid = 'it-IT';
$countrylang = 'Italia - Italiano';
$placeholder = 'CERCA FILM, SPETTACOLI E PERSONE';
$director = 'Direttore';
$cast = 'Lancio';
$crew = 'Equipaggio';
$genre = 'Genere';
$runtime = 'Tempo di esecuzione';
$original_title = 'Titolo originale';
$original_language = 'Lingua originale';
$budget = 'Bilancio';
$revenue = 'Reddito';
$released = 'Rilasciato';
$dvd = 'Disponibile in streaming o DVD';
$rated = 'Classificato';
$wheretowatch = 'Dove guardare';
$minutes = ' minuti';
$dolars = ' dollari';
$people = 'persone';
$credits = 'Crediti';
$knownfor = 'Conosciuto per';
$birthdayandplace = 'Compleanno';
$at = ' a ';
$alsoknownas = 'Conosciuto anche come';
$deathday = 'Giorno della morte';
$created_by = 'Creato da';
$seasons= 'Le stagioni';
$number_of_episodes = 'Numero di episodi';
$first_air_date = 'Primo appuntamento';
$last_air_date = 'Ultima data';
$free = 'Gratuito: ';
$rent = 'Affitto: ';
$runtimeavarage = ' media dei minuti';
$andmore = 'e altro ancora';
$allcast = ' Tutto cast';
$inpeople = ' nelle persone';
$inshows = ' negli spettacoli';
$inmovie = ' nei film';



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
'Non classificato', //Non classificato
'Gennaio', //gennaio
'Febbraio', //Feb
'Marzo', //Mar
'Aprile', //Apr
'Maggio', //maggio
'Giugno', //giugno
'Luglio', //luglio
'Agosto', //Agosto
'Settembre', //settembre
'Ottobre', //Ott
'Novembre', //novembre
'Dicembre', //dicembre
'Nessuna informazione', //N/D
'R', //R
'Riuscito', //Riuscito
'PG-13', //PG-13
'PG', //PG
'TV-MA' //TV-MA
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
 'Vinto',
 'premi',
 'indicazioni in totale',
 'nomination ai premi',
 'Oscar, vinto',
 'e',
 'Indicato per',
 'Questo film non ha nomination ai premi',
 'premio',
 'Oscar',
 'raccomandazione',
 );


//LANGUAGES
 $search20 = array (
	 '_', 
	 ' ', 
	 'es', 
	 'en', 
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
	 'Espanol', 
	 'Inglese ',
	 'portoghese',
	 'giapponese',
	 'Chines',
	 'Hindi',
	 'Francesco',
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
		'Cast - vari',
		'Creativo',
		'Coordinatore del Dipartimento di Animazione',
		'Autore',
		'Musica originale',
		'Canzoni',
		'Voci aggiuntive',
		'Sigla',
		'Musica',
		'Colonna sonora aggiuntiva',
		'Colonna sonora',
		'Voce',
		'Direzione artistica degli effetti visivi',
		'senza credito',
		'Preformata',
		'voce',
		'Narrazione',
		'Ospite',
		'Ospite',
		'Se stessa',
		' - Consulente',
		'Effetti visivi',
		'Direzione artistica degli effetti visivi',
		'Direzione artistica',
		'Produzione esecutiva',
		'Produzione',
		'Lui/Se stessa',
		'(archivio personale)',
		'Lui/Se stessa',
		'Direzione',
		'Edizione',
		'Carta stradale',
		'Struttura narrativa',
		'Lancio',
		' (File film)',
		'regista',
		'Creazione',
		'Lui stesso',
		'Assistente di produzione',
		'Cinematografia',
		'Carta stradale',
		'Consulente per la progettazione di effetti visivi',
		'Grazie',
		'Design di produzione'
	 );
	 

//NO MODIFICATE
 $search = array (' ', 'Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'ç', 'ã', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
 $replace = array ('-', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u', 'c', 'a', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
 $search30 = array (' ', ':', 'Directing', 'Acting');
 $replace30 = array ('+', '', 'Regia', 'Recitazione');
 ?>



