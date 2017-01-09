 <?php
 class Intervenant
        {

          private $_idIntervenant;
          private $_idUtilisateur;
          private $_aideMenage;
          private $_aideRepas;
          private $_dameCompanie;
          private $_aidePersonne;




          function get_idIntervenant()
          {
            return $this->_idIntervenant;
          }

          function set_idIntervenant($x)
          {
            $this->_idIntervenant = $x;
          }


          function get_idUtilisateur()
          {
            return $this->_idUtilisateur;
          }

          function set_idUtilisateur($x)
          {
            $this->_idUtilisateur = $x;
          }


          function get_aideMenage()
          {
            return $this->_aideMenage;
          }

          function set_aideMenage($x)
          {
            $this->_aideMenage = $x;
          }


          function get_aideRepas()
          {
            return $this->_aideRepas;
          }

          function set_aideRepas($x)
          {
            $this->_aideRepas = $x;
          }


          function get_dameCompanie()
          {
            return $this->_dameCompanie;
          }

          function set_dameCompanie($x)
          {
            $this->_dameCompanie = $x;
          }


          function get_aidePersonne()
          {
            return $this->_aidePersonne;
          }

          function set_aidePersonne($x)
          {
            $this->_aidePersonne = $x;
          }


          
        }

?>