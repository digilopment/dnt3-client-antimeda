<?php

namespace DntView\Layout\Modul\Plugin;

use DntLibrary\App\Plugin;
use DntLibrary\Base\Settings;

class NavigationPluginControll extends Plugin
{

    protected $loc = __FILE__;

    public function __construct($data, $pluginId)
    {
        parent::__construct($data, $pluginId);
        $this->data = $data;
        $this->pluginId = $pluginId;
        $this->settings = new Settings();
    }

    public function setLogo()
    {
        $logo = $this->settings->getImage($this->data['meta_settings']['keys']['logo_firmy']['value']);
        return $logo;
    }

    public function run()
    {
        $data['logo'] = $this->setLogo();
        $this->layout($this->loc, 'tpl', $data);
    }

}
