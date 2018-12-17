<?php

/**
 * WrkArrivageTable
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class WrkArrivageTable extends Doctrine_Table {

    /**
     * Returns an instance of this class.
     *
     * @return object WrkArrivageTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('WrkArrivage');
    }

    public function getArrivages($heureDebut = '', $heureFin = '', $fournisseur = '', $transporteur = '', $statut = '', $produit = '') {
        $req = $this->createQuery()
                ->select('w.*,f.*,t.*,c.*,n.*,ap.*')
                ->from('WrkArrivage w')
                ->leftJoin('w.RefFournisseur f')
                ->leftJoin('w.RefTransporteur t')
                ->leftJoin('w.RefChauffeur c')
                ->leftJoin('w.RefNature n')
                ->leftJoin('w.WrkArrivageProduit ap')
                ->orderBy('w.created_at desc');

        if ($heureDebut != '') {
            $req->andWhere('w.created_at >=?', $heureDebut);
        }
        if ($heureFin != '') {
            $req->andWhere('w.created_at <=?', $heureFin);
        }
        if ($fournisseur != '') {
            $req->andWhere('w.id_fournisseur= ?', $fournisseur);
        }
        if ($transporteur != '') {
            $req->andWhere('w.id_transporteur = ?', $transporteur);
        }
        if ($statut != '') {
            $req->andWhere('w.statut = ?', $statut);
        }
        if ($produit != '') {
            $subReq = $this->createQuery()->select('ap2.id_arrivage')->from('wrk_arrivage_produit ap2')->where('ap2.ref_produit = ?', $produit);
            $req->andWhere('w.id_arrivage IN(' . $subReq->getDql() . ')', $produit);
        }

        return $req->execute();
    }

    /**
     * Retourne la date du dernier arrivage ou la date du jour si il n'y a pas d'arrivage
     * @return type
     */
    public function getDernierArrivageDate() {
        $dateArray = $this->createQuery()
                ->select('MAX(DATE(a.created_at))')
                ->from('WrkArrivage a')
                ->fetchArray();

        if (count($dateArray) > 0) {
            return date('d/m/Y', strtotime($dateArray[0]['MAX']));
        }
        return date('d/m/Y');
    }

    /**
     * Verifie si le num arrivage n'existe pas deja en base
     * @param type $numArrivage
     * @return boolean true si le num arrivage n'existe pas
     */
    public function checkNumArrivageUnique($numArrivage) {
        $nbNumArrivage = $this->createQuery()->select('ap.id_arrivage_produit')
                ->from('WrkArrivageProduit ap')
                ->where('SUBSTRING(ap.ref_produit,2,12) = ?', $numArrivage)
                ->count();

        if ($nbNumArrivage > 0) {
            return false;
        }
        return true;
    }

}
