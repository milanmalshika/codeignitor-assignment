<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap login page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css'); ?>">
    <script src=<?php  echo base_url('js/jquery-3.51.js'); ?>></script>
    <script src=<?php echo base_url('js/main.js'); ?> ></script>
    <script src=<?php echo base_url('js/bootstrap.js'); ?>></script>
</head>

<body>
    <nav class="navbar nav-bar-dark bg-danger navbar-expand-md">
    <a class="navbar-brand" href="<?php echo base_url('index.php/About/aboutus') ?>">Heaven of Books</a>
    <a class="navbar-brand" href="<?php echo base_url('index.php/About/aboutus') ?>"><img src="<?php echo base_url('images/logo.jpg'); ?>" class="logo"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
            data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/About/aboutus'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/Registration/displaydata'); ?>">Book List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/Registration/savedata'); ?>">Insert Book</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link  active" href="updatebook.html">Update Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="deletebook.html">Delete Book</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li> -->
            </ul>
        </div>
    </nav>

<?php

    foreach($data as $row){

?>

    <header class="book">
        <div class="login">
            <form method="POST">
                <fieldset>

                    <legend><h1>Update Book</h1></legend>
                    <p>
                        <label for="">Name of Book : </label>
                        <input type="text" name="nameofbook" id="" value="<?php echo $row->nameofbook; ?>">
                    </p>
                    <p>
                        <label for="">Catogary : </label>
                        <input type="text" name="catogary" id="catogary" value="<?php echo $row->catogary; ?>">
                    </p>
                    <p>
                        <label for="">Author Name : </label>
                        <input type="text" name="nameofauthor" id="" value="<?php echo $row->nameofauthor; ?>">
                    </p>
                    <p>
                        <label for="">Number of Books : </label>
                        <input type="number" name="numberofbooks" id="" value="<?php echo $row->numberofbooks; ?>">
                    </p>
                    <p>
                        <input type="submit" name="update" style="background-color: red;" value="Save Changes">
                    </p>

                </fieldset>
            </form>
        </div>
    </header>
    <?php   }  ?>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Additional Information
                    on Cars</h6>
                    <p>Of course, there is more to learn. </p>
                    <p> Thanks for join with us.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <p>35/A, Colombo Road, Galle<br/>
                    info@heavenofcars.com<br/>
                    + 01 234 567 88<br/>
                    + 01 234 567 89</p>
                </div>
            </div>
            <div class="footer-copyright text-center">© 2020 Copyright:HeavenOfBooks.com</div>
        </div>
    </footer>
</body>

</html>