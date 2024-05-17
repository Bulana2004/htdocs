<?php
include 'header.php';
?>

<div class="container">
        <form method="post" class="mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <p>Name</p>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control border-dark" placeholder="Enter name" name="stname"
                        id="stname" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <p>Email address</p>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control border-dark" placeholder="Email address" name="stadd"
                        id="stadd" minlength="10">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <p>Teliphone number</p>
                </div>
                <div class="col-sm-6">
                    <input type="number" class="form-control border-dark" placeholder="Teliphone number" name="sttel"
                        id="sttel">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <p>Date of Birth</p>
                </div>
                <div class="col-sm-6">
                    <input type="date" class="form-control border-dark" placeholder="Date of birth" name="stdob"
                        id="stdob">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-6">
                    <p>Password</p>
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control border-dark" placeholder="Enter Password" name="stdob"
                        id="stdob">
                </div>
            </div>
            <!--St data-->
            <div class="text-center mt-3" id="stdata"></div>

            <div class="row mt-4">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <input type="button" class="form-control text-bg-primary" value="Test" id="test" onclick="find()">
                </div>
            </div>
        </form>
    </div>

<?php
include 'footer.php';
?>