<?php header("Cache-Control: no-store,no-cache,max-age=0,must-revalidate");?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>BookShop | All Books</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css"
<body>
<div id="header-container">
    <header class="wrapper clearfix">
        <h1 id="title">Books Shop</h1>
    </header>
</div>
<div id="main-container">
    <?php $page = 'books';?>
    <?php require_once('navbar.php');?>
    <div id="main" class="wrapper clearfix">

        <article>
            <?php require 'get_all_books.php'; ?>
        </article>

    </div> <!-- #main -->
</div> <!-- #main-container -->

<div id="footer-container">
    <footer class="wrapper">
        <h3></h3>
    </footer>
</div>
</body>
</html>
