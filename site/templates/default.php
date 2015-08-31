<?php snippet($site->theme() . '/header') ?>

		<article>
			<?php // display module title ?>
			<?php if (!$page->title_public()->empty()): ?>
			<header class="article-header">
				<h1 class="article-title"><?php echo $page->title_public(); ?></h1>
			</header>
			<?php endif; ?>

			<?php // loop through all subpages as modules ?>
			<?php $children = $site->children()->visible(); ?>
			<?php foreach($children as $child): ?>
			<section id="<?php echo $child->uid(); ?>" class="module clearfix">
				<div id="<?php echo $child->uid() . '-overlay'; ?>" class="module-overlay">
					<div id="<?php echo $child->uid(); ?>-wrapper" class="wrapper">
						<?php if ($child->title_public() != ''): ?><h1 id="<?php echo $child->uid() . '-title'; ?>" class="module-title"><?php echo $child->title_public(); ?></h1><?php endif; ?>

						<?php if ($child->subtitle() != ''): ?>
						<div class="module-subtitle"><?php echo $child->subtitle()->kirbytext(); ?></div>
						<?php endif; ?>

						<?php echo $child->text()->kirbytext(); ?>

						<?php // if subpage has thumbnail images, let's make a simple gallery ?>
						<?php if($child->hasImages()): ?>
						<?php $images = $child->images()->filterBy('filename', '*=', 'thumb'); ?>
						<?php foreach($images as $image): ?>
						<a class="thumb-link" target="_blank" href="<?php echo $image->url(); ?>" rel="bookmark" onClick="ga('send', 'event', 'post-thumb-link', 'click', '<?php echo $image->url(); ?>');">
							<figure class="thumb-wrapper">
								<?php 
								if ($image->width() > 160):
									echo thumb($image, array('width' => 160, 'class' => 'thumb')); 
								else:
									echo '<img class="thumb" src="' . $image->url() . '" width="160px" />';
								endif;
								?>
							</figure>
						</a>
					<?php endforeach; ?>
					<?php endif; ?>

					</div><!-- wrapper -->
				</div><!-- module-overlay -->
			</section><!-- module -->
			<?php endforeach; ?>
		</article>

<?php snippet($site->theme() . '/footer') ?>