<?php
include('header.php');
?>


    <div class="row">
	 <div class="col col-lg-12">
	 <?php
	 if(isset($_GET['added'])){
		 ?>
	 <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success</strong>A new hotel has been added.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
	 <?php
	 }
	 ?>
	 
	  <table class="table table-striped">
	   <thead>
	    <tr>
		   <th scope="col">#</th>
		   <th scope="col">Name</th>
		   <th scope="col">Address</th>
		   <th scope="col">Contact</th>
		   <th scope="col">Action</th>
		      </tr>
		   </thead>
		   <tbody>
		       <?php
			      $hotels =$database->getRows("HOTEL_VIEW");
			     $count=0;
			    foreach($hotels as &$hotel) {
				  $count++;
				  $address =$hotel['HOTEL_STREET'].' '.$hotel['HOTEL_STREET_NO'].' , '.$hotel['HOTEL_POSTCODE'].' '.$hotel['CITY_NAME'];
			    ?>
		     <tr>
			 <th scope="col"><?php echo $count; ?></th>
			 <td><?php echo $hotel['HOTEL_NAME'];?></td>
			  <td><?php echo $address; ?></td>
			   <td><?php echo $hotel['HOTEL_PHONE'];?></td>
			   <td>
			   
			   <a href="view_hotel.php?id=<?php echo $hotel['HOTEL_ID']; ?>"btn class="btn btn-success">View</a>
				<a href="edit_hotel.php?id=<?php echo $hotel['HOTEL_ID']; ?>"btn  class="btn btn-warning">Edit</a>
			   <a href="process.php?action=deletehotel&id=<?php echo $hotel['HOTEL_ID']; ?>" class="btn btn-danger">Delete</a>
			   </td>
			 </tr>
			 <?php
			   }
			 ?>
			</tbody>
		   </table>
        </div>
</div>

	<?php
	include('bottom.php')
	?>