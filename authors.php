<?php
function __autoload($class_name) {
  require 'class.' . $class_name . '.inc.php';
}

?>
<h3>List of all Authors:</h3>

<?php
  $authors = new Authors();
  $array =  $authors->getList();
?>
<?php foreach ($array as $author):?>
<div class="content">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true">
    <a href="books.php?author_id=<?php echo $author->id;?>"><?php echo $author->name;?></a>
  </span>
</div>
<?php endforeach;?>
