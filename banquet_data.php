<?php
$vendor_name=$_POST["vendor_name"];
$banquet_hall_name=$_POST["banquet_hall_name"];
$location=$_POST["location"];
$address_locality=$_POST["address_locality"];
$address_district=$_POST["address_district"];
$address_state=$_POST["address_state"];
$address_pin=$_POST["address_pin"];
$size=$_POST["size"];
$guest_capacity=$_POST["guest_capacity"];
$no_of_halls=$_POST["no_of_halls"];
$no_of_rooms=$_POST["no_of_rooms"];
$no_of_lawns=$_POST["no_of_lawns"];
$parking=$_POST["parking"];
$catering=$_POST["catering"];
$decorative=$_POST["decorative"];
$event_type=$_POST["event_type"];
$pricing_by_day_basis=$_POST["pricing_by_day_basis"];
$pricing_by_event_basis=$_POST["pricing_by_event_basis"];
$picture1=$_POST["picture1"];
$picture2=$_POST["picture2"];
$picture3=$_POST["picture3"];
$picture4=$_POST["picture4"];
$contact_person_name=$_POST["contact_person_name"];
$contact_person_mobile=$_POST["contact_person_mobile"];

echo "vendor_name = ".$vendor_name;
echo "banquet_hall_name = ".$banquet_hall_name;          
echo "location = ".$location;         
echo "address_locality = ".$address_locality;         
echo "address_district = ".$address_district;         
echo "address_state = ".$address_state;         
echo "address_pin".$address_pin;        
echo "size = ".$size;
echo "guest_capacity = ".$guest_capacity;           
echo "no_of_halls = ".$no_of_halls;           
echo "no_of_rooms = ".$no_of_rooms;           
echo "no_of_lawns = ".$no_of_lawns;            
echo "parking = ".$parking;            
echo "catering = ".$catering;             
echo "decorative = ".$decorative;             
echo "event_type = ".$event_type;            
echo "pricing_by_day_basis = ".$pricing_by_day_basis;       
echo "pricing_by_event_basis = ".$pricing_by_event_basis;     
echo "picture1 = ".$picture1;                  
echo "picture2 = ".$picture2;                   
echo "picture3 = ".$picture3;                  
echo "picture4 = ".$picture4;                  
echo "contact_person_name = ".$contact_person_name  ;        
echo "contact_person_mobile = ".$contact_person_mobile;


// Database configuration
$servername = "localhost";  // Server name (default is 'localhost' for XAMPP)
$username = "root";         // Default username for XAMPP
$password = "";             // Default password (empty in XAMPP)
$dbname = "hall_management";        // Name of your database


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `owner_hall`(`id`, `vendor_name`, `banquet_hall_name`, `location`, `address_locality`, `address_district`, `address_state`, `address_pin`, `size`, `guest_capacity`, `no_of_halls`, `no_of_rooms`, `no_of_lawns`, `parking`, `catering`, `decorative`, `event_type`, `pricing_by_day_basis`, `pricing_by_event_basis`, `picture1`, `picture2`, `picture3`, `picture4`, `contact_person_name`, `contact_person_mobile`) 
VALUES (NULL,'".$vendor_name."','".$banquet_hall_name."','".$location."','".$address_locality."','".$address_district."','".$address_state."','".$address_pin."','".$size."','".$guest_capacity."','".$no_of_halls."','".$no_of_rooms."','".$no_of_lawns."','".$parking."','".$catering."','".$decorative."','".$event_type."','".$pricing_by_day_basis."','".$pricing_by_event_basis."','".$picture1."','".$picture2."','".$picture3."','".$picture4."','".$contact_person_name."','".$contact_person_mobile."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
