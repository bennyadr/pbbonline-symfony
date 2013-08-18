<?php

/**
 * Permohonan form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PermohonanForm extends BasePermohonanForm
{
  public function configure()
  {
    $this->useFields(array(
      'nomor',
      'jenis_surat',
      'jenis_pelayanan_id',
      'nop_id',
      'tahun_pajak',
      'no_surat',
      'isi_surat',
      'lampiran_surat_kuasa',
      'lampiran_fotokopi_ktp',
      'lampiran_fotokopi_sertifikat',
      'lampiran_fotokopi_imb'
    ));
    
    $this->widgetSchema['jenis_surat'] = new sfWidgetFormChoice(array(
      'choices'  => Doctrine_Core::getTable('Permohonan')->getJenisSurat(),
      'expanded' => false,
    ));
    $this->validatorSchema['jenis_surat'] = new sfValidatorChoice(array(
      'choices' => array_keys(Doctrine_Core::getTable('Permohonan')->getjenisSurat()),
    ));
    
    $this->widgetSchema['lampiran_surat_kuasa'] = new sfWidgetFormInputFile(array(
      'label' => 'Surat Kuasa',
    ));
    $this->validatorSchema['lampiran_surat_kuasa'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/lampiran/permohonan',
      'mime_types' => 'web_images',
    ));
    
    $this->widgetSchema['lampiran_fotokopi_ktp'] = new sfWidgetFormInputFile(array(
      'label' => 'Fotokopi KTP',
    ));
    $this->validatorSchema['lampiran_fotokopi_ktp'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/lampiran/permohonan',
      'mime_types' => 'web_images',
    ));
    
    $this->widgetSchema['lampiran_fotokopi_sertifikat'] = new sfWidgetFormInputFile(array(
      'label' => 'Fotokopi Sertifikat',
    ));
    $this->validatorSchema['lampiran_fotokopi_sertifikat'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/lampiran/permohonan',
      'mime_types' => 'web_images',
    ));
    
    $this->widgetSchema['lampiran_fotokopi_imb'] = new sfWidgetFormInputFile(array(
      'label' => 'Fotokopi IMB',
    ));
    $this->validatorSchema['lampiran_fotokopi_imb'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/lampiran/permohonan',
      'mime_types' => 'web_images',
    ));
    
    $this->widgetSchema['nop_id']->setLabel('Nomor Objek Pajak');
    $this->widgetSchema['nop_id']->setAttribute('class','input-xlarge');
    
    $this->widgetSchema['nomor']->setAttribute('class','input-xlarge');
    
    $this->widgetSchema['tahun_pajak']->setAttribute('class','input-xlarge');
    
    $this->widgetSchema['no_surat']->setAttribute('class','input-xlarge');
    
    $this->widgetSchema['isi_surat']->setAttribute('class','input-xlarge');
  }
}
