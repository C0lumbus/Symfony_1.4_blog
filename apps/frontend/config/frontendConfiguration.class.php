<?php

class frontendConfiguration extends sfApplicationConfiguration
{
  protected $backendRouting = null;
  public function generateBackendUrl($name, $parameters = array(), $absolute = false)
  {
    return sfConfig::get('app_site_url').$this->getBackendRouting()->generate($name, $parameters, $absolute);
  }

  public function getBackendRouting()
  {
    if (!$this->backendRouting )
    {
      $this->backendRouting = new sfPatternRouting(new sfEventDispatcher());

      $config = new sfRoutingConfigHandler();
      $routes = $config->evaluate(array(sfConfig::get('sf_apps_dir').'/backend/config/routing.yml'));

      $this->backendRouting->setRoutes($routes);
    }

    return $this->backendRouting;
  }
  public function configure()
  {
  }
}
