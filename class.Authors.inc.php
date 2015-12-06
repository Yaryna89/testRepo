<?php
class Authors {

    public function getList(){
        $db = Database::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT * FROM authors ORDER BY name ASC";
        $result = $mysqli->query($sql_query);
        while($row = $result->fetch_object()){
            $array[] = $row;
        }
        return $array;
    }
}
?>