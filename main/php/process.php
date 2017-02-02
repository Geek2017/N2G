<?php

$jsonString = file_get_contents('json.json');
$data = json_decode($jsonString, true);

$path=$data[0]['count'];   

   $myFile = "../../src/ftd$path/js/coords.json";
   $arr_data = array(); // create empty array


	  if($_POST['form_submit'] == 1)
    {
	   //Get form data
	   $formdata0 = array(
	      'Id'=> $_POST['Id0'],
	      'c1'=> $_POST['c1'],
	      'c2'=>$_POST['c2']
	   );

	   $formdata1 = array(
	      'Id'=> $_POST['Id1'],
	      'c1'=> $_POST['c1'],
	      'c2'=>$_POST['c2']
	   );

	   $formdata2 = array(
	      'Id'=> $_POST['Id2'],
	      'c1'=> $_POST['c1'],
	      'c2'=>$_POST['c2']
	   );

	   $formdata3 = array(
	      'Id'=> $_POST['Id3'],
	      'c1'=> $_POST['c1'],
	      'c2'=>$_POST['c2']
	   );

	   $formdata4 = array(
	      'Id'=> $_POST['Id4'],
	      'c1'=> $_POST['c1'],
	      'c2'=>$_POST['c2']
	   );

	   //Get data from existing json file
	   $jsondata = file_get_contents($myFile);

	   // converts json data into array
	   $arr_data = json_decode($jsondata, true);

	   // Push user data to array
	   array_push($arr_data,$formdata0,$formdata1,$formdata2,$formdata3,$formdata4);

       //Convert updated array to JSON
	   $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file


       if(file_put_contents($myFile, $jsondata)) {
	        echo 'Data successfully saved';
	    }
	   else {
	        echo "error";

	   }

   }
 
?>