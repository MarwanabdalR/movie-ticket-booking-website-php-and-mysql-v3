<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-sm-flex align-items-baseline report-summary-header">
                                <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated
                                    Report</span> <button class="btn btn-icons border-0 p-2"><i
                                        class="icon-refresh"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                        <div class=" col-md -6 col-xl report-inner-card">
                            <div class="inner-card-text">
                                <a href="<?= URL . 'admin/upcoming_movies' ?>"
                                    style="text-decoration: none; color: black;">
                                    <span class="report-title">Upcoming movies</span>
                                    <h4><?= count($comming_soon); ?></h4>
                                </a>
                            </div>
                            <div class="inner-card-icon bg-success">
                                <i class="icon-rocket"></i>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl report-inner-card">
                            <div class="inner-card-text">
                                <a href="<?= URL . 'admin/movies_played_so_far' ?>"
                                    style="text-decoration: none; color: black;">
                                    <span class="report-title">Movies played so far</span>
                                    <h4><?= $played_so_far; ?></h4>
                                </a>
                            </div>
                            <div class="inner-card-icon bg-danger">
                                <i class="icon-briefcase"></i>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl report-inner-card">
                            <div class="inner-card-text">
                                <a href="<?= URL . 'admin/currently_playing' ?>"
                                    style="text-decoration: none; color: black;">
                                    <span class="report-title">Currently playing</span>
                                    <h4><?= count($currently_playing); ?></h4>
                                </a>
                            </div>
                            <div class="inner-card-icon bg-warning">
                                <i class="icon-globe-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!--wwwwwwwwwwwwwwww-->


<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="book_cinema";

$connect= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){

    die("faiiiiiiiled" . mysqli_connect_error());

}
else{
   // echo "Connection succeeded";

}
?>

<!-- registertaion form -->



<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Add admin</h3>
      <nav aria-label="breadcrumb">
      </nav>
    </div>
<div class="row">
<div class="col-md-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <form action="<?= URL; ?>admin/dashboard" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Username" required>

</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Picture</label>
  <input type="file" onchange="previewPicture(this);" class="form-control" accept="image/*" id="picture" name="picture" >
  </div>
  <img id="admin-img" class="admin-img" style="margin-bottom: 10px;">
  <div class="form-group">
  <label for="exampleInputEmail1">Birthday</label>
  <input type="text" id="birthday" autocomplete="off" name="birthday" class="form-control" value="<?= isset($input['birthday']) ? $input['birthday'] : ''; ?>">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Facebook</label>
  <input type="text" name="facebook" class="form-control" id="facebook" aria-describedby="emailHelp" placeholder="facebook" >
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
 <!-- reg end -->
<script type="text/javascript">
    window.addEventListener("load", function () {
        $("#birthday").datetimepicker({
            "timepicker": false,
            "scrollMonth": false,
            "format": "Y-m-d",
            "closeOnDateSelect": true
        });
    });

    function previewPicture(self) {
        if (self.files.length > 0) {
            var fileReader = new FileReader();
 
            fileReader.onload = function (event) {
                document.getElementById("admin-img").setAttribute("src", event.target.result);
            };
 
            fileReader.readAsDataURL(self.files[0]);
        }
    }
  </script>
  <!--wwwwwwwwwwwwwwww-->
 <?php 
if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $birthday = $_POST['birthday'];
  $facebook = $_POST['facebook'];
  $picture = $_FILES['picture'];
  $password = $_POST['password'];
  $hash = password_hash("$password", PASSWORD_BCRYPT);

        $file_path = "uploads/admin/" . time() . "-" . $picture["name"];
        move_uploaded_file($picture["tmp_name"], $file_path);


  $query = "INSERT INTO admins (name, email, password, picture, birthday, facebook) VALUES ('$name','$email','$hash','$file_path','$birthday','$facebook')";
  $run = mysqli_query($connect,$query);
  if ($run) {
    echo "<script>alert('Admin Successfully Added.. :)');window.location.href='dashboard';</script>";

  }
  else{
    echo "something wrong";
  }
}


  ?>


  <!--wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww-->



 <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Admin </h3>
      <nav aria-label="breadcrumb">
      </nav>
    </div>

    <?php if (!empty($error)) { ?>
        <div class="alert alert-danger"><?= $error; ?></div>
    <?php } ?>

    <?php if (!empty($message)) { ?>
        <div class="alert alert-success"><?= $message; ?></div>
    <?php } ?>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered"id="table-admins">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>

<!--<th scope="col">Password</th>-->
                                <th scope="col">Picture</th>
                                <th scope="col">Birthday</th>
                                <th scope="col">Facebook</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "select * from admins";
                            $run = mysqli_query($connect,$query);
                            if ($run) {
                                while ($row=mysqli_fetch_assoc($run)) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $row['id']; ?></th>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <!--<td><?// echo $row['password']; ?></td>-->
                                        <td><?php echo $row['picture']; ?></td>
                                        <td><?php echo $row['birthday']; ?></td>
                                        <td><?php echo $row['facebook']; ?></td>
                                        <td>
                                            <a class="btn btn-danger btn-sm" href="javascript:void(0);" 
                                            onclick="return confirmDelete(this);" data-href="<?= URL; ?>admin/dashboard/<?= $admin->id; ?>">Delete</a>
                                        </td>
                                    </tr>
                            <?php
                                }
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    
  <!-- content-wrapper ends -->

  <script>
      function confirmDelete(self) {
        swal({
          title: "Confirm Delete ?",
          text: "Are you sure you want to delete this ?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = self.getAttribute("data-href");
          }
        });
        return false;
      }

        window.addEventListener("load", function () {
            $('#table-admins').DataTable({
                "order": [
                    [0, "desc"]
                ]
            });
        });
  </script> 

  <!--wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww-->

<!-- sart view feedback -->
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Contact List </h3>
      <nav aria-label="breadcrumb">
      </nav>
    </div>
    <!--<div class="container" style="text-align: center;">-->
       <!-- <center><h1>Contact List</h1></center>-->
    <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">DOOOOOOOONE🫡</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                $query = "select * from feedbacking";
                $run = mysqli_query($connect,$query);
                if ($run) {
                    while ($row=mysqli_fetch_assoc($run)) {
                        ?>

<tr>
                <th scope="row"><?php echo $row['id']; ?></th>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['feedback']; ?></td>
                <td><a class="btn btn-info" href="compcontact.php?id=<?php echo$row['id'] ?>">Complete</a>
                    &nbsp; <a class="btn btn-danger" href="deletecon.php?id=<?php echo$row['id'] ?>">Delete</a></td>
                </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
    </div>