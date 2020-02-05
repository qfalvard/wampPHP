<?php
include_once('../_partials/_header.php');
require_once('../config.php');
?>
<script type="text/javascript" src="test.js"></script>

<a class="btn btn-dark my-4" href="../list.php">retour à la liste</a>
<a class="btn btn-dark my-4 pull-right" href="stafflist.php">stafflist</a>

<article>

    <div class="text-center mb-5">
        <h1>Espace <span class="font-italic text-monospace">utilisateur</span></h1>
    </div>

    <div class="row d-flex justify-content-center">

        <div class="col-4 border mx-auto">
            <form action="save.php" method="post" class="form-group mt-3">
                <div class="form-group">
                    <input class="form-control" type="text" name="username" id="username" required placeholder="Username">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="first_name" id="firstName" required placeholder="First name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="last_name" id="lastName" required placeholder="Last name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="email" id="email" required placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="password" required placeholder="Password"><br>
                    <input type="checkbox" onclick="myFunction()"> Show Password
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="store_id" id="storeID" required placeholder="Password" hidden value="1">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="address_id" id="addressID" required placeholder="Password" hidden value="1">
                </div>
                <div>
                    <input class="btn btn-warning pull-right mb-3" type="submit" value="Enregistrez">
                </div>
            </form>
        </div>

        <div class="col-4 border mx-auto bg-light">
            <form method="post" action="login.php" class="form-group mt-3">
                <div class="form-group">
                    <input class="form-control" type="text" name="email" id="" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="password" id="" placeholder="Password">
                </div>
                <div>
                    <input class="btn btn-danger pull-right" type="submit" value="login">
                </div>
            </form>
        </div>

    </div>

</article>

<?php include_once('../_partials/_footer.php') ?>