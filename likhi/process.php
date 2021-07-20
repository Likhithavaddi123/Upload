
<?php
$username=$_POST['username'];
   $roll=$_POST['roll'];
   $file=$_FILES['file']['name'];
   $filename=$_FILES['file']['name'];
   $filetype=$_FILES['file']['type'];
   $filesize=$_FILES['file']['size'];
   $tempfile=$_FILES['file']['tmp_name'];
   

  
   
 include('link.php');
   $query="INSERT INTO `upload_file`(`username`,`roll`,`file`,`extension`) VALUES('$username','$roll','$file','$filetype')";
  $sql=mysqli_query($conn,$query);
  if($sql){
     header("location:pdf.php");
  }else{
    echo "data failed";
  }

  ?>