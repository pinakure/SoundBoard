<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="target-densitydpi=device-dpi; width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>Pinakure Showtime: Sound Special Effect triggers</title>
<style>
<?php readfile('style.css'); ?> 
</style>
<script>
<?php readfile('script.js'); ?> 
</script>
</head>
<body>
<div id="content">
<?PHP 
function loadLibraries(){
	if ($gestor = opendir('sfx/')) {
		
		while (false !== ($entrada = readdir($gestor))) {
			if ($entrada == "." || $entrada == "..")continue;		
			loadLibrary($entrada);
		}
		closedir($gestor);
	}
}

function loadLibrary($name){
	if(file_exists('sfx/'.$name.'/'.$name.'.jpg')) $picture = 'sfx/'.$name.'/'.$name.'.jpg';
	if(file_exists('sfx/'.$name.'/'.$name.'.png')) $picture = 'sfx/'.$name.'/'.$name.'.png';
	if(file_exists('sfx/'.$name.'/'.$name.'.gif')) $picture = 'sfx/'.$name.'/'.$name.'.gif';
	
	if ($gestor = opendir('sfx/'.$name)) {
		$namebase = 'sfx/'.$name.'/';
		while (false !== ($entrada = readdir($gestor))) {
			if ($entrada != "." && $entrada != "..") {
				
				if($namebase.$entrada == $picture) continue;
				
				$filename = explode('.',$entrada)[0];
				$ext = explode('.',$entrada)[1];
				
				$filename_part1 = strlen($filename) > 8 ? substr($filename, 0, 8) : "";
				$filename_part2 = strlen($filename) > 8 ? substr($filename, 8, strlen($filename)) : $filename;
				
				?><audio id="<?=$name.'_'.$entrada;?>"><source src="<?=$namebase.$entrada;?>" type="<?=$ext=='ogg'?'audio/ogg':'audio/mpeg';?>"></audio>
				<article onclick="playsound('<?=$name.'_'.$entrada;?>')"><div style="background: url('<?=$picture?>'); "></div><p><?=$filename_part1;?><br/><?=$filename_part2;?></p></article>
				<?PHP            
			}
		}
		closedir($gestor);
	}	
}

/*loadLibrary('explosion');
loadLibrary('misc');
*/
loadLibraries();
?>
</div>
</body>
</html>