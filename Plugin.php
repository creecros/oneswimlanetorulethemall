<?php

namespace Kanboard\Plugin\RemoveSwimlaneDetails;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
  public function initialize()
  {
    $this->template->setTemplateOverride('board/table_column', 'removeSwimlaneDetails:board/table_column');
    $this->template->setTemplateOverride('config/board', 'removeSwimlaneDetails:config/board');
    $this->template->hook->attach('template:config:board', 'removeSwimlaneDetails:config/toggle', array('hide_swimlane_tcounts' => $this->configModel->get('hide_swimlane_tcounts')));
  }
  public function getPluginName()
  {
    return 'RemoveSwimlaneDetails';
  }
  public function getPluginAuthor()
  {
    return 'Craig Crosby';
  }
  public function getPluginVersion()
  {
    return '1.0.0';
  }
  
  public function getPluginDescription()
  {
    return 'Removes the total swimlane task count if only 1 swimlane is used';
  }
  public function getPluginHomepage()
  {
    return 'https://github.com/creecros/oneswimlanetorulethemall';
  }
}
