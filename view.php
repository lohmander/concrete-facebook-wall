<?php defined('C5_EXECUTE') or die(_("Access Denied.")) ?>
<?php
$url = $feed_url . sprintf('?access_token=%s', $access_key);
$json = file_get_contents($url);
$content = json_decode($json);

foreach ($content->{'data'} as $data) {
    if ($data->{'message'}) {
        $message = $data->{'message'};
    } else {
        $message = $data->{'story'};
    }

    echo sprintf('<p><strong>%s</strong><br>%s</p>', $data->{'from'}->{'name'}, $message);
}
?>
