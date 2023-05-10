<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="book_cinema";

$connect= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$select = "SELECT * FROM `movies`";
$res = mysqli_query($connect,$select);
// $message = '';
$select2 = "SELECT * FROM `users`";
$res2 = mysqli_query($connect,$select2);

$select3 = "SELECT * FROM `cinemas`";
$res3 = mysqli_query($connect,$select3);

$select4 = "SELECT * FROM `movie_cinemas`";
$res4 = mysqli_query($connect,$select4);



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

<div class="container">

    <div class="card-container">

        <div class="front">
            <div class="image">
            <img src="<?= IMG; ?>chip.png"  />
            <img src="<?= IMG; ?>visa.png"  />
                    </div>
            <div class="card-number-box">################</div>
            <div class="flexbox">
                <div class="box">
                    <span>card holder</span>
                    <div class="card-holder-name">full name</div>
                </div>
                <div class="box">
                    <span>expires</span>
                    <div class="expiration">
                        <span class="exp-month">mm</span>
                        <span class="exp-year">yy</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="<?= IMG; ?>visa.png"  />
            </div>
        </div>

    </div>

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
                    <!--  <h5 class="mb-0">Movie Booking Form</h5>-->
                        </div>
                        <div class="card-body">
        
<?php
    

    // Show the ticket form
    
    echo '</form>';
    
