<?php

/**
 * jalan actions.
 *
 * @package    sf_sandbox
 * @subpackage jalan
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jalanActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->jalans = new sfDoctrinePager('jalan', 10);
    $this->jalans->setQuery(Doctrine::getTable('jalan')->createQuery('a'));
    $this->jalans->setPage($request->getParameter('page', 1));
    $this->jalans->init();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->jalan = Doctrine_Core::getTable('jalan')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->jalan);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new jalanForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new jalanForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($jalan = Doctrine_Core::getTable('jalan')->find(array($request->getParameter('id'))), sprintf('Object jalan does not exist (%s).', $request->getParameter('id')));
    $this->form = new jalanForm($jalan);
    $this->jalan = Doctrine_Core::getTable('jalan')->find(array($request->getParameter('id')));
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($jalan = Doctrine_Core::getTable('jalan')->find(array($request->getParameter('id'))), sprintf('Object jalan does not exist (%s).', $request->getParameter('id')));
    $this->form = new jalanForm($jalan);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($jalan = Doctrine_Core::getTable('jalan')->find(array($request->getParameter('id'))), sprintf('Object jalan does not exist (%s).', $request->getParameter('id')));
    $jalan->delete();

    $this->redirect('jalan/index?page='.$request->getParameter('page'));
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $jalan = $form->save();

      //$this->redirect('jalan/edit?id='.$jalan->getId());
      $this->redirect('jalan_show', $jalan);
    }
  }
}
