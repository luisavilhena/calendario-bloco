<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div class="time" <?php echo get_block_wrapper_attributes(); ?>>
	<time>
	<?php echo date('Y-m-d'); ?>
	</time>
</div>
