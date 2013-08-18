<?php

/**
 * znt actions.
 *
 * @package    sf_sandbox
 * @subpackage znt
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class zntActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
		//$this->znt = $this->getRoute()->getObjects();
    $this->znt = Doctrine_Core::getTable('ZNT')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    /* $this->znt = Doctrine_Core::getTable('ZNT')->find(array($request->getParameter('id'))); */
    //$this->forward404Unless($this->znt);
		$this->znt = $this->getRoute()->getObject();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ZNTForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    //$this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ZNTForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    //$this->forward404Unless($znt = Doctrine_Core::getTable('ZNT')->find(array($request->getParameter('id'))), sprintf('Object znt does not exist (%s).', $request->getParameter('id')));
    //$this->form = new ZNTForm($znt);
		$this->form = new ZNTForm($this->getRoute()->getObject());
		$this->znt = $this->getRoute()->getObject();
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($znt = Doctrine_Core::getTable('ZNT')->find(array($request->getParameter('id'))), sprintf('Object znt does not exist (%s).', $request->getParameter('id')));
    $this->form = new ZNTForm($znt);
    $this->processForm($request, $this->form);
    $this->redirect('znt_show', $znt);
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($znt = Doctrine_Core::getTable('ZNT')->find(array($request->getParameter('id'))), sprintf('Object znt does not exist (%s).', $request->getParameter('id')));
    $znt->delete();

    $this->redirect('znt/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $znt = $form->save();

      //$this->redirect('znt/edit?id='.$znt->getId());
			$this->redirect('znt_show', $znt);
    }
  }
}
