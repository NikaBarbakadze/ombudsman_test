<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>გალერეა</title>
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
			<span>გალერეა</span>
		</h1>
		<div class="breadcrumbs">
			<ul>
				<li>
					<a href="../index.php">მთავარი</a>
				</li>
				<li>
					<span>გალერეა</span>
				</li>
			</ul>
		</div>
	</div>
</section>

<main class="trans-all-4">
	<div class="content">
		<div class="inside_menu">
			<div class="menu_item">
				<a href="#">
					<span>
						<img src="themes/images/no_image_ge.jpg">
					</span>
					<strong>ფოტო</strong>
				</a>
			</div>
			<div class="menu_item">
				<a href="#">
					<span>
						<img src="themes/images/no_image_ge.jpg">
					</span>
					<strong>ვიდეო</strong>
				</a>			
			</div>																							
		</div>
		<article class="news_static">
			<div class="page_body">
				<div class="page_content"></div>
			</div>
			
		</article>
	</div>
    <aside>
	    <?php include("blocks/tree_menu.php"); ?>
	    <?php include("blocks/sidebar.php"); ?>
    </aside>
</main>

<?php include("blocks/icons_menu.php"); ?>

<?php include("blocks/footer.php"); ?>