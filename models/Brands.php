<?php
class Brands extends Model {

    public function getNameById($id) {
        
        $sql = "SELECT name FROM brands WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCOunt() > 0) {
            $data = $sql->fetch();

            return $data['name'];
        } else {
            return '';
        }
    
    }

}

