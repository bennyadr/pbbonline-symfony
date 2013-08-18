<?php

/**
 * spop actions.
 *
 * @package    sf_sandbox
 * @subpackage spop
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class spopActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->spop = $this->getRoute()->getObjects();
		/* $this->spops = Doctrine_Core::getTable('SPOP')
      ->createQuery('a')
      ->execute(); */
  }

  public function executeShow(sfWebRequest $request)
  {
    /* $this->spop = Doctrine_Core::getTable('SPOP')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->spop); */
		$this->spop = $this->getRoute()->getObject();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SPOPForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    //$this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new SPOPForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    /* $this->forward404Unless($spop = Doctrine_Core::getTable('SPOP')->find(array($request->getParameter('id'))), sprintf('Object spop does not exist (%s).', $request->getParameter('id')));
    $this->form = new SPOPForm($spop); */
		$this->form = new SPOPForm($this->getRoute()->getObject());
		$this->spop = $this->getRoute()->getObject();
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($spop = Doctrine_Core::getTable('SPOP')->find(array($request->getParameter('id'))), sprintf('Object spop does not exist (%s).', $request->getParameter('id')));
    $this->form = new SPOPForm($spop);
    $this->processForm($request, $this->form);
    //$this->setTemplate('edit');
		$this->redirect('spop_show', $spop);
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($spop = Doctrine_Core::getTable('SPOP')->find(array($request->getParameter('id'))), sprintf('Object spop does not exist (%s).', $request->getParameter('id')));
    $spop->delete();

    $this->redirect('spop/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $spop = $form->save();

      //$this->redirect('spop/edit?id='.$spop->getId());
			$this->redirect('spop_show', $spop);
    }
  }
}
