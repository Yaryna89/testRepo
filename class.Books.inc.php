<?php
class Books {

    public function getList(){
        $db = Database::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT * FROM books ORDER BY id DESC";
        $result = $mysqli->query($sql_query);
        while($row = $result->fetch_object()){
            $array[] = $row;
        }
        return $array;
    }

    public function get($id=null,$authorId){
        $db = Database::getInstance();
        $mysqli = $db->getConnection();

        $query = "
          SELECT
            books.id AS book_id,
            books.title AS book_title
          FROM library
          INNER JOIN authors ON authors.id = library.author_id
          INNER JOIN books ON books.id = library.book_id
          WHERE library.author_id={$authorId}
        ";
        $result = $mysqli->query($query);
        while($row = $result->fetch_object()){
            $array[$row->book_id] = $row;
        }
        return $array;
    }
}
?>