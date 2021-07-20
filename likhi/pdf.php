<html>
<head>
  <style>
   .form{
    margin-left: 1.5rem;
    margin-top: 5rem;
   }
   h1{
    margin-left: 2rem;
    margin-top: 10rem;
    color: white;
    font-size: 3rem;

   }
   .doc{
    margin-left: 1rem;
    padding: 0.7rem;
    border-radius: 1em;
    border: 1px solid grey;
     background: linear-gradient(to bottom, #33cccc 0%, #66ffff 100%);;
    color:#000080 ;
    font-size:0.9rem;

   }
   .pdf{
    width: 11rem;
    padding: 0.7rem;
    border-radius: 1em;
    border: 1px solid grey;
    background: linear-gradient(to bottom, #33cccc 0%, #66ffff 100%);;
    color:#000080 ;
    font-size:0.9rem;
   }
   .tf{
    padding: 1rem;
   }
   
   table{
    margin-left: 0.8rem;
    margin-top: 3rem;
    width: 25rem;
    border-collapse: collapse;
    

   }
   td{
    padding: 0.5rem;
    color: white;
   }
   th{
    padding: 0.5em;
    background: #0072bb;
    color: white;
    font-size: 1.5rem;
   }
   body{
    background: url("bg2.JPG");
    background-repeat: no-repeat;
    background-size: 100% 40rem;

   }
</style>
  </head>
  <body>
    <h1 >Check your Files</h1>
  <form method="POST" class="form">
     
    <input type="submit" name="pdf" value="open pdf files(.pdf)" class="pdf">
    <input type="submit" name="doc" value="open document files(.doc)" class="doc">
  </form>
  <?php
 include('link.php');
  if(isset($_POST['pdf'])){
    $query="SELECT * FROM `upload_file`WHERE `extension` = 'application/pdf' ";
    $sql=mysqli_query($conn,$query);
    $i=0;
    echo "<table border='1'>
    <tr>
    <th>username</th>
    <th>file</th>
    </tr>";
    while($row=mysqli_fetch_array($sql)){

      echo "<tr>";
      echo "<td>" . $row['username'] ."</td>";
      echo "<td>" . $row['file'] ."</td>";
      
      echo "</tr>";
      $i++;
    }
    echo "</table>";
  }
   if(isset($_POST['doc'])){
    $query="SELECT * FROM `upload_file` WHERE `extension` = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' ";
    $sql=mysqli_query($conn,$query);
    $i=0;
    echo "<table border='1'>
    <tr>
    <th>username</th>
    
    <th>file</th>
    </tr>";
    while($row=mysqli_fetch_array($sql)){
      echo "<tr>";
      echo "<td>" .$row['username'] ."</td>";
  
      echo "<td>" .$row['file'] ."</td>";
      echo "</tr>";
      $i++;
    }
    echo "</table>";
}
  ?>
  </body>
</html>