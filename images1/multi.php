<?php
if(isset($_POST['submit'])){
    if(isset($_FILES['upload'])){
        if(count($_FILES['upload']['name']) > 0){ 
            for($i=0; $i<count($_FILES['upload']['name']); $i++) {
              $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
               if($tmpFilePath != ""){
                 $shortname = $_FILES['upload']['name'][$i];
                 $filePath = "images/" . date('d-m-Y-H-i-s').'-'.$_FILES['upload']['name'][$i];
                 if(move_uploaded_file($tmpFilePath, $filePath)) {

                    $files[]= $shortname ;
                }
           }
        }
    }
}
echo "<h1>attached</h1>";
if(is_array($files)){
    echo "<ul>";
    foreach($files as $file){
        echo "<li>$files</li>";
    }
        echo "</ul>";
    }
}

?>
<html>
<body>
<form action="" enctyp="multipart/form-data" method="post">
<label for='upload'>Add Attachments:</label>
<input id='upload' name="upload[]" type="file" multiple="multiple" />
<input type="submit" name="submit" value="Submit"></p>
</form>
</head>
</html>
