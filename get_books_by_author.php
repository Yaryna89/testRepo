<?php
    $authorId = (int)$_GET['author_id'];

function __autoload($class_name) {
    require 'class.' . $class_name . '.inc.php';
}

?>
<h3>List of books written by specified author:</h3>

<?php
$authors = new Books();
$array =  $authors->get(null,$authorId);
//var_dump($array);
?>
<?php if (!empty($array)):?>
<?php foreach ($array as $key=>$book):?>
    <div class="content">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true">
    <a href="get_book.php?book_id=<?php echo $book->book_id;?>"><?php echo $book->book_title;?></a>
  </span>
    </div>
<?php endforeach;?>
<?php endif;?>

