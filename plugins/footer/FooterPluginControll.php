<?php

namespace DntView\Layout\Modul\Plugin;

use DntLibrary\App\Plugin;
use DntLibrary\Base\Frontend;

class FooterPluginControll extends Plugin
{

    protected $loc = __FILE__;

    public function __construct($data, $pluginId, $plugin)
    {
        $this->frontend = new Frontend();
        parent::__construct($data, $pluginId, $plugin);
        $this->data = $data;
    }

    public function run()
    {
        $data = $this->data;
        $data['setting'] = function($key) {
            return $this->frontend->getMetaSetting($this->data, $key);
        };
        $this->layout($this->loc, 'tpl', $data);
    }

}
