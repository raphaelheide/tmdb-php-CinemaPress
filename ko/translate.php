<?php
$country = 'ko';
$countryprovider = 'KR';
$languageid = 'ko-KR';
$countrylang = '한국 - 한국인';
$placeholder = '영화, 시리즈 및 인물 검색';
$director = '방향';
$cast = '깁스';
$crew = '생산';
$genre = '성별';
$runtime = '지속';
$original_title = '원래 제목';
$original_language = '언어';
$budget = '예산';
$revenue = '수집';
$released = '시작하다';
$dvd = '스트리밍 또는 DVD에서 사용 가능';
$rated = '분류';
$wheretowatch = '볼 수 있는 곳';
$minutes = ' 분';
$dolars = ' 불화';
$people = '사람들';
$credits = '학점';
$knownfor = '알려진';
$birthdayandplace = '출생';
$at = ' ~에 ';
$alsoknownas = '또한 ~으로 알려진';
$deathday = '죽음';
$created_by = '작성자';
$seasons= '계절';
$number_of_episodes = '에피소드 수';
$first_air_date = '첫 번째 에피소드';
$last_air_date = '마지막 에피소드';
$free = '무료: ';
$rent = '고용하다: ';
$runtimeavarage = ' 평균 분';
$andmore = '그리고 더';
$allcast = ' 모든 크레딧';
$inpeople = ' 사람들 속에서';
$inshows = ' 콘서트에서';
$inmovie = ' 영화에서';

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
	'등급 없음', //등급 없음
	'1월', //1월
	'2월', //2월
	'3월', //3월
	'4월', //4월
	'5월', //5월
	'준', //준
	'7월', //7월
	'8월', //8월
	'9월', //9월
	'10월', //10월
	'11월', //11월
	'12월', //12월
	'정보 없음', //해당 없음
	'18세', //R
	'무료', //합격
	'12년', //PG-13
	'무료', //PG
	'17세 미만의 어린이에게 적합하지 않음', //TV-MA
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
	'이겼다',
	'상',
	'총 표시',
	'수상 후보',
	'오스카상 수상',
	'그것은',
	'에 대한 표시',
	'이 영화는 수상 후보가 없습니다',
	'상',
	'오스카',
	'추천',
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
	 '영어',
	 '스페인의',
	 '포르투갈 인',
	 '일본어',
	 '중국인',
	 '힌디 어',
	 '프랑스 국민', 
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
	'캐스트 - 다양한',
	'창의적인',
	'애니메이션학과 코디네이터',
	'작가',
	'오리지널 뮤직',
	'노래',
	'추가 음성',
	'주제가',
	'음악',
	'추가 사운드트랙',
	'사운드 트랙',
	'목소리',
	'시각효과 아트디렉션',
	'크레딧 없이',
	'프리포메이스',
	'목소리',
	'화법',
	'주인',
	'손님',
	'그녀 자신',
	' - 컨설턴트',
	'시각 효과',
	'시각효과 아트디렉션',
	'아트디렉션',
	'이그제큐티브 프로덕션',
	'생산',
	'그/자신',
	'(개인 아카이브)',
	'그/자신',
	'방향',
	'판',
	'로드맵',
	'내러티브 구조',
	'깁스',
	' (동영상 파일)',
	'영화인',
	'창조',
	'그 자신',
	'생산 보조',
	'영화 촬영법',
	'로드맵',
	'시각효과 디자인 컨설턴트',
	'감사해요',
	'프로덕션 디자인'
);
	 

//NO MODIFICATE
 $search = array (' ', 'Á', 'á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'ç', 'ã', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
 $replace = array ('-', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u', 'c', 'a', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
 $search30 = array (' ', ':', 'Directing', 'Acting');
 $replace30 = array ('+', '', '방향', '성능');
 ?>



