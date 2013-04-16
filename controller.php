<?php defined('C5_EXECUTE') or die(_("Access Denied."));

class FacebookWallBlockController extends BlockController {

	protected $btTable = "btFacebookWall";
	protected $btInterfaceWidth = "350";
	protected $btInterfaceHeight = "300";

	public function getBlockTypeName() {
		return t('Facebook Wall');
	}

	public function getBlockTypeDescription() {
		return t('A simple block for displaying Facebook feeds.');
	}

    protected function getAccessToken() {
        $db = Loader::db();

        $app = $db->GetRow('SELECT * FROM btFacebookWall');
        $url = sprintf('https://graph.facebook.com/oauth/access_token?client_id=%s&client_secret=%s&grant_type=client_credentials',
                        $app['app_id'],
                        $app['app_secret']);

        return file_get_contents($url);
    }

    public function getFacebookStream($url) {
        $url = $url . '?' . $this->getAccessToken();
        $json = file_get_contents($url);
        $content = json_decode($json);
        $output = '';

        foreach ($content->{'data'} as $data) {
            if ($data->{'message'}) {
                $message = $data->{'message'};
            } else {
                $message = $data->{'story'};
            }

            $output .= sprintf('<p><strong>%s</strong><br>%s</p>', $data->{'from'}->{'name'}, $message);
        }

        return $output;
    }
}
