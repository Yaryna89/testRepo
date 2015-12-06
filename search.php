<?php header("Cache-Control: no-store,no-cache,max-age=0,must-revalidate");?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>BookShop | Search</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
    <script src="/js/search.js" ></script>
<body>
<div id="header-container">
    <header class="wrapper clearfix">
        <h1 id="title">Books Shop</h1>
    </header>
</div>
<div id="main-container">
    <?php $page = 'search';?>
    <?php require_once('navbar.php');?>
    <div id="main" class="wrapper clearfix">

        <article>
            <div class="form-group">
                <label for="book">Book</label>
                <input type="text" id="book" name="book" class="form-control" />
                <label for="author">Author</label>
                <input type="text" id="author" name="book" class="form-control" /><br>
                <button type="button" id="search" class="btn btn-info">Search</button>
            </div>
            <div id="response"></div>
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
