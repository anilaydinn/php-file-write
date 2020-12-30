<?php 

    $myFile = fopen('info.txt',"a");

    if(isset($_POST['submit'])){

        

        fwrite($myFile, $_POST['nameandsurname']);
        fwrite($myFile, " ");
        fwrite($myFile, $_POST['id']);
        fwrite($myFile, " ");
        fwrite($myFile, $_POST['country']);
        fwrite($myFile, "\n");

        fclose($myFile);

         header("location:index.php?error=false");
    }

    if(isset($_FILES['image'])){
        $file=$_FILES['image'];
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];        
        $extensions= array("jpeg","jpg","png");
     
        if($file['size'] > 1024 * 1014 * 1){
           header("location:index.php?error=true");
        }
        else{
            header("location:index.php?error=false");
        }
     }

?>