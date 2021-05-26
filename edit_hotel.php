<?php
include('header.php');

if(empty($_GET['id']) || !is_numeric($_GET['id']) || $_GET['id']< 1) {
	echo '<h1>Error!</h1>';
	die();
}
$id = $_GET['id'];
$where['HOTEL_ID'] = '='.$id;
$hotel = $database->getRow("HOTEL", "*",$where);
?>
    <div class="row">
	 <div class="col col-lg-4">
	 <h1>Editing a Hotel</h1>
	   <form action="process.php?action=edithotel"method="post">
	     <input type="hidden" name ="hotel_id" value="<?php echo $hotel['HOTEL_ID']; ?>"/>
	     <div class="form-group">
		   <label>Name</label>
		     <input type="text" class="form-control" name ="hotel_name" placeholder="Name....." value="<?php echo $hotel['HOTEL_NAME']; ?>" required>
			</div>
          <div class="form-group">
		  <label>Description</label>
		     <textarea class="form-control" name ="hotel_desc" rows="5" required><?php echo $hotel['HOTEL_DESCRIPTION']; ?></textarea>
			 </div>
			 <div class="form-group">
            <label>Number of stars</label>
            <input type="number" class="form-control" name="hotel_stars" min="1" max="6" value="<?php echo $hotel['HOTEL_STARS']; ?>" required>
           </div>
		   
		    <div class="form-group">
            <label>Phone Number</label>
            <input type="Phone" class="form-control" name="hotel_phone" placeholder="Phone...." value="<?php echo $hotel['HOTEL_PHONE']; ?>" required>
           </div>
		   
		    <div class="form-group">
		   <label>E-mail</label>
		     <input type="email" class="form-control" name ="hotel_email" placeholder="E-mail....." value="<?php echo $hotel['HOTEL_EMAIL']; ?>" required>
			</div>
		    <div class="form-group">
		   <label>Website</label>
		     <input type="website" class="form-control" name ="hotel_website" placeholder="Website...." value="<?php echo $hotel['HOTEL_WEBSITE']; ?>" required>
			</div>
			  <div class="form-group">
		   <label>Street</label>
		     <input type="text" class="form-control" name ="hotel_street" placeholder="Street...." value="<?php echo $hotel['HOTEL_STREET']; ?>" required>
			</div>
			  <div class="form-group">
		   <label>House No</label>
		     <input type="text" class="form-control" name ="hotel_street_no" placeholder="House number..." value="<?php echo $hotel['HOTEL_STREET_NO']; ?>" required>
			</div>
			  <div class="form-group">
		   <label>Postcode</label>
		     <input type="text" class="form-control" name ="hotel_postcode" placeholder="Postcode...." value="<?php echo $hotel['HOTEL_POSTCODE']; ?>" required>
			</div>
			  <div class="form-group">
		   <label>City</label>
		    <select class="form-control" name="hotel_city">
			 <?php
			 $cities =$database->getRows("CITY");
			 foreach($cities as $city){
				 $selected= '';
				 if ($city['CITY_ID'] == $hotel['HOTEL_CITY']){
					 $selected = ' selected';
				 }
				 echo'<option value="'.$city['CITY_ID'].'"'.$selected.'>'.$city['CITY_NAME'].'</option>';
			 }
			 ?>
			 </select>
			</div>
          <button type="submit" class="btn btn-success">Submit</button>	
        </form>	
    </div>
            </div>	  
		     
		   

	<?php
	include('bottom.php')
	?>