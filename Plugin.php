<?php

namespace Kanboard\Plugin\RemoveSwimlaneDetails;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
  public function initialize()
  {
    $this->template->setTemplateOverride('board/table_column', 'removeSwimlaneDetails:board/table_column');

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
