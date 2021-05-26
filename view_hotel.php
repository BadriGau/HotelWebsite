<?php
include('header.php');

if(empty($_GET['id']) || !is_numeric($_GET['id']) || $_GET['id']< 1) {
	echo '<h1>Error!</h1>';
	die();
}
$id = $_GET['id'];
$where['HOTEL_ID'] = '='.$id;
$where1['IMAGE_HOTEL'] = '='.$id;
$hotel = $database->getRow("HOTEL_VIEW", "*",$where);
$images =$database->getRows("IMAGE","*",$where1);
$address = $hotel ['HOTEL_STREET'].' '.$hotel['HOTEL_STREET_NO'].' '.$hotel['HOTEL_NAME'].' '.$hotel['HOTEL_POSTCODE'];

?>
    <div class="row">
	 <div class="col col-lg-12">
	 <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php
        $count =0;
        foreach($images as &$image){
            if($count==0){
                ?>
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        
        <?php
            }
            else 
            {
                ?>
      <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $count; ?>" class="active"></li>
          <?php
            }
            $count++;
        }
        ?>
      </ol>
      
      <div class="carousel-inner">
          <?php
          $count=0;
          foreach($images as &$image){
              $count++;
            if($count==1){
                $active=' active';
            }
              else
              {
                  $active='';
              }
                ?>
     
      <div class="carousel-item <?php echo $active; ?>">
        <img src="<?php echo $image['IMAGE_FILE'];?>" class="d-block w-100" alt="hotel.img">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $hotel ["HOTEL_NAME"]; ?></h5>
        </div>
      </div>
    <?php
          } ?>
      </div>        
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
 
 </div>
</div> 

 </div>
</div> 
 <div class="row">
	 <div class="col col-lg-9">
	<h2>Discription :</h2>
	<p><?php echo nl2br($hotel['HOTEL_DESCRIPTION']);?></p>
	</div>
	<div class="col col-lg-3">
	<h3>Contact :</h3>
	<b>Phone: </b><?php echo $hotel['HOTEL_PHONE']; ?><br/>
	<b>E-mail: </b><a href="mailto:<?php echo $hotel['HOTEL_EMAIL']; ?>"><?php echo $hotel['HOTEL_EMAIL']; ?></a><br/>
	<b>Website: </b><?php echo $hotel['HOTEL_WEBSITE'] ?><br/>
	<b>Address: </b><?php echo $hotel['HOTEL_PHONE']; ?>
	</div>
</div>
	

<div class="row">
    <?php
         foreach($images as &$image){
         ?>
         
<div class="card" style="width: 18rem;">
  <img src="<?php echo $image['IMAGE_FILE'];?>" class="card-img-top" alt="hotel.img">
  <div class="card-body">
    <a href="Process.php?action=deleteimage&id=<?php echo $image['IMAGE_ID'];?>" class="btn btn-danger">Delete</a>
  </div>
</div>
 <?php }
    ?>
 </div>
	<?php
	include('bottom.php')
	?>