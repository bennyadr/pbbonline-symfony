<?php

/**
 * kecamatanTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class kecamatanTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object kecamatanTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('kecamatan');
    }
    public static function getKecamatan()
    {
    	$q = self::getInstance()
    		->createQuery('a')
    		->execute();
    		
    	return $q;
    }
}