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
<!-- breadcrumb area start -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-area-content">
                    <h1>Book Page</h1>
                </div>
            </div>
        </div>
    </div>
</section><!-- breadcrumb area end -->

<!-- start from here froooooooooooont 5ra end    -->



    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

        
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
            

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">

                <!-- Basic Layout -->
                <div class="row">
                    <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Movie Booking Form</h5>
                        </div>
                        <div class="card-body">
            


                        <form method="post">
                            <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Full Name</label>
                            <input type="text" 
                            class="form-control" 
                            name="name" 
                            id="basic-default-fullname" 
                            placeholder="John Doe" 
                            />
                            </div>
                            
                            <div class="mb-3">
                            <label class="form-label" for="basic-default-email">Email</label>
                            <div class="input-group input-group-merge">
                                <input
                                type="text"
                                id="basic-default-email"
                                class="form-control"
                                name="email"
                                placeholder="john.doe"
                                aria-label="john.doe"
                                aria-describedby="basic-default-email2"
                                />
                                <span class="input-group-text" id="basic-default-email2">@example.com</span>
                            </div>

                            <div class="form-text">You can use letters, numbers & periods</div>
                            </div>
                            
                            <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Phone No</label>
                            <input
                                type="text"
                                id="basic-default-phone"
                                name="phone"
                                class="form-control phone-mask"
                                placeholder="658 799 8941"
                            />
                            </div>
                            <div class="mb-3">
                            <label class="form-label" for="basic-default-company">movie name</label>
                            <input type="text" 
                            class="form-control" 
                            name="movie_name" 
                            id="basic-default-company" 
                            placeholder="movie name" />
                            </div>
                            <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Number of Tickets</label>
                            <input type="text" 
                            class="form-control" 
                            name="num_of_tickets" 
                            id="basic-default-company" 
                            placeholder="number of tickets" />
                            </div>
                            <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Movie Time</label>
                            <input type="time" class="form-control" name="movie_time" id="basic-default-company" placeholder="mm/dd/yyy" />
                            </div>
                            <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Seat Number</label>
                            <input type="text" class="form-control" name="seat_number" id="basic-default-company" placeholder="seat number" />
                            </div>
                            <button type="submit" class="btn btn-primary" name="done">Book Now</button>
                        </form>
                        </div>
                    </div>
                    </div>
                    
                </div>
                </div>
                <!-- / Content -->

                

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

