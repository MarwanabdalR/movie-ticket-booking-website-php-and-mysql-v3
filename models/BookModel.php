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
    public function insert(){
        if(isset($_POST['done'])){
            $fullname=$_POST['name'];
              $email=$_POST['email'];
              $phone_number=$_POST['phone'];
              $movie_name=$_POST['movie_name'];
              $number_of_tickets=$_POST['num_of_tickets'];
              $movie_time=$_POST['movie_time'];
              $seat_number=$_POST['seat_number'];
            $food=$_POST['food'];
            $food2=implode(',',$food);
            $card_num=$_POST['card_number'];
            $card_holder=$_POST['card_holder'];
            $expiration_mm=$_POST['month'];
            $expiration_yy=$_POST['year'];
            $cvv=$_POST['cvv'];
          
    
    $query="INSERT INTO `booking` ( `name`, `email`, `phone`, `movie name`, `number of tickets`, `movie time`, `seat number`,`food&drinks`, `card number`, `card holder`, `expiration mm`, `expiration yy`, `cvv`) VALUES ('". $fullname ."','".$email."','".$phone_number."','".$movie_name."','".$number_of_tickets."','" .$movie_time."','".$seat_number."','".$food2."','".$card_num."','".$card_holder."','".$expiration_mm."','".$expiration_yy."','".$cvv."')";
        
$result=mysqli_query($this->connection, $query);  
if(!$result){
    die("Couldn't insert");
}
else{
    echo "Successfully inserted";

}
        
    


    }
    
}

    
}
?>