<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('WrkMouvement', 'doctrine');

/**
 * BaseWrkMouvement
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_mouvement
 * @property integer $id_utilisateur
 * @property timestamp $heure_prise
 * @property string $ref_produit
 * @property string $br_sap
 * @property string $code_emplacement
 * @property integer $retry
 * @property string $type
 * @property string $groupe
 * @property string $commentaire
 * @property integer $quantite
 * @property string $signature
 * @property string $photos
 * @property string $anomalie
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property RefEmplacement $RefEmplacement
 * @property WrkArrivageProduit $WrkArrivageProduit
 * 
 * @method integer            getId_mouvement()       Returns the current record's "id_mouvement" value
 * @method integer            getId_utIlIsateur()     Returns the current record's "id_utilisateur" value
 * @method timestamp          getHeure_prise()        Returns the current record's "heure_prise" value
 * @method string             getRef_pRoduit()        Returns the current record's "ref_produit" value
 * @method string             getBr_sap()             Returns the current record's "br_sap" value
 * @method string             getCode_emplaCement()   Returns the current record's "code_emplacement" value
 * @method integer            getRetRy()              Returns the current record's "retry" value
 * @method string             getType()               Returns the current record's "type" value
 * @method string             getGroupe()             Returns the current record's "groupe" value
 * @method string             getCommentaire()        Returns the current record's "commentaire" value
 * @method integer            getQuantite()           Returns the current record's "quantite" value
 * @method string             getSignature()          Returns the current record's "signature" value
 * @method string             getPhotos()             Returns the current record's "photos" value
 * @method string             getAnomAlie()           Returns the current record's "anomalie" value
 * @method timestamp          getCreated_at()         Returns the current record's "created_at" value
 * @method timestamp          getUpdated_at()         Returns the current record's "updated_at" value
 * @method RefEmplacement     getRefEmplacement()     Returns the current record's "RefEmplacement" value
 * @method WrkArrivageProduit getWrkArrivageProduit() Returns the current record's "WrkArrivageProduit" value
 * @method WrkMouvement       setId_mouvement()       Sets the current record's "id_mouvement" value
 * @method WrkMouvement       setId_utIlIsateur()     Sets the current record's "id_utilisateur" value
 * @method WrkMouvement       setHeure_prise()        Sets the current record's "heure_prise" value
 * @method WrkMouvement       setRef_pRoduit()        Sets the current record's "ref_produit" value
 * @method WrkMouvement       setBr_sap()             Sets the current record's "br_sap" value
 * @method WrkMouvement       setCode_emplaCement()   Sets the current record's "code_emplacement" value
 * @method WrkMouvement       setRetRy()              Sets the current record's "retry" value
 * @method WrkMouvement       setType()               Sets the current record's "type" value
 * @method WrkMouvement       setGroupe()             Sets the current record's "groupe" value
 * @method WrkMouvement       setCommentaire()        Sets the current record's "commentaire" value
 * @method WrkMouvement       setQuantite()           Sets the current record's "quantite" value
 * @method WrkMouvement       setSignature()          Sets the current record's "signature" value
 * @method WrkMouvement       setPhotos()             Sets the current record's "photos" value
 * @method WrkMouvement       setAnomAlie()           Sets the current record's "anomalie" value
 * @method WrkMouvement       setCreated_at()         Sets the current record's "created_at" value
 * @method WrkMouvement       setUpdated_at()         Sets the current record's "updated_at" value
 * @method WrkMouvement       setRefEmplacement()     Sets the current record's "RefEmplacement" value
 * @method WrkMouvement       setWrkArrivageProduit() Sets the current record's "WrkArrivageProduit" value
 * 
 * @package    MobileStockV3
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseWrkMouvement extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('wrk_mouvement');
        $this->hasColumn('id_mouvement', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_utilisateur', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('heure_prise', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('ref_produit', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('br_sap', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('code_emplacement', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('retry', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('type', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('groupe', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('commentaire', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('quantite', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('signature', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('photos', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('anomalie', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
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
        $this->hasOne('RefEmplacement', array(
             'local' => 'code_emplacement',
             'foreign' => 'code_emplacement'));

        $this->hasOne('WrkArrivageProduit', array(
             'local' => 'ref_produit',
             'foreign' => 'br_sap'));
    }
}