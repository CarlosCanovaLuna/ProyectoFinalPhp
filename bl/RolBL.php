<?php

require '../../../DAO/RolDAO.php';
class RolBL {
    
     function listar(){
        $dao = new RolDAO();
        try{
            return $dao->listarRol();
        } catch (Exception $ex) {

            echo $ex->getMessage();
        }
    }
    
    function buscar($id) {
        $dao = new RolDAO();
        try {
            return $dao->buscarId($id);
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    function saved($rol){
        $dao =new RolDAO();
        try{
            $dao->saveRol($rol);
        } catch (Exception $ex) {
            echo $ex->getMessage();

        }
    }
 
    
 

}
