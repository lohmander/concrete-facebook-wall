<?php defined('C5_EXECUTE') or die(_("Access Denied."));


$stream = $controller->getStream();
?>

<?php foreach ($stream as $post): ?>
    <strong><?php echo $post['name'] ?></strong>
    <p>
        <?php echo $post['message'] ?>
    </p>
<?php endforeach ?>
