<?php
/**
 * Template part for displaying page content in menu.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wprig
 */

$menu_item_types		= get_field('menu_item_types');

?>

<article id="frontPage">

	<section id="menu">
	<div id="menuListItems">
	<?php while (have_rows('menu_item_types')) : the_row();

// vars
$menu_item_type = get_sub_field('menu_item_type');
$menu_item_type_id = get_sub_field('menu_item_type_id');
?>
			<div class="menuItem">
				<a href="#<?php echo $menu_item_type_id; ?>"><?php echo $menu_item_type; ?></a>
			</div>

			<?php endwhile; ?>
		</div>


		<div id="menuItemBlocks">
		<?php while (have_rows('menu_item_types')) : the_row();

// vars
$menu_item_type = get_sub_field('menu_item_type');
$menu_item_img = get_sub_field('menu_item_img');
$menu_item_type_id = get_sub_field('menu_item_type_id');
$menu_items = get_sub_field('menu_items');
$menu_item_misc = get_sub_field('menu_item_misc');
?>
		<div class="menuBlock">
			<div class="menuTitle" id="<?php echo $menu_item_type_id; ?>">
				<h3>
				<?php echo $menu_item_type; ?>
			</h3>
			<?php if (isset($menu_item_img)) {
				?>
			<img src="<?php echo $menu_item_img['url']; ?>" alt="<?php echo $menu_item_img['alt']; ?>">
			<?php }
			?>
			<?php if (isset($menu_item_misc)) {
				?>
			<?php while (have_rows('menu_item_misc')) : the_row();

// vars
$misc_info_1 = get_sub_field('misc_info_1');
$misc_info_2 = get_sub_field('misc_info_2');
?>
<?php if (isset($misc_info_1)) {
				?>
<h4>
<?php echo $misc_info_1; ?>
</h4>			<?php }
			?>
			<?php if (isset($misc_info_2)) {
				?>
<h4>
<?php echo $misc_info_2; ?>
</h4>			<?php }
			?>


				<?php endwhile; ?>
<?php }
			?>
		</div>
		<div class="menuItemsBlock">


			<?php while (have_rows('menu_items')) : the_row();

// vars
$menu_item = get_sub_field('menu_item');
$menu_item_desc = get_sub_field('menu_item_desc');
$menu_item_price = get_sub_field('menu_item_price');
?>
<div class="menuItemAndPrice">
			<h4>
				<?php echo $menu_item; ?>
			</h4>

			<?php if (isset($menu_item_desc)) {
				?>
			<p>
				<?php echo $menu_item_desc; ?>
			</p>
			<?php }
			?>

			<?php if (isset($menu_item_price)) {
				?>
			<h4 class="price">
				<?php echo $menu_item_price; ?>
			</h4>
			<?php }
			?>
			</div>
				<?php endwhile; ?>


			</div>

		</div>
		<?php endwhile; ?>


		</div>

	</section>

</article><!-- #frontPage -->

