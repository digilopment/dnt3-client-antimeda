<?php

namespace DntView\Layout\Modul\Plugin;

use DntLibrary\App\Plugin;
use DntLibrary\Base\Frontend;
use DntLibrary\Base\Dnt;

class FooterPluginControll extends Plugin
{

    protected $loc = __FILE__;

    public function __construct($data, $pluginId, $plugin)
    {
        $this->frontend = new Frontend();
        parent::__construct($data, $pluginId, $plugin);
        $this->data = $data;
		$this->dnt = new Dnt();
    }

    public function run()
    {
        $data = $this->data;
		$data['dnt'] = $this->dnt;
        $data['setting'] = function($key) {
            return $this->frontend->getMetaSetting($this->data, $key);
        };
        $this->layout($this->loc, 'tpl', $data);
    }

}
