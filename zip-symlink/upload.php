<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
      
      #echo $file_name;
      #echo $file_type;
      #echo $file_name;
      
      $extensions= array("zip");
      if(in_array($file_ext,$extensions)=== false)
      {
         $errors[]="extension not allowed, please choose a zip file.";
        
         
      }

      if(empty($errors)==true){
         $newfilename = md5($file_name);
         //echo $newfilename.".".$file_ext;
         $file_path = "uploads/". $newfilename.".".$file_ext;
         #echo $file_path;
         move_uploaded_file($file_tmp,$file_path);
         echo "<script>alert('your zip file is uploaded')</script>";
         
        $path= '/var/www/html/test/uploads/files';

   echo exec('unzip '.$file_path. ' -d ' .$path);
   passthru("cat $path/* 2>&1");
      
   
         #echo "Success";
      }

      else{
         print_r($errors);

    
    }
  }

   ?>

   <!DOCTYPE html>
   <html>
   <head>
      <title></title>
   </head>
   <body>
      <a href="doc.php"> Go back</a>
   
   </body>
   </html>