<?php

/**
 * kecamatan actions.
 *
 * @package    sf_sandbox
 * @subpackage kecamatan
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class kecamatanActions extends sfActions
{
	public $max_job=10;
  public function executeIndex(sfWebRequest $request)
  {
    //$this->kecamatans = Doctrine_Core::getTable('kecamatan')->createQuery('a')->execute();
			
    $this->kecamatans = new sfDoctrinePager('kecamatan', $this->max_job);
    $this->kecamatans->setQuery(Doctrine::getTable('kecamatan')->createQuery('a'));
    $this->kecamatans->setPage($request->getParameter('page', 1));
    $this->kecamatans->init();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->kecamatan = Doctrine_Core::getTable('kecamatan')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->kecamatan);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new kecamatanForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new kecamatanForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($kecamatan = Doctrine_Core::getTable('kecamatan')->find(array($request->getParameter('id'))), sprintf('Object kecamatan does not exist (%s).', $request->getParameter('id')));
    $this->form = new kecamatanForm($kecamatan);
		$this->kecamatan = Doctrine_Core::getTable('kecamatan')->find(array($request->getParameter('id')));
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($kecamatan = Doctrine_Core::getTable('kecamatan')->find(array($request->getParameter('id'))), sprintf('Object kecamatan does not exist (%s).', $request->getParameter('id')));
    $this->form = new kecamatanForm($kecamatan);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($kecamatan = Doctrine_Core::getTable('kecamatan')->find(array($request->getParameter('id'))), sprintf('Object kecamatan does not exist (%s).', $request->getParameter('id')));
    $kecamatan->delete();

    $this->redirect('kecamatan/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $kecamatan = $form->save();

      //$this->redirect('kecamatan/edit?id='.$kecamatan->getId());
			$this->redirect('kecamatan_show', $kecamatan);
    }
  }
}
