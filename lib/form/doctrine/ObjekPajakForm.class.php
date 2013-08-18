<?php

/**
 * ObjekPajak form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ObjekPajakForm extends BaseObjekPajakForm
{
  public function configure()
  {
    $this->useFields(array(
      'nopersil',
      'blokkavno',
      'rwrt',
      'jalan',
      'cabang',
      'luastanah',
      'kodeznt_id'
    ));
  }
}
