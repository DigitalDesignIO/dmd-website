<?php snippet('projectheader') ?>

	<div class="container doc-wrapper">
		<div class="row">
			<div class="col-xs-12">
				<div class="doc-title"><?php echo $page->parent()->subheadline()->ktr() ?></div>
				<div class="doc-autor"><?php echo $page->parent()->headline()->ktr() ?></div>
			</div>
		</div>
	</div>
	
	<div class="container margin-bottom-200">
		<?php snippet('projectsidebar') ?>

		<div class="row">
			<div class="col-sm-6 middle-col col-sm-offset-3">
				<?php echo $page->text()->kt() ?>
			</div>

			<?php foreach($page->builder()->toStructure() as $content): ?>
			  <?php snippet('sections/' . $content->_fieldset(), array('content' => $content)) ?>
			<?php endforeach ?>

		</div>
	</div>
	
<?php snippet('projectfooter') ?>