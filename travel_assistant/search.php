<?php include 'login/_inc/connection.php';
include 'login/_inc/function.php';
 include 'layout/header.php';
 $city= selectSingleFromTable("cities","city_id",$_GET['city']);
$hotels=selectMultipleFromTable("hotels","city_id",$_GET['city']);


?>


   <div class="Tours">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>The Best Hotel in  <strong><?php  echo $city["city_name"];?>

                     </strong></h2>
                  </div>
               </div>
            </div>
            <section id="demos">
               <div class="row">
                  <div class="col-md-12">
                     <div class="owl-carousel owl-theme">
                      <?php foreach($hotels as $h):?>
                        <div class="item">
                           <img class="img-responsive" src="images/<?php echo $h['image'];?>" alt="#" />
                           <h3><?php echo $h['hotel_name'];?></h3>
                           <p><strong>Price/ Night:</strong> <?php echo number_format($h['room_price']);?><br/>
                              <em><?php echo $h['hotel_address'];?></em><br/>
                              <strong>Email</strong><?php echo $h['email'];?>, <strong>Phone:</strong><?php echo $h['phone'];?>
                              <br/></p>
                        </div>
                    <?php endforeach;?>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div>
     

      <?php  include "layout/footer.php"; ?>