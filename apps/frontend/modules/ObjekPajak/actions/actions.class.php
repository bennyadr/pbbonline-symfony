<?php

/**
 * ObjekPajak actions.
 *
 * @package    sf_sandbox
 * @subpackage ObjekPajak
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ObjekPajakActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->objek_pajaks = $this->getRoute()->getObjects();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->objek_pajak = $this->getRoute()->getObject();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ObjekPajakForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = new ObjekPajakForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->form = new ObjekPajakForm($this->getRoute()->getObject());
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->form = new ObjekPajakForm($this->getRoute()->getObject());

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->getRoute()->getObject()->delete();

    $this->redirect('ObjekPajak/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $objek_pajak = $form->save();

      $this->redirect('ObjekPajak/edit?id='.$objek_pajak->getId());
    }
  }
}
