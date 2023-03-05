<?php

 $input_line = $_SERVER['REQUEST_URI'];
  preg_match("/([0-9]+)\/?/", $input_line, $output_array);

$info = 'https://api.themoviedb.org/3/person/' . $output_array[1] . '/combined_credits?api_key=' . $api . '&language=' . $languageid . '';

$movie = "movie";
$tv = "tv";
$ano2029 = "2029";
$ano2028 = "2028";
$ano2027 = "2027";
$ano2026 = "2026";
$ano2025 = "2025";
$ano2024 = "2024";
$ano2023 = "2023";
$ano2022 = "2022";
$ano2021 = "2021";
$ano2020 = "2020";
$ano2019 = "2019";
$ano2018 = "2018";
$ano2017 = "2017";
$ano2016 = "2016";
$ano2015 = "2015";
$ano2014 = "2014";
$ano2013 = "2013";
$ano2012 = "2012";
$ano2011 = "2011";
$ano2010 = "2010";
$ano2009 = "2009";
$ano2008 = "2008";
$ano2007 = "2007";
$ano2006 = "2006";
$ano2005 = "2005";
$ano2004 = "2004";
$ano2003 = "2003";
$ano2002 = "2002";
$ano2001 = "2001";
$ano2000 = "2000";
$ano1999 = "1999";
$ano1998 = "1998";
$ano1997 = "1997";
$ano1996 = "1996";
$ano1995 = "1995";
$ano1994 = "1994";
$ano1993 = "1993";
$ano1992 = "1992";
$ano1991 = "1991";
$ano1990 = "1990";
$ano1989 = "1989";
$ano1988 = "1988";
$ano1987 = "1987";
$ano1986 = "1986";
$ano1985 = "1985";
$ano1984 = "1984";
$ano1983 = "1983";
$ano1982 = "1982";
$ano1981 = "1981";
$ano1980 = "1980";
$ano1979 = "1979";
$ano1978 = "1978";
$ano1977 = "1977";
$ano1976 = "1976";
$ano1975 = "1975";
$ano1974 = "1974";
$ano1973 = "1973";
$ano1972 = "1972";
$ano1971 = "1971";
$ano1970 = "1970";
$ano1969 = "1969";
$ano1968 = "1968";
$ano1967 = "1967";
$ano1966 = "1966";
$ano1965 = "1965";
$ano1964 = "1964";
$ano1963 = "1963";
$ano1962 = "1962";
$ano1961 = "1961";
$ano1960 = "1960";
$ano1959 = "1959";
$ano1958 = "1958";
$ano1957 = "1957";
$ano1956 = "1956";
$ano1955 = "1955";
$ano1954 = "1954";
$ano1953 = "1953";
$ano1952 = "1952";
$ano1951 = "1951";
$ano1950 = "1950";
$ano1949 = "1949";
$ano1948 = "1948";
$ano1947 = "1947";
$ano1946 = "1946";
$ano1945 = "1945";
$ano1944 = "1944";
$ano1943 = "1943";
$ano1942 = "1942";
$ano1941 = "1941";
$ano1940 = "1940";


$jsondataA3 = file_get_contents ($info);  
$data = json_decode($jsondataA3, true);

		 
?>

