<?php

/**
 * njop actions.
 *
 * @package    sf_sandbox
 * @subpackage njop
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class njopActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->njops = new sfDoctrinePager('jalan', 10);
    $this->njops->setQuery(Doctrine::getTable('jalan')->createQuery('a'));
    $this->njops->setPage($request->getParameter('page', 1));
    $this->njops->init();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->njop = Doctrine_Core::getTable('njop')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->njop);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new njopForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new njopForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($njop = Doctrine_Core::getTable('njop')->find(array($request->getParameter('id'))), sprintf('Object njop does not exist (%s).', $request->getParameter('id')));
    $this->form = new njopForm($njop);
		$this->njop = Doctrine_Core::getTable('njop')->find(array($request->getParameter('id')));
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($njop = Doctrine_Core::getTable('njop')->find(array($request->getParameter('id'))), sprintf('Object njop does not exist (%s).', $request->getParameter('id')));
    $this->form = new njopForm($njop);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($njop = Doctrine_Core::getTable('njop')->find(array($request->getParameter('id'))), sprintf('Object njop does not exist (%s).', $request->getParameter('id')));
    $njop->delete();

    $this->redirect('njop/index?page='.$request->getParameter('page'));
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $njop = $form->save();

      //$this->redirect('njop/edit?id='.$njop->getId());
			$this->redirect('njop_show', $njop);
    }
  }
}
