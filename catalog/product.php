<?php 

	require_once("../inc/config.php");
	require_once(ROOT_PATH . "inc/products.php");
	$shirt_id = $_GET["id"];
	$product = get_products($shirt_id);
	$section = "shirts";
	$pageTitle = $product["name"];
	include(ROOT_PATH . "inc/header.php"); ?>

		<div class="section page">

			<div class="wrapper">

				<div class="breadcrumb"><a href="<?php echo BASE_URL; ?>catalog/">Catalog</a> &gt; <?php echo $product["name"]; ?></div>

				<div class="product-picture">
					<span>
						<a href="<?php echo IMG_URL . $product["img"]; ?>">
						<img src="<?php echo IMG_URL . $product["img"]; ?>" alt="<?php echo $product["name"]; ?>"></a>
					</span>
				</div>

				<div class="product-details">

					<h1><span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?></h1>

					<form method="get" target="http://lorempixel.com/">

						<label for="size">Size</label>
						<select name="200" id="size">
							<?php foreach($product["sizes"] as $size) { ?>
							<option value="<?php echo 'http://lorempixel.com/' . $size . '/' . $size . '/' . $product["img"]; ?>"><?php echo $size; ?> </option>
							<?php } ?>
						</select>

					</form>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<p class="note">* All Images supplied by <a href="http://lorempixel.com/">Lorempixel.com</a></p>
					<p class="note">** All monetary values are made up.</p>

				</div>

			</div>

		</div>

<?php include(ROOT_PATH . "inc/footer.php"); ?>