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
    echo "Connection succeeded";

}
?>
<!-- sart view feedback -->
    <div class="container" style="text-align: center;">
        <center><h1>Contact List</h1></center>
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