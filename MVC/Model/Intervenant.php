 <?php
 class Intervenant
        {

          private $_id;
          private $_nom;
          private $_prenom;



          function get_idP()
          {
            return $this->_idP;
          }

          function get_nomP()
          {
            return $this->_nomP;
          }

          function get_prenomP()
          {
            return $this->_prenomP;
          }

          function set_idP($a)
          {
            $this->_idP = $a;
          }

          function set_nomP($b)
          {
            $this->_nomP = $b;
          }

          function set_prenomP($c)
          {
            $this->_prenomP = $c;
          }

          function afficher()
          {
            echo 'je suis la personne n°'.$this->_idP.' je m\'appelle : '.$this->_nomP.' '.$this->_prenomP;
          }
        }

?>