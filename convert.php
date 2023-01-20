<?php

//import the converter class
require('upload.php');

$fileType = '';
$download = false;

//handle get method, when page redirects
if($_GET){	
	$fileType = $_GET['imageType'];
	$fileeName = $_GET['imageName'];
}else{
	header('Location:upload.php');
}

//handle post method when the form submitted
if($_POST){
	
	$convert_type = $_POST['convert_type'];
	
	//create object of image converter class
	$obj = new file_converter();
	$target_dir = 'target_dit';
	//convert file to the specified type
	$file = $obj->convert_file($convert_type, $target_dir, $fileName);
	
	//if converted activate download link 
	if($image){
		$download = true;
	}
}


//convert types
$types = array(
	'PDF' => 'jpg');
    ?>
<html>
<body>
	<?php if(!$download) {?>
		<form method="post" action="">
		File Uploaded, Select below option to convert!
		<img src="target_dir<?=$imageName;?>"  />
		Convert To: 
	<input type="submit" value="convert" />
	</form>
	<?php } ?>
	<?php
     if($download){
     }?>
	file Converted to pdf<?php echo ucwords($convert_type); ?>
						<img src="<?=$target_dir.'/'.$image;?>"  />
					
<a href="download.<?php echo $target_dir.'/'.$image; ?>" />Download Converted Image</a>
<?php ?>
</body>
</html>
