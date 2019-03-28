<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ახალი ამბები</title>
<link rel="shortcut icon" href="<?php // echo base_url(); ?>themes/images/favicon.png">
<meta name="theme-color" content="#026aac">
<meta name="msapplication-navbutton-color" content="#026aac">
<meta name="apple-mobile-web-app-status-bar-style" content="#026aac">
<link rel="stylesheet" href="scripts/css/main.css">
<script type="text/javascript" src="scripts/js/main.js"></script>
</head>

<?php include("blocks/header.php"); ?>

<section class="section_top_bar inside_title_wrap lesspadding trans-all-4">
	<div class="inside_title">
		<h1>
			<span>ახალი ამბები</span>
		</h1>
		<div class="breadcrumbs">
			<ul>
				<li>
					<a href="../index.php">მთავარი</a>
				</li>
				<li>
					<span>ახალი ამბები</span>
				</li>
			</ul>
		</div>
	</div>
</section>

<main class="trans-all-4">
	<div class="content">
		<?php include("blocks/articles.php"); ?>
	</div>
    <aside>
	    <?php include("blocks/tree_menu.php"); ?>
	    <?php include("blocks/sidebar.php"); ?>
    </aside>
</main>

<?php include("blocks/icons_menu.php"); ?>

<?php include("blocks/footer.php"); ?>