<?php
//ano 2029
foreach ($data['cast'] as $resultado2029MC)
	{
		
	if ($resultado2029MC['media_type'] == $movie)
		{
	if 	(substr($resultado2029MC['release_date'], 0, 4) == $ano2029) {	
	echo substr($resultado2029MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2029MC['id'] . '/' . str_replace($search, $replace, $resultado2029MC['title'])  .  '">' . $resultado2029MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2029MC['id'] . '/' . str_replace($search, $replace, $resultado2029MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2029MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2029MJ)
		{
		if ($resultado2029MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2029MJ['release_date'], 0, 4) == $ano2029) {	
		echo substr($resultado2029MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2029MJ['id'] . '/' . str_replace($search, $replace, $resultado2029MJ['title'])  .  '">' . $resultado2029MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2029MJ['id'] . '/' . str_replace($search, $replace, $resultado2029MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2029MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2029TC)
		{
		if ($resultado2029TC['media_type'] == $tv)
		{
			if (substr($resultado2029TC['first_air_date'], 0, 4) == $ano2029) {
		echo substr($resultado2029TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2029TC['id'] . '/' . str_replace($search, $replace, $resultado2029TC['name'])  .  '">' . $resultado2029TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2029TC['id'] . '/' . str_replace($search, $replace, $resultado2029TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2029TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2029TJ)
		{
		if ($resultado2029TJ['media_type'] == $tv)
		{
		if (substr($resultado2029TJ['first_air_date'], 0, 4) == $ano2029) {
			echo substr($resultado2029TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2029TJ['id'] . '/' . str_replace($search, $replace, $resultado2029TJ['name'])  .  '">' . $resultado2029TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2029TJ['id'] . '/' . str_replace($search, $replace, $resultado2029TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2029TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 

<?php
//ano 2028
foreach ($data['cast'] as $resultado2028MC)
	{
		
	if ($resultado2028MC['media_type'] == $movie)
		{
	if 	(substr($resultado2028MC['release_date'], 0, 4) == $ano2028) {	
	echo substr($resultado2028MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2028MC['id'] . '/' . str_replace($search, $replace, $resultado2028MC['title'])  .  '">' . $resultado2028MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2028MC['id'] . '/' . str_replace($search, $replace, $resultado2028MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2028MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2028MJ)
		{
		if ($resultado2028MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2028MJ['release_date'], 0, 4) == $ano2028) {	
		echo substr($resultado2028MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2028MJ['id'] . '/' . str_replace($search, $replace, $resultado2028MJ['title'])  .  '">' . $resultado2028MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2028MJ['id'] . '/' . str_replace($search, $replace, $resultado2028MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2028MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2028TC)
		{
		if ($resultado2028TC['media_type'] == $tv)
		{
			if (substr($resultado2028TC['first_air_date'], 0, 4) == $ano2028) {
		echo substr($resultado2028TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2028TC['id'] . '/' . str_replace($search, $replace, $resultado2028TC['name'])  .  '">' . $resultado2028TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2028TC['id'] . '/' . str_replace($search, $replace, $resultado2028TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2028TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2028TJ)
		{
		if ($resultado2028TJ['media_type'] == $tv)
		{
		if (substr($resultado2028TJ['first_air_date'], 0, 4) == $ano2028) {
			echo substr($resultado2028TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2028TJ['id'] . '/' . str_replace($search, $replace, $resultado2028TJ['name'])  .  '">' . $resultado2028TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2028TJ['id'] . '/' . str_replace($search, $replace, $resultado2028TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2028TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2027
foreach ($data['cast'] as $resultado2027MC)
	{
		
	if ($resultado2027MC['media_type'] == $movie)
		{
	if 	(substr($resultado2027MC['release_date'], 0, 4) == $ano2027) {	
	echo substr($resultado2027MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2027MC['id'] . '/' . str_replace($search, $replace, $resultado2027MC['title'])  .  '">' . $resultado2027MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2027MC['id'] . '/' . str_replace($search, $replace, $resultado2027MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2027MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2027MJ)
		{
		if ($resultado2027MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2027MJ['release_date'], 0, 4) == $ano2027) {	
		echo substr($resultado2027MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2027MJ['id'] . '/' . str_replace($search, $replace, $resultado2027MJ['title'])  .  '">' . $resultado2027MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2027MJ['id'] . '/' . str_replace($search, $replace, $resultado2027MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2027MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2027TC)
		{
		if ($resultado2027TC['media_type'] == $tv)
		{
			if (substr($resultado2027TC['first_air_date'], 0, 4) == $ano2027) {
		echo substr($resultado2027TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2027TC['id'] . '/' . str_replace($search, $replace, $resultado2027TC['name'])  .  '">' . $resultado2027TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2027TC['id'] . '/' . str_replace($search, $replace, $resultado2027TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2027TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2027TJ)
		{
		if ($resultado2027TJ['media_type'] == $tv)
		{
		if (substr($resultado2027TJ['first_air_date'], 0, 4) == $ano2027) {
			echo substr($resultado2027TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2027TJ['id'] . '/' . str_replace($search, $replace, $resultado2027TJ['name'])  .  '">' . $resultado2027TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2027TJ['id'] . '/' . str_replace($search, $replace, $resultado2027TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2027TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2026
foreach ($data['cast'] as $resultado2026MC)
	{
		
	if ($resultado2026MC['media_type'] == $movie)
		{
	if 	(substr($resultado2026MC['release_date'], 0, 4) == $ano2026) {	
	echo substr($resultado2026MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2026MC['id'] . '/' . str_replace($search, $replace, $resultado2026MC['title'])  .  '">' . $resultado2026MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2026MC['id'] . '/' . str_replace($search, $replace, $resultado2026MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2026MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2026MJ)
		{
		if ($resultado2026MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2026MJ['release_date'], 0, 4) == $ano2026) {	
		echo substr($resultado2026MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2026MJ['id'] . '/' . str_replace($search, $replace, $resultado2026MJ['title'])  .  '">' . $resultado2026MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2026MJ['id'] . '/' . str_replace($search, $replace, $resultado2026MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2026MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2026TC)
		{
		if ($resultado2026TC['media_type'] == $tv)
		{
			if (substr($resultado2026TC['first_air_date'], 0, 4) == $ano2026) {
		echo substr($resultado2026TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2026TC['id'] . '/' . str_replace($search, $replace, $resultado2026TC['name'])  .  '">' . $resultado2026TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2026TC['id'] . '/' . str_replace($search, $replace, $resultado2026TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2026TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2026TJ)
		{
		if ($resultado2026TJ['media_type'] == $tv)
		{
		if (substr($resultado2026TJ['first_air_date'], 0, 4) == $ano2026) {
			echo substr($resultado2026TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2026TJ['id'] . '/' . str_replace($search, $replace, $resultado2026TJ['name'])  .  '">' . $resultado2026TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2026TJ['id'] . '/' . str_replace($search, $replace, $resultado2026TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2026TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2025
foreach ($data['cast'] as $resultado2025MC)
	{
		
	if ($resultado2025MC['media_type'] == $movie)
		{
	if 	(substr($resultado2025MC['release_date'], 0, 4) == $ano2025) {	
	echo substr($resultado2025MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2025MC['id'] . '/' . str_replace($search, $replace, $resultado2025MC['title'])  .  '">' . $resultado2025MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2025MC['id'] . '/' . str_replace($search, $replace, $resultado2025MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2025MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2025MJ)
		{
		if ($resultado2025MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2025MJ['release_date'], 0, 4) == $ano2025) {	
		echo substr($resultado2025MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2025MJ['id'] . '/' . str_replace($search, $replace, $resultado2025MJ['title'])  .  '">' . $resultado2025MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2025MJ['id'] . '/' . str_replace($search, $replace, $resultado2025MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2025MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2025TC)
		{
		if ($resultado2025TC['media_type'] == $tv)
		{
			if (substr($resultado2025TC['first_air_date'], 0, 4) == $ano2025) {
		echo substr($resultado2025TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2025TC['id'] . '/' . str_replace($search, $replace, $resultado2025TC['name'])  .  '">' . $resultado2025TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2025TC['id'] . '/' . str_replace($search, $replace, $resultado2025TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2025TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2025TJ)
		{
		if ($resultado2025TJ['media_type'] == $tv)
		{
		if (substr($resultado2025TJ['first_air_date'], 0, 4) == $ano2025) {
			echo substr($resultado2025TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2025TJ['id'] . '/' . str_replace($search, $replace, $resultado2025TJ['name'])  .  '">' . $resultado2025TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2025TJ['id'] . '/' . str_replace($search, $replace, $resultado2025TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2025TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2024
foreach ($data['cast'] as $resultado2024MC)
	{
		
	if ($resultado2024MC['media_type'] == $movie)
		{
	if 	(substr($resultado2024MC['release_date'], 0, 4) == $ano2024) {	
	echo substr($resultado2024MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2024MC['id'] . '/' . str_replace($search, $replace, $resultado2024MC['title'])  .  '">' . $resultado2024MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2024MC['id'] . '/' . str_replace($search, $replace, $resultado2024MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2024MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2024MJ)
		{
		if ($resultado2024MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2024MJ['release_date'], 0, 4) == $ano2024) {	
		echo substr($resultado2024MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2024MJ['id'] . '/' . str_replace($search, $replace, $resultado2024MJ['title'])  .  '">' . $resultado2024MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2024MJ['id'] . '/' . str_replace($search, $replace, $resultado2024MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2024MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2024TC)
		{
		if ($resultado2024TC['media_type'] == $tv)
		{
			if (substr($resultado2024TC['first_air_date'], 0, 4) == $ano2024) {
		echo substr($resultado2024TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2024TC['id'] . '/' . str_replace($search, $replace, $resultado2024TC['name'])  .  '">' . $resultado2024TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2024TC['id'] . '/' . str_replace($search, $replace, $resultado2024TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2024TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2024TJ)
		{
		if ($resultado2024TJ['media_type'] == $tv)
		{
		if (substr($resultado2024TJ['first_air_date'], 0, 4) == $ano2024) {
			echo substr($resultado2024TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2024TJ['id'] . '/' . str_replace($search, $replace, $resultado2024TJ['name'])  .  '">' . $resultado2024TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2024TJ['id'] . '/' . str_replace($search, $replace, $resultado2024TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2024TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2023
foreach ($data['cast'] as $resultado2023MC)
	{
		
	if ($resultado2023MC['media_type'] == $movie)
		{
	if 	(substr($resultado2023MC['release_date'], 0, 4) == $ano2023) {	
	echo substr($resultado2023MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2023MC['id'] . '/' . str_replace($search, $replace, $resultado2023MC['title'])  .  '">' . $resultado2023MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2023MC['id'] . '/' . str_replace($search, $replace, $resultado2023MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2023MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2023MJ)
		{
		if ($resultado2023MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2023MJ['release_date'], 0, 4) == $ano2023) {	
		echo substr($resultado2023MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2023MJ['id'] . '/' . str_replace($search, $replace, $resultado2023MJ['title'])  .  '">' . $resultado2023MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2023MJ['id'] . '/' . str_replace($search, $replace, $resultado2023MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2023MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2023TC)
		{
		if ($resultado2023TC['media_type'] == $tv)
		{
			if (substr($resultado2023TC['first_air_date'], 0, 4) == $ano2023) {
		echo substr($resultado2023TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2023TC['id'] . '/' . str_replace($search, $replace, $resultado2023TC['name'])  .  '">' . $resultado2023TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2023TC['id'] . '/' . str_replace($search, $replace, $resultado2023TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2023TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2023TJ)
		{
		if ($resultado2023TJ['media_type'] == $tv)
		{
		if (substr($resultado2023TJ['first_air_date'], 0, 4) == $ano2023) {
			echo substr($resultado2023TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2023TJ['id'] . '/' . str_replace($search, $replace, $resultado2023TJ['name'])  .  '">' . $resultado2023TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2023TJ['id'] . '/' . str_replace($search, $replace, $resultado2023TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2023TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2022
foreach ($data['cast'] as $resultado2022MC)
	{
		
	if ($resultado2022MC['media_type'] == $movie)
		{
	if 	(substr($resultado2022MC['release_date'], 0, 4) == $ano2022) {	
	echo substr($resultado2022MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2022MC['id'] . '/' . str_replace($search, $replace, $resultado2022MC['title'])  .  '">' . $resultado2022MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2022MC['id'] . '/' . str_replace($search, $replace, $resultado2022MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2022MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2022MJ)
		{
		if ($resultado2022MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2022MJ['release_date'], 0, 4) == $ano2022) {	
		echo substr($resultado2022MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2022MJ['id'] . '/' . str_replace($search, $replace, $resultado2022MJ['title'])  .  '">' . $resultado2022MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2022MJ['id'] . '/' . str_replace($search, $replace, $resultado2022MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2022MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2022TC)
		{
		if ($resultado2022TC['media_type'] == $tv)
		{
			if (substr($resultado2022TC['first_air_date'], 0, 4) == $ano2022) {
		echo substr($resultado2022TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2022TC['id'] . '/' . str_replace($search, $replace, $resultado2022TC['name'])  .  '">' . $resultado2022TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2022TC['id'] . '/' . str_replace($search, $replace, $resultado2022TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2022TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2022TJ)
		{
		if ($resultado2022TJ['media_type'] == $tv)
		{
		if (substr($resultado2022TJ['first_air_date'], 0, 4) == $ano2022) {
			echo substr($resultado2022TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2022TJ['id'] . '/' . str_replace($search, $replace, $resultado2022TJ['name'])  .  '">' . $resultado2022TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2022TJ['id'] . '/' . str_replace($search, $replace, $resultado2022TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2022TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2021
foreach ($data['cast'] as $resultado2021MC)
	{
		
	if ($resultado2021MC['media_type'] == $movie)
		{
	if 	(substr($resultado2021MC['release_date'], 0, 4) == $ano2021) {	
	echo substr($resultado2021MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2021MC['id'] . '/' . str_replace($search, $replace, $resultado2021MC['title'])  .  '">' . $resultado2021MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2021MC['id'] . '/' . str_replace($search, $replace, $resultado2021MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2021MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2021MJ)
		{
		if ($resultado2021MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2021MJ['release_date'], 0, 4) == $ano2021) {	
		echo substr($resultado2021MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2021MJ['id'] . '/' . str_replace($search, $replace, $resultado2021MJ['title'])  .  '">' . $resultado2021MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2021MJ['id'] . '/' . str_replace($search, $replace, $resultado2021MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2021MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2021TC)
		{
		if ($resultado2021TC['media_type'] == $tv)
		{
			if (substr($resultado2021TC['first_air_date'], 0, 4) == $ano2021) {
		echo substr($resultado2021TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2021TC['id'] . '/' . str_replace($search, $replace, $resultado2021TC['name'])  .  '">' . $resultado2021TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2021TC['id'] . '/' . str_replace($search, $replace, $resultado2021TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2021TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2021TJ)
		{
		if ($resultado2021TJ['media_type'] == $tv)
		{
		if (substr($resultado2021TJ['first_air_date'], 0, 4) == $ano2021) {
			echo substr($resultado2021TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2021TJ['id'] . '/' . str_replace($search, $replace, $resultado2021TJ['name'])  .  '">' . $resultado2021TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2021TJ['id'] . '/' . str_replace($search, $replace, $resultado2021TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2021TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2020
foreach ($data['cast'] as $resultado2020MC)
	{
		
	if ($resultado2020MC['media_type'] == $movie)
		{
	if 	(substr($resultado2020MC['release_date'], 0, 4) == $ano2020) {	
	echo substr($resultado2020MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2020MC['id'] . '/' . str_replace($search, $replace, $resultado2020MC['title'])  .  '">' . $resultado2020MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2020MC['id'] . '/' . str_replace($search, $replace, $resultado2020MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2020MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2020MJ)
		{
		if ($resultado2020MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2020MJ['release_date'], 0, 4) == $ano2020) {	
		echo substr($resultado2020MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2020MJ['id'] . '/' . str_replace($search, $replace, $resultado2020MJ['title'])  .  '">' . $resultado2020MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2020MJ['id'] . '/' . str_replace($search, $replace, $resultado2020MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2020MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2020TC)
		{
		if ($resultado2020TC['media_type'] == $tv)
		{
			if (substr($resultado2020TC['first_air_date'], 0, 4) == $ano2020) {
		echo substr($resultado2020TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2020TC['id'] . '/' . str_replace($search, $replace, $resultado2020TC['name'])  .  '">' . $resultado2020TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2020TC['id'] . '/' . str_replace($search, $replace, $resultado2020TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2020TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2020TJ)
		{
		if ($resultado2020TJ['media_type'] == $tv)
		{
		if (substr($resultado2020TJ['first_air_date'], 0, 4) == $ano2020) {
			echo substr($resultado2020TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2020TJ['id'] . '/' . str_replace($search, $replace, $resultado2020TJ['name'])  .  '">' . $resultado2020TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2020TJ['id'] . '/' . str_replace($search, $replace, $resultado2020TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2020TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2019
foreach ($data['cast'] as $resultado2019MC)
	{
		
	if ($resultado2019MC['media_type'] == $movie)
		{
	if 	(substr($resultado2019MC['release_date'], 0, 4) == $ano2019) {	
	echo substr($resultado2019MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2019MC['id'] . '/' . str_replace($search, $replace, $resultado2019MC['title'])  .  '">' . $resultado2019MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2019MC['id'] . '/' . str_replace($search, $replace, $resultado2019MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2019MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2019MJ)
		{
		if ($resultado2019MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2019MJ['release_date'], 0, 4) == $ano2019) {	
		echo substr($resultado2019MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2019MJ['id'] . '/' . str_replace($search, $replace, $resultado2019MJ['title'])  .  '">' . $resultado2019MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2019MJ['id'] . '/' . str_replace($search, $replace, $resultado2019MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2019MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2019TC)
		{
		if ($resultado2019TC['media_type'] == $tv)
		{
			if (substr($resultado2019TC['first_air_date'], 0, 4) == $ano2019) {
		echo substr($resultado2019TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2019TC['id'] . '/' . str_replace($search, $replace, $resultado2019TC['name'])  .  '">' . $resultado2019TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2019TC['id'] . '/' . str_replace($search, $replace, $resultado2019TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2019TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2019TJ)
		{
		if ($resultado2019TJ['media_type'] == $tv)
		{
		if (substr($resultado2019TJ['first_air_date'], 0, 4) == $ano2019) {
			echo substr($resultado2019TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2019TJ['id'] . '/' . str_replace($search, $replace, $resultado2019TJ['name'])  .  '">' . $resultado2019TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2019TJ['id'] . '/' . str_replace($search, $replace, $resultado2019TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2019TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 

<?php
//ano 2018
foreach ($data['cast'] as $resultado2018MC)
	{
		
	if ($resultado2018MC['media_type'] == $movie)
		{
	if 	(substr($resultado2018MC['release_date'], 0, 4) == $ano2018) {	
	echo substr($resultado2018MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2018MC['id'] . '/' . str_replace($search, $replace, $resultado2018MC['title'])  .  '">' . $resultado2018MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2018MC['id'] . '/' . str_replace($search, $replace, $resultado2018MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2018MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2018MJ)
		{
		if ($resultado2018MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2018MJ['release_date'], 0, 4) == $ano2018) {	
		echo substr($resultado2018MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2018MJ['id'] . '/' . str_replace($search, $replace, $resultado2018MJ['title'])  .  '">' . $resultado2018MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2018MJ['id'] . '/' . str_replace($search, $replace, $resultado2018MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2018MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2018TC)
		{
		if ($resultado2018TC['media_type'] == $tv)
		{
			if (substr($resultado2018TC['first_air_date'], 0, 4) == $ano2018) {
		echo substr($resultado2018TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2018TC['id'] . '/' . str_replace($search, $replace, $resultado2018TC['name'])  .  '">' . $resultado2018TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2018TC['id'] . '/' . str_replace($search, $replace, $resultado2018TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2018TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2018TJ)
		{
		if ($resultado2018TJ['media_type'] == $tv)
		{
		if (substr($resultado2018TJ['first_air_date'], 0, 4) == $ano2018) {
			echo substr($resultado2018TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2018TJ['id'] . '/' . str_replace($search, $replace, $resultado2018TJ['name'])  .  '">' . $resultado2018TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2018TJ['id'] . '/' . str_replace($search, $replace, $resultado2018TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2018TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2017
foreach ($data['cast'] as $resultado2017MC)
	{
		
	if ($resultado2017MC['media_type'] == $movie)
		{
	if 	(substr($resultado2017MC['release_date'], 0, 4) == $ano2017) {	
	echo substr($resultado2017MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2017MC['id'] . '/' . str_replace($search, $replace, $resultado2017MC['title'])  .  '">' . $resultado2017MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2017MC['id'] . '/' . str_replace($search, $replace, $resultado2017MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2017MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2017MJ)
		{
		if ($resultado2017MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2017MJ['release_date'], 0, 4) == $ano2017) {	
		echo substr($resultado2017MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2017MJ['id'] . '/' . str_replace($search, $replace, $resultado2017MJ['title'])  .  '">' . $resultado2017MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2017MJ['id'] . '/' . str_replace($search, $replace, $resultado2017MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2017MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2017TC)
		{
		if ($resultado2017TC['media_type'] == $tv)
		{
			if (substr($resultado2017TC['first_air_date'], 0, 4) == $ano2017) {
		echo substr($resultado2017TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2017TC['id'] . '/' . str_replace($search, $replace, $resultado2017TC['name'])  .  '">' . $resultado2017TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2017TC['id'] . '/' . str_replace($search, $replace, $resultado2017TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2017TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2017TJ)
		{
		if ($resultado2017TJ['media_type'] == $tv)
		{
		if (substr($resultado2017TJ['first_air_date'], 0, 4) == $ano2017) {
			echo substr($resultado2017TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2017TJ['id'] . '/' . str_replace($search, $replace, $resultado2017TJ['name'])  .  '">' . $resultado2017TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2017TJ['id'] . '/' . str_replace($search, $replace, $resultado2017TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2017TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2016
foreach ($data['cast'] as $resultado2016MC)
	{
		
	if ($resultado2016MC['media_type'] == $movie)
		{
	if 	(substr($resultado2016MC['release_date'], 0, 4) == $ano2016) {	
	echo substr($resultado2016MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2016MC['id'] . '/' . str_replace($search, $replace, $resultado2016MC['title'])  .  '">' . $resultado2016MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2016MC['id'] . '/' . str_replace($search, $replace, $resultado2016MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2016MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2016MJ)
		{
		if ($resultado2016MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2016MJ['release_date'], 0, 4) == $ano2016) {	
		echo substr($resultado2016MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2016MJ['id'] . '/' . str_replace($search, $replace, $resultado2016MJ['title'])  .  '">' . $resultado2016MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2016MJ['id'] . '/' . str_replace($search, $replace, $resultado2016MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2016MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2016TC)
		{
		if ($resultado2016TC['media_type'] == $tv)
		{
			if (substr($resultado2016TC['first_air_date'], 0, 4) == $ano2016) {
		echo substr($resultado2016TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2016TC['id'] . '/' . str_replace($search, $replace, $resultado2016TC['name'])  .  '">' . $resultado2016TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2016TC['id'] . '/' . str_replace($search, $replace, $resultado2016TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2016TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2016TJ)
		{
		if ($resultado2016TJ['media_type'] == $tv)
		{
		if (substr($resultado2016TJ['first_air_date'], 0, 4) == $ano2016) {
			echo substr($resultado2016TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2016TJ['id'] . '/' . str_replace($search, $replace, $resultado2016TJ['name'])  .  '">' . $resultado2016TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2016TJ['id'] . '/' . str_replace($search, $replace, $resultado2016TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2016TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2015
foreach ($data['cast'] as $resultado2015MC)
	{
		
	if ($resultado2015MC['media_type'] == $movie)
		{
	if 	(substr($resultado2015MC['release_date'], 0, 4) == $ano2015) {	
	echo substr($resultado2015MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2015MC['id'] . '/' . str_replace($search, $replace, $resultado2015MC['title'])  .  '">' . $resultado2015MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2015MC['id'] . '/' . str_replace($search, $replace, $resultado2015MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2015MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2015MJ)
		{
		if ($resultado2015MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2015MJ['release_date'], 0, 4) == $ano2015) {	
		echo substr($resultado2015MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2015MJ['id'] . '/' . str_replace($search, $replace, $resultado2015MJ['title'])  .  '">' . $resultado2015MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2015MJ['id'] . '/' . str_replace($search, $replace, $resultado2015MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2015MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2015TC)
		{
		if ($resultado2015TC['media_type'] == $tv)
		{
			if (substr($resultado2015TC['first_air_date'], 0, 4) == $ano2015) {
		echo substr($resultado2015TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2015TC['id'] . '/' . str_replace($search, $replace, $resultado2015TC['name'])  .  '">' . $resultado2015TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2015TC['id'] . '/' . str_replace($search, $replace, $resultado2015TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2015TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2015TJ)
		{
		if ($resultado2015TJ['media_type'] == $tv)
		{
		if (substr($resultado2015TJ['first_air_date'], 0, 4) == $ano2015) {
			echo substr($resultado2015TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2015TJ['id'] . '/' . str_replace($search, $replace, $resultado2015TJ['name'])  .  '">' . $resultado2015TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2015TJ['id'] . '/' . str_replace($search, $replace, $resultado2015TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2015TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2014
foreach ($data['cast'] as $resultado2014MC)
	{
		
	if ($resultado2014MC['media_type'] == $movie)
		{
	if 	(substr($resultado2014MC['release_date'], 0, 4) == $ano2014) {	
	echo substr($resultado2014MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2014MC['id'] . '/' . str_replace($search, $replace, $resultado2014MC['title'])  .  '">' . $resultado2014MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2014MC['id'] . '/' . str_replace($search, $replace, $resultado2014MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2014MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2014MJ)
		{
		if ($resultado2014MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2014MJ['release_date'], 0, 4) == $ano2014) {	
		echo substr($resultado2014MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2014MJ['id'] . '/' . str_replace($search, $replace, $resultado2014MJ['title'])  .  '">' . $resultado2014MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2014MJ['id'] . '/' . str_replace($search, $replace, $resultado2014MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2014MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2014TC)
		{
		if ($resultado2014TC['media_type'] == $tv)
		{
			if (substr($resultado2014TC['first_air_date'], 0, 4) == $ano2014) {
		echo substr($resultado2014TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2014TC['id'] . '/' . str_replace($search, $replace, $resultado2014TC['name'])  .  '">' . $resultado2014TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2014TC['id'] . '/' . str_replace($search, $replace, $resultado2014TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2014TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2014TJ)
		{
		if ($resultado2014TJ['media_type'] == $tv)
		{
		if (substr($resultado2014TJ['first_air_date'], 0, 4) == $ano2014) {
			echo substr($resultado2014TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2014TJ['id'] . '/' . str_replace($search, $replace, $resultado2014TJ['name'])  .  '">' . $resultado2014TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2014TJ['id'] . '/' . str_replace($search, $replace, $resultado2014TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2014TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2013
foreach ($data['cast'] as $resultado2013MC)
	{
		
	if ($resultado2013MC['media_type'] == $movie)
		{
	if 	(substr($resultado2013MC['release_date'], 0, 4) == $ano2013) {	
	echo substr($resultado2013MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2013MC['id'] . '/' . str_replace($search, $replace, $resultado2013MC['title'])  .  '">' . $resultado2013MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2013MC['id'] . '/' . str_replace($search, $replace, $resultado2013MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2013MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2013MJ)
		{
		if ($resultado2013MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2013MJ['release_date'], 0, 4) == $ano2013) {	
		echo substr($resultado2013MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2013MJ['id'] . '/' . str_replace($search, $replace, $resultado2013MJ['title'])  .  '">' . $resultado2013MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2013MJ['id'] . '/' . str_replace($search, $replace, $resultado2013MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2013MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2013TC)
		{
		if ($resultado2013TC['media_type'] == $tv)
		{
			if (substr($resultado2013TC['first_air_date'], 0, 4) == $ano2013) {
		echo substr($resultado2013TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2013TC['id'] . '/' . str_replace($search, $replace, $resultado2013TC['name'])  .  '">' . $resultado2013TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2013TC['id'] . '/' . str_replace($search, $replace, $resultado2013TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2013TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2013TJ)
		{
		if ($resultado2013TJ['media_type'] == $tv)
		{
		if (substr($resultado2013TJ['first_air_date'], 0, 4) == $ano2013) {
			echo substr($resultado2013TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2013TJ['id'] . '/' . str_replace($search, $replace, $resultado2013TJ['name'])  .  '">' . $resultado2013TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2013TJ['id'] . '/' . str_replace($search, $replace, $resultado2013TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2013TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2012
foreach ($data['cast'] as $resultado2012MC)
	{
		
	if ($resultado2012MC['media_type'] == $movie)
		{
	if 	(substr($resultado2012MC['release_date'], 0, 4) == $ano2012) {	
	echo substr($resultado2012MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2012MC['id'] . '/' . str_replace($search, $replace, $resultado2012MC['title'])  .  '">' . $resultado2012MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2012MC['id'] . '/' . str_replace($search, $replace, $resultado2012MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2012MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2012MJ)
		{
		if ($resultado2012MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2012MJ['release_date'], 0, 4) == $ano2012) {	
		echo substr($resultado2012MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2012MJ['id'] . '/' . str_replace($search, $replace, $resultado2012MJ['title'])  .  '">' . $resultado2012MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2012MJ['id'] . '/' . str_replace($search, $replace, $resultado2012MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2012MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2012TC)
		{
		if ($resultado2012TC['media_type'] == $tv)
		{
			if (substr($resultado2012TC['first_air_date'], 0, 4) == $ano2012) {
		echo substr($resultado2012TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2012TC['id'] . '/' . str_replace($search, $replace, $resultado2012TC['name'])  .  '">' . $resultado2012TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2012TC['id'] . '/' . str_replace($search, $replace, $resultado2012TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2012TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2012TJ)
		{
		if ($resultado2012TJ['media_type'] == $tv)
		{
		if (substr($resultado2012TJ['first_air_date'], 0, 4) == $ano2012) {
			echo substr($resultado2012TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2012TJ['id'] . '/' . str_replace($search, $replace, $resultado2012TJ['name'])  .  '">' . $resultado2012TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2012TJ['id'] . '/' . str_replace($search, $replace, $resultado2012TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2012TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2011
foreach ($data['cast'] as $resultado2011MC)
	{
		
	if ($resultado2011MC['media_type'] == $movie)
		{
	if 	(substr($resultado2011MC['release_date'], 0, 4) == $ano2011) {	
	echo substr($resultado2011MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2011MC['id'] . '/' . str_replace($search, $replace, $resultado2011MC['title'])  .  '">' . $resultado2011MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2011MC['id'] . '/' . str_replace($search, $replace, $resultado2011MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2011MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2011MJ)
		{
		if ($resultado2011MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2011MJ['release_date'], 0, 4) == $ano2011) {	
		echo substr($resultado2011MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2011MJ['id'] . '/' . str_replace($search, $replace, $resultado2011MJ['title'])  .  '">' . $resultado2011MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2011MJ['id'] . '/' . str_replace($search, $replace, $resultado2011MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2011MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2011TC)
		{
		if ($resultado2011TC['media_type'] == $tv)
		{
			if (substr($resultado2011TC['first_air_date'], 0, 4) == $ano2011) {
		echo substr($resultado2011TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2011TC['id'] . '/' . str_replace($search, $replace, $resultado2011TC['name'])  .  '">' . $resultado2011TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2011TC['id'] . '/' . str_replace($search, $replace, $resultado2011TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2011TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2011TJ)
		{
		if ($resultado2011TJ['media_type'] == $tv)
		{
		if (substr($resultado2011TJ['first_air_date'], 0, 4) == $ano2011) {
			echo substr($resultado2011TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2011TJ['id'] . '/' . str_replace($search, $replace, $resultado2011TJ['name'])  .  '">' . $resultado2011TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2011TJ['id'] . '/' . str_replace($search, $replace, $resultado2011TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2011TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2010
foreach ($data['cast'] as $resultado2010MC)
	{
		
	if ($resultado2010MC['media_type'] == $movie)
		{
	if 	(substr($resultado2010MC['release_date'], 0, 4) == $ano2010) {	
	echo substr($resultado2010MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2010MC['id'] . '/' . str_replace($search, $replace, $resultado2010MC['title'])  .  '">' . $resultado2010MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2010MC['id'] . '/' . str_replace($search, $replace, $resultado2010MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2010MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2010MJ)
		{
		if ($resultado2010MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2010MJ['release_date'], 0, 4) == $ano2010) {	
		echo substr($resultado2010MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2010MJ['id'] . '/' . str_replace($search, $replace, $resultado2010MJ['title'])  .  '">' . $resultado2010MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2010MJ['id'] . '/' . str_replace($search, $replace, $resultado2010MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2010MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2010TC)
		{
		if ($resultado2010TC['media_type'] == $tv)
		{
			if (substr($resultado2010TC['first_air_date'], 0, 4) == $ano2010) {
		echo substr($resultado2010TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2010TC['id'] . '/' . str_replace($search, $replace, $resultado2010TC['name'])  .  '">' . $resultado2010TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2010TC['id'] . '/' . str_replace($search, $replace, $resultado2010TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2010TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2010TJ)
		{
		if ($resultado2010TJ['media_type'] == $tv)
		{
		if (substr($resultado2010TJ['first_air_date'], 0, 4) == $ano2010) {
			echo substr($resultado2010TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2010TJ['id'] . '/' . str_replace($search, $replace, $resultado2010TJ['name'])  .  '">' . $resultado2010TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2010TJ['id'] . '/' . str_replace($search, $replace, $resultado2010TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2010TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2009
foreach ($data['cast'] as $resultado2009MC)
	{
		
	if ($resultado2009MC['media_type'] == $movie)
		{
	if 	(substr($resultado2009MC['release_date'], 0, 4) == $ano2009) {	
	echo substr($resultado2009MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2009MC['id'] . '/' . str_replace($search, $replace, $resultado2009MC['title'])  .  '">' . $resultado2009MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2009MC['id'] . '/' . str_replace($search, $replace, $resultado2009MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2009MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2009MJ)
		{
		if ($resultado2009MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2009MJ['release_date'], 0, 4) == $ano2009) {	
		echo substr($resultado2009MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2009MJ['id'] . '/' . str_replace($search, $replace, $resultado2009MJ['title'])  .  '">' . $resultado2009MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2009MJ['id'] . '/' . str_replace($search, $replace, $resultado2009MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2009MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2009TC)
		{
		if ($resultado2009TC['media_type'] == $tv)
		{
			if (substr($resultado2009TC['first_air_date'], 0, 4) == $ano2009) {
		echo substr($resultado2009TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2009TC['id'] . '/' . str_replace($search, $replace, $resultado2009TC['name'])  .  '">' . $resultado2009TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2009TC['id'] . '/' . str_replace($search, $replace, $resultado2009TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2009TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2009TJ)
		{
		if ($resultado2009TJ['media_type'] == $tv)
		{
		if (substr($resultado2009TJ['first_air_date'], 0, 4) == $ano2009) {
			echo substr($resultado2009TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2009TJ['id'] . '/' . str_replace($search, $replace, $resultado2009TJ['name'])  .  '">' . $resultado2009TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2009TJ['id'] . '/' . str_replace($search, $replace, $resultado2009TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2009TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 

<?php
//ano 2008
foreach ($data['cast'] as $resultado2008MC)
	{
		
	if ($resultado2008MC['media_type'] == $movie)
		{
	if 	(substr($resultado2008MC['release_date'], 0, 4) == $ano2008) {	
	echo substr($resultado2008MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2008MC['id'] . '/' . str_replace($search, $replace, $resultado2008MC['title'])  .  '">' . $resultado2008MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2008MC['id'] . '/' . str_replace($search, $replace, $resultado2008MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2008MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2008MJ)
		{
		if ($resultado2008MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2008MJ['release_date'], 0, 4) == $ano2008) {	
		echo substr($resultado2008MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2008MJ['id'] . '/' . str_replace($search, $replace, $resultado2008MJ['title'])  .  '">' . $resultado2008MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2008MJ['id'] . '/' . str_replace($search, $replace, $resultado2008MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2008MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2008TC)
		{
		if ($resultado2008TC['media_type'] == $tv)
		{
			if (substr($resultado2008TC['first_air_date'], 0, 4) == $ano2008) {
		echo substr($resultado2008TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2008TC['id'] . '/' . str_replace($search, $replace, $resultado2008TC['name'])  .  '">' . $resultado2008TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2008TC['id'] . '/' . str_replace($search, $replace, $resultado2008TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2008TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2008TJ)
		{
		if ($resultado2008TJ['media_type'] == $tv)
		{
		if (substr($resultado2008TJ['first_air_date'], 0, 4) == $ano2008) {
			echo substr($resultado2008TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2008TJ['id'] . '/' . str_replace($search, $replace, $resultado2008TJ['name'])  .  '">' . $resultado2008TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2008TJ['id'] . '/' . str_replace($search, $replace, $resultado2008TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2008TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2007
foreach ($data['cast'] as $resultado2007MC)
	{
		
	if ($resultado2007MC['media_type'] == $movie)
		{
	if 	(substr($resultado2007MC['release_date'], 0, 4) == $ano2007) {	
	echo substr($resultado2007MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2007MC['id'] . '/' . str_replace($search, $replace, $resultado2007MC['title'])  .  '">' . $resultado2007MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2007MC['id'] . '/' . str_replace($search, $replace, $resultado2007MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2007MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2007MJ)
		{
		if ($resultado2007MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2007MJ['release_date'], 0, 4) == $ano2007) {	
		echo substr($resultado2007MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2007MJ['id'] . '/' . str_replace($search, $replace, $resultado2007MJ['title'])  .  '">' . $resultado2007MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2007MJ['id'] . '/' . str_replace($search, $replace, $resultado2007MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2007MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2007TC)
		{
		if ($resultado2007TC['media_type'] == $tv)
		{
			if (substr($resultado2007TC['first_air_date'], 0, 4) == $ano2007) {
		echo substr($resultado2007TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2007TC['id'] . '/' . str_replace($search, $replace, $resultado2007TC['name'])  .  '">' . $resultado2007TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2007TC['id'] . '/' . str_replace($search, $replace, $resultado2007TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2007TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2007TJ)
		{
		if ($resultado2007TJ['media_type'] == $tv)
		{
		if (substr($resultado2007TJ['first_air_date'], 0, 4) == $ano2007) {
			echo substr($resultado2007TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2007TJ['id'] . '/' . str_replace($search, $replace, $resultado2007TJ['name'])  .  '">' . $resultado2007TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2007TJ['id'] . '/' . str_replace($search, $replace, $resultado2007TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2007TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2006
foreach ($data['cast'] as $resultado2006MC)
	{
		
	if ($resultado2006MC['media_type'] == $movie)
		{
	if 	(substr($resultado2006MC['release_date'], 0, 4) == $ano2006) {	
	echo substr($resultado2006MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2006MC['id'] . '/' . str_replace($search, $replace, $resultado2006MC['title'])  .  '">' . $resultado2006MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2006MC['id'] . '/' . str_replace($search, $replace, $resultado2006MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2006MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2006MJ)
		{
		if ($resultado2006MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2006MJ['release_date'], 0, 4) == $ano2006) {	
		echo substr($resultado2006MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2006MJ['id'] . '/' . str_replace($search, $replace, $resultado2006MJ['title'])  .  '">' . $resultado2006MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2006MJ['id'] . '/' . str_replace($search, $replace, $resultado2006MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2006MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2006TC)
		{
		if ($resultado2006TC['media_type'] == $tv)
		{
			if (substr($resultado2006TC['first_air_date'], 0, 4) == $ano2006) {
		echo substr($resultado2006TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2006TC['id'] . '/' . str_replace($search, $replace, $resultado2006TC['name'])  .  '">' . $resultado2006TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2006TC['id'] . '/' . str_replace($search, $replace, $resultado2006TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2006TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2006TJ)
		{
		if ($resultado2006TJ['media_type'] == $tv)
		{
		if (substr($resultado2006TJ['first_air_date'], 0, 4) == $ano2006) {
			echo substr($resultado2006TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2006TJ['id'] . '/' . str_replace($search, $replace, $resultado2006TJ['name'])  .  '">' . $resultado2006TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2006TJ['id'] . '/' . str_replace($search, $replace, $resultado2006TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2006TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2005
foreach ($data['cast'] as $resultado2005MC)
	{
		
	if ($resultado2005MC['media_type'] == $movie)
		{
	if 	(substr($resultado2005MC['release_date'], 0, 4) == $ano2005) {	
	echo substr($resultado2005MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2005MC['id'] . '/' . str_replace($search, $replace, $resultado2005MC['title'])  .  '">' . $resultado2005MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2005MC['id'] . '/' . str_replace($search, $replace, $resultado2005MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2005MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2005MJ)
		{
		if ($resultado2005MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2005MJ['release_date'], 0, 4) == $ano2005) {	
		echo substr($resultado2005MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2005MJ['id'] . '/' . str_replace($search, $replace, $resultado2005MJ['title'])  .  '">' . $resultado2005MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2005MJ['id'] . '/' . str_replace($search, $replace, $resultado2005MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2005MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2005TC)
		{
		if ($resultado2005TC['media_type'] == $tv)
		{
			if (substr($resultado2005TC['first_air_date'], 0, 4) == $ano2005) {
		echo substr($resultado2005TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2005TC['id'] . '/' . str_replace($search, $replace, $resultado2005TC['name'])  .  '">' . $resultado2005TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2005TC['id'] . '/' . str_replace($search, $replace, $resultado2005TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2005TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2005TJ)
		{
		if ($resultado2005TJ['media_type'] == $tv)
		{
		if (substr($resultado2005TJ['first_air_date'], 0, 4) == $ano2005) {
			echo substr($resultado2005TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2005TJ['id'] . '/' . str_replace($search, $replace, $resultado2005TJ['name'])  .  '">' . $resultado2005TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2005TJ['id'] . '/' . str_replace($search, $replace, $resultado2005TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2005TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2004
foreach ($data['cast'] as $resultado2004MC)
	{
		
	if ($resultado2004MC['media_type'] == $movie)
		{
	if 	(substr($resultado2004MC['release_date'], 0, 4) == $ano2004) {	
	echo substr($resultado2004MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2004MC['id'] . '/' . str_replace($search, $replace, $resultado2004MC['title'])  .  '">' . $resultado2004MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2004MC['id'] . '/' . str_replace($search, $replace, $resultado2004MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2004MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2004MJ)
		{
		if ($resultado2004MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2004MJ['release_date'], 0, 4) == $ano2004) {	
		echo substr($resultado2004MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2004MJ['id'] . '/' . str_replace($search, $replace, $resultado2004MJ['title'])  .  '">' . $resultado2004MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2004MJ['id'] . '/' . str_replace($search, $replace, $resultado2004MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2004MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2004TC)
		{
		if ($resultado2004TC['media_type'] == $tv)
		{
			if (substr($resultado2004TC['first_air_date'], 0, 4) == $ano2004) {
		echo substr($resultado2004TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2004TC['id'] . '/' . str_replace($search, $replace, $resultado2004TC['name'])  .  '">' . $resultado2004TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2004TC['id'] . '/' . str_replace($search, $replace, $resultado2004TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2004TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2004TJ)
		{
		if ($resultado2004TJ['media_type'] == $tv)
		{
		if (substr($resultado2004TJ['first_air_date'], 0, 4) == $ano2004) {
			echo substr($resultado2004TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2004TJ['id'] . '/' . str_replace($search, $replace, $resultado2004TJ['name'])  .  '">' . $resultado2004TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2004TJ['id'] . '/' . str_replace($search, $replace, $resultado2004TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2004TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2003
foreach ($data['cast'] as $resultado2003MC)
	{
		
	if ($resultado2003MC['media_type'] == $movie)
		{
	if 	(substr($resultado2003MC['release_date'], 0, 4) == $ano2003) {	
	echo substr($resultado2003MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2003MC['id'] . '/' . str_replace($search, $replace, $resultado2003MC['title'])  .  '">' . $resultado2003MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2003MC['id'] . '/' . str_replace($search, $replace, $resultado2003MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2003MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2003MJ)
		{
		if ($resultado2003MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2003MJ['release_date'], 0, 4) == $ano2003) {	
		echo substr($resultado2003MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2003MJ['id'] . '/' . str_replace($search, $replace, $resultado2003MJ['title'])  .  '">' . $resultado2003MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2003MJ['id'] . '/' . str_replace($search, $replace, $resultado2003MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2003MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2003TC)
		{
		if ($resultado2003TC['media_type'] == $tv)
		{
			if (substr($resultado2003TC['first_air_date'], 0, 4) == $ano2003) {
		echo substr($resultado2003TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2003TC['id'] . '/' . str_replace($search, $replace, $resultado2003TC['name'])  .  '">' . $resultado2003TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2003TC['id'] . '/' . str_replace($search, $replace, $resultado2003TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2003TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2003TJ)
		{
		if ($resultado2003TJ['media_type'] == $tv)
		{
		if (substr($resultado2003TJ['first_air_date'], 0, 4) == $ano2003) {
			echo substr($resultado2003TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2003TJ['id'] . '/' . str_replace($search, $replace, $resultado2003TJ['name'])  .  '">' . $resultado2003TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2003TJ['id'] . '/' . str_replace($search, $replace, $resultado2003TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2003TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2002
foreach ($data['cast'] as $resultado2002MC)
	{
		
	if ($resultado2002MC['media_type'] == $movie)
		{
	if 	(substr($resultado2002MC['release_date'], 0, 4) == $ano2002) {	
	echo substr($resultado2002MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2002MC['id'] . '/' . str_replace($search, $replace, $resultado2002MC['title'])  .  '">' . $resultado2002MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2002MC['id'] . '/' . str_replace($search, $replace, $resultado2002MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2002MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2002MJ)
		{
		if ($resultado2002MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2002MJ['release_date'], 0, 4) == $ano2002) {	
		echo substr($resultado2002MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2002MJ['id'] . '/' . str_replace($search, $replace, $resultado2002MJ['title'])  .  '">' . $resultado2002MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2002MJ['id'] . '/' . str_replace($search, $replace, $resultado2002MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2002MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2002TC)
		{
		if ($resultado2002TC['media_type'] == $tv)
		{
			if (substr($resultado2002TC['first_air_date'], 0, 4) == $ano2002) {
		echo substr($resultado2002TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2002TC['id'] . '/' . str_replace($search, $replace, $resultado2002TC['name'])  .  '">' . $resultado2002TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2002TC['id'] . '/' . str_replace($search, $replace, $resultado2002TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2002TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2002TJ)
		{
		if ($resultado2002TJ['media_type'] == $tv)
		{
		if (substr($resultado2002TJ['first_air_date'], 0, 4) == $ano2002) {
			echo substr($resultado2002TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2002TJ['id'] . '/' . str_replace($search, $replace, $resultado2002TJ['name'])  .  '">' . $resultado2002TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2002TJ['id'] . '/' . str_replace($search, $replace, $resultado2002TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2002TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2001
foreach ($data['cast'] as $resultado2001MC)
	{
		
	if ($resultado2001MC['media_type'] == $movie)
		{
	if 	(substr($resultado2001MC['release_date'], 0, 4) == $ano2001) {	
	echo substr($resultado2001MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2001MC['id'] . '/' . str_replace($search, $replace, $resultado2001MC['title'])  .  '">' . $resultado2001MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2001MC['id'] . '/' . str_replace($search, $replace, $resultado2001MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2001MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2001MJ)
		{
		if ($resultado2001MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2001MJ['release_date'], 0, 4) == $ano2001) {	
		echo substr($resultado2001MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2001MJ['id'] . '/' . str_replace($search, $replace, $resultado2001MJ['title'])  .  '">' . $resultado2001MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2001MJ['id'] . '/' . str_replace($search, $replace, $resultado2001MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2001MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2001TC)
		{
		if ($resultado2001TC['media_type'] == $tv)
		{
			if (substr($resultado2001TC['first_air_date'], 0, 4) == $ano2001) {
		echo substr($resultado2001TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2001TC['id'] . '/' . str_replace($search, $replace, $resultado2001TC['name'])  .  '">' . $resultado2001TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2001TC['id'] . '/' . str_replace($search, $replace, $resultado2001TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2001TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2001TJ)
		{
		if ($resultado2001TJ['media_type'] == $tv)
		{
		if (substr($resultado2001TJ['first_air_date'], 0, 4) == $ano2001) {
			echo substr($resultado2001TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2001TJ['id'] . '/' . str_replace($search, $replace, $resultado2001TJ['name'])  .  '">' . $resultado2001TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2001TJ['id'] . '/' . str_replace($search, $replace, $resultado2001TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2001TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 2000
foreach ($data['cast'] as $resultado2000MC)
	{
		
	if ($resultado2000MC['media_type'] == $movie)
		{
	if 	(substr($resultado2000MC['release_date'], 0, 4) == $ano2000) {	
	echo substr($resultado2000MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado2000MC['id'] . '/' . str_replace($search, $replace, $resultado2000MC['title'])  .  '">' . $resultado2000MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2000MC['id'] . '/' . str_replace($search, $replace, $resultado2000MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2000MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado2000MJ)
		{
		if ($resultado2000MJ['media_type'] == $movie)
		{
		if 	(substr($resultado2000MJ['release_date'], 0, 4) == $ano2000) {	
		echo substr($resultado2000MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado2000MJ['id'] . '/' . str_replace($search, $replace, $resultado2000MJ['title'])  .  '">' . $resultado2000MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado2000MJ['id'] . '/' . str_replace($search, $replace, $resultado2000MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado2000MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado2000TC)
		{
		if ($resultado2000TC['media_type'] == $tv)
		{
			if (substr($resultado2000TC['first_air_date'], 0, 4) == $ano2000) {
		echo substr($resultado2000TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2000TC['id'] . '/' . str_replace($search, $replace, $resultado2000TC['name'])  .  '">' . $resultado2000TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2000TC['id'] . '/' . str_replace($search, $replace, $resultado2000TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2000TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado2000TJ)
		{
		if ($resultado2000TJ['media_type'] == $tv)
		{
		if (substr($resultado2000TJ['first_air_date'], 0, 4) == $ano2000) {
			echo substr($resultado2000TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado2000TJ['id'] . '/' . str_replace($search, $replace, $resultado2000TJ['name'])  .  '">' . $resultado2000TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado2000TJ['id'] . '/' . str_replace($search, $replace, $resultado2000TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado2000TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1999
foreach ($data['cast'] as $resultado1999MC)
	{
		
	if ($resultado1999MC['media_type'] == $movie)
		{
	if 	(substr($resultado1999MC['release_date'], 0, 4) == $ano1999) {	
	echo substr($resultado1999MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1999MC['id'] . '/' . str_replace($search, $replace, $resultado1999MC['title'])  .  '">' . $resultado1999MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1999MC['id'] . '/' . str_replace($search, $replace, $resultado1999MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1999MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1999MJ)
		{
		if ($resultado1999MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1999MJ['release_date'], 0, 4) == $ano1999) {	
		echo substr($resultado1999MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1999MJ['id'] . '/' . str_replace($search, $replace, $resultado1999MJ['title'])  .  '">' . $resultado1999MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1999MJ['id'] . '/' . str_replace($search, $replace, $resultado1999MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1999MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1999TC)
		{
		if ($resultado1999TC['media_type'] == $tv)
		{
			if (substr($resultado1999TC['first_air_date'], 0, 4) == $ano1999) {
		echo substr($resultado1999TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1999TC['id'] . '/' . str_replace($search, $replace, $resultado1999TC['name'])  .  '">' . $resultado1999TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1999TC['id'] . '/' . str_replace($search, $replace, $resultado1999TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1999TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1999TJ)
		{
		if ($resultado1999TJ['media_type'] == $tv)
		{
		if (substr($resultado1999TJ['first_air_date'], 0, 4) == $ano1999) {
			echo substr($resultado1999TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1999TJ['id'] . '/' . str_replace($search, $replace, $resultado1999TJ['name'])  .  '">' . $resultado1999TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1999TJ['id'] . '/' . str_replace($search, $replace, $resultado1999TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1999TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 

<?php
//ano 1998
foreach ($data['cast'] as $resultado1998MC)
	{
		
	if ($resultado1998MC['media_type'] == $movie)
		{
	if 	(substr($resultado1998MC['release_date'], 0, 4) == $ano1998) {	
	echo substr($resultado1998MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1998MC['id'] . '/' . str_replace($search, $replace, $resultado1998MC['title'])  .  '">' . $resultado1998MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1998MC['id'] . '/' . str_replace($search, $replace, $resultado1998MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1998MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1998MJ)
		{
		if ($resultado1998MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1998MJ['release_date'], 0, 4) == $ano1998) {	
		echo substr($resultado1998MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1998MJ['id'] . '/' . str_replace($search, $replace, $resultado1998MJ['title'])  .  '">' . $resultado1998MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1998MJ['id'] . '/' . str_replace($search, $replace, $resultado1998MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1998MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1998TC)
		{
		if ($resultado1998TC['media_type'] == $tv)
		{
			if (substr($resultado1998TC['first_air_date'], 0, 4) == $ano1998) {
		echo substr($resultado1998TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1998TC['id'] . '/' . str_replace($search, $replace, $resultado1998TC['name'])  .  '">' . $resultado1998TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1998TC['id'] . '/' . str_replace($search, $replace, $resultado1998TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1998TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1998TJ)
		{
		if ($resultado1998TJ['media_type'] == $tv)
		{
		if (substr($resultado1998TJ['first_air_date'], 0, 4) == $ano1998) {
			echo substr($resultado1998TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1998TJ['id'] . '/' . str_replace($search, $replace, $resultado1998TJ['name'])  .  '">' . $resultado1998TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1998TJ['id'] . '/' . str_replace($search, $replace, $resultado1998TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1998TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1997
foreach ($data['cast'] as $resultado1997MC)
	{
		
	if ($resultado1997MC['media_type'] == $movie)
		{
	if 	(substr($resultado1997MC['release_date'], 0, 4) == $ano1997) {	
	echo substr($resultado1997MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1997MC['id'] . '/' . str_replace($search, $replace, $resultado1997MC['title'])  .  '">' . $resultado1997MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1997MC['id'] . '/' . str_replace($search, $replace, $resultado1997MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1997MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1997MJ)
		{
		if ($resultado1997MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1997MJ['release_date'], 0, 4) == $ano1997) {	
		echo substr($resultado1997MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1997MJ['id'] . '/' . str_replace($search, $replace, $resultado1997MJ['title'])  .  '">' . $resultado1997MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1997MJ['id'] . '/' . str_replace($search, $replace, $resultado1997MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1997MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1997TC)
		{
		if ($resultado1997TC['media_type'] == $tv)
		{
			if (substr($resultado1997TC['first_air_date'], 0, 4) == $ano1997) {
		echo substr($resultado1997TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1997TC['id'] . '/' . str_replace($search, $replace, $resultado1997TC['name'])  .  '">' . $resultado1997TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1997TC['id'] . '/' . str_replace($search, $replace, $resultado1997TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1997TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1997TJ)
		{
		if ($resultado1997TJ['media_type'] == $tv)
		{
		if (substr($resultado1997TJ['first_air_date'], 0, 4) == $ano1997) {
			echo substr($resultado1997TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1997TJ['id'] . '/' . str_replace($search, $replace, $resultado1997TJ['name'])  .  '">' . $resultado1997TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1997TJ['id'] . '/' . str_replace($search, $replace, $resultado1997TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1997TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1996
foreach ($data['cast'] as $resultado1996MC)
	{
		
	if ($resultado1996MC['media_type'] == $movie)
		{
	if 	(substr($resultado1996MC['release_date'], 0, 4) == $ano1996) {	
	echo substr($resultado1996MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1996MC['id'] . '/' . str_replace($search, $replace, $resultado1996MC['title'])  .  '">' . $resultado1996MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1996MC['id'] . '/' . str_replace($search, $replace, $resultado1996MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1996MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1996MJ)
		{
		if ($resultado1996MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1996MJ['release_date'], 0, 4) == $ano1996) {	
		echo substr($resultado1996MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1996MJ['id'] . '/' . str_replace($search, $replace, $resultado1996MJ['title'])  .  '">' . $resultado1996MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1996MJ['id'] . '/' . str_replace($search, $replace, $resultado1996MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1996MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1996TC)
		{
		if ($resultado1996TC['media_type'] == $tv)
		{
			if (substr($resultado1996TC['first_air_date'], 0, 4) == $ano1996) {
		echo substr($resultado1996TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1996TC['id'] . '/' . str_replace($search, $replace, $resultado1996TC['name'])  .  '">' . $resultado1996TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1996TC['id'] . '/' . str_replace($search, $replace, $resultado1996TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1996TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1996TJ)
		{
		if ($resultado1996TJ['media_type'] == $tv)
		{
		if (substr($resultado1996TJ['first_air_date'], 0, 4) == $ano1996) {
			echo substr($resultado1996TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1996TJ['id'] . '/' . str_replace($search, $replace, $resultado1996TJ['name'])  .  '">' . $resultado1996TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1996TJ['id'] . '/' . str_replace($search, $replace, $resultado1996TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1996TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1995
foreach ($data['cast'] as $resultado1995MC)
	{
		
	if ($resultado1995MC['media_type'] == $movie)
		{
	if 	(substr($resultado1995MC['release_date'], 0, 4) == $ano1995) {	
	echo substr($resultado1995MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1995MC['id'] . '/' . str_replace($search, $replace, $resultado1995MC['title'])  .  '">' . $resultado1995MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1995MC['id'] . '/' . str_replace($search, $replace, $resultado1995MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1995MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1995MJ)
		{
		if ($resultado1995MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1995MJ['release_date'], 0, 4) == $ano1995) {	
		echo substr($resultado1995MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1995MJ['id'] . '/' . str_replace($search, $replace, $resultado1995MJ['title'])  .  '">' . $resultado1995MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1995MJ['id'] . '/' . str_replace($search, $replace, $resultado1995MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1995MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1995TC)
		{
		if ($resultado1995TC['media_type'] == $tv)
		{
			if (substr($resultado1995TC['first_air_date'], 0, 4) == $ano1995) {
		echo substr($resultado1995TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1995TC['id'] . '/' . str_replace($search, $replace, $resultado1995TC['name'])  .  '">' . $resultado1995TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1995TC['id'] . '/' . str_replace($search, $replace, $resultado1995TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1995TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1995TJ)
		{
		if ($resultado1995TJ['media_type'] == $tv)
		{
		if (substr($resultado1995TJ['first_air_date'], 0, 4) == $ano1995) {
			echo substr($resultado1995TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1995TJ['id'] . '/' . str_replace($search, $replace, $resultado1995TJ['name'])  .  '">' . $resultado1995TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1995TJ['id'] . '/' . str_replace($search, $replace, $resultado1995TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1995TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1994
foreach ($data['cast'] as $resultado1994MC)
	{
		
	if ($resultado1994MC['media_type'] == $movie)
		{
	if 	(substr($resultado1994MC['release_date'], 0, 4) == $ano1994) {	
	echo substr($resultado1994MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1994MC['id'] . '/' . str_replace($search, $replace, $resultado1994MC['title'])  .  '">' . $resultado1994MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1994MC['id'] . '/' . str_replace($search, $replace, $resultado1994MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1994MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1994MJ)
		{
		if ($resultado1994MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1994MJ['release_date'], 0, 4) == $ano1994) {	
		echo substr($resultado1994MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1994MJ['id'] . '/' . str_replace($search, $replace, $resultado1994MJ['title'])  .  '">' . $resultado1994MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1994MJ['id'] . '/' . str_replace($search, $replace, $resultado1994MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1994MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1994TC)
		{
		if ($resultado1994TC['media_type'] == $tv)
		{
			if (substr($resultado1994TC['first_air_date'], 0, 4) == $ano1994) {
		echo substr($resultado1994TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1994TC['id'] . '/' . str_replace($search, $replace, $resultado1994TC['name'])  .  '">' . $resultado1994TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1994TC['id'] . '/' . str_replace($search, $replace, $resultado1994TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1994TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1994TJ)
		{
		if ($resultado1994TJ['media_type'] == $tv)
		{
		if (substr($resultado1994TJ['first_air_date'], 0, 4) == $ano1994) {
			echo substr($resultado1994TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1994TJ['id'] . '/' . str_replace($search, $replace, $resultado1994TJ['name'])  .  '">' . $resultado1994TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1994TJ['id'] . '/' . str_replace($search, $replace, $resultado1994TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1994TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1993
foreach ($data['cast'] as $resultado1993MC)
	{
		
	if ($resultado1993MC['media_type'] == $movie)
		{
	if 	(substr($resultado1993MC['release_date'], 0, 4) == $ano1993) {	
	echo substr($resultado1993MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1993MC['id'] . '/' . str_replace($search, $replace, $resultado1993MC['title'])  .  '">' . $resultado1993MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1993MC['id'] . '/' . str_replace($search, $replace, $resultado1993MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1993MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1993MJ)
		{
		if ($resultado1993MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1993MJ['release_date'], 0, 4) == $ano1993) {	
		echo substr($resultado1993MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1993MJ['id'] . '/' . str_replace($search, $replace, $resultado1993MJ['title'])  .  '">' . $resultado1993MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1993MJ['id'] . '/' . str_replace($search, $replace, $resultado1993MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1993MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1993TC)
		{
		if ($resultado1993TC['media_type'] == $tv)
		{
			if (substr($resultado1993TC['first_air_date'], 0, 4) == $ano1993) {
		echo substr($resultado1993TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1993TC['id'] . '/' . str_replace($search, $replace, $resultado1993TC['name'])  .  '">' . $resultado1993TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1993TC['id'] . '/' . str_replace($search, $replace, $resultado1993TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1993TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1993TJ)
		{
		if ($resultado1993TJ['media_type'] == $tv)
		{
		if (substr($resultado1993TJ['first_air_date'], 0, 4) == $ano1993) {
			echo substr($resultado1993TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1993TJ['id'] . '/' . str_replace($search, $replace, $resultado1993TJ['name'])  .  '">' . $resultado1993TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1993TJ['id'] . '/' . str_replace($search, $replace, $resultado1993TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1993TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1992
foreach ($data['cast'] as $resultado1992MC)
	{
		
	if ($resultado1992MC['media_type'] == $movie)
		{
	if 	(substr($resultado1992MC['release_date'], 0, 4) == $ano1992) {	
	echo substr($resultado1992MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1992MC['id'] . '/' . str_replace($search, $replace, $resultado1992MC['title'])  .  '">' . $resultado1992MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1992MC['id'] . '/' . str_replace($search, $replace, $resultado1992MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1992MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1992MJ)
		{
		if ($resultado1992MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1992MJ['release_date'], 0, 4) == $ano1992) {	
		echo substr($resultado1992MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1992MJ['id'] . '/' . str_replace($search, $replace, $resultado1992MJ['title'])  .  '">' . $resultado1992MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1992MJ['id'] . '/' . str_replace($search, $replace, $resultado1992MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1992MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1992TC)
		{
		if ($resultado1992TC['media_type'] == $tv)
		{
			if (substr($resultado1992TC['first_air_date'], 0, 4) == $ano1992) {
		echo substr($resultado1992TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1992TC['id'] . '/' . str_replace($search, $replace, $resultado1992TC['name'])  .  '">' . $resultado1992TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1992TC['id'] . '/' . str_replace($search, $replace, $resultado1992TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1992TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1992TJ)
		{
		if ($resultado1992TJ['media_type'] == $tv)
		{
		if (substr($resultado1992TJ['first_air_date'], 0, 4) == $ano1992) {
			echo substr($resultado1992TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1992TJ['id'] . '/' . str_replace($search, $replace, $resultado1992TJ['name'])  .  '">' . $resultado1992TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1992TJ['id'] . '/' . str_replace($search, $replace, $resultado1992TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1992TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1991
foreach ($data['cast'] as $resultado1991MC)
	{
		
	if ($resultado1991MC['media_type'] == $movie)
		{
	if 	(substr($resultado1991MC['release_date'], 0, 4) == $ano1991) {	
	echo substr($resultado1991MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1991MC['id'] . '/' . str_replace($search, $replace, $resultado1991MC['title'])  .  '">' . $resultado1991MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1991MC['id'] . '/' . str_replace($search, $replace, $resultado1991MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1991MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1991MJ)
		{
		if ($resultado1991MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1991MJ['release_date'], 0, 4) == $ano1991) {	
		echo substr($resultado1991MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1991MJ['id'] . '/' . str_replace($search, $replace, $resultado1991MJ['title'])  .  '">' . $resultado1991MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1991MJ['id'] . '/' . str_replace($search, $replace, $resultado1991MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1991MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1991TC)
		{
		if ($resultado1991TC['media_type'] == $tv)
		{
			if (substr($resultado1991TC['first_air_date'], 0, 4) == $ano1991) {
		echo substr($resultado1991TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1991TC['id'] . '/' . str_replace($search, $replace, $resultado1991TC['name'])  .  '">' . $resultado1991TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1991TC['id'] . '/' . str_replace($search, $replace, $resultado1991TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1991TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1991TJ)
		{
		if ($resultado1991TJ['media_type'] == $tv)
		{
		if (substr($resultado1991TJ['first_air_date'], 0, 4) == $ano1991) {
			echo substr($resultado1991TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1991TJ['id'] . '/' . str_replace($search, $replace, $resultado1991TJ['name'])  .  '">' . $resultado1991TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1991TJ['id'] . '/' . str_replace($search, $replace, $resultado1991TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1991TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1990
foreach ($data['cast'] as $resultado1990MC)
	{
		
	if ($resultado1990MC['media_type'] == $movie)
		{
	if 	(substr($resultado1990MC['release_date'], 0, 4) == $ano1990) {	
	echo substr($resultado1990MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1990MC['id'] . '/' . str_replace($search, $replace, $resultado1990MC['title'])  .  '">' . $resultado1990MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1990MC['id'] . '/' . str_replace($search, $replace, $resultado1990MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1990MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1990MJ)
		{
		if ($resultado1990MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1990MJ['release_date'], 0, 4) == $ano1990) {	
		echo substr($resultado1990MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1990MJ['id'] . '/' . str_replace($search, $replace, $resultado1990MJ['title'])  .  '">' . $resultado1990MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1990MJ['id'] . '/' . str_replace($search, $replace, $resultado1990MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1990MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1990TC)
		{
		if ($resultado1990TC['media_type'] == $tv)
		{
			if (substr($resultado1990TC['first_air_date'], 0, 4) == $ano1990) {
		echo substr($resultado1990TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1990TC['id'] . '/' . str_replace($search, $replace, $resultado1990TC['name'])  .  '">' . $resultado1990TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1990TC['id'] . '/' . str_replace($search, $replace, $resultado1990TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1990TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1990TJ)
		{
		if ($resultado1990TJ['media_type'] == $tv)
		{
		if (substr($resultado1990TJ['first_air_date'], 0, 4) == $ano1990) {
			echo substr($resultado1990TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1990TJ['id'] . '/' . str_replace($search, $replace, $resultado1990TJ['name'])  .  '">' . $resultado1990TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1990TJ['id'] . '/' . str_replace($search, $replace, $resultado1990TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1990TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1989
foreach ($data['cast'] as $resultado1989MC)
	{
		
	if ($resultado1989MC['media_type'] == $movie)
		{
	if 	(substr($resultado1989MC['release_date'], 0, 4) == $ano1989) {	
	echo substr($resultado1989MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1989MC['id'] . '/' . str_replace($search, $replace, $resultado1989MC['title'])  .  '">' . $resultado1989MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1989MC['id'] . '/' . str_replace($search, $replace, $resultado1989MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1989MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1989MJ)
		{
		if ($resultado1989MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1989MJ['release_date'], 0, 4) == $ano1989) {	
		echo substr($resultado1989MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1989MJ['id'] . '/' . str_replace($search, $replace, $resultado1989MJ['title'])  .  '">' . $resultado1989MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1989MJ['id'] . '/' . str_replace($search, $replace, $resultado1989MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1989MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1989TC)
		{
		if ($resultado1989TC['media_type'] == $tv)
		{
			if (substr($resultado1989TC['first_air_date'], 0, 4) == $ano1989) {
		echo substr($resultado1989TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1989TC['id'] . '/' . str_replace($search, $replace, $resultado1989TC['name'])  .  '">' . $resultado1989TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1989TC['id'] . '/' . str_replace($search, $replace, $resultado1989TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1989TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1989TJ)
		{
		if ($resultado1989TJ['media_type'] == $tv)
		{
		if (substr($resultado1989TJ['first_air_date'], 0, 4) == $ano1989) {
			echo substr($resultado1989TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1989TJ['id'] . '/' . str_replace($search, $replace, $resultado1989TJ['name'])  .  '">' . $resultado1989TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1989TJ['id'] . '/' . str_replace($search, $replace, $resultado1989TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1989TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 

<?php
//ano 1988
foreach ($data['cast'] as $resultado1988MC)
	{
		
	if ($resultado1988MC['media_type'] == $movie)
		{
	if 	(substr($resultado1988MC['release_date'], 0, 4) == $ano1988) {	
	echo substr($resultado1988MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1988MC['id'] . '/' . str_replace($search, $replace, $resultado1988MC['title'])  .  '">' . $resultado1988MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1988MC['id'] . '/' . str_replace($search, $replace, $resultado1988MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1988MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1988MJ)
		{
		if ($resultado1988MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1988MJ['release_date'], 0, 4) == $ano1988) {	
		echo substr($resultado1988MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1988MJ['id'] . '/' . str_replace($search, $replace, $resultado1988MJ['title'])  .  '">' . $resultado1988MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1988MJ['id'] . '/' . str_replace($search, $replace, $resultado1988MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1988MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1988TC)
		{
		if ($resultado1988TC['media_type'] == $tv)
		{
			if (substr($resultado1988TC['first_air_date'], 0, 4) == $ano1988) {
		echo substr($resultado1988TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1988TC['id'] . '/' . str_replace($search, $replace, $resultado1988TC['name'])  .  '">' . $resultado1988TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1988TC['id'] . '/' . str_replace($search, $replace, $resultado1988TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1988TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1988TJ)
		{
		if ($resultado1988TJ['media_type'] == $tv)
		{
		if (substr($resultado1988TJ['first_air_date'], 0, 4) == $ano1988) {
			echo substr($resultado1988TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1988TJ['id'] . '/' . str_replace($search, $replace, $resultado1988TJ['name'])  .  '">' . $resultado1988TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1988TJ['id'] . '/' . str_replace($search, $replace, $resultado1988TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1988TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1987
foreach ($data['cast'] as $resultado1987MC)
	{
		
	if ($resultado1987MC['media_type'] == $movie)
		{
	if 	(substr($resultado1987MC['release_date'], 0, 4) == $ano1987) {	
	echo substr($resultado1987MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1987MC['id'] . '/' . str_replace($search, $replace, $resultado1987MC['title'])  .  '">' . $resultado1987MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1987MC['id'] . '/' . str_replace($search, $replace, $resultado1987MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1987MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1987MJ)
		{
		if ($resultado1987MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1987MJ['release_date'], 0, 4) == $ano1987) {	
		echo substr($resultado1987MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1987MJ['id'] . '/' . str_replace($search, $replace, $resultado1987MJ['title'])  .  '">' . $resultado1987MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1987MJ['id'] . '/' . str_replace($search, $replace, $resultado1987MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1987MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1987TC)
		{
		if ($resultado1987TC['media_type'] == $tv)
		{
			if (substr($resultado1987TC['first_air_date'], 0, 4) == $ano1987) {
		echo substr($resultado1987TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1987TC['id'] . '/' . str_replace($search, $replace, $resultado1987TC['name'])  .  '">' . $resultado1987TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1987TC['id'] . '/' . str_replace($search, $replace, $resultado1987TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1987TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1987TJ)
		{
		if ($resultado1987TJ['media_type'] == $tv)
		{
		if (substr($resultado1987TJ['first_air_date'], 0, 4) == $ano1987) {
			echo substr($resultado1987TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1987TJ['id'] . '/' . str_replace($search, $replace, $resultado1987TJ['name'])  .  '">' . $resultado1987TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1987TJ['id'] . '/' . str_replace($search, $replace, $resultado1987TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1987TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1986
foreach ($data['cast'] as $resultado1986MC)
	{
		
	if ($resultado1986MC['media_type'] == $movie)
		{
	if 	(substr($resultado1986MC['release_date'], 0, 4) == $ano1986) {	
	echo substr($resultado1986MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1986MC['id'] . '/' . str_replace($search, $replace, $resultado1986MC['title'])  .  '">' . $resultado1986MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1986MC['id'] . '/' . str_replace($search, $replace, $resultado1986MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1986MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1986MJ)
		{
		if ($resultado1986MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1986MJ['release_date'], 0, 4) == $ano1986) {	
		echo substr($resultado1986MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1986MJ['id'] . '/' . str_replace($search, $replace, $resultado1986MJ['title'])  .  '">' . $resultado1986MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1986MJ['id'] . '/' . str_replace($search, $replace, $resultado1986MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1986MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1986TC)
		{
		if ($resultado1986TC['media_type'] == $tv)
		{
			if (substr($resultado1986TC['first_air_date'], 0, 4) == $ano1986) {
		echo substr($resultado1986TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1986TC['id'] . '/' . str_replace($search, $replace, $resultado1986TC['name'])  .  '">' . $resultado1986TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1986TC['id'] . '/' . str_replace($search, $replace, $resultado1986TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1986TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1986TJ)
		{
		if ($resultado1986TJ['media_type'] == $tv)
		{
		if (substr($resultado1986TJ['first_air_date'], 0, 4) == $ano1986) {
			echo substr($resultado1986TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1986TJ['id'] . '/' . str_replace($search, $replace, $resultado1986TJ['name'])  .  '">' . $resultado1986TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1986TJ['id'] . '/' . str_replace($search, $replace, $resultado1986TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1986TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1985
foreach ($data['cast'] as $resultado1985MC)
	{
		
	if ($resultado1985MC['media_type'] == $movie)
		{
	if 	(substr($resultado1985MC['release_date'], 0, 4) == $ano1985) {	
	echo substr($resultado1985MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1985MC['id'] . '/' . str_replace($search, $replace, $resultado1985MC['title'])  .  '">' . $resultado1985MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1985MC['id'] . '/' . str_replace($search, $replace, $resultado1985MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1985MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1985MJ)
		{
		if ($resultado1985MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1985MJ['release_date'], 0, 4) == $ano1985) {	
		echo substr($resultado1985MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1985MJ['id'] . '/' . str_replace($search, $replace, $resultado1985MJ['title'])  .  '">' . $resultado1985MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1985MJ['id'] . '/' . str_replace($search, $replace, $resultado1985MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1985MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1985TC)
		{
		if ($resultado1985TC['media_type'] == $tv)
		{
			if (substr($resultado1985TC['first_air_date'], 0, 4) == $ano1985) {
		echo substr($resultado1985TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1985TC['id'] . '/' . str_replace($search, $replace, $resultado1985TC['name'])  .  '">' . $resultado1985TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1985TC['id'] . '/' . str_replace($search, $replace, $resultado1985TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1985TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1985TJ)
		{
		if ($resultado1985TJ['media_type'] == $tv)
		{
		if (substr($resultado1985TJ['first_air_date'], 0, 4) == $ano1985) {
			echo substr($resultado1985TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1985TJ['id'] . '/' . str_replace($search, $replace, $resultado1985TJ['name'])  .  '">' . $resultado1985TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1985TJ['id'] . '/' . str_replace($search, $replace, $resultado1985TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1985TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1984
foreach ($data['cast'] as $resultado1984MC)
	{
		
	if ($resultado1984MC['media_type'] == $movie)
		{
	if 	(substr($resultado1984MC['release_date'], 0, 4) == $ano1984) {	
	echo substr($resultado1984MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1984MC['id'] . '/' . str_replace($search, $replace, $resultado1984MC['title'])  .  '">' . $resultado1984MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1984MC['id'] . '/' . str_replace($search, $replace, $resultado1984MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1984MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1984MJ)
		{
		if ($resultado1984MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1984MJ['release_date'], 0, 4) == $ano1984) {	
		echo substr($resultado1984MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1984MJ['id'] . '/' . str_replace($search, $replace, $resultado1984MJ['title'])  .  '">' . $resultado1984MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1984MJ['id'] . '/' . str_replace($search, $replace, $resultado1984MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1984MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1984TC)
		{
		if ($resultado1984TC['media_type'] == $tv)
		{
			if (substr($resultado1984TC['first_air_date'], 0, 4) == $ano1984) {
		echo substr($resultado1984TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1984TC['id'] . '/' . str_replace($search, $replace, $resultado1984TC['name'])  .  '">' . $resultado1984TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1984TC['id'] . '/' . str_replace($search, $replace, $resultado1984TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1984TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1984TJ)
		{
		if ($resultado1984TJ['media_type'] == $tv)
		{
		if (substr($resultado1984TJ['first_air_date'], 0, 4) == $ano1984) {
			echo substr($resultado1984TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1984TJ['id'] . '/' . str_replace($search, $replace, $resultado1984TJ['name'])  .  '">' . $resultado1984TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1984TJ['id'] . '/' . str_replace($search, $replace, $resultado1984TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1984TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1983
foreach ($data['cast'] as $resultado1983MC)
	{
		
	if ($resultado1983MC['media_type'] == $movie)
		{
	if 	(substr($resultado1983MC['release_date'], 0, 4) == $ano1983) {	
	echo substr($resultado1983MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1983MC['id'] . '/' . str_replace($search, $replace, $resultado1983MC['title'])  .  '">' . $resultado1983MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1983MC['id'] . '/' . str_replace($search, $replace, $resultado1983MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1983MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1983MJ)
		{
		if ($resultado1983MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1983MJ['release_date'], 0, 4) == $ano1983) {	
		echo substr($resultado1983MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1983MJ['id'] . '/' . str_replace($search, $replace, $resultado1983MJ['title'])  .  '">' . $resultado1983MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1983MJ['id'] . '/' . str_replace($search, $replace, $resultado1983MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1983MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1983TC)
		{
		if ($resultado1983TC['media_type'] == $tv)
		{
			if (substr($resultado1983TC['first_air_date'], 0, 4) == $ano1983) {
		echo substr($resultado1983TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1983TC['id'] . '/' . str_replace($search, $replace, $resultado1983TC['name'])  .  '">' . $resultado1983TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1983TC['id'] . '/' . str_replace($search, $replace, $resultado1983TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1983TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1983TJ)
		{
		if ($resultado1983TJ['media_type'] == $tv)
		{
		if (substr($resultado1983TJ['first_air_date'], 0, 4) == $ano1983) {
			echo substr($resultado1983TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1983TJ['id'] . '/' . str_replace($search, $replace, $resultado1983TJ['name'])  .  '">' . $resultado1983TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1983TJ['id'] . '/' . str_replace($search, $replace, $resultado1983TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1983TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1982
foreach ($data['cast'] as $resultado1982MC)
	{
		
	if ($resultado1982MC['media_type'] == $movie)
		{
	if 	(substr($resultado1982MC['release_date'], 0, 4) == $ano1982) {	
	echo substr($resultado1982MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1982MC['id'] . '/' . str_replace($search, $replace, $resultado1982MC['title'])  .  '">' . $resultado1982MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1982MC['id'] . '/' . str_replace($search, $replace, $resultado1982MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1982MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1982MJ)
		{
		if ($resultado1982MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1982MJ['release_date'], 0, 4) == $ano1982) {	
		echo substr($resultado1982MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1982MJ['id'] . '/' . str_replace($search, $replace, $resultado1982MJ['title'])  .  '">' . $resultado1982MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1982MJ['id'] . '/' . str_replace($search, $replace, $resultado1982MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1982MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1982TC)
		{
		if ($resultado1982TC['media_type'] == $tv)
		{
			if (substr($resultado1982TC['first_air_date'], 0, 4) == $ano1982) {
		echo substr($resultado1982TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1982TC['id'] . '/' . str_replace($search, $replace, $resultado1982TC['name'])  .  '">' . $resultado1982TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1982TC['id'] . '/' . str_replace($search, $replace, $resultado1982TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1982TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1982TJ)
		{
		if ($resultado1982TJ['media_type'] == $tv)
		{
		if (substr($resultado1982TJ['first_air_date'], 0, 4) == $ano1982) {
			echo substr($resultado1982TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1982TJ['id'] . '/' . str_replace($search, $replace, $resultado1982TJ['name'])  .  '">' . $resultado1982TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1982TJ['id'] . '/' . str_replace($search, $replace, $resultado1982TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1982TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1981
foreach ($data['cast'] as $resultado1981MC)
	{
		
	if ($resultado1981MC['media_type'] == $movie)
		{
	if 	(substr($resultado1981MC['release_date'], 0, 4) == $ano1981) {	
	echo substr($resultado1981MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1981MC['id'] . '/' . str_replace($search, $replace, $resultado1981MC['title'])  .  '">' . $resultado1981MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1981MC['id'] . '/' . str_replace($search, $replace, $resultado1981MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1981MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1981MJ)
		{
		if ($resultado1981MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1981MJ['release_date'], 0, 4) == $ano1981) {	
		echo substr($resultado1981MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1981MJ['id'] . '/' . str_replace($search, $replace, $resultado1981MJ['title'])  .  '">' . $resultado1981MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1981MJ['id'] . '/' . str_replace($search, $replace, $resultado1981MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1981MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1981TC)
		{
		if ($resultado1981TC['media_type'] == $tv)
		{
			if (substr($resultado1981TC['first_air_date'], 0, 4) == $ano1981) {
		echo substr($resultado1981TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1981TC['id'] . '/' . str_replace($search, $replace, $resultado1981TC['name'])  .  '">' . $resultado1981TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1981TC['id'] . '/' . str_replace($search, $replace, $resultado1981TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1981TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1981TJ)
		{
		if ($resultado1981TJ['media_type'] == $tv)
		{
		if (substr($resultado1981TJ['first_air_date'], 0, 4) == $ano1981) {
			echo substr($resultado1981TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1981TJ['id'] . '/' . str_replace($search, $replace, $resultado1981TJ['name'])  .  '">' . $resultado1981TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1981TJ['id'] . '/' . str_replace($search, $replace, $resultado1981TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1981TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1980
foreach ($data['cast'] as $resultado1980MC)
	{
		
	if ($resultado1980MC['media_type'] == $movie)
		{
	if 	(substr($resultado1980MC['release_date'], 0, 4) == $ano1980) {	
	echo substr($resultado1980MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1980MC['id'] . '/' . str_replace($search, $replace, $resultado1980MC['title'])  .  '">' . $resultado1980MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1980MC['id'] . '/' . str_replace($search, $replace, $resultado1980MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1980MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1980MJ)
		{
		if ($resultado1980MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1980MJ['release_date'], 0, 4) == $ano1980) {	
		echo substr($resultado1980MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1980MJ['id'] . '/' . str_replace($search, $replace, $resultado1980MJ['title'])  .  '">' . $resultado1980MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1980MJ['id'] . '/' . str_replace($search, $replace, $resultado1980MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1980MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1980TC)
		{
		if ($resultado1980TC['media_type'] == $tv)
		{
			if (substr($resultado1980TC['first_air_date'], 0, 4) == $ano1980) {
		echo substr($resultado1980TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1980TC['id'] . '/' . str_replace($search, $replace, $resultado1980TC['name'])  .  '">' . $resultado1980TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1980TC['id'] . '/' . str_replace($search, $replace, $resultado1980TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1980TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1980TJ)
		{
		if ($resultado1980TJ['media_type'] == $tv)
		{
		if (substr($resultado1980TJ['first_air_date'], 0, 4) == $ano1980) {
			echo substr($resultado1980TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1980TJ['id'] . '/' . str_replace($search, $replace, $resultado1980TJ['name'])  .  '">' . $resultado1980TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1980TJ['id'] . '/' . str_replace($search, $replace, $resultado1980TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1980TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1979
foreach ($data['cast'] as $resultado1979MC)
	{
		
	if ($resultado1979MC['media_type'] == $movie)
		{
	if 	(substr($resultado1979MC['release_date'], 0, 4) == $ano1979) {	
	echo substr($resultado1979MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1979MC['id'] . '/' . str_replace($search, $replace, $resultado1979MC['title'])  .  '">' . $resultado1979MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1979MC['id'] . '/' . str_replace($search, $replace, $resultado1979MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1979MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1979MJ)
		{
		if ($resultado1979MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1979MJ['release_date'], 0, 4) == $ano1979) {	
		echo substr($resultado1979MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1979MJ['id'] . '/' . str_replace($search, $replace, $resultado1979MJ['title'])  .  '">' . $resultado1979MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1979MJ['id'] . '/' . str_replace($search, $replace, $resultado1979MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1979MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1979TC)
		{
		if ($resultado1979TC['media_type'] == $tv)
		{
			if (substr($resultado1979TC['first_air_date'], 0, 4) == $ano1979) {
		echo substr($resultado1979TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1979TC['id'] . '/' . str_replace($search, $replace, $resultado1979TC['name'])  .  '">' . $resultado1979TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1979TC['id'] . '/' . str_replace($search, $replace, $resultado1979TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1979TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1979TJ)
		{
		if ($resultado1979TJ['media_type'] == $tv)
		{
		if (substr($resultado1979TJ['first_air_date'], 0, 4) == $ano1979) {
			echo substr($resultado1979TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1979TJ['id'] . '/' . str_replace($search, $replace, $resultado1979TJ['name'])  .  '">' . $resultado1979TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1979TJ['id'] . '/' . str_replace($search, $replace, $resultado1979TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1979TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 

<?php
//ano 1978
foreach ($data['cast'] as $resultado1978MC)
	{
		
	if ($resultado1978MC['media_type'] == $movie)
		{
	if 	(substr($resultado1978MC['release_date'], 0, 4) == $ano1978) {	
	echo substr($resultado1978MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1978MC['id'] . '/' . str_replace($search, $replace, $resultado1978MC['title'])  .  '">' . $resultado1978MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1978MC['id'] . '/' . str_replace($search, $replace, $resultado1978MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1978MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1978MJ)
		{
		if ($resultado1978MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1978MJ['release_date'], 0, 4) == $ano1978) {	
		echo substr($resultado1978MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1978MJ['id'] . '/' . str_replace($search, $replace, $resultado1978MJ['title'])  .  '">' . $resultado1978MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1978MJ['id'] . '/' . str_replace($search, $replace, $resultado1978MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1978MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1978TC)
		{
		if ($resultado1978TC['media_type'] == $tv)
		{
			if (substr($resultado1978TC['first_air_date'], 0, 4) == $ano1978) {
		echo substr($resultado1978TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1978TC['id'] . '/' . str_replace($search, $replace, $resultado1978TC['name'])  .  '">' . $resultado1978TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1978TC['id'] . '/' . str_replace($search, $replace, $resultado1978TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1978TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1978TJ)
		{
		if ($resultado1978TJ['media_type'] == $tv)
		{
		if (substr($resultado1978TJ['first_air_date'], 0, 4) == $ano1978) {
			echo substr($resultado1978TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1978TJ['id'] . '/' . str_replace($search, $replace, $resultado1978TJ['name'])  .  '">' . $resultado1978TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1978TJ['id'] . '/' . str_replace($search, $replace, $resultado1978TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1978TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1977
foreach ($data['cast'] as $resultado1977MC)
	{
		
	if ($resultado1977MC['media_type'] == $movie)
		{
	if 	(substr($resultado1977MC['release_date'], 0, 4) == $ano1977) {	
	echo substr($resultado1977MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1977MC['id'] . '/' . str_replace($search, $replace, $resultado1977MC['title'])  .  '">' . $resultado1977MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1977MC['id'] . '/' . str_replace($search, $replace, $resultado1977MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1977MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1977MJ)
		{
		if ($resultado1977MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1977MJ['release_date'], 0, 4) == $ano1977) {	
		echo substr($resultado1977MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1977MJ['id'] . '/' . str_replace($search, $replace, $resultado1977MJ['title'])  .  '">' . $resultado1977MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1977MJ['id'] . '/' . str_replace($search, $replace, $resultado1977MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1977MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1977TC)
		{
		if ($resultado1977TC['media_type'] == $tv)
		{
			if (substr($resultado1977TC['first_air_date'], 0, 4) == $ano1977) {
		echo substr($resultado1977TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1977TC['id'] . '/' . str_replace($search, $replace, $resultado1977TC['name'])  .  '">' . $resultado1977TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1977TC['id'] . '/' . str_replace($search, $replace, $resultado1977TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1977TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1977TJ)
		{
		if ($resultado1977TJ['media_type'] == $tv)
		{
		if (substr($resultado1977TJ['first_air_date'], 0, 4) == $ano1977) {
			echo substr($resultado1977TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1977TJ['id'] . '/' . str_replace($search, $replace, $resultado1977TJ['name'])  .  '">' . $resultado1977TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1977TJ['id'] . '/' . str_replace($search, $replace, $resultado1977TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1977TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1976
foreach ($data['cast'] as $resultado1976MC)
	{
		
	if ($resultado1976MC['media_type'] == $movie)
		{
	if 	(substr($resultado1976MC['release_date'], 0, 4) == $ano1976) {	
	echo substr($resultado1976MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1976MC['id'] . '/' . str_replace($search, $replace, $resultado1976MC['title'])  .  '">' . $resultado1976MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1976MC['id'] . '/' . str_replace($search, $replace, $resultado1976MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1976MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1976MJ)
		{
		if ($resultado1976MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1976MJ['release_date'], 0, 4) == $ano1976) {	
		echo substr($resultado1976MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1976MJ['id'] . '/' . str_replace($search, $replace, $resultado1976MJ['title'])  .  '">' . $resultado1976MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1976MJ['id'] . '/' . str_replace($search, $replace, $resultado1976MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1976MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1976TC)
		{
		if ($resultado1976TC['media_type'] == $tv)
		{
			if (substr($resultado1976TC['first_air_date'], 0, 4) == $ano1976) {
		echo substr($resultado1976TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1976TC['id'] . '/' . str_replace($search, $replace, $resultado1976TC['name'])  .  '">' . $resultado1976TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1976TC['id'] . '/' . str_replace($search, $replace, $resultado1976TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1976TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1976TJ)
		{
		if ($resultado1976TJ['media_type'] == $tv)
		{
		if (substr($resultado1976TJ['first_air_date'], 0, 4) == $ano1976) {
			echo substr($resultado1976TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1976TJ['id'] . '/' . str_replace($search, $replace, $resultado1976TJ['name'])  .  '">' . $resultado1976TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1976TJ['id'] . '/' . str_replace($search, $replace, $resultado1976TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1976TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1975
foreach ($data['cast'] as $resultado1975MC)
	{
		
	if ($resultado1975MC['media_type'] == $movie)
		{
	if 	(substr($resultado1975MC['release_date'], 0, 4) == $ano1975) {	
	echo substr($resultado1975MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1975MC['id'] . '/' . str_replace($search, $replace, $resultado1975MC['title'])  .  '">' . $resultado1975MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1975MC['id'] . '/' . str_replace($search, $replace, $resultado1975MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1975MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1975MJ)
		{
		if ($resultado1975MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1975MJ['release_date'], 0, 4) == $ano1975) {	
		echo substr($resultado1975MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1975MJ['id'] . '/' . str_replace($search, $replace, $resultado1975MJ['title'])  .  '">' . $resultado1975MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1975MJ['id'] . '/' . str_replace($search, $replace, $resultado1975MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1975MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1975TC)
		{
		if ($resultado1975TC['media_type'] == $tv)
		{
			if (substr($resultado1975TC['first_air_date'], 0, 4) == $ano1975) {
		echo substr($resultado1975TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1975TC['id'] . '/' . str_replace($search, $replace, $resultado1975TC['name'])  .  '">' . $resultado1975TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1975TC['id'] . '/' . str_replace($search, $replace, $resultado1975TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1975TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1975TJ)
		{
		if ($resultado1975TJ['media_type'] == $tv)
		{
		if (substr($resultado1975TJ['first_air_date'], 0, 4) == $ano1975) {
			echo substr($resultado1975TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1975TJ['id'] . '/' . str_replace($search, $replace, $resultado1975TJ['name'])  .  '">' . $resultado1975TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1975TJ['id'] . '/' . str_replace($search, $replace, $resultado1975TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1975TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1974
foreach ($data['cast'] as $resultado1974MC)
	{
		
	if ($resultado1974MC['media_type'] == $movie)
		{
	if 	(substr($resultado1974MC['release_date'], 0, 4) == $ano1974) {	
	echo substr($resultado1974MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1974MC['id'] . '/' . str_replace($search, $replace, $resultado1974MC['title'])  .  '">' . $resultado1974MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1974MC['id'] . '/' . str_replace($search, $replace, $resultado1974MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1974MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1974MJ)
		{
		if ($resultado1974MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1974MJ['release_date'], 0, 4) == $ano1974) {	
		echo substr($resultado1974MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1974MJ['id'] . '/' . str_replace($search, $replace, $resultado1974MJ['title'])  .  '">' . $resultado1974MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1974MJ['id'] . '/' . str_replace($search, $replace, $resultado1974MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1974MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1974TC)
		{
		if ($resultado1974TC['media_type'] == $tv)
		{
			if (substr($resultado1974TC['first_air_date'], 0, 4) == $ano1974) {
		echo substr($resultado1974TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1974TC['id'] . '/' . str_replace($search, $replace, $resultado1974TC['name'])  .  '">' . $resultado1974TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1974TC['id'] . '/' . str_replace($search, $replace, $resultado1974TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1974TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1974TJ)
		{
		if ($resultado1974TJ['media_type'] == $tv)
		{
		if (substr($resultado1974TJ['first_air_date'], 0, 4) == $ano1974) {
			echo substr($resultado1974TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1974TJ['id'] . '/' . str_replace($search, $replace, $resultado1974TJ['name'])  .  '">' . $resultado1974TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1974TJ['id'] . '/' . str_replace($search, $replace, $resultado1974TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1974TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1973
foreach ($data['cast'] as $resultado1973MC)
	{
		
	if ($resultado1973MC['media_type'] == $movie)
		{
	if 	(substr($resultado1973MC['release_date'], 0, 4) == $ano1973) {	
	echo substr($resultado1973MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1973MC['id'] . '/' . str_replace($search, $replace, $resultado1973MC['title'])  .  '">' . $resultado1973MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1973MC['id'] . '/' . str_replace($search, $replace, $resultado1973MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1973MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1973MJ)
		{
		if ($resultado1973MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1973MJ['release_date'], 0, 4) == $ano1973) {	
		echo substr($resultado1973MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1973MJ['id'] . '/' . str_replace($search, $replace, $resultado1973MJ['title'])  .  '">' . $resultado1973MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1973MJ['id'] . '/' . str_replace($search, $replace, $resultado1973MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1973MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1973TC)
		{
		if ($resultado1973TC['media_type'] == $tv)
		{
			if (substr($resultado1973TC['first_air_date'], 0, 4) == $ano1973) {
		echo substr($resultado1973TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1973TC['id'] . '/' . str_replace($search, $replace, $resultado1973TC['name'])  .  '">' . $resultado1973TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1973TC['id'] . '/' . str_replace($search, $replace, $resultado1973TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1973TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1973TJ)
		{
		if ($resultado1973TJ['media_type'] == $tv)
		{
		if (substr($resultado1973TJ['first_air_date'], 0, 4) == $ano1973) {
			echo substr($resultado1973TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1973TJ['id'] . '/' . str_replace($search, $replace, $resultado1973TJ['name'])  .  '">' . $resultado1973TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1973TJ['id'] . '/' . str_replace($search, $replace, $resultado1973TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1973TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1972
foreach ($data['cast'] as $resultado1972MC)
	{
		
	if ($resultado1972MC['media_type'] == $movie)
		{
	if 	(substr($resultado1972MC['release_date'], 0, 4) == $ano1972) {	
	echo substr($resultado1972MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1972MC['id'] . '/' . str_replace($search, $replace, $resultado1972MC['title'])  .  '">' . $resultado1972MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1972MC['id'] . '/' . str_replace($search, $replace, $resultado1972MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1972MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1972MJ)
		{
		if ($resultado1972MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1972MJ['release_date'], 0, 4) == $ano1972) {	
		echo substr($resultado1972MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1972MJ['id'] . '/' . str_replace($search, $replace, $resultado1972MJ['title'])  .  '">' . $resultado1972MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1972MJ['id'] . '/' . str_replace($search, $replace, $resultado1972MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1972MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1972TC)
		{
		if ($resultado1972TC['media_type'] == $tv)
		{
			if (substr($resultado1972TC['first_air_date'], 0, 4) == $ano1972) {
		echo substr($resultado1972TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1972TC['id'] . '/' . str_replace($search, $replace, $resultado1972TC['name'])  .  '">' . $resultado1972TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1972TC['id'] . '/' . str_replace($search, $replace, $resultado1972TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1972TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1972TJ)
		{
		if ($resultado1972TJ['media_type'] == $tv)
		{
		if (substr($resultado1972TJ['first_air_date'], 0, 4) == $ano1972) {
			echo substr($resultado1972TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1972TJ['id'] . '/' . str_replace($search, $replace, $resultado1972TJ['name'])  .  '">' . $resultado1972TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1972TJ['id'] . '/' . str_replace($search, $replace, $resultado1972TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1972TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1971
foreach ($data['cast'] as $resultado1971MC)
	{
		
	if ($resultado1971MC['media_type'] == $movie)
		{
	if 	(substr($resultado1971MC['release_date'], 0, 4) == $ano1971) {	
	echo substr($resultado1971MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1971MC['id'] . '/' . str_replace($search, $replace, $resultado1971MC['title'])  .  '">' . $resultado1971MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1971MC['id'] . '/' . str_replace($search, $replace, $resultado1971MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1971MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1971MJ)
		{
		if ($resultado1971MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1971MJ['release_date'], 0, 4) == $ano1971) {	
		echo substr($resultado1971MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1971MJ['id'] . '/' . str_replace($search, $replace, $resultado1971MJ['title'])  .  '">' . $resultado1971MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1971MJ['id'] . '/' . str_replace($search, $replace, $resultado1971MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1971MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1971TC)
		{
		if ($resultado1971TC['media_type'] == $tv)
		{
			if (substr($resultado1971TC['first_air_date'], 0, 4) == $ano1971) {
		echo substr($resultado1971TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1971TC['id'] . '/' . str_replace($search, $replace, $resultado1971TC['name'])  .  '">' . $resultado1971TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1971TC['id'] . '/' . str_replace($search, $replace, $resultado1971TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1971TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1971TJ)
		{
		if ($resultado1971TJ['media_type'] == $tv)
		{
		if (substr($resultado1971TJ['first_air_date'], 0, 4) == $ano1971) {
			echo substr($resultado1971TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1971TJ['id'] . '/' . str_replace($search, $replace, $resultado1971TJ['name'])  .  '">' . $resultado1971TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1971TJ['id'] . '/' . str_replace($search, $replace, $resultado1971TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1971TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1970
foreach ($data['cast'] as $resultado1970MC)
	{
		
	if ($resultado1970MC['media_type'] == $movie)
		{
	if 	(substr($resultado1970MC['release_date'], 0, 4) == $ano1970) {	
	echo substr($resultado1970MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1970MC['id'] . '/' . str_replace($search, $replace, $resultado1970MC['title'])  .  '">' . $resultado1970MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1970MC['id'] . '/' . str_replace($search, $replace, $resultado1970MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1970MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1970MJ)
		{
		if ($resultado1970MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1970MJ['release_date'], 0, 4) == $ano1970) {	
		echo substr($resultado1970MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1970MJ['id'] . '/' . str_replace($search, $replace, $resultado1970MJ['title'])  .  '">' . $resultado1970MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1970MJ['id'] . '/' . str_replace($search, $replace, $resultado1970MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1970MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1970TC)
		{
		if ($resultado1970TC['media_type'] == $tv)
		{
			if (substr($resultado1970TC['first_air_date'], 0, 4) == $ano1970) {
		echo substr($resultado1970TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1970TC['id'] . '/' . str_replace($search, $replace, $resultado1970TC['name'])  .  '">' . $resultado1970TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1970TC['id'] . '/' . str_replace($search, $replace, $resultado1970TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1970TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1970TJ)
		{
		if ($resultado1970TJ['media_type'] == $tv)
		{
		if (substr($resultado1970TJ['first_air_date'], 0, 4) == $ano1970) {
			echo substr($resultado1970TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1970TJ['id'] . '/' . str_replace($search, $replace, $resultado1970TJ['name'])  .  '">' . $resultado1970TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1970TJ['id'] . '/' . str_replace($search, $replace, $resultado1970TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1970TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 

<?php
//ano 1969
foreach ($data['cast'] as $resultado1969MC)
	{
		
	if ($resultado1969MC['media_type'] == $movie)
		{
	if 	(substr($resultado1969MC['release_date'], 0, 4) == $ano1969) {	
	echo substr($resultado1969MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1969MC['id'] . '/' . str_replace($search, $replace, $resultado1969MC['title'])  .  '">' . $resultado1969MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1969MC['id'] . '/' . str_replace($search, $replace, $resultado1969MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1969MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1969MJ)
		{
		if ($resultado1969MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1969MJ['release_date'], 0, 4) == $ano1969) {	
		echo substr($resultado1969MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1969MJ['id'] . '/' . str_replace($search, $replace, $resultado1969MJ['title'])  .  '">' . $resultado1969MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1969MJ['id'] . '/' . str_replace($search, $replace, $resultado1969MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1969MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1969TC)
		{
		if ($resultado1969TC['media_type'] == $tv)
		{
			if (substr($resultado1969TC['first_air_date'], 0, 4) == $ano1969) {
		echo substr($resultado1969TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1969TC['id'] . '/' . str_replace($search, $replace, $resultado1969TC['name'])  .  '">' . $resultado1969TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1969TC['id'] . '/' . str_replace($search, $replace, $resultado1969TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1969TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1969TJ)
		{
		if ($resultado1969TJ['media_type'] == $tv)
		{
		if (substr($resultado1969TJ['first_air_date'], 0, 4) == $ano1969) {
			echo substr($resultado1969TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1969TJ['id'] . '/' . str_replace($search, $replace, $resultado1969TJ['name'])  .  '">' . $resultado1969TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1969TJ['id'] . '/' . str_replace($search, $replace, $resultado1969TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1969TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 

<?php
//ano 1968
foreach ($data['cast'] as $resultado1968MC)
	{
		
	if ($resultado1968MC['media_type'] == $movie)
		{
	if 	(substr($resultado1968MC['release_date'], 0, 4) == $ano1968) {	
	echo substr($resultado1968MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1968MC['id'] . '/' . str_replace($search, $replace, $resultado1968MC['title'])  .  '">' . $resultado1968MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1968MC['id'] . '/' . str_replace($search, $replace, $resultado1968MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1968MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1968MJ)
		{
		if ($resultado1968MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1968MJ['release_date'], 0, 4) == $ano1968) {	
		echo substr($resultado1968MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1968MJ['id'] . '/' . str_replace($search, $replace, $resultado1968MJ['title'])  .  '">' . $resultado1968MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1968MJ['id'] . '/' . str_replace($search, $replace, $resultado1968MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1968MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1968TC)
		{
		if ($resultado1968TC['media_type'] == $tv)
		{
			if (substr($resultado1968TC['first_air_date'], 0, 4) == $ano1968) {
		echo substr($resultado1968TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1968TC['id'] . '/' . str_replace($search, $replace, $resultado1968TC['name'])  .  '">' . $resultado1968TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1968TC['id'] . '/' . str_replace($search, $replace, $resultado1968TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1968TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1968TJ)
		{
		if ($resultado1968TJ['media_type'] == $tv)
		{
		if (substr($resultado1968TJ['first_air_date'], 0, 4) == $ano1968) {
			echo substr($resultado1968TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1968TJ['id'] . '/' . str_replace($search, $replace, $resultado1968TJ['name'])  .  '">' . $resultado1968TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1968TJ['id'] . '/' . str_replace($search, $replace, $resultado1968TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1968TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1967
foreach ($data['cast'] as $resultado1967MC)
	{
		
	if ($resultado1967MC['media_type'] == $movie)
		{
	if 	(substr($resultado1967MC['release_date'], 0, 4) == $ano1967) {	
	echo substr($resultado1967MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1967MC['id'] . '/' . str_replace($search, $replace, $resultado1967MC['title'])  .  '">' . $resultado1967MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1967MC['id'] . '/' . str_replace($search, $replace, $resultado1967MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1967MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1967MJ)
		{
		if ($resultado1967MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1967MJ['release_date'], 0, 4) == $ano1967) {	
		echo substr($resultado1967MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1967MJ['id'] . '/' . str_replace($search, $replace, $resultado1967MJ['title'])  .  '">' . $resultado1967MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1967MJ['id'] . '/' . str_replace($search, $replace, $resultado1967MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1967MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1967TC)
		{
		if ($resultado1967TC['media_type'] == $tv)
		{
			if (substr($resultado1967TC['first_air_date'], 0, 4) == $ano1967) {
		echo substr($resultado1967TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1967TC['id'] . '/' . str_replace($search, $replace, $resultado1967TC['name'])  .  '">' . $resultado1967TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1967TC['id'] . '/' . str_replace($search, $replace, $resultado1967TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1967TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1967TJ)
		{
		if ($resultado1967TJ['media_type'] == $tv)
		{
		if (substr($resultado1967TJ['first_air_date'], 0, 4) == $ano1967) {
			echo substr($resultado1967TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1967TJ['id'] . '/' . str_replace($search, $replace, $resultado1967TJ['name'])  .  '">' . $resultado1967TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1967TJ['id'] . '/' . str_replace($search, $replace, $resultado1967TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1967TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1966
foreach ($data['cast'] as $resultado1966MC)
	{
		
	if ($resultado1966MC['media_type'] == $movie)
		{
	if 	(substr($resultado1966MC['release_date'], 0, 4) == $ano1966) {	
	echo substr($resultado1966MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1966MC['id'] . '/' . str_replace($search, $replace, $resultado1966MC['title'])  .  '">' . $resultado1966MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1966MC['id'] . '/' . str_replace($search, $replace, $resultado1966MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1966MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1966MJ)
		{
		if ($resultado1966MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1966MJ['release_date'], 0, 4) == $ano1966) {	
		echo substr($resultado1966MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1966MJ['id'] . '/' . str_replace($search, $replace, $resultado1966MJ['title'])  .  '">' . $resultado1966MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1966MJ['id'] . '/' . str_replace($search, $replace, $resultado1966MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1966MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1966TC)
		{
		if ($resultado1966TC['media_type'] == $tv)
		{
			if (substr($resultado1966TC['first_air_date'], 0, 4) == $ano1966) {
		echo substr($resultado1966TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1966TC['id'] . '/' . str_replace($search, $replace, $resultado1966TC['name'])  .  '">' . $resultado1966TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1966TC['id'] . '/' . str_replace($search, $replace, $resultado1966TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1966TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1966TJ)
		{
		if ($resultado1966TJ['media_type'] == $tv)
		{
		if (substr($resultado1966TJ['first_air_date'], 0, 4) == $ano1966) {
			echo substr($resultado1966TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1966TJ['id'] . '/' . str_replace($search, $replace, $resultado1966TJ['name'])  .  '">' . $resultado1966TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1966TJ['id'] . '/' . str_replace($search, $replace, $resultado1966TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1966TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1965
foreach ($data['cast'] as $resultado1965MC)
	{
		
	if ($resultado1965MC['media_type'] == $movie)
		{
	if 	(substr($resultado1965MC['release_date'], 0, 4) == $ano1965) {	
	echo substr($resultado1965MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1965MC['id'] . '/' . str_replace($search, $replace, $resultado1965MC['title'])  .  '">' . $resultado1965MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1965MC['id'] . '/' . str_replace($search, $replace, $resultado1965MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1965MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1965MJ)
		{
		if ($resultado1965MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1965MJ['release_date'], 0, 4) == $ano1965) {	
		echo substr($resultado1965MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1965MJ['id'] . '/' . str_replace($search, $replace, $resultado1965MJ['title'])  .  '">' . $resultado1965MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1965MJ['id'] . '/' . str_replace($search, $replace, $resultado1965MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1965MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1965TC)
		{
		if ($resultado1965TC['media_type'] == $tv)
		{
			if (substr($resultado1965TC['first_air_date'], 0, 4) == $ano1965) {
		echo substr($resultado1965TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1965TC['id'] . '/' . str_replace($search, $replace, $resultado1965TC['name'])  .  '">' . $resultado1965TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1965TC['id'] . '/' . str_replace($search, $replace, $resultado1965TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1965TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1965TJ)
		{
		if ($resultado1965TJ['media_type'] == $tv)
		{
		if (substr($resultado1965TJ['first_air_date'], 0, 4) == $ano1965) {
			echo substr($resultado1965TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1965TJ['id'] . '/' . str_replace($search, $replace, $resultado1965TJ['name'])  .  '">' . $resultado1965TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1965TJ['id'] . '/' . str_replace($search, $replace, $resultado1965TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1965TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1964
foreach ($data['cast'] as $resultado1964MC)
	{
		
	if ($resultado1964MC['media_type'] == $movie)
		{
	if 	(substr($resultado1964MC['release_date'], 0, 4) == $ano1964) {	
	echo substr($resultado1964MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1964MC['id'] . '/' . str_replace($search, $replace, $resultado1964MC['title'])  .  '">' . $resultado1964MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1964MC['id'] . '/' . str_replace($search, $replace, $resultado1964MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1964MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1964MJ)
		{
		if ($resultado1964MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1964MJ['release_date'], 0, 4) == $ano1964) {	
		echo substr($resultado1964MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1964MJ['id'] . '/' . str_replace($search, $replace, $resultado1964MJ['title'])  .  '">' . $resultado1964MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1964MJ['id'] . '/' . str_replace($search, $replace, $resultado1964MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1964MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1964TC)
		{
		if ($resultado1964TC['media_type'] == $tv)
		{
			if (substr($resultado1964TC['first_air_date'], 0, 4) == $ano1964) {
		echo substr($resultado1964TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1964TC['id'] . '/' . str_replace($search, $replace, $resultado1964TC['name'])  .  '">' . $resultado1964TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1964TC['id'] . '/' . str_replace($search, $replace, $resultado1964TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1964TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1964TJ)
		{
		if ($resultado1964TJ['media_type'] == $tv)
		{
		if (substr($resultado1964TJ['first_air_date'], 0, 4) == $ano1964) {
			echo substr($resultado1964TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1964TJ['id'] . '/' . str_replace($search, $replace, $resultado1964TJ['name'])  .  '">' . $resultado1964TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1964TJ['id'] . '/' . str_replace($search, $replace, $resultado1964TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1964TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1963
foreach ($data['cast'] as $resultado1963MC)
	{
		
	if ($resultado1963MC['media_type'] == $movie)
		{
	if 	(substr($resultado1963MC['release_date'], 0, 4) == $ano1963) {	
	echo substr($resultado1963MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1963MC['id'] . '/' . str_replace($search, $replace, $resultado1963MC['title'])  .  '">' . $resultado1963MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1963MC['id'] . '/' . str_replace($search, $replace, $resultado1963MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1963MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1963MJ)
		{
		if ($resultado1963MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1963MJ['release_date'], 0, 4) == $ano1963) {	
		echo substr($resultado1963MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1963MJ['id'] . '/' . str_replace($search, $replace, $resultado1963MJ['title'])  .  '">' . $resultado1963MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1963MJ['id'] . '/' . str_replace($search, $replace, $resultado1963MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1963MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1963TC)
		{
		if ($resultado1963TC['media_type'] == $tv)
		{
			if (substr($resultado1963TC['first_air_date'], 0, 4) == $ano1963) {
		echo substr($resultado1963TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1963TC['id'] . '/' . str_replace($search, $replace, $resultado1963TC['name'])  .  '">' . $resultado1963TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1963TC['id'] . '/' . str_replace($search, $replace, $resultado1963TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1963TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1963TJ)
		{
		if ($resultado1963TJ['media_type'] == $tv)
		{
		if (substr($resultado1963TJ['first_air_date'], 0, 4) == $ano1963) {
			echo substr($resultado1963TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1963TJ['id'] . '/' . str_replace($search, $replace, $resultado1963TJ['name'])  .  '">' . $resultado1963TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1963TJ['id'] . '/' . str_replace($search, $replace, $resultado1963TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1963TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1962
foreach ($data['cast'] as $resultado1962MC)
	{
		
	if ($resultado1962MC['media_type'] == $movie)
		{
	if 	(substr($resultado1962MC['release_date'], 0, 4) == $ano1962) {	
	echo substr($resultado1962MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1962MC['id'] . '/' . str_replace($search, $replace, $resultado1962MC['title'])  .  '">' . $resultado1962MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1962MC['id'] . '/' . str_replace($search, $replace, $resultado1962MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1962MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1962MJ)
		{
		if ($resultado1962MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1962MJ['release_date'], 0, 4) == $ano1962) {	
		echo substr($resultado1962MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1962MJ['id'] . '/' . str_replace($search, $replace, $resultado1962MJ['title'])  .  '">' . $resultado1962MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1962MJ['id'] . '/' . str_replace($search, $replace, $resultado1962MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1962MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1962TC)
		{
		if ($resultado1962TC['media_type'] == $tv)
		{
			if (substr($resultado1962TC['first_air_date'], 0, 4) == $ano1962) {
		echo substr($resultado1962TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1962TC['id'] . '/' . str_replace($search, $replace, $resultado1962TC['name'])  .  '">' . $resultado1962TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1962TC['id'] . '/' . str_replace($search, $replace, $resultado1962TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1962TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1962TJ)
		{
		if ($resultado1962TJ['media_type'] == $tv)
		{
		if (substr($resultado1962TJ['first_air_date'], 0, 4) == $ano1962) {
			echo substr($resultado1962TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1962TJ['id'] . '/' . str_replace($search, $replace, $resultado1962TJ['name'])  .  '">' . $resultado1962TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1962TJ['id'] . '/' . str_replace($search, $replace, $resultado1962TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1962TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1961
foreach ($data['cast'] as $resultado1961MC)
	{
		
	if ($resultado1961MC['media_type'] == $movie)
		{
	if 	(substr($resultado1961MC['release_date'], 0, 4) == $ano1961) {	
	echo substr($resultado1961MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1961MC['id'] . '/' . str_replace($search, $replace, $resultado1961MC['title'])  .  '">' . $resultado1961MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1961MC['id'] . '/' . str_replace($search, $replace, $resultado1961MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1961MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1961MJ)
		{
		if ($resultado1961MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1961MJ['release_date'], 0, 4) == $ano1961) {	
		echo substr($resultado1961MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1961MJ['id'] . '/' . str_replace($search, $replace, $resultado1961MJ['title'])  .  '">' . $resultado1961MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1961MJ['id'] . '/' . str_replace($search, $replace, $resultado1961MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1961MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1961TC)
		{
		if ($resultado1961TC['media_type'] == $tv)
		{
			if (substr($resultado1961TC['first_air_date'], 0, 4) == $ano1961) {
		echo substr($resultado1961TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1961TC['id'] . '/' . str_replace($search, $replace, $resultado1961TC['name'])  .  '">' . $resultado1961TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1961TC['id'] . '/' . str_replace($search, $replace, $resultado1961TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1961TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1961TJ)
		{
		if ($resultado1961TJ['media_type'] == $tv)
		{
		if (substr($resultado1961TJ['first_air_date'], 0, 4) == $ano1961) {
			echo substr($resultado1961TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1961TJ['id'] . '/' . str_replace($search, $replace, $resultado1961TJ['name'])  .  '">' . $resultado1961TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1961TJ['id'] . '/' . str_replace($search, $replace, $resultado1961TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1961TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1960
foreach ($data['cast'] as $resultado1960MC)
	{
		
	if ($resultado1960MC['media_type'] == $movie)
		{
	if 	(substr($resultado1960MC['release_date'], 0, 4) == $ano1960) {	
	echo substr($resultado1960MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1960MC['id'] . '/' . str_replace($search, $replace, $resultado1960MC['title'])  .  '">' . $resultado1960MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1960MC['id'] . '/' . str_replace($search, $replace, $resultado1960MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1960MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1960MJ)
		{
		if ($resultado1960MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1960MJ['release_date'], 0, 4) == $ano1960) {	
		echo substr($resultado1960MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1960MJ['id'] . '/' . str_replace($search, $replace, $resultado1960MJ['title'])  .  '">' . $resultado1960MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1960MJ['id'] . '/' . str_replace($search, $replace, $resultado1960MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1960MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1960TC)
		{
		if ($resultado1960TC['media_type'] == $tv)
		{
			if (substr($resultado1960TC['first_air_date'], 0, 4) == $ano1960) {
		echo substr($resultado1960TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1960TC['id'] . '/' . str_replace($search, $replace, $resultado1960TC['name'])  .  '">' . $resultado1960TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1960TC['id'] . '/' . str_replace($search, $replace, $resultado1960TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1960TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1960TJ)
		{
		if ($resultado1960TJ['media_type'] == $tv)
		{
		if (substr($resultado1960TJ['first_air_date'], 0, 4) == $ano1960) {
			echo substr($resultado1960TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1960TJ['id'] . '/' . str_replace($search, $replace, $resultado1960TJ['name'])  .  '">' . $resultado1960TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1960TJ['id'] . '/' . str_replace($search, $replace, $resultado1960TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1960TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1959
foreach ($data['cast'] as $resultado1959MC)
	{
		
	if ($resultado1959MC['media_type'] == $movie)
		{
	if 	(substr($resultado1959MC['release_date'], 0, 4) == $ano1959) {	
	echo substr($resultado1959MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1959MC['id'] . '/' . str_replace($search, $replace, $resultado1959MC['title'])  .  '">' . $resultado1959MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1959MC['id'] . '/' . str_replace($search, $replace, $resultado1959MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1959MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1959MJ)
		{
		if ($resultado1959MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1959MJ['release_date'], 0, 4) == $ano1959) {	
		echo substr($resultado1959MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1959MJ['id'] . '/' . str_replace($search, $replace, $resultado1959MJ['title'])  .  '">' . $resultado1959MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1959MJ['id'] . '/' . str_replace($search, $replace, $resultado1959MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1959MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1959TC)
		{
		if ($resultado1959TC['media_type'] == $tv)
		{
			if (substr($resultado1959TC['first_air_date'], 0, 4) == $ano1959) {
		echo substr($resultado1959TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1959TC['id'] . '/' . str_replace($search, $replace, $resultado1959TC['name'])  .  '">' . $resultado1959TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1959TC['id'] . '/' . str_replace($search, $replace, $resultado1959TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1959TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1959TJ)
		{
		if ($resultado1959TJ['media_type'] == $tv)
		{
		if (substr($resultado1959TJ['first_air_date'], 0, 4) == $ano1959) {
			echo substr($resultado1959TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1959TJ['id'] . '/' . str_replace($search, $replace, $resultado1959TJ['name'])  .  '">' . $resultado1959TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1959TJ['id'] . '/' . str_replace($search, $replace, $resultado1959TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1959TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 

<?php
//ano 1958
foreach ($data['cast'] as $resultado1958MC)
	{
		
	if ($resultado1958MC['media_type'] == $movie)
		{
	if 	(substr($resultado1958MC['release_date'], 0, 4) == $ano1958) {	
	echo substr($resultado1958MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1958MC['id'] . '/' . str_replace($search, $replace, $resultado1958MC['title'])  .  '">' . $resultado1958MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1958MC['id'] . '/' . str_replace($search, $replace, $resultado1958MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1958MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1958MJ)
		{
		if ($resultado1958MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1958MJ['release_date'], 0, 4) == $ano1958) {	
		echo substr($resultado1958MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1958MJ['id'] . '/' . str_replace($search, $replace, $resultado1958MJ['title'])  .  '">' . $resultado1958MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1958MJ['id'] . '/' . str_replace($search, $replace, $resultado1958MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1958MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1958TC)
		{
		if ($resultado1958TC['media_type'] == $tv)
		{
			if (substr($resultado1958TC['first_air_date'], 0, 4) == $ano1958) {
		echo substr($resultado1958TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1958TC['id'] . '/' . str_replace($search, $replace, $resultado1958TC['name'])  .  '">' . $resultado1958TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1958TC['id'] . '/' . str_replace($search, $replace, $resultado1958TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1958TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1958TJ)
		{
		if ($resultado1958TJ['media_type'] == $tv)
		{
		if (substr($resultado1958TJ['first_air_date'], 0, 4) == $ano1958) {
			echo substr($resultado1958TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1958TJ['id'] . '/' . str_replace($search, $replace, $resultado1958TJ['name'])  .  '">' . $resultado1958TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1958TJ['id'] . '/' . str_replace($search, $replace, $resultado1958TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1958TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1957
foreach ($data['cast'] as $resultado1957MC)
	{
		
	if ($resultado1957MC['media_type'] == $movie)
		{
	if 	(substr($resultado1957MC['release_date'], 0, 4) == $ano1957) {	
	echo substr($resultado1957MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1957MC['id'] . '/' . str_replace($search, $replace, $resultado1957MC['title'])  .  '">' . $resultado1957MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1957MC['id'] . '/' . str_replace($search, $replace, $resultado1957MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1957MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1957MJ)
		{
		if ($resultado1957MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1957MJ['release_date'], 0, 4) == $ano1957) {	
		echo substr($resultado1957MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1957MJ['id'] . '/' . str_replace($search, $replace, $resultado1957MJ['title'])  .  '">' . $resultado1957MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1957MJ['id'] . '/' . str_replace($search, $replace, $resultado1957MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1957MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1957TC)
		{
		if ($resultado1957TC['media_type'] == $tv)
		{
			if (substr($resultado1957TC['first_air_date'], 0, 4) == $ano1957) {
		echo substr($resultado1957TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1957TC['id'] . '/' . str_replace($search, $replace, $resultado1957TC['name'])  .  '">' . $resultado1957TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1957TC['id'] . '/' . str_replace($search, $replace, $resultado1957TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1957TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1957TJ)
		{
		if ($resultado1957TJ['media_type'] == $tv)
		{
		if (substr($resultado1957TJ['first_air_date'], 0, 4) == $ano1957) {
			echo substr($resultado1957TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1957TJ['id'] . '/' . str_replace($search, $replace, $resultado1957TJ['name'])  .  '">' . $resultado1957TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1957TJ['id'] . '/' . str_replace($search, $replace, $resultado1957TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1957TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1956
foreach ($data['cast'] as $resultado1956MC)
	{
		
	if ($resultado1956MC['media_type'] == $movie)
		{
	if 	(substr($resultado1956MC['release_date'], 0, 4) == $ano1956) {	
	echo substr($resultado1956MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1956MC['id'] . '/' . str_replace($search, $replace, $resultado1956MC['title'])  .  '">' . $resultado1956MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1956MC['id'] . '/' . str_replace($search, $replace, $resultado1956MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1956MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1956MJ)
		{
		if ($resultado1956MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1956MJ['release_date'], 0, 4) == $ano1956) {	
		echo substr($resultado1956MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1956MJ['id'] . '/' . str_replace($search, $replace, $resultado1956MJ['title'])  .  '">' . $resultado1956MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1956MJ['id'] . '/' . str_replace($search, $replace, $resultado1956MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1956MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1956TC)
		{
		if ($resultado1956TC['media_type'] == $tv)
		{
			if (substr($resultado1956TC['first_air_date'], 0, 4) == $ano1956) {
		echo substr($resultado1956TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1956TC['id'] . '/' . str_replace($search, $replace, $resultado1956TC['name'])  .  '">' . $resultado1956TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1956TC['id'] . '/' . str_replace($search, $replace, $resultado1956TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1956TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1956TJ)
		{
		if ($resultado1956TJ['media_type'] == $tv)
		{
		if (substr($resultado1956TJ['first_air_date'], 0, 4) == $ano1956) {
			echo substr($resultado1956TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1956TJ['id'] . '/' . str_replace($search, $replace, $resultado1956TJ['name'])  .  '">' . $resultado1956TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1956TJ['id'] . '/' . str_replace($search, $replace, $resultado1956TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1956TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1955
foreach ($data['cast'] as $resultado1955MC)
	{
		
	if ($resultado1955MC['media_type'] == $movie)
		{
	if 	(substr($resultado1955MC['release_date'], 0, 4) == $ano1955) {	
	echo substr($resultado1955MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1955MC['id'] . '/' . str_replace($search, $replace, $resultado1955MC['title'])  .  '">' . $resultado1955MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1955MC['id'] . '/' . str_replace($search, $replace, $resultado1955MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1955MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1955MJ)
		{
		if ($resultado1955MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1955MJ['release_date'], 0, 4) == $ano1955) {	
		echo substr($resultado1955MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1955MJ['id'] . '/' . str_replace($search, $replace, $resultado1955MJ['title'])  .  '">' . $resultado1955MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1955MJ['id'] . '/' . str_replace($search, $replace, $resultado1955MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1955MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1955TC)
		{
		if ($resultado1955TC['media_type'] == $tv)
		{
			if (substr($resultado1955TC['first_air_date'], 0, 4) == $ano1955) {
		echo substr($resultado1955TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1955TC['id'] . '/' . str_replace($search, $replace, $resultado1955TC['name'])  .  '">' . $resultado1955TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1955TC['id'] . '/' . str_replace($search, $replace, $resultado1955TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1955TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1955TJ)
		{
		if ($resultado1955TJ['media_type'] == $tv)
		{
		if (substr($resultado1955TJ['first_air_date'], 0, 4) == $ano1955) {
			echo substr($resultado1955TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1955TJ['id'] . '/' . str_replace($search, $replace, $resultado1955TJ['name'])  .  '">' . $resultado1955TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1955TJ['id'] . '/' . str_replace($search, $replace, $resultado1955TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1955TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1954
foreach ($data['cast'] as $resultado1954MC)
	{
		
	if ($resultado1954MC['media_type'] == $movie)
		{
	if 	(substr($resultado1954MC['release_date'], 0, 4) == $ano1954) {	
	echo substr($resultado1954MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1954MC['id'] . '/' . str_replace($search, $replace, $resultado1954MC['title'])  .  '">' . $resultado1954MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1954MC['id'] . '/' . str_replace($search, $replace, $resultado1954MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1954MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1954MJ)
		{
		if ($resultado1954MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1954MJ['release_date'], 0, 4) == $ano1954) {	
		echo substr($resultado1954MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1954MJ['id'] . '/' . str_replace($search, $replace, $resultado1954MJ['title'])  .  '">' . $resultado1954MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1954MJ['id'] . '/' . str_replace($search, $replace, $resultado1954MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1954MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1954TC)
		{
		if ($resultado1954TC['media_type'] == $tv)
		{
			if (substr($resultado1954TC['first_air_date'], 0, 4) == $ano1954) {
		echo substr($resultado1954TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1954TC['id'] . '/' . str_replace($search, $replace, $resultado1954TC['name'])  .  '">' . $resultado1954TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1954TC['id'] . '/' . str_replace($search, $replace, $resultado1954TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1954TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1954TJ)
		{
		if ($resultado1954TJ['media_type'] == $tv)
		{
		if (substr($resultado1954TJ['first_air_date'], 0, 4) == $ano1954) {
			echo substr($resultado1954TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1954TJ['id'] . '/' . str_replace($search, $replace, $resultado1954TJ['name'])  .  '">' . $resultado1954TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1954TJ['id'] . '/' . str_replace($search, $replace, $resultado1954TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1954TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1953
foreach ($data['cast'] as $resultado1953MC)
	{
		
	if ($resultado1953MC['media_type'] == $movie)
		{
	if 	(substr($resultado1953MC['release_date'], 0, 4) == $ano1953) {	
	echo substr($resultado1953MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1953MC['id'] . '/' . str_replace($search, $replace, $resultado1953MC['title'])  .  '">' . $resultado1953MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1953MC['id'] . '/' . str_replace($search, $replace, $resultado1953MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1953MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1953MJ)
		{
		if ($resultado1953MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1953MJ['release_date'], 0, 4) == $ano1953) {	
		echo substr($resultado1953MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1953MJ['id'] . '/' . str_replace($search, $replace, $resultado1953MJ['title'])  .  '">' . $resultado1953MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1953MJ['id'] . '/' . str_replace($search, $replace, $resultado1953MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1953MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1953TC)
		{
		if ($resultado1953TC['media_type'] == $tv)
		{
			if (substr($resultado1953TC['first_air_date'], 0, 4) == $ano1953) {
		echo substr($resultado1953TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1953TC['id'] . '/' . str_replace($search, $replace, $resultado1953TC['name'])  .  '">' . $resultado1953TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1953TC['id'] . '/' . str_replace($search, $replace, $resultado1953TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1953TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1953TJ)
		{
		if ($resultado1953TJ['media_type'] == $tv)
		{
		if (substr($resultado1953TJ['first_air_date'], 0, 4) == $ano1953) {
			echo substr($resultado1953TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1953TJ['id'] . '/' . str_replace($search, $replace, $resultado1953TJ['name'])  .  '">' . $resultado1953TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1953TJ['id'] . '/' . str_replace($search, $replace, $resultado1953TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1953TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1952
foreach ($data['cast'] as $resultado1952MC)
	{
		
	if ($resultado1952MC['media_type'] == $movie)
		{
	if 	(substr($resultado1952MC['release_date'], 0, 4) == $ano1952) {	
	echo substr($resultado1952MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1952MC['id'] . '/' . str_replace($search, $replace, $resultado1952MC['title'])  .  '">' . $resultado1952MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1952MC['id'] . '/' . str_replace($search, $replace, $resultado1952MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1952MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1952MJ)
		{
		if ($resultado1952MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1952MJ['release_date'], 0, 4) == $ano1952) {	
		echo substr($resultado1952MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1952MJ['id'] . '/' . str_replace($search, $replace, $resultado1952MJ['title'])  .  '">' . $resultado1952MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1952MJ['id'] . '/' . str_replace($search, $replace, $resultado1952MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1952MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1952TC)
		{
		if ($resultado1952TC['media_type'] == $tv)
		{
			if (substr($resultado1952TC['first_air_date'], 0, 4) == $ano1952) {
		echo substr($resultado1952TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1952TC['id'] . '/' . str_replace($search, $replace, $resultado1952TC['name'])  .  '">' . $resultado1952TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1952TC['id'] . '/' . str_replace($search, $replace, $resultado1952TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1952TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1952TJ)
		{
		if ($resultado1952TJ['media_type'] == $tv)
		{
		if (substr($resultado1952TJ['first_air_date'], 0, 4) == $ano1952) {
			echo substr($resultado1952TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1952TJ['id'] . '/' . str_replace($search, $replace, $resultado1952TJ['name'])  .  '">' . $resultado1952TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1952TJ['id'] . '/' . str_replace($search, $replace, $resultado1952TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1952TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1951
foreach ($data['cast'] as $resultado1951MC)
	{
		
	if ($resultado1951MC['media_type'] == $movie)
		{
	if 	(substr($resultado1951MC['release_date'], 0, 4) == $ano1951) {	
	echo substr($resultado1951MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1951MC['id'] . '/' . str_replace($search, $replace, $resultado1951MC['title'])  .  '">' . $resultado1951MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1951MC['id'] . '/' . str_replace($search, $replace, $resultado1951MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1951MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1951MJ)
		{
		if ($resultado1951MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1951MJ['release_date'], 0, 4) == $ano1951) {	
		echo substr($resultado1951MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1951MJ['id'] . '/' . str_replace($search, $replace, $resultado1951MJ['title'])  .  '">' . $resultado1951MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1951MJ['id'] . '/' . str_replace($search, $replace, $resultado1951MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1951MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1951TC)
		{
		if ($resultado1951TC['media_type'] == $tv)
		{
			if (substr($resultado1951TC['first_air_date'], 0, 4) == $ano1951) {
		echo substr($resultado1951TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1951TC['id'] . '/' . str_replace($search, $replace, $resultado1951TC['name'])  .  '">' . $resultado1951TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1951TC['id'] . '/' . str_replace($search, $replace, $resultado1951TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1951TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1951TJ)
		{
		if ($resultado1951TJ['media_type'] == $tv)
		{
		if (substr($resultado1951TJ['first_air_date'], 0, 4) == $ano1951) {
			echo substr($resultado1951TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1951TJ['id'] . '/' . str_replace($search, $replace, $resultado1951TJ['name'])  .  '">' . $resultado1951TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1951TJ['id'] . '/' . str_replace($search, $replace, $resultado1951TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1951TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1950
foreach ($data['cast'] as $resultado1950MC)
	{
		
	if ($resultado1950MC['media_type'] == $movie)
		{
	if 	(substr($resultado1950MC['release_date'], 0, 4) == $ano1950) {	
	echo substr($resultado1950MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1950MC['id'] . '/' . str_replace($search, $replace, $resultado1950MC['title'])  .  '">' . $resultado1950MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1950MC['id'] . '/' . str_replace($search, $replace, $resultado1950MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1950MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1950MJ)
		{
		if ($resultado1950MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1950MJ['release_date'], 0, 4) == $ano1950) {	
		echo substr($resultado1950MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1950MJ['id'] . '/' . str_replace($search, $replace, $resultado1950MJ['title'])  .  '">' . $resultado1950MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1950MJ['id'] . '/' . str_replace($search, $replace, $resultado1950MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1950MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1950TC)
		{
		if ($resultado1950TC['media_type'] == $tv)
		{
			if (substr($resultado1950TC['first_air_date'], 0, 4) == $ano1950) {
		echo substr($resultado1950TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1950TC['id'] . '/' . str_replace($search, $replace, $resultado1950TC['name'])  .  '">' . $resultado1950TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1950TC['id'] . '/' . str_replace($search, $replace, $resultado1950TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1950TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1950TJ)
		{
		if ($resultado1950TJ['media_type'] == $tv)
		{
		if (substr($resultado1950TJ['first_air_date'], 0, 4) == $ano1950) {
			echo substr($resultado1950TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1950TJ['id'] . '/' . str_replace($search, $replace, $resultado1950TJ['name'])  .  '">' . $resultado1950TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1950TJ['id'] . '/' . str_replace($search, $replace, $resultado1950TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1950TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1949
foreach ($data['cast'] as $resultado1949MC)
	{
		
	if ($resultado1949MC['media_type'] == $movie)
		{
	if 	(substr($resultado1949MC['release_date'], 0, 4) == $ano1949) {	
	echo substr($resultado1949MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1949MC['id'] . '/' . str_replace($search, $replace, $resultado1949MC['title'])  .  '">' . $resultado1949MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1949MC['id'] . '/' . str_replace($search, $replace, $resultado1949MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1949MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1949MJ)
		{
		if ($resultado1949MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1949MJ['release_date'], 0, 4) == $ano1949) {	
		echo substr($resultado1949MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1949MJ['id'] . '/' . str_replace($search, $replace, $resultado1949MJ['title'])  .  '">' . $resultado1949MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1949MJ['id'] . '/' . str_replace($search, $replace, $resultado1949MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1949MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1949TC)
		{
		if ($resultado1949TC['media_type'] == $tv)
		{
			if (substr($resultado1949TC['first_air_date'], 0, 4) == $ano1949) {
		echo substr($resultado1949TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1949TC['id'] . '/' . str_replace($search, $replace, $resultado1949TC['name'])  .  '">' . $resultado1949TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1949TC['id'] . '/' . str_replace($search, $replace, $resultado1949TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1949TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1949TJ)
		{
		if ($resultado1949TJ['media_type'] == $tv)
		{
		if (substr($resultado1949TJ['first_air_date'], 0, 4) == $ano1949) {
			echo substr($resultado1949TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1949TJ['id'] . '/' . str_replace($search, $replace, $resultado1949TJ['name'])  .  '">' . $resultado1949TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1949TJ['id'] . '/' . str_replace($search, $replace, $resultado1949TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1949TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 

<?php
//ano 1948
foreach ($data['cast'] as $resultado1948MC)
	{
		
	if ($resultado1948MC['media_type'] == $movie)
		{
	if 	(substr($resultado1948MC['release_date'], 0, 4) == $ano1948) {	
	echo substr($resultado1948MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1948MC['id'] . '/' . str_replace($search, $replace, $resultado1948MC['title'])  .  '">' . $resultado1948MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1948MC['id'] . '/' . str_replace($search, $replace, $resultado1948MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1948MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1948MJ)
		{
		if ($resultado1948MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1948MJ['release_date'], 0, 4) == $ano1948) {	
		echo substr($resultado1948MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1948MJ['id'] . '/' . str_replace($search, $replace, $resultado1948MJ['title'])  .  '">' . $resultado1948MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1948MJ['id'] . '/' . str_replace($search, $replace, $resultado1948MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1948MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1948TC)
		{
		if ($resultado1948TC['media_type'] == $tv)
		{
			if (substr($resultado1948TC['first_air_date'], 0, 4) == $ano1948) {
		echo substr($resultado1948TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1948TC['id'] . '/' . str_replace($search, $replace, $resultado1948TC['name'])  .  '">' . $resultado1948TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1948TC['id'] . '/' . str_replace($search, $replace, $resultado1948TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1948TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1948TJ)
		{
		if ($resultado1948TJ['media_type'] == $tv)
		{
		if (substr($resultado1948TJ['first_air_date'], 0, 4) == $ano1948) {
			echo substr($resultado1948TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1948TJ['id'] . '/' . str_replace($search, $replace, $resultado1948TJ['name'])  .  '">' . $resultado1948TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1948TJ['id'] . '/' . str_replace($search, $replace, $resultado1948TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1948TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1947
foreach ($data['cast'] as $resultado1947MC)
	{
		
	if ($resultado1947MC['media_type'] == $movie)
		{
	if 	(substr($resultado1947MC['release_date'], 0, 4) == $ano1947) {	
	echo substr($resultado1947MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1947MC['id'] . '/' . str_replace($search, $replace, $resultado1947MC['title'])  .  '">' . $resultado1947MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1947MC['id'] . '/' . str_replace($search, $replace, $resultado1947MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1947MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1947MJ)
		{
		if ($resultado1947MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1947MJ['release_date'], 0, 4) == $ano1947) {	
		echo substr($resultado1947MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1947MJ['id'] . '/' . str_replace($search, $replace, $resultado1947MJ['title'])  .  '">' . $resultado1947MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1947MJ['id'] . '/' . str_replace($search, $replace, $resultado1947MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1947MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1947TC)
		{
		if ($resultado1947TC['media_type'] == $tv)
		{
			if (substr($resultado1947TC['first_air_date'], 0, 4) == $ano1947) {
		echo substr($resultado1947TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1947TC['id'] . '/' . str_replace($search, $replace, $resultado1947TC['name'])  .  '">' . $resultado1947TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1947TC['id'] . '/' . str_replace($search, $replace, $resultado1947TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1947TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1947TJ)
		{
		if ($resultado1947TJ['media_type'] == $tv)
		{
		if (substr($resultado1947TJ['first_air_date'], 0, 4) == $ano1947) {
			echo substr($resultado1947TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1947TJ['id'] . '/' . str_replace($search, $replace, $resultado1947TJ['name'])  .  '">' . $resultado1947TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1947TJ['id'] . '/' . str_replace($search, $replace, $resultado1947TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1947TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1946
foreach ($data['cast'] as $resultado1946MC)
	{
		
	if ($resultado1946MC['media_type'] == $movie)
		{
	if 	(substr($resultado1946MC['release_date'], 0, 4) == $ano1946) {	
	echo substr($resultado1946MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1946MC['id'] . '/' . str_replace($search, $replace, $resultado1946MC['title'])  .  '">' . $resultado1946MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1946MC['id'] . '/' . str_replace($search, $replace, $resultado1946MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1946MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1946MJ)
		{
		if ($resultado1946MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1946MJ['release_date'], 0, 4) == $ano1946) {	
		echo substr($resultado1946MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1946MJ['id'] . '/' . str_replace($search, $replace, $resultado1946MJ['title'])  .  '">' . $resultado1946MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1946MJ['id'] . '/' . str_replace($search, $replace, $resultado1946MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1946MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1946TC)
		{
		if ($resultado1946TC['media_type'] == $tv)
		{
			if (substr($resultado1946TC['first_air_date'], 0, 4) == $ano1946) {
		echo substr($resultado1946TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1946TC['id'] . '/' . str_replace($search, $replace, $resultado1946TC['name'])  .  '">' . $resultado1946TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1946TC['id'] . '/' . str_replace($search, $replace, $resultado1946TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1946TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1946TJ)
		{
		if ($resultado1946TJ['media_type'] == $tv)
		{
		if (substr($resultado1946TJ['first_air_date'], 0, 4) == $ano1946) {
			echo substr($resultado1946TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1946TJ['id'] . '/' . str_replace($search, $replace, $resultado1946TJ['name'])  .  '">' . $resultado1946TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1946TJ['id'] . '/' . str_replace($search, $replace, $resultado1946TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1946TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1945
foreach ($data['cast'] as $resultado1945MC)
	{
		
	if ($resultado1945MC['media_type'] == $movie)
		{
	if 	(substr($resultado1945MC['release_date'], 0, 4) == $ano1945) {	
	echo substr($resultado1945MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1945MC['id'] . '/' . str_replace($search, $replace, $resultado1945MC['title'])  .  '">' . $resultado1945MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1945MC['id'] . '/' . str_replace($search, $replace, $resultado1945MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1945MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1945MJ)
		{
		if ($resultado1945MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1945MJ['release_date'], 0, 4) == $ano1945) {	
		echo substr($resultado1945MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1945MJ['id'] . '/' . str_replace($search, $replace, $resultado1945MJ['title'])  .  '">' . $resultado1945MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1945MJ['id'] . '/' . str_replace($search, $replace, $resultado1945MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1945MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1945TC)
		{
		if ($resultado1945TC['media_type'] == $tv)
		{
			if (substr($resultado1945TC['first_air_date'], 0, 4) == $ano1945) {
		echo substr($resultado1945TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1945TC['id'] . '/' . str_replace($search, $replace, $resultado1945TC['name'])  .  '">' . $resultado1945TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1945TC['id'] . '/' . str_replace($search, $replace, $resultado1945TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1945TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1945TJ)
		{
		if ($resultado1945TJ['media_type'] == $tv)
		{
		if (substr($resultado1945TJ['first_air_date'], 0, 4) == $ano1945) {
			echo substr($resultado1945TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1945TJ['id'] . '/' . str_replace($search, $replace, $resultado1945TJ['name'])  .  '">' . $resultado1945TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1945TJ['id'] . '/' . str_replace($search, $replace, $resultado1945TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1945TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1944
foreach ($data['cast'] as $resultado1944MC)
	{
		
	if ($resultado1944MC['media_type'] == $movie)
		{
	if 	(substr($resultado1944MC['release_date'], 0, 4) == $ano1944) {	
	echo substr($resultado1944MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1944MC['id'] . '/' . str_replace($search, $replace, $resultado1944MC['title'])  .  '">' . $resultado1944MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1944MC['id'] . '/' . str_replace($search, $replace, $resultado1944MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1944MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1944MJ)
		{
		if ($resultado1944MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1944MJ['release_date'], 0, 4) == $ano1944) {	
		echo substr($resultado1944MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1944MJ['id'] . '/' . str_replace($search, $replace, $resultado1944MJ['title'])  .  '">' . $resultado1944MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1944MJ['id'] . '/' . str_replace($search, $replace, $resultado1944MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1944MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1944TC)
		{
		if ($resultado1944TC['media_type'] == $tv)
		{
			if (substr($resultado1944TC['first_air_date'], 0, 4) == $ano1944) {
		echo substr($resultado1944TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1944TC['id'] . '/' . str_replace($search, $replace, $resultado1944TC['name'])  .  '">' . $resultado1944TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1944TC['id'] . '/' . str_replace($search, $replace, $resultado1944TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1944TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1944TJ)
		{
		if ($resultado1944TJ['media_type'] == $tv)
		{
		if (substr($resultado1944TJ['first_air_date'], 0, 4) == $ano1944) {
			echo substr($resultado1944TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1944TJ['id'] . '/' . str_replace($search, $replace, $resultado1944TJ['name'])  .  '">' . $resultado1944TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1944TJ['id'] . '/' . str_replace($search, $replace, $resultado1944TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1944TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1943
foreach ($data['cast'] as $resultado1943MC)
	{
		
	if ($resultado1943MC['media_type'] == $movie)
		{
	if 	(substr($resultado1943MC['release_date'], 0, 4) == $ano1943) {	
	echo substr($resultado1943MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1943MC['id'] . '/' . str_replace($search, $replace, $resultado1943MC['title'])  .  '">' . $resultado1943MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1943MC['id'] . '/' . str_replace($search, $replace, $resultado1943MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1943MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1943MJ)
		{
		if ($resultado1943MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1943MJ['release_date'], 0, 4) == $ano1943) {	
		echo substr($resultado1943MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1943MJ['id'] . '/' . str_replace($search, $replace, $resultado1943MJ['title'])  .  '">' . $resultado1943MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1943MJ['id'] . '/' . str_replace($search, $replace, $resultado1943MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1943MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1943TC)
		{
		if ($resultado1943TC['media_type'] == $tv)
		{
			if (substr($resultado1943TC['first_air_date'], 0, 4) == $ano1943) {
		echo substr($resultado1943TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1943TC['id'] . '/' . str_replace($search, $replace, $resultado1943TC['name'])  .  '">' . $resultado1943TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1943TC['id'] . '/' . str_replace($search, $replace, $resultado1943TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1943TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1943TJ)
		{
		if ($resultado1943TJ['media_type'] == $tv)
		{
		if (substr($resultado1943TJ['first_air_date'], 0, 4) == $ano1943) {
			echo substr($resultado1943TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1943TJ['id'] . '/' . str_replace($search, $replace, $resultado1943TJ['name'])  .  '">' . $resultado1943TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1943TJ['id'] . '/' . str_replace($search, $replace, $resultado1943TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1943TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1942
foreach ($data['cast'] as $resultado1942MC)
	{
		
	if ($resultado1942MC['media_type'] == $movie)
		{
	if 	(substr($resultado1942MC['release_date'], 0, 4) == $ano1942) {	
	echo substr($resultado1942MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1942MC['id'] . '/' . str_replace($search, $replace, $resultado1942MC['title'])  .  '">' . $resultado1942MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1942MC['id'] . '/' . str_replace($search, $replace, $resultado1942MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1942MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1942MJ)
		{
		if ($resultado1942MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1942MJ['release_date'], 0, 4) == $ano1942) {	
		echo substr($resultado1942MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1942MJ['id'] . '/' . str_replace($search, $replace, $resultado1942MJ['title'])  .  '">' . $resultado1942MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1942MJ['id'] . '/' . str_replace($search, $replace, $resultado1942MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1942MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1942TC)
		{
		if ($resultado1942TC['media_type'] == $tv)
		{
			if (substr($resultado1942TC['first_air_date'], 0, 4) == $ano1942) {
		echo substr($resultado1942TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1942TC['id'] . '/' . str_replace($search, $replace, $resultado1942TC['name'])  .  '">' . $resultado1942TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1942TC['id'] . '/' . str_replace($search, $replace, $resultado1942TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1942TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1942TJ)
		{
		if ($resultado1942TJ['media_type'] == $tv)
		{
		if (substr($resultado1942TJ['first_air_date'], 0, 4) == $ano1942) {
			echo substr($resultado1942TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1942TJ['id'] . '/' . str_replace($search, $replace, $resultado1942TJ['name'])  .  '">' . $resultado1942TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1942TJ['id'] . '/' . str_replace($search, $replace, $resultado1942TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1942TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1941
foreach ($data['cast'] as $resultado1941MC)
	{
		
	if ($resultado1941MC['media_type'] == $movie)
		{
	if 	(substr($resultado1941MC['release_date'], 0, 4) == $ano1941) {	
	echo substr($resultado1941MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1941MC['id'] . '/' . str_replace($search, $replace, $resultado1941MC['title'])  .  '">' . $resultado1941MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1941MC['id'] . '/' . str_replace($search, $replace, $resultado1941MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1941MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1941MJ)
		{
		if ($resultado1941MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1941MJ['release_date'], 0, 4) == $ano1941) {	
		echo substr($resultado1941MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1941MJ['id'] . '/' . str_replace($search, $replace, $resultado1941MJ['title'])  .  '">' . $resultado1941MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1941MJ['id'] . '/' . str_replace($search, $replace, $resultado1941MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1941MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1941TC)
		{
		if ($resultado1941TC['media_type'] == $tv)
		{
			if (substr($resultado1941TC['first_air_date'], 0, 4) == $ano1941) {
		echo substr($resultado1941TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1941TC['id'] . '/' . str_replace($search, $replace, $resultado1941TC['name'])  .  '">' . $resultado1941TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1941TC['id'] . '/' . str_replace($search, $replace, $resultado1941TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1941TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1941TJ)
		{
		if ($resultado1941TJ['media_type'] == $tv)
		{
		if (substr($resultado1941TJ['first_air_date'], 0, 4) == $ano1941) {
			echo substr($resultado1941TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1941TJ['id'] . '/' . str_replace($search, $replace, $resultado1941TJ['name'])  .  '">' . $resultado1941TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1941TJ['id'] . '/' . str_replace($search, $replace, $resultado1941TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1941TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 
<?php
//ano 1940
foreach ($data['cast'] as $resultado1940MC)
	{
		
	if ($resultado1940MC['media_type'] == $movie)
		{
	if 	(substr($resultado1940MC['release_date'], 0, 4) == $ano1940) {	
	echo substr($resultado1940MC['release_date'], 0, 4) . ' - ';	
	echo '<a  href="../../' . $country . '/movie/?' . $resultado1940MC['id'] . '/' . str_replace($search, $replace, $resultado1940MC['title'])  .  '">' . $resultado1940MC['title'] . '</a>'; 
	echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1940MC['id'] . '/' . str_replace($search, $replace, $resultado1940MC['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1940MC['character']) . '</a>'; 
	echo '<br>';
	} else {
	echo ' ';
	}  
	}
	}
	
foreach ($data['crew'] as $resultado1940MJ)
		{
		if ($resultado1940MJ['media_type'] == $movie)
		{
		if 	(substr($resultado1940MJ['release_date'], 0, 4) == $ano1940) {	
		echo substr($resultado1940MJ['release_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/movie/?' . $resultado1940MJ['id'] . '/' . str_replace($search, $replace, $resultado1940MJ['title'])  .  '">' . $resultado1940MJ['title'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/movie/?' . $resultado1940MJ['id'] . '/' . str_replace($search, $replace, $resultado1940MJ['title'])  .  '">' . str_replace($depart1, $depart2, $resultado1940MJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		}
	}
foreach ($data['cast'] as $resultado1940TC)
		{
		if ($resultado1940TC['media_type'] == $tv)
		{
			if (substr($resultado1940TC['first_air_date'], 0, 4) == $ano1940) {
		echo substr($resultado1940TC['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1940TC['id'] . '/' . str_replace($search, $replace, $resultado1940TC['name'])  .  '">' . $resultado1940TC['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1940TC['id'] . '/' . str_replace($search, $replace, $resultado1940TC['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1940TC['character']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		}  
		 }	
		} 
foreach ($data['crew'] as $resultado1940TJ)
		{
		if ($resultado1940TJ['media_type'] == $tv)
		{
		if (substr($resultado1940TJ['first_air_date'], 0, 4) == $ano1940) {
			echo substr($resultado1940TJ['first_air_date'], 0, 4) . ' - ';	
		echo '<a  href="../../' . $country . '/tv/?' . $resultado1940TJ['id'] . '/' . str_replace($search, $replace, $resultado1940TJ['name'])  .  '">' . $resultado1940TJ['name'] . '</a>'; 
		echo '  <a style=" color:#0ae" href="../../' . $country . '/tv/?' . $resultado1940TJ['id'] . '/' . str_replace($search, $replace, $resultado1940TJ['name'])  .  '">' . str_replace($depart1, $depart2, $resultado1940TJ['job']) . '</a>'; 
		echo '<br>';
		} else {
		echo ' ';
		 }  
		 }		
	 }

?> 