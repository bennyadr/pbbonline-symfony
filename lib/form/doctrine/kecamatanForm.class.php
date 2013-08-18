<?php

/**
 * kecamatan form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class kecamatanForm extends BasekecamatanForm
{
  public function configure()
  {
 		$this->useFields(array(
			'nama',
			'kodepos',
			'kode_lokal'
		));
		
		//$this->widgetSchema->setLabels(array('nir'=>'NIR'));
  }
}
