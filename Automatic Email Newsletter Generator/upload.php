<?php
include 'processtext.php';

$directoryname=trim(file_get_contents('currentroundupdirectory.txt'));
$file_name = $_FILES['userImage']['tmp_name'];
list($width, $height, $type, $attr) = getimagesize( $file_name );
if(is_array($_FILES)) {
	if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
	$sourcePath = $_FILES['userImage']['tmp_name'];
	$targetPath = '../'.$directoryname."/".$_FILES['userImage']['name'];
		if(move_uploaded_file($sourcePath,$targetPath)) {
		?>
		<img src="<?php echo $targetPath; ?>" width=100 height=($height/$width)*100 hspace=15 />
		<?php
		}
	}
}
?>
