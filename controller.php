<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class FacebookWallPackage extends Package {
    protected $pkgHandle = 'facebook_wall';
    protected $appVersionRequired = '5.5.0';
    protected $pkgVersion = '0.1.0';

    public function getPackageDescription() {
        return t("Adds a block for displaying Facebook feeds anywhere on your site.");
    }

    public function getPackageName() {
        return t("Facebook Wall");
    }

    public function install() {
        $pkg = parent::install();

        BlockType::installBlockTypeFromPackage('facebook_wall', $pkg);
    }
}