<?php

namespace DntView\Layout\Modul\Plugin;

use DntLibrary\App\Plugin;
use DntLibrary\Base\Frontend;
use DntLibrary\Base\Settings;

class TopPluginControll extends Plugin
{

    protected $loc = __FILE__;
    protected $data;
    protected $pluginId;

    public function __construct($data, $pluginId)
    {
        parent::__construct($data, $pluginId);
		$this->frontend = new Frontend();
		$this->settings = new Settings();
        $this->data = $data;
        $this->pluginId = $pluginId;
    }

    public function run()
    {
        $data = $this->data;
		$data['frontend'] = $this->frontend;
		$data['settings'] = $this->settings;
        $this->layout($this->loc, 'tpl', $data);
    }

}
