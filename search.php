<?php
include('header.php');
require_once('lib/database.php');


?>
	 
	    <table class="table table-striped">
	    <tr>
		   <th scope="col">#</th>
		   <th scope="col">Name</th>
		   <th scope="col">Address</th>
		   <th scope="col">Contact</th>
            <th scope="col">Street</th>
            <th scope="col">Email</th>
            <th scope="col">Website</th>
		      </tr>
         
            <tbody>
           <?php
                if (isset($_GET['city_or_hotel']))
                {
                    $search = $_GET['city_or_hotel'];
                    $connection = mysqli_connect("localhost","root","","hotel");
                   $sql="SELECT * FROM `hotel_view` WHERE `HOTEL_NAME` LIKE '%$search%' OR `CITY_NAME` LIKE '%$search%'";
                    $query = mysqli_query($connection, $sql);
                    while($result = mysqli_fetch_array($query))
                    {
                        ?>
                    <tr>
			 <th scope="col"><?php echo $result['HOTEL_ID']; ?></th>
			 <td><?php echo $result['HOTEL_NAME'];?></td>
			 <td><?php echo $result['HOTEL_POSTCODE'].' '.$result['CITY_NAME']; ?></td>
			 <td><?php echo $result['HOTEL_PHONE'];?></td>
             <td><?php echo $result['HOTEL_STREET'];?></td>
             <td><?php echo $result['HOTEL_EMAIL'];?></td>
             <td><?php echo $result['HOTEL_WEBSITE'];?></td>
			   <td>
         </tr>
                
                <?php
                
                    }
                }
                ?>
                </tbody>
                
		   </table>

	<?php
	include('bottom.php')
	?>