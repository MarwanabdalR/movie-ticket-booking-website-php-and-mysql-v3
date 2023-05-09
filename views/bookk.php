
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
        

                        <form method="post" >
                            <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Full Name</label>
                            <input type="text" 
                            required
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
                                required
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
                                type="tel"
                                required
                                id="basic-default-phone"
                                name="phone"
                                class="form-control phone-mask"
                                placeholder="658 799 8941"
                            />
                            </div>
                            
                          
                            <label class="form-label" for="basic-default-company">movie name</label>
                            <select name="movie_name" required >
                                <option selected disabled>choose movie you need</option>
                                <option value="The Wood">The Wood</option>
                                <option value="Bloodshot">Bloodshot</option>
                                <option value="Morbius">Morbius</option>
                                <option value="The House">The House</option>
                                <option value="Uncharted">Uncharted</option>

                            </select>
                            <style>
                                select{
                         outline: 0;
                         box-shadow: none;
                        border: 0;
                        background: #dfdfdf;
                        width: 100%;
                        height: 49px;
                        border-radius: 5px;
                        font-size: 17px;
                        font-weight: 4  00;
                        margin-top: 0;
                        margin-bottom: 20px;
                                }
                                option{
                                    color :black;
                                    font-size: 23px;
                                }
                            </style>
                            <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Number of Tickets</label>
                            <input type="number"
                            required 
                            class="form-control" 
                            name="num_of_tickets" 
                            id="basic-default-company" 
                            placeholder="number of tickets" />
                            </div>
                            <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Movie Time</label>
                            <input type="time" class="form-control" name="movie_time" required id="basic-default-company" placeholder="hours:minutes" />
                            </div>
                            <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Seat Number</label>
                            <input type="text" class="form-control" required name="seat_number" id="basic-default-company" placeholder="seat number" />
                            </div>
                          
                            <label class="che" for="basic-default-company">choose food or drinks if you want </label>
                    <div class="check">
<input name="food[]" value="Popcorn (Small)" type="checkbox" class="cheko2" id="">
<label class="cheko" for="">Popcorn (Small)  <span>$2</span></label>
<input name="food[]" value="Popcorn (Medium)" type="checkbox" class="cheko2" id="">
<label class="cheko" for="">Popcorn (Medium) <span>$2.5</span></label>
<input name="food[]" value="Popcorn (Larg)" type="checkbox" class="cheko2" id="">
<label class="cheko" for="">Popcorn (Larg) <span>$3</span></label>
<input name="food[]" value="cola" type="checkbox" class="cheko2" id="">
<label class="cheko" for="">cola <span>$3</span></label>
<input name="food[]" value="7up" type="checkbox" class="cheko2" id="">
<label class="cheko"  for="">7up <span>$3</span></label>
<input name="food[]" value="Miranda" type="checkbox" class="cheko2" id="">
<label class="cheko" for="">Miranda  <span>$3</span></label>
                    </div>
                    <style>
.check{
    display:grid;
    justify-items: start;

}
.che{
    font-size: 26px;
    font-weight: bold;
    text-shadow: 10px 5px 10px;
}
.check .cheko{
    font-size: 20px;
    font-weight: 300;
    color: black;
    font-style: italic;
}
.check .cheko2{
    width: 20px;
    height: 18px;
}
                    </style>

                            <button type="submit" class="btn btn-primary" required name="done">Book Now</button>
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

