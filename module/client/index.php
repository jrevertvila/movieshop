<?php 
if (isset($_GET['page'])){
	switch($_GET['page']){
		case "shop":
			include("view/inc/top_pages/top_page_shop.php");
		break;
		case "contact":
			include("view/inc/top_pages/top_page_contact.php");
		break;
	}
}else{
	include("view/inc/top_pages/top_page.php");
}

?>
<!-- <body>  -->
		<header>
			<?php include("view/inc/header.php"); ?>
		</header>

		<main>
			<div class="container-wrapper">
				<?php include("view/inc/pages.php"); ?>

			</div>
		</main>

		<footer>
			<?php include("view/inc/footer.php"); ?>
		</footer>
<!-- </body>  -->

<?php include("view/inc/bottom_page.php"); ?>