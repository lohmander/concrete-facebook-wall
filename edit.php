<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>
<div class="ccm-ui">
    <div class="alert-message block-message info">
        <?php echo t("Edit your Facebook details.") ?>
    </div>

    <?php echo $form->label('feed_url', t('Facebook URL')) ?>
    <?php echo $form->text('feed_url', $feed_url) ?>
    <?php echo $form->label('access_key', t('Facebook Key')) ?>
    <?php echo $form->text('access_key', $access_key) ?>
</div>
