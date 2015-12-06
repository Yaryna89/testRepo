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

    public function get($id=null,$bookId=null){
        $db = Database::getInstance();
        $mysqli = $db->getConnection();
        if($id = null && $bookId==null){
            return $this->getList();
        }else{
            if($bookId != null){
                $query = "
                    SELECT
                      authors.id,
                      authors.name
                    FROM library
                    INNER JOIN authors ON authors.id=library.author_id
                    WHERE library.book_id={$bookId}
                ";
            }
            $result = $mysqli->query($query);
            while($row = $result->fetch_object()){
                $array[] = $row;
            }
            return $array;
        }
    }
}
?>