<?php

/**
 * dbkb actions.
 *
 * @package    sf_sandbox
 * @subpackage dbkb
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class dbkbActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    //$this->dbkbs = $this->getRoute()->getObjects();
    $this->dbkb = Doctrine_Core::getTable('dbkb')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
		$this->dbkb = Doctrine_Core::getTable('DBKB')->find(array($request->getParameter('id')));
    //$this->forward404Unless($this->dbkb);
    //$this->dbkb = $this->getRoute()->getObjects();
    //$this->form = new dbkbForm();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new dbkbForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    //$this->forward404Unless($request->isMethod(sfRequest::POST));
    $this->form = new dbkbForm();
    $this->processForm($request, $this->form);
    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($dbkb = Doctrine_Core::getTable('DBKB')->find(array($request->getParameter('id'))), sprintf('Object dbkb does not exist (%s).', $request->getParameter('id')));
    $this->form = new dbkbForm($dbkb);
    //$this->dbkb = $this->getRoute()->getObjects();
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($dbkb = Doctrine_Core::getTable('dbkb')->find(array($request->getParameter('id'))), sprintf('Object dbkb does not exist (%s).', $request->getParameter('id')));
    $this->form = new dbkbForm($dbkb);
    $this->processForm($request, $this->form);
    //$this->setTemplate('edit');
		//$this->redirect('dbkb_show', $dbkb);
		$this->redirect('dbkb/show?id='.$dbkb->getId());
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();
    $this->forward404Unless($dbkb = Doctrine_Core::getTable('dbkb')->find(array($request->getParameter('id'))), sprintf('Object dbkb does not exist (%s).', $request->getParameter('id')));
    $dbkb->delete();
    $this->redirect('dbkb/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $dbkb = $form->save();
      //$this->redirect('dbkb/edit?id='.$dbkb->getId());
      //$this->redirect('dbkb_show', $dbkb);
			$this->redirect('dbkb/show?id='.$dbkb->getId());
    }
  }
}
