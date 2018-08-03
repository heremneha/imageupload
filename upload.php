<?php
  if(isset($_POST['submit'])){
   if(isset($_FILES['image'])){
    if(count($_FILES['image']['name']) > 0){
      for($i=0; $i<count($_FILES['image']['name']); $i++) {
        //Get the temp file path
          $tmpFilePath = $_FILES['image']['tmp_name'][$i];

          //Make sure we have a filepath
          if($tmpFilePath != ""){
          
              //save the filename
              $shortname = $_FILES['image']['name'][$i];
          }
        }
        $files[] = $shortname;

      }
      }  
      $errors= array();
      $filearray=array($_FILES['image']);
      $file_name = $_FILES['image']['name'][$i];
      $file_size =$_FILES['image']['size'][$i];
      $file_tmp =$_FILES['image']['tmp_name'][$i];
      $file_type=$_FILES['image']['type'][$i];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'][$i])));
      $expensions= array("jpeg","jpg","png"); 
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be betwen 0 and 1 MB';
       }
      if(empty($errors)==true){
        $temp = explode(".", $_FILES["image"]["name"][$i]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
       move_uploaded_file($file_tmp, "images/" . $newfilename);
         //move_uploaded_file($file_tmp,"images1/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
      <input id='upload' name="image[]" type="file" multiple="multiple" />
      <input type="submit" name="submit" value="Submit">
      </form>
      
   </body>
</html>