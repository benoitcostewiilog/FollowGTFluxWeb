<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('WrkUrgence', 'doctrine');

/**
 * BaseWrkUrgence
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_urgence
 * @property integer $id_fournisseur
 * @property integer $id_transporteur
 * @property integer $id_chauffeur
 * @property string $lettre_voiture
 * @property integer $nb_colis
 * @property integer $nb_palette
 * @property string $immatriculation
 * @property string $tracking_four
 * @property string $commande_achat
 * @property boolean $urgent
 * @property timestamp $date_livraison_debut
 * @property timestamp $date_livraison_fin
 * @property integer $id_interlocuteur
 * @property string $rep_signature
 * @property string $br_sap
 * @property string $statut
 * @property string $commentaire
 * @property integer $id_arrivage
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property RefTransporteur $RefTransporteur
 * @property RefChauffeur $RefChauffeur
 * @property RefFournisseur $RefFournisseur
 * @property RefInterlocuteur $RefInterlocuteur
 * @property WrkArrivage $WrkArrivage
 * 
 * @method integer          getId_urgence()           Returns the current record's "id_urgence" value
 * @method integer          getId_fournIsseur()       Returns the current record's "id_fournisseur" value
 * @method integer          getId_transporteur()      Returns the current record's "id_transporteur" value
 * @method integer          getId_chauffeur()         Returns the current record's "id_chauffeur" value
 * @method string           getLettre_voiture()       Returns the current record's "lettre_voiture" value
 * @method integer          getNb_colis()             Returns the current record's "nb_colis" value
 * @method integer          getNb_palette()           Returns the current record's "nb_palette" value
 * @method string           getImmatrIculatIon()      Returns the current record's "immatriculation" value
 * @method string           getTracking_four()        Returns the current record's "tracking_four" value
 * @method string           getCommande_aChat()       Returns the current record's "commande_achat" value
 * @method boolean          getUrgent()               Returns the current record's "urgent" value
 * @method timestamp        getDate_livraison_Debut() Returns the current record's "date_livraison_debut" value
 * @method timestamp        getDate_livraison_fin()   Returns the current record's "date_livraison_fin" value
 * @method integer          getId_Interlocuteur()     Returns the current record's "id_interlocuteur" value
 * @method string           getRep_signatuRe()        Returns the current record's "rep_signature" value
 * @method string           getBr_sap()               Returns the current record's "br_sap" value
 * @method string           getStatut()               Returns the current record's "statut" value
 * @method string           getCommentaire()          Returns the current record's "commentaire" value
 * @method integer          getId_arrIvage()          Returns the current record's "id_arrivage" value
 * @method timestamp        getCreated_at()           Returns the current record's "created_at" value
 * @method timestamp        getUpdated_at()           Returns the current record's "updated_at" value
 * @method RefTransporteur  getRefTransporteur()      Returns the current record's "RefTransporteur" value
 * @method RefChauffeur     getRefChauffeur()         Returns the current record's "RefChauffeur" value
 * @method RefFournisseur   getRefFournisseur()       Returns the current record's "RefFournisseur" value
 * @method RefInterlocuteur getRefInterlocuteur()     Returns the current record's "RefInterlocuteur" value
 * @method WrkArrivage      getWrkArrivage()          Returns the current record's "WrkArrivage" value
 * @method WrkUrgence       setId_urgence()           Sets the current record's "id_urgence" value
 * @method WrkUrgence       setId_fournIsseur()       Sets the current record's "id_fournisseur" value
 * @method WrkUrgence       setId_transporteur()      Sets the current record's "id_transporteur" value
 * @method WrkUrgence       setId_chauffeur()         Sets the current record's "id_chauffeur" value
 * @method WrkUrgence       setLettre_voiture()       Sets the current record's "lettre_voiture" value
 * @method WrkUrgence       setNb_colis()             Sets the current record's "nb_colis" value
 * @method WrkUrgence       setNb_palette()           Sets the current record's "nb_palette" value
 * @method WrkUrgence       setImmatrIculatIon()      Sets the current record's "immatriculation" value
 * @method WrkUrgence       setTracking_four()        Sets the current record's "tracking_four" value
 * @method WrkUrgence       setCommande_aChat()       Sets the current record's "commande_achat" value
 * @method WrkUrgence       setUrgent()               Sets the current record's "urgent" value
 * @method WrkUrgence       setDate_livraison_Debut() Sets the current record's "date_livraison_debut" value
 * @method WrkUrgence       setDate_livraison_fin()   Sets the current record's "date_livraison_fin" value
 * @method WrkUrgence       setId_Interlocuteur()     Sets the current record's "id_interlocuteur" value
 * @method WrkUrgence       setRep_signatuRe()        Sets the current record's "rep_signature" value
 * @method WrkUrgence       setBr_sap()               Sets the current record's "br_sap" value
 * @method WrkUrgence       setStatut()               Sets the current record's "statut" value
 * @method WrkUrgence       setCommentaire()          Sets the current record's "commentaire" value
 * @method WrkUrgence       setId_arrIvage()          Sets the current record's "id_arrivage" value
 * @method WrkUrgence       setCreated_at()           Sets the current record's "created_at" value
 * @method WrkUrgence       setUpdated_at()           Sets the current record's "updated_at" value
 * @method WrkUrgence       setRefTransporteur()      Sets the current record's "RefTransporteur" value
 * @method WrkUrgence       setRefChauffeur()         Sets the current record's "RefChauffeur" value
 * @method WrkUrgence       setRefFournisseur()       Sets the current record's "RefFournisseur" value
 * @method WrkUrgence       setRefInterlocuteur()     Sets the current record's "RefInterlocuteur" value
 * @method WrkUrgence       setWrkArrivage()          Sets the current record's "WrkArrivage" value
 * 
 * @package    MobileStockV3
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseWrkUrgence extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('wrk_urgence');
        $this->hasColumn('id_urgence', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('id_fournisseur', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_transporteur', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_chauffeur', 'integer', 11, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('lettre_voiture', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('nb_colis', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('nb_palette', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('immatriculation', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('tracking_four', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('commande_achat', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('urgent', 'boolean', null, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('date_livraison_debut', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('date_livraison_fin', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('id_interlocuteur', 'integer', 11, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
             ));
        $this->hasColumn('rep_signature', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('br_sap', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('statut', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('commentaire', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('id_arrivage', 'integer', 11, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 11,
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
        $this->hasOne('RefTransporteur', array(
             'local' => 'id_transporteur',
             'foreign' => 'id_transporteur'));

        $this->hasOne('RefChauffeur', array(
             'local' => 'id_chauffeur',
             'foreign' => 'id_chauffeur'));

        $this->hasOne('RefFournisseur', array(
             'local' => 'id_fournisseur',
             'foreign' => 'id_fournisseur'));

        $this->hasOne('RefInterlocuteur', array(
             'local' => 'id_interlocuteur',
             'foreign' => 'id'));

        $this->hasOne('WrkArrivage', array(
             'local' => 'id_arrivage',
             'foreign' => 'id_arrivage'));
    }
}