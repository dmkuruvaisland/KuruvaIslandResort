<?php
base_path();
include_once __DIR__.'/_parts/header.php';
if (isset($page_name)){
	include_once $page_name.'.php';
}else{
	echo "Invalid page name";
}
include_once __DIR__.'/_parts/modal.php';
include_once __DIR__.'/_parts/footer.php';

?>
<?php //include 'modal.php'; ?>
