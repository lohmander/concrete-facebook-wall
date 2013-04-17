<?php defined('C5_EXECUTE') or die(_("Access Denied."));

Loader::model('facebook_wall', 'facebook_wall');

class FacebookWallBlockController extends BlockController {

	protected $btTable = "btFacebookWall";
	protected $btInterfaceWidth = "350";
	protected $btInterfaceHeight = "300";
    protected $fb;

    public function on_start()  {
        $this->fb = new FacebookWallModel();
    }

	public function getBlockTypeName() {
		return t('Facebook Wall');
	}

	public function getBlockTypeDescription() {
		return t('A simple block for displaying Facebook feeds.');
	}

    public function getStream() {
        $fb = $this->fb;
        $output = array();

        // Returns the stream as JSON
        $content = $fb->getFacebookStreamJson();

        // Loop through the data and pick the parts that we want
        foreach ($content->{'data'} as $data) {
            if ($data->{'message'}) {
                $message = $data->{'message'};
            } else {
                $message = $data->{'story'};
            }

            $o = array(
                'name' => $data->{'from'}->{'name'},
                'message' => $message
            );

            $output[] = $o;
        }

        return $output;
    }
}
