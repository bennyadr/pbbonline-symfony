<?php

/**
 * kelurahan actions.
 *
 * @package    sf_sandbox
 * @subpackage kelurahan
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class kelurahanActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->kelurahans = new sfDoctrinePager('kelurahan', 10);
    $this->kelurahans->setQuery(Doctrine::getTable('kelurahan')->createQuery('a'));
    $this->kelurahans->setPage($request->getParameter('page', 1));
    $this->kelurahans->init();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->kelurahan = Doctrine_Core::getTable('kelurahan')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->kelurahan);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new kelurahanForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new kelurahanForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($kelurahan = Doctrine_Core::getTable('kelurahan')->find(array($request->getParameter('id'))), sprintf('Object kelurahan does not exist (%s).', $request->getParameter('id')));
    $this->form = new kelurahanForm($kelurahan);
		$this->kelurahan = Doctrine_Core::getTable('kelurahan')->find(array($request->getParameter('id')));
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($kelurahan = Doctrine_Core::getTable('kelurahan')->find(array($request->getParameter('id'))), sprintf('Object kelurahan does not exist (%s).', $request->getParameter('id')));
    $this->form = new kelurahanForm($kelurahan);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($kelurahan = Doctrine_Core::getTable('kelurahan')->find(array($request->getParameter('id'))), sprintf('Object kelurahan does not exist (%s).', $request->getParameter('id')));
    $kelurahan->delete();

    $this->redirect('kelurahan/index?page='.$request->getParameter('page'));
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $kelurahan = $form->save();

      //$this->redirect('kelurahan/edit?id='.$kelurahan->getId());
			$this->redirect('kelurahan_show', $kelurahan);
    }
  }
}
