 <?php
 class PersHandi
        {

          private $_idHandicape;
          private $_idUtilisateur;
          private $_description;



          function get_idHandicape()
          {
            return $this->_idHandicape;
          }

          function get_idUtilisateur()
          {
            return $this->$_idUtilisateur;
          }

          function get_description()
          {
            return $this->_description;
          }

          function set_idHandicape($a)
          {
            $this->_idHandicape = $a;
          }

          function set_idUtilisateur($b)
          {
            $this->_nomP = $b;
          }

          function set_description($c)
          {
            $this->_description = $c;
          }
        }

?>