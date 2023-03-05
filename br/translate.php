<?php
$country = 'br';
$countryprovider = 'BR';
$languageid = 'pt-BR';
$countrylang = 'Brasil - Português';
$placeholder = 'BUSQUE FILMES, SÉRIES E PESSOAS';
$director = 'Direção';
$cast = 'Elenco';
$crew = 'Produção';
$genre = 'Gênero';
$runtime = 'Duração';
$original_title = 'Título original';
$original_language = 'Idioma original';
$budget = 'Orçamento';
$revenue = 'Arrecadação';
$released = 'Lançamento';
$dvd = 'Disponível em streaming ou DVD';
$rated = 'Classificação';
$wheretowatch = 'Onde assistir';
$minutes = ' minutos';
$dolars = ' dólares';
$people = 'pessoas';
$credits = 'Créditos';
$knownfor = 'Conhecido por';
$birthdayandplace = 'Nascimento';
$at = ' em ';
$alsoknownas = 'Também conhecido como';
$deathday = 'Falecimento';
$created_by = 'Criado por';
$seasons= 'Temporadas';
$number_of_episodes = 'Número de Episódios';
$first_air_date = 'Primeiro episódio';
$last_air_date = 'Último episódio';
$free = 'Grátis: ';
$rent = 'Alugar: ';
$runtimeavarage = ' minutos em média';
$andmore = 'e mais';
$allcast = ' Todos os créditos';
$inpeople = ' em pessoas';
$inshows = ' em shows';
$inmovie = ' em filmes';

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
	'Sem classificação', //Not Rated
	'Janeiro', //Jan
	'Fevereiro', //Feb
	'Março', //Mar
	'Abril', //Apr
	'Maio', //May
	'Junho', //Jun
	'Julho', //Jul
	'Agosto', //Aug
	'Setembro', //Sep
	'Outubro', //Oct
	'Novembro', //Nov
	'Dezembro', //Dec
	'Sem informação',  //N/A
	'18 anos', //R
	'Livre', //Passed
	'12 anos',  //PG-13
	'Livre', //PG
	'Não adequado para menores de 17 anos' //TV-MA
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
	 'Venceu', 
	 'prêmios', 
	 'indicações no total', 
	 'indicações a prêmios', 
	 'Oscars, ganhou ', 
	 'e', 
	 'Indicado para', 
	 'Este filme não teve nenhuma indicação a prêmios', 
	 'prêmio', 
	 'Oscar,', 
	 'indicação'
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
	 'Inglês', 
	 'Espanhol', 
	 'Português', 
	 'Japonês', 
	 'Chinês', 
	 'Hindi', 
	 'Francês', 
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
	'Elenco - vários', 
	'Criativo', 
	'Coordenador do Departmento de Animação', 
	'Autor', 
	'Música Original', 
	'Músicas', 
	'Vozes Adicionais', 
	'Música-tema', 
	'Música', 
	'Trilha Sonora Adicional', 
	'Trilha Sonora',  
	'Voz', 
	'Direção de Arte de Efeitos Visuais', 
	'sem crédito', 
	'Preformace', 
	'voz', 
	'Narração', 
	'Anfitrião', 
	'Convidado', 
	'Ela mesmo', 
	' - Consultor', 
	'Efeitos Visuais', 
	'Direção de Arte de Efeitos Visuais', 
	'Direção de Arte', 
	'Produção Executiva', 
	'Produção', 
	'Ele/Ela Mesmo', 
	'(arquivo pessoal)', 
	'Ele/Ela mesmo', 
	'Direção', 
	'Edição', 
	'Roteiro', 
	'Estrutura Narrativa', 
	'Elenco',  
	' (Arquivos de Filmes)', 
	'Cineasta', 
	'Criação', 
	'Ele mesmo', 
	'Assistente de Produção', 
	'Cinematográfia', 
	'Roteiro', 
	'Consultor de Design de Efeitos Visuais', 
	'Agradecimentos', 
	'Design de Produção'
);
	 

//NO MODIFICATE
 $search = array (' ', 'Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'ç', 'ã', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
 $replace = array ('-', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u', 'c', 'a', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
 $search30 = array (' ', ':', 'Directing', 'Acting');
 $replace30 = array ('+', '', 'Direção', 'Atuação');
 ?>



