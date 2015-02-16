<?php echo '<a href="library_entry.htm">Return to FM Library Entry form</a><br />'; ?>

<?php
ini_set('display_errors',1); 
error_reporting(E_ALL|E_STRICT);
 mysql_connect("localhost","root", "PASSWORD");
 mysql_select_db( "fmlibrary" );
/* include 'config.php';
include 'opendb.php';*/

// ... do something like insert or select, etc
// $ID=$_POST['ID']; commented out because it's an autogenerating field
$genre=$_POST['genre'];
$format=$_POST['format'];
$multidisk=$_POST['multidisk'];
$catalognum=$_POST['catalognum'];
$tracknum=$_POST['tracknum'];
$trackname=$_POST['trackname'];
$tracklength=$_POST['tracklength'];
$artist=$_POST['artist'];
$composer=$_POST['composer'];
$tags=$_POST['tags'];

/*
$genre=dbfix($_POST['genre']);
$format=dbfix($_POST['format']);
$multidisk=$_POST['multidisk'];
$catalognum=dbfix($_POST['catalognum']);
$tracknum=dbfix($_POST['tracknum']);
$trackname=dbfix($_POST['trackname']);
$tracklength=dbfix($_POST['tracklength']);
$artist=dbfix($_POST['artist']);
$composer=dbfix($_POST['composer']);
$tags=dbfix($_POST['tags']);

function dbfix($val){
	$temp = trim($val);
	$temp = str_replace("'","\'",$temp);
	return $temp;	
	*/
	
// mysql_select_db($dbname);

//$submitted= $_POST['libraryform']; 
$query = "Insert into library (genre , format ,multidisk , catalognum , tracknum , trackname, tracklength, artist, composer, tags) 
Values('$genre' , '$format' ,'$multidisk' , '$catalognum' , '$tracknum' , '$trackname', '$tracklength', '$artist', '$composer', '$tags')";

mysql_query($query) or die('<h3>Ya got an Error,dude... insert query failed</h3>');

echo '<h3>Your insert was successful!</h3>';
echo '<br />';
//echo 'You submitted '. $submitted; 
// include 'closedb.php';
?>
