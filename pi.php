<?php 
 echo "<pre />";
 //var_dump($_FILES['data']);
 var_dump($_REQUEST);
 var_dump($_FILES);
 echo "Caption is ".$_POST["caption"]."    ";
 foreach($_FILES as $file){
 	//Upload each image in the $_FILES global array
 	uploadImage($file);
 }

 function uploadImage($file,$uploaddir = "images"){
 	$filename = $file['name'];
 	if(move_uploaded_file($file["tmp_name"], "$uploaddir/$filename")){
    echo "$filename upload is complete";
} else {
    echo "move_uploaded_file function failed";
}

 }
?>