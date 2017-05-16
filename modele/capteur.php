<?php
/**
 * Created by IntelliJ IDEA.
 * User: Antoine
 * Date: 05/05/2017
 * Time: 10:12
 */
require_once ("init.php");
class capteur
{

    private $idcapteur;
    private $idpiece;
    private $idmaison;
    private $user;

    private $type;
    private $valeur_now;

    private $pdo;


    /**
     * capteur constructor.
     * @param $idcapteur
     * @param PDO $db
     */
    public function __construct($idcapteur, PDO $db)
    {
        $this->idcapteur = $idcapteur;
        $this->pdo = $db;
        $this->get_capteurs_piece($this->idcapteur);
    }


// fonction qui cherche les capteurs pour une pièce donnée

    /**
     * @param $IDcapteur
     */
    public function get_capteurs_piece($IDcapteur)
    {

        $req = $this->pdo->prepare('SELECT ID_piece FROM capteurs WHERE ID_Capteurs=:idcapteur');
        $req->bindParam(':idcapteur', $IDcapteur);
        $req->execute();
        $this->idpiece = $req->fetch();
        $req2 = $this->pdo->prepare('SELECT ID_maison FROM pieces WHERE ID_pièces=:idpiece');
        $req2->execute('idpiece', $this->idpiece);
        $this->idmaison = $req2->fetch();
    }

    /**
     * permet de récupérer la valeur instantannée du capteur et son type depuis la DB
     */
    private function get_valeur(){
        $req = $this->pdo->prepare('SELECT Valeur FROM capteurs WHERE ID_Capteurs=:idcapteur');
        $req->bindParam(':idcapteur', $this->idcapteur);
        $req->execute();
        $this->valeur_now = $req->fetch();
        $req = $this->pdo->prepare('SELECT Type FROM capteurs WHERE ID_Capteurs=:idcapteur');
        $req->bindParam(':idcapteur', $this->idcapteur);
        $req->execute();
        $this->type = $req->fetch();
    }
}
?>