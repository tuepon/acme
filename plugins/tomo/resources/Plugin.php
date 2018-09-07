<?php namespace Tomo\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
  public function pluginDetails()
  {
    return [
      'name' => 'Tomo',
      'description' => 'Provides company resources',
      'author' => 'Tomonori Ueno',
      'icon' => 'icon-leaf'
    ];
  }

  public function registerComponents()
  {
    return [
      '\Tomo\Resources\Components\Links' => 'resourcesLinks'
    ];
  }
}