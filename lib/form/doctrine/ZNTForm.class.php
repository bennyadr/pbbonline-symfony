<?php

/**
 * ZNT form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ZNTForm extends BaseZNTForm
{
  public function configure()
  {
 		$this->useFields(array(
			'kode',
			'nir',
			'dokumen_id',
			'blok_id'
		));
		
		$this->widgetSchema->setLabels(array(
			'nir'    => 'NIR'
		));
		
    /* $this->widgetSchema['dokumen_id'] = new sfWidgetFormInputFile(array());
    $this->validatorSchema['dokumen_id'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/lampiran/znt'
    )); */
		
		/* $this->widgetSchema['valid'] = new sfWidgetFormChoice(array(
			'choices'  => array('pending','valid','butuh revisi'),
			'multiple' => false,
			'expanded' => false
		)); */
		
  }
}
