<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>
<div class="ccm-ui">
    <div class="alert-message block-message info">
        <?php echo t("Edit your Facebook details.") ?>
    </div>

    <?php echo $form->label('feed_url', t('Facebook URL')) ?>
    <?php echo $form->text('feed_url', $feed_url) ?>
    <?php echo $form->label('app_id', t('Application ID')) ?>
    <?php echo $form->text('app_id', $app_id) ?>
    <?php echo $form->label('app_secret', t('Application Secret')) ?>
    <?php echo $form->text('app_secret', $app_secret) ?>
</div>
