<?php

/**
 * SPOP form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SPOPForm extends BaseSPOPForm
{
  public function configure()
  {
 		$this->useFields(array(
'nomor_formulir',
'jenis_transaksi',
'NOP',
'NOP_bersama',
'NOP_asal',
'NO_SPPT_lama',
'nama_jalan',
'blok_kav_nomor',
'kelurahan_objek_pajak',
'RT_objek_pajak',
'RW_objek_pajak',
'status',
'pekerjaan',
'nama_subjek_pajak',
'nama_jalan_subjek_pajak',
'kelurahan_subjek_pajak',
'RW_subjek_pajak',
'RT_subjek_pajak',
'kabupaten',
'kodepos',
'no_telp',
'no_fax',
'no_hp',
'email',
'nomor_KTP',
'berlaku_sampai_dengan',
'luas_tanah',
'zona_nilai_tanah',
'nilai_tanah_per_m2',
'jenis_tanah',
'fasilitas_umum',
'jumlah_bangunan',
'gambar'
		));
  }
}
