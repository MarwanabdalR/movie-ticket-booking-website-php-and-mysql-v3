<?php
    
class BookModel extends Model
{
    public $fullname;
    public $email;
    public $phone_number;
    public $movie_name;
    public $number_of_tickets;
    public $movie_time;
    public $seat_number;
    public function imo(){
        
    }
    public function insert(){
        if(isset($_POST['done'])){
            $fullname=$_POST['name'];
              $email=$_POST['email'];
              $phone_number=$_POST['phone'];
              $movie_name=$_POST['movie_name'];
              $number_of_tickets=$_POST['num_of_tickets'];
              $movie_time=$_POST['movie_time'];
              $seat_number=$_POST['seat_number'];
            
            
    
    $quray="INSERT INTO `booking`( `name`, `email`, `phone`, `movie name`, `number of tickets`, `movie time`, `seat number`) VALUES ('$fullname','$email','$phone_number','$movie_name','$number_of_tickets','$movie_time','$seat_number')";
        
        if(!$quray){
            echo " quary is empty";
        }
        else{
           
$result=mysqli_query($this->connection, $quray);  
if(!$result){
    die("Couldn't insert");
}
else{
    echo "Successfully inserted";

}
        }
    

}
    }

    
}
