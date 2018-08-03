<?php

if(isset($_FILES['upload']['name'])){
			
	$sourcefile= $_FILES['upload']['name'];
	$tempfile= $_FILES['upload']['tmp_name'];
 		     
	rename_appending_unique_id($sourcefile, $tempfile);
	renaming_appending_width_height($sourcefile, $tempfile);
	//rename_append_timestamp($sourcefile, $tempfile);
}
		
	//Function to Rename by appending a unique id
			
	function rename_appending_unique_id($source, $tempfile){
				       
               $target_path ='uploads-unique-id/'.$source;

			while(file_exists($target_path)){
				$fileName = uniqid().'-'.$source;
				$target_path = ('uploads-unique-id/'.$fileName);
			}
							
			move_uploaded_file($tempfile, $target_path);
			
	}
			
	//Function to Rename by appending width and height
			
	function renaming_appending_width_height($source, $tempfile){
				
          $target_path ='uploads-sizes/'.$source;
		while(file_exists($target_path)){
			$imagedetails = getimagesize($tempfile);
			$width = $imagedetails[0];
			$height = $imagedetails[1];
			$rand = rand(0, 1000);
			$fileName = $width.'-'.$height.'-'.$rand.'-'.$source;
						
			$target_path = ('uploads-sizes/'.$fileName);
	     }
							
	move_uploaded_file($tempfile, $target_path);	
	}
			
	//Function to Rename by appending timestamp
			
	function rename_append_timestamp($source, $tempfile){
				
	    $target_path ='uploads-timestamp/'.$source;
			
	   while(file_exists($target_path)){
		$t=time();
		$target_path = ('uploads-timestamp/'.$t.'-'.$source);
	   }
							
	move_uploaded_file($tempfile, $target_path);
			
	}
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>