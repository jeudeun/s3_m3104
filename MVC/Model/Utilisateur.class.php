 <?php
 class Utilisateur
        {

          private $_idUtilisateur;
          private $_nom;
          private $_prenom;
          private $_email;
          private $_mdp;
          private $_adresse;
          private $_codePostal;
          private $_ville;
          private $_numero;



          function get_idUtilisateur()
          {
            return $this->_idUtilisateur;
          }

          function set_idUtilisateur($x)
          {
            $this->_idUtilisateur = $x;
          }

          function get_nom()
          {
            return $this->_nom;
          }

          function set_nom($x)
          {
            $this->_nom = $x;
          }

          function get_prenom()
          {
            return $this->_prenom;
          }

          function set_prenom($x)
          {
            $this->_prenom = $x;
          }

          function get_email()
          {
            return $this->_email;
          }

          function set_email($x)
          {
            $this->_email = $x;
          }

          function get_mdp()
          {
            return $this->_mdp;
          }

          function set_mdp($x)
          {
            $this->_mdp = $x;
          }

          function get_adresse()
          {
            return $this->_adresse;
          }

          function set_adresse($x)
          {
            $this->_adresse = $x;
          }

          function get_codePostal()
          {
            return $this->_codePostal;
          }

          function set_codePostal($x)
          {
            $this->_codePostal = $x;
          }

          function get_ville()
          {
            return $this->_ville;
          }

          function set_ville($x)
          {
            $this->_ville = $x;
          }

          function get_numero()
          {
            return $this->_numero;
          }

          function set_numero($x)
          {
            $this->_numero = $x;
          }



          function adresseC()
          {
           echo $this->_numero.' '.$this->_adresse.' a '.$this->_ville;
          }
          

          function connecter()
          {
            echo 'Connecté en tant que : '.$this->_nom.' '.$this->_prenom;
          }
        }

?>