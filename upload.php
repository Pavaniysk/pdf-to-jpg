<?
$target_dir = "target_dir/";
$target_file = $target_dir . basename($_FILES["choose file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = $_FILES["choose file"]["tmp_name"];
  if($check !== false) {
    echo "File is a pdf " . ".";
    $uploadOk = 1;
  } else {
    echo "File is not a pdf.";
    $uploadOk = 0;
  }
}
?>
