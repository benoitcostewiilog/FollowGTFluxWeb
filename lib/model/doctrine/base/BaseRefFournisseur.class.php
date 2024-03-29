<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RefFournisseur', 'doctrine');

/**
 * BaseRefFournisseur
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_fournisseur
 * @property string $libelle
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Doctrine_Collection $WrkExpedition
 * @property Doctrine_Collection $WrkArrivage
 * @property Doctrine_Collection $WrkUrgence
 * 
 * @method integer             getId_fournIsseur() Returns the current record's "id_fournisseur" value
 * @method string              getLibeLLe()        Returns the current record's "libelle" value
 * @method timestamp           getCreated_at()     Returns the current record's "created_at" value
 * @method timestamp           getUpdated_at()     Returns the current record's "updated_at" value
 * @method Doctrine_Collection getWrkExpedition()  Returns the current record's "WrkExpedition" collection
 * @method Doctrine_Collection getWrkArrivage()    Returns the current record's "WrkArrivage" collection
 * @method Doctrine_Collection getWrkUrgence()     Returns the current record's "WrkUrgence" collection
 * @method RefFournisseur      setId_fournIsseur() Sets the current record's "id_fournisseur" value
 * @method RefFournisseur      setLibeLLe()        Sets the current record's "libelle" value
 * @method RefFournisseur      setCreated_at()     Sets the current record's "created_at" value
 * @method RefFournisseur      setUpdated_at()     Sets the current record's "updated_at" value
 * @method RefFournisseur      setWrkExpedition()  Sets the current record's "WrkExpedition" collection
 * @method RefFournisseur      setWrkArrivage()    Sets the current record's "WrkArrivage" collection
 * @method RefFournisseur      setWrkUrgence()     Sets the current record's "WrkUrgence" collection
 * 
 * @package    MobileStockV3
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRefFournisseur extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ref_fournisseur');
        $this->hasColumn('id_fournisseur', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('libelle', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('WrkExpedition', array(
             'local' => 'id_fournisseur',
             'foreign' => 'id_fournisseur'));

        $this->hasMany('WrkArrivage', array(
             'local' => 'id_fournisseur',
             'foreign' => 'id_fournisseur'));

        $this->hasMany('WrkUrgence', array(
             'local' => 'id_fournisseur',
             'foreign' => 'id_fournisseur'));
    }
}