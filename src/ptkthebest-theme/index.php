<?php 
get_sidebar('function-mobile'); 
$detect = new Mobile_Detect();
$mobi = $detect->isMobile();
?> 
<?php
if(!$mobi){
	get_sidebar('standard-head'); 
	get_sidebar('standard-body'); 
}else{
	get_sidebar('mobile-head');
	get_sidebar('mobile-body');
} 
?>

