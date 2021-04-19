<?php
	//Connection
	$servername = '127.0.0.1:3307';
	$username = 'root';
	$password = '';
	$dbname = 'banking';

	$conn = mysqli_connect($servername, $username, $password, $dbname);
function getCustomers(){
        global $conn;
        $get_customers = "select * from customer";
        $run_customers = mysqli_query($conn,$get_customers);

        while($customer = mysqli_fetch_array($run_customers)) {
            $ID = $customer['ID'];
            $Name = $customer['Name'];
            $Email = $customer['Email'];
            $Current_Balance = $customer['Current_Balance'];
            echo"
                <tr>
                    <td>$ID</td>
                    <td><a href='detail.php?ID=$ID'>$Name</a></td>
                    <td>$Email</td>
                    <td>$Current_Balance</td>
                    </tr>
            ";
        }
     }   
?>