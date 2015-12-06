<?php
$bookId = (int)$_GET['book_id'];

function __autoload($class_name) {
    require 'class.' . $class_name . '.inc.php';
}

?>
<h3>List of all books:</h3>

<?php
$books = new Books();
$array =  $books->getList();
//var_dump($array);
?>
<?php if (!empty($array)):?>
    <?php foreach ($array as $book):?>
        <div class="content">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true">
    <a href="get_book.php?book_id=<?php echo $book->id;?>"><?php echo $book->title;?></a>
  </span>
        </div>
    <?php endforeach;?>
<?php endif;?>

