<?php

/**
 * LSPOP actions.
 *
 * @package    sf_sandbox
 * @subpackage LSPOP
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LSPOPActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->lspop = Doctrine_Core::getTable('LSPOP')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->lspop = Doctrine_Core::getTable('LSPOP')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->lspop);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new LSPOPForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new LSPOPForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($lspop = Doctrine_Core::getTable('LSPOP')->find(array($request->getParameter('id'))), sprintf('Object lspop does not exist (%s).', $request->getParameter('id')));
    $this->form = new LSPOPForm($lspop);
    $this->lspop = $this->getRoute()->getObject();
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($lspop = Doctrine_Core::getTable('LSPOP')->find(array($request->getParameter('id'))), sprintf('Object lspop does not exist (%s).', $request->getParameter('id')));
    $this->form = new LSPOPForm($lspop);

    $this->processForm($request, $this->form);
    $this->redirect('lspop_show', $lspop);
    //$this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($lspop = Doctrine_Core::getTable('LSPOP')->find(array($request->getParameter('id'))), sprintf('Object lspop does not exist (%s).', $request->getParameter('id')));
    $lspop->delete();

    $this->redirect('LSPOP/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $lspop = $form->save();

      //$this->redirect('LSPOP/edit?id='.$lspop->getId());
      $this->redirect('lspop_show', $lspop);
    }
  }
}
