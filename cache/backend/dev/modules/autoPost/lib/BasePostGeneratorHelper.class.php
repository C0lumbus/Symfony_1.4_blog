<?php

/**
 * post module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage post
 * @author     ##AUTHOR_NAME##
 */
abstract class BasePostGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'article' : 'article_'.$action;
  }
}
