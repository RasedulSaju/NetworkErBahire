<?php
$pageTitle = 'Write blog';
include 'header.php';
?>

if(isset($_SESSION['name'])) $name= $_SESSION['name'];
if(isset($_SESSION['id'])) $id= $_SESSION['id'];

 if(isset($_POST["insert"]))  
 {  
     $des=$_POST['des'];
     $area=$_POST['area'];
     $tittle=$_POST['tittle'];
     $time= date("Y-m-d h:i:sa",strtotime('+4 hour'));
     $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO blog(id,user_name,area,image,tittle,description,datetime,userid)VALUES ('','$name','$area','$file','$tittle','$des','$time','$id') ";
     
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      } 
     header("Location:blog.php");
 }  


     <!-- Navbar started -->
       <?php  if(isset($_SESSION['Aname']))
    {
       include("navbar.php");
    } 
    else
    {
        include("navbaru.php");
    } ?>
    
    <!-- Navbar end -->
    <!-- Navbar end -->
    <!-- upload blog start -->
<div class="text-center">
    <h1 class="mt-5">Write the description and upload photo</h1>
   <h3><form method="post" enctype="multipart/form-data">  
         <input class="mt-5 mb-2" type="file" name="image" id="image" required/><br>  
       <strong> Area : </strong>   
       <input class="mt-5 mb-4"style="margin-top:30px; margin-left:150px" type="text" name="area" id="area" required/>  <br>
       <strong> Tittle : </strong>   
       <input style=" margin-left:140px" type="text" name="tittle" id="tittle" required/>  <br>
       <strong style="margin-right: 100px">Description : </strong>
       <textarea style="margin-top:30px; margin-right:35px" cols="24" name="des" id="des" required></textarea>  <br>
         <br />  
        
        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info btn-lg" />  
    </form>
       </h3>
    </div>
    
    <!-- upload blog end -->
 include 'footer.php';