<?php
require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
 $tweets=new stdClass( );
$consumerKey="mH3d15aukRyykHd7tBtiMykpd";
$consumerSecret="BqJwyHxDuPTTbaWf3JS64HlElnrcnP2OsSxkA3MOynvJSZJf76";

$access_token="3154310897-V4ps4I1bs6urjNUVnnohbbxgAtO0ksdj736hsJw";
$access_token_secret="KN0zoaCVZEGh8PwVPGjmin5gCZH7mWbxB9u155AP6EpHP";

//CONSUMER_SECRETCONSUMER_KEY
$connection = new TwitterOAuth($consumerKey,$consumerSecret , $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

$tweets = $connection->get("trends/place" ,["id" => 23424942]);



//echo "<pre>";
//print_r($tweets );
//echo"</pre>";
$arr=json_decode(json_encode($tweets),true);
echo "<pre>";
//print_r($arr);


//echo "</pre>";
//echo $arr[0]['trends'][0]['name'];

for ($x = 0; $x <= 49; $x++)
{
  echo"<pre>";
       echo $arr[0]['trends'][$x]['name'];
	   $x++;
echo"</pre>";
  
  
}






	

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://api.themoviedb.org/3/movie/upcoming?api_key=c1b5d426346ec45e16955da2e7ce6285",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	/* CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: bloomberg-market-and-financial-news.p.rapidapi.com",
		"x-rapidapi-key: 7b847d7c04msh2d09306cea1efcdp176153jsnbecf03fa986a"
	], */
]);

$response = curl_exec($curl);
$err = curl_error($curl);

	
	
	
	
	$array=json_decode(json_encode($response),true);
	//$array=json_decode($response);
	
	echo "<pre>";
    print_r($array);
	echo "</pre>";
	
	$array2=json_decode($array, true);
	$pathx = "https://image.tmdb.org/t/p/w500";
	for ($x = 0; $x <= 20; $x++)
{
	
$file =$array2['results'][$x]["backdrop_path"] ;
	
  echo"<pre>";
      // echo ..'<img src="img_girl.jpg" alt="Girl in a jacket" >';;
	  echo '<img src="'.$pathx.$array2['results'][$x]["backdrop_path"].'" width="500" height="600">';
	  $x++;
echo"</pre>";
  
  
}
	
	
	
curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	//echo "<pre>";
    //print_r($array);
	//echo "</pre>";
	

	



	
}


	
	
	
	
	
	
	
	
	
	
	
	
    ?>