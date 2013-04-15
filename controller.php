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
}
