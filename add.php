<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>
<div class="ccm-ui">
	<div class="alert-message block-message info">
		<?php echo t("Add your Facebook details.") ?>
	</div>

	<?php echo $form->label('feed_url', t('Facebook URL')) ?>
	<?php echo $form->text('feed_url') ?>
    <?php echo $form->label('access_key', t('Facebook Key')) ?>
    <?php echo $form->text('access_key') ?>
</div>
