function playsound(id){
	var sound = document.getElementById(id);
	if(!sound) return;
	sound.play();
}