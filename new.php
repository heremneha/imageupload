<?php
if(isset($_POST['submit'])){
	 //echo "<pre>";
	 //print_r($_POST);
	print_r($_FILES);
	echo count($files);
	$files = array();
$files =	$_FILES;
	if(isset($_FILES['upload'])){
	echo "reached " ;
		if(count($files) > 0){ 
			echo "reached 2" ;
			foreach($products as $_FILES['upload']['name']){
				foreach($product as $key => $val){
					echo "$key: $val";
				}
			}
			for($i=0; $i<count($_FILES['upload']['name']); $i++) {
			//for($i=0; $i<count($files); $i++){
				$error=array();
				
				echo 
				$file_size= $_FILES['upload']['size'][$i];
			echo	$file_name= $_FILES['upload']['name'][$i];
				$file_ext=strtolower(end(explode('.' , $file_name)));
				$extensions= array("jpeg","jpg","png");
				if(in_array($file_ext,$extensions)=== false){
					$errors[]="extension not allowed, please choose a JPEG or PNG file.";
				}
				if($file_size > 2097152){
					$errors[]='File size must be betwen 0 and 1 MB';
				}
				if(empty($errors)==true){
					
					// $temp = explode(".", $_FILES["image"]["name"][$i]);
					 $cheker = $_FILES['upload']['name'][$i];
					$tmpFilePath = explode(".", (string) $cheker);
					// $newfilename = round(microtime(true)) . '.' . end($tmpFilePath);
					if(empty($tmpFilePath) != ""){
						
						$shortname = $_FILES['upload']['name'][$i];
						$filePath = "images/" . date('d-m-Y-H-i-s').'-'.$_FILES['upload']['name'][$i];
						move_uploaded_file($tmpFilePath, $filePath);    
						$files[]= $shortname ;
						// $files = array($shortname);
					}
				}else {
					print_r($errors);
				}
			}   
		}
		}
				echo "<h1>Uploaded:</h1>";    
				// print_r($files);
			if(is_array($files)){
		echo "<ul>";
		foreach($files as $file){
			echo "<li>$file</li>";
		}
		echo "</ul>";
	}
}
?>
<html>
<body>
<form action="" enctype="multipart/form-data" method="post">
<label for='upload'>Add Attachments:</label>
<input id='upload' name="upload[]" type="file" multiple="multiple" />
<input type="submit" name="submit" value="Submit"></p>
</form>
</head>
</html>
