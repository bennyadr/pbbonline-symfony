<?php

/**
 * NJOP form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NJOPForm extends BaseNJOPForm
{
  public function configure()
  {
 		$this->useFields(array(
			'jenis',
			'kelas',
			'batas_atas',
			'batas_bawah',
			'nilai'
		));
		
		$this->widgetSchema->setLabels(array(
			'nilai'    => 'Nilai per m2'
		));
  }
}
