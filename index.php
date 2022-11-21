<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .jumbotron {
        margin-top: -20px;
        height: 400px;
    }

    .jumbotron-image {
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<body>
    <script>
        $(document).ready(function() {

            $("#masuk").on("click", function() {
                if ($("#masuk").text() == 'Masuk') {
                    $("#login-form").show();
                    $("#masuk").removeClass("btn-primary");
                    $("#masuk").addClass("btn-default");
                    $("#masuk").text('Cancel');
                } else {
                    $("#login-form").hide();
                    $("#masuk").removeClass("btn-default");
                    $("#masuk").addClass("btn-primary");
                    $("#masuk").text('Masuk');
                }
            });

            $("login-form").submit(function() {
                event.preventDefault();
                if ($("#title").val() == "") {
                    alert("Please Choose Account Type First (Admin / Siswa)")
                } else {
                    return
                }
            })
        });
    </script>
        <nav class="navbar navbar-default">
        <span class="col-sm-12 btn-primary" style="height: 30px; padding-top: 5px;"><i class="fa-solid fa-envelope"></i>
            larassanti312@gmail.com &nbsp; <i class="fa-solid fa-phone"></i> 0852 8187 9130</span>
    
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Tentang</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(images/bcg.jpg);">

        <div class="container py-5">
            <center>
                <h2 class="mb-4">
                <strong>WELCOME</strong>
            </h2>
            
            <p class="mb-4">

                Monitoring sistem informasi pendeteksi kerusakan sepeda motor
            </p>
            <div id="login-form" style="display:none;">

                <form class="form-inline" action="login.php?action=login" method="POST">
                    <div class="form-group">
                        <label for="fuser">Username:</label>
                        <input type="text" class="form-control" name="fuser" id="fuser">
                    </div>
                    <div class="form-group">
                        <label for="fpass">Password:</label>
                        <input type="password" class="form-control" name="fpass" id="fpass">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>

            </div>
            <center> <a href="#" class="btn btn-primary" id="masuk">Masuk</a></center>
        </div>
    </div>
   
     
  

</body>