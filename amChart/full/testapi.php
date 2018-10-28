 <?php
 $data = $_GET;
$getdata = http_build_query($data);
// print_r($data);exit;

$opts = array('http' =>
	// array(
	//     'method'  => 'GET',
	//     'content' => $getdata
	// )
	array(
		'method' => "GET",
	    'header'=> "Content-type: application/json\r\n"
	            . "Content-Length: " . strlen($getdata) . "\r\n",
	    'content' => $getdata
	)
);

$context  = stream_context_create($opts);

$result = file_get_contents('http://118.163.8.90:50080/api.php?'.$getdata, false, $context);

 // $apiurl = $_GET["apiurl"];
 //   $tfrom = $_GET["from"];
 //   $tto = $_GET["to"];
 //   $itv = $_GET["interval"];
 //   $response = file_get_contents('http://118.163.8.90:50080/api.php', );
   // $response = file_get_contents($apiurl);
   echo $result;