?>
                        <form method="post">
                        <div class="inputBox">
            <span>card number</span>
            <input required type="text" name="card_number" maxlength="16" class="card-number-input">
        </div>
        <div class="inputBox">
            <span> Name On Card</span>
            <input required type="text" name="card_holder" class="card-holder-input">
        </div>
        <div class="flexbox">
            <div class="inputBox">
                <span>expiration mm</span>
                <select required name="month" id="" class="month-input">
                    <option value="month" selected disabled>month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="inputBox">
                <span>expiration yy</span>
                <select required name="year" id="" class="year-input">
                    <option value="year" selected disabled>year</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div class="inputBox">
                <span>cvv</span>
                <input required type="text" name="cvv" maxlength="4" class="cvv-input">
            </div>
        </div>
        
                            <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Full Name</label>
                            <input type="text" 
                            required
                            class="form-control" 
                            name="name" 
                            id="basic-default-fullname" 
                            placeholder="John Doe" 

    <?php if ($res2) {
  		while ($row2 = mysqli_fetch_assoc($res2)) {
  			
  	?>

                            value="<?php echo $row2['name']; ?>"



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


                                
                                value="<?php echo $row2['email']; ?>"

                     



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
                                value="<?php echo $row2['mobile_number']; ?>"

                            />



       <?php
	}
  	}

  	 ?>


                            </div>
                            
                        
                            <!-- <label class="form-label" for="basic-default-company">movie name</label>
                            <select name="movie_name" required >
                                <option selected disabled>choose movie you need</option>
                                <option value="The Wood">The Wood</option>
                                <option value="Bloodshot">Bloodshot</option>
                                <option value="Morbius">Morbius</option>
                                <option value="The House">The House</option>
                                <option value="Uncharted">Uncharted</option>

                            </select> -->







                            <div class="form-group">
                                <label for="categories">Movies</label>
                                <select id="categories" name="movie_name" class="form-control" required>
                                            <option>select ur movie🧐</option>
                                            <?php foreach($res as $key => $value){?>
                                            <option 
                                                value="<?=$value['name'];?>"><?=$value['name'];?>
                                            </option>
                                            <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="categories">Cinema</label>
                                <select id="categories" name="cinema_name" class="form-control" required>
                                            <option>select ur cinema</option>
                                            <?php foreach($res3 as $key3 => $value1){?>
                                            <option 
                                                value="<?=$value1['name'];?>"><?=$value1['name'];?>
                                            </option>
                                            <?php } ?>
                                </select>
                            </div>

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


                            <div class="form-group">
                                <label for="categories">Movie Time</label>
                                <select id="categories" name="movie_time" class="form-control" required>
                                            <option>select ur Time</option>
                                            <?php foreach($res4 as $key => $value){?>
                                            <option 
                                                value="<?=$value['movie_time'];?>"><?=$value['movie_time'];?>
                                            </option>
                                            <?php } ?>
                                </select>
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
                    
                    <input type="submit" value="submit" name="done" class="submit-btn">

                    





<?php 
if (isset($_POST['done'])) {
    // Get the submitted data
    $name = $_POST['name'];
    $email = $_POST['movie_name'];
    $subject = $_POST['cinema_name'];
    $message = $_POST['num_of_tickets'];
echo '<form id="ticket-form">';
    echo '<label>Name: ' . $name . '</label><br>';
    echo '<label>Movie: ' . $email . '</label><br>';
    echo '<label>Cinema: ' . $subject . '</label><br>';
    echo '<label>Number Of Ticket: ' . $message . '</label><br>';
}


?>








<!-- <form method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name"><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email"><br>

                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject"><br>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message"></textarea><br>
<button type="submit" name="submit">Submit Ticket</button>
                    </form> -->











                         <!--   <button type="submit" class="btn btn-primary" required name="done"  > Book Now</button>-->
                        </form>
                        </div>
                    </div>
                    </div>
         
                    
                </div>
                </div>
                <!-- / Content -->













                













</div>    
    





<script>

document.querySelector('.card-number-input').oninput = () =>{
    document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
}

document.querySelector('.card-holder-input').oninput = () =>{
    document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
}

document.querySelector('.month-input').oninput = () =>{
    document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
}

document.querySelector('.year-input').oninput = () =>{
    document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
}

document.querySelector('.cvv-input').onmouseenter = () =>{
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
}

document.querySelector('.cvv-input').onmouseleave = () =>{
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
}

document.querySelector('.cvv-input').oninput = () =>{
    document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
}









$(document).ready(function() {
  $('form').submit(function(event) {
    // Prevent default form submission behavior
    event.preventDefault();

    // Show the ticket form
    $('#ticket-form').show();
  });
});






</script>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




<style>

.container{
    display: flex;
    align-items: center;
    flex-flow: column;
    

}

.container form{
   /* background: #fff;*/
    border-radius: 5px;
    box-shadow: 0 10px 15px rgba(0,0,0,.1);
    padding: 20px;
    width: 600px;
    padding-top: 160px;
}

.container form .inputBox{
    margin-top: 20px;
}

.container form .inputBox span{
    display: block;
    color:#999;
    padding-bottom: 5px;
}

.container form .inputBox input,
.container form .inputBox select{
    width: 100%;
    padding: 10px;
    border-radius: 10px;
    border:1px solid rgba(0,0,0,.3);
    color:#444;
}

.container form .flexbox{
    display: flex;
    gap:15px;
}

.container form .flexbox .inputBox{
    flex:1 1 150px;
}

.container form .submit-btn{
    width: 100%;
    background:linear-gradient(45deg, blueviolet, deeppink);
    margin-top: 20px;
    padding: 10px;
    font-size: 20px;
    color:#fff;
    border-radius: 10px;
    cursor: pointer;
    transition: .2s linear;
}

.container form .submit-btn:hover{
    letter-spacing: 2px;
    opacity: .8;
}

.container .card-container{
    margin-bottom: -150px;
    position: relative;
    height: 250px;
    width: 400px;
}

.container .card-container .front{
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0; left: 0;
    background:linear-gradient(45deg, blueviolet, deeppink);
    border-radius: 5px;
    backface-visibility: hidden;
    box-shadow: 0 15px 25px rgba(0,0,0,.2);
    padding:20px;
    transform:perspective(1000px) rotateY(0deg);
    transition:transform .4s ease-out;
    z-index: 1;
}

.container .card-container .front .image{
    display: flex;
    align-items:center;
    justify-content: space-between;
    padding-top: 10px;
}

.container .card-container .front .image img{
    height: 50px;
}

.container .card-container .front .card-number-box{
    padding:30px 0;
    font-size: 22px;
    color:#fff;
}

.container .card-container .front .flexbox{
    display: flex;
}

.container .card-container .front .flexbox .box:nth-child(1){
    margin-right: auto;
}

.container .card-container .front .flexbox .box{
    font-size: 15px;
    color:#fff;
}

.container .card-container .back{
    position: absolute;
    top:0; left: 0;
    height: 100%;
    width: 100%;
    background:linear-gradient(45deg, blueviolet, deeppink);
    border-radius: 5px;
    padding: 20px 0;
    text-align: right;
    backface-visibility: hidden;
    box-shadow: 0 15px 25px rgba(0,0,0,.2);
    transform:perspective(1000px) rotateY(180deg);
    transition:transform .4s ease-out;
    z-index: 1;
}

.container .card-container .back .stripe{
    background: #000;
    width: 100%;
    margin: 10px 0;
    height: 50px;
}

.container .card-container .back .box{
    padding: 0 20px;
}

.container .card-container .back .box span{
    color:#fff;
    font-size: 15px;
}

.container .card-container .back .box .cvv-box{
    height: 50px;
    padding: 10px;
    margin-top: 5px;
    color:#333;
    background: #fff;
    border-radius: 5px;
    width: 100%;
}

.container .card-container .back .box img{
    margin-top: 30px;
    height: 30px;
}    
</style>

                

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

