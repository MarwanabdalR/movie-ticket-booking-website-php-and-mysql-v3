<?php
class HomeModel extends Model
{
    public $fname;
    public $femail;
    public $farea;
    public function finsert(){
        if(isset($_POST['fsubmit'])){
            $fname      =$_POST['fname'];
            $femail     =$_POST['femail'];
            $farea      =$_POST['farea'];
            
            
    
    $quray="INSERT INTO `feedbacking`( `name`, `email`, `feedback`) VALUES ('$fname','$femail','$farea')";
        
        if(!$quray){
            echo " quary is empty";
        }
        else{

        $fresult=mysqli_query($this->connection, $quray);  
        if(!$fresult){
            die("Couldn't insert");
        }
        else{
            echo "Successfully inserted";

        }
                }
            

        }
        
    }









    
// aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa













            
}
