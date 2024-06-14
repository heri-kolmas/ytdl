<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://youtube-mp315.p.rapidapi.com/?url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DWVl6g5hvcDA",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: youtube-mp315.p.rapidapi.com",
		"x-rapidapi-key: 0153fa778amsh26074342ae99bfcp15566ejsnb2428745ef73"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
<form method="post">
  <input type="text" name="$err" maxlength="2000"/>
  <input type="submit" name="submit" value="download" />

</form>
<?php if (isset($err)) { $obj->download_file($err);} ?>
