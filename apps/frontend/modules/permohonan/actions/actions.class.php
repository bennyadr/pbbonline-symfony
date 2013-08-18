<?php

/**
 * permohonan actions.
 *
 * @package    sf_sandbox
 * @subpackage permohonan
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class permohonanActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->permohonan = $this->getRoute()->getObjects();
    $this->jenis = Doctrine::getTable('JenisPermohonan')->getJenisPermohonan();
  }
  
  public function executeJenis(sfWebRequest $request)
  {
    $this->jenis = $this->getRoute()->getObject();
    $this->jenis_permohonan = Doctrine::getTable('JenisPermohonan')->getJenisPermohonan();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->permohonan = $this->getRoute()->getObject();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PermohonanForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = new PermohonanForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->form = new PermohonanForm($this->getRoute()->getObject());
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->form = new PermohonanForm($this->getRoute()->getObject());

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->getRoute()->getObject()->delete();

    $this->redirect('permohonan');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $permohonan = $form->save();

      $this->redirect('permohonan_show', $permohonan);
    }
  }
}
