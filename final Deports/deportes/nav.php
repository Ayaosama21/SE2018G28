<?php include_once('./models/common.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>deportes</title>
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="index.php">Deportes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sports.php">Sports</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sign-in.php">Sign Up</a>
        </li>
        </ul>
    <?php 
    $absolute_path = basename("sports.php");
     if(basename($_SERVER['PHP_SELF']) == $absolute_path) : ?>
    <form class="form-inline my-2 my-lg-0 ml-auto" action="<?php $_SERVER['PHP_SELF']?>">
      <input class="form-control mr-sm-2" type="text" name="keywords" placeholder="Search" aria-label="Search" value="<?=safeGet('keywords')?>"  >
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
<?php endif; ?>
    </div>
    </nav>
    
