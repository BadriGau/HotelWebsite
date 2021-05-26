<?php
include('header.php');

?>
    <div class="row">
	 <div class="col col-lg-4">
	 <h1>Adding a new Hotel</h1>
	   <form action="process.php?action=addhotel" method="post" enctype="multipart/form-data">
	     <div class="form-group">
		   <label>Name</label>
		     <input type="text" class="form-control" name ="hotel_name" placeholder="Name......."/>
			</div>
          <div class="form-group">
		  <label>Description</label>
		     <textarea class="form-control" name ="hotel_desc" rows="5" required></textarea>
			 </div>
			 <div class="form-group">
            <label>Number of stars</label>
            <input type="number" class="form-control" name="hotel_stars" min="1" max="6" value="1" required>
           </div>
		   
		    <div class="form-group">
            <label>Phone Number</label>
            <input type="Phone" class="form-control" name="hotel_phone" placeholder="Phone...." required>
           </div>
		   
		    <div class="form-group">
		   <label>E-mail</label>
		     <input type="email" class="form-control" name ="hotel_email" placeholder="E-mail....." required>
			</div>
		    <div class="form-group">
		   <label>Website</label>
		     <input type="website" class="form-control" name ="hotel_website" placeholder="Website...." required>
			</div>
			  <div class="form-group">
		   <label>Street</label>
		     <input type="text" class="form-control" name ="hotel_street" placeholder="Street...." required>
			</div>
			  <div class="form-group">
		   <label>House No</label>
		     <input type="text" class="form-control" name ="hotel_street_no" placeholder="House number..." required>
			</div>
			  <div class="form-group">
		   <label>Postcode</label>
		     <input type="text" class="form-control" name ="hotel_postcode" placeholder="Postcode...." required>
			</div>
			  <div class="form-group">
		   <label>City</label>
		    <select class="form-control" name="hotel_city">
			 <?php
			 $cities =$database->getRows("CITY");
			 foreach($cities as $city){
				 echo'<option value="'.$city['CITY_ID'].'">'.$city['CITY_NAME'].'</option>';
			 }
			 ?>
			 </select>
			</div>
			
			<div class="form_group">
			<label>Images</label>
			<input type="file" class="form-control-file" name="hotel_images[]" multiple>
			</div>
          <button type="submit" class="btn btn-success">Submit</button>	
        </form>	
    </div>
            </div>	  
		     
		   

	<?php
	include('bottom.php')
	?>