<?php

/**
 * login actions.
 *
 * @package    myblog
 * @subpackage login
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions {
  /**
   * Executes index action
   *
   * @param sfRequest $request A request object
   */
  public function executeIndex(sfWebRequest $request) {
    $this->form = new LoginForm();

    if ($request->isMethod('post')) {
      $this->form->bind($request->getParameter('login'));
      if ($this->form->isValid()) {
        // authenticate user and redirect them
        $this->getUser()->setAuthenticated(true);
        $this->getUser()->addCredential('admin');
        $this->redirect('post/index');
      }
    }
  }

  public function executeLogout() {
    $this->getUser()->clearCredentials();
    $this->getUser()->setAuthenticated(false);
    $this->redirect('@homepage');
  }
}
