<?php
include "login/_inc/connection.php";

include "layout/header.php";

$csql ="SELECT * FROM `country`";
$csr=mysqli_query($con,$csql);


?> 
      <section >
         <div class="banner-main">
            <img src="images/banner.jpg" alt="#"/>
            <div class="container">
               <div class="text-bg">
                  <h1> Travel <br><strong class="white">Assistant Tour</strong></h1>
                  <div class="button_section"> <a class="main_bt" href="#">Read More</a>  </div>
                  <div class="container">
                     <form class="main-form" action="search.php" method="get">
                        <h3>Find Your Destination</h3>
                        <div class="row">
                           <div class="col-md-9">
                              <div class="row">
                                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <label >Country</label>
                                    <select class="form-control" name="country" id="country">
                                       <option>---select country---</option>
                                       <?php   while($crow=mysqli_fetch_assoc($csr)){?>
                                       <option value="<?php echo $crow['id'];?>"><?php echo $crow["country_name"];?></option>

                                    <?php    }?>

                                    </select>
                                   </div>

 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <label >City</label>
                                    <select class="form-control" name="city" id="city">
                                       <option>---please select---</option>
                                      

                                    </select>
                                   </div>


                                 </div>
                               </div>
                           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                              <button type="Submit" class="btn btn-success btn-block">search</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about -->
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2>About  our travel assistant</h2>
                     <span> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="bg">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <div class="about-box">
                        <p> <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure thereThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there</span></p>
                        <div class="palne-img-area">
                           <img src="images/plane-img.png" alt="images">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a href="#">Read More</a>
         </div>
      </div>
      <!-- end about -->
      <!-- traveling -->
      <div id="travel" class="traveling">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2>Select Offers For Traveling</h2>
                     <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span> 
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><img src="icon/travel-icon.png" alt="icon"/></i>
                     <h3>Different Countrys</h3>
                     <p> going to use a passage of Lorem Ipsum, you need to be </p>
                     <div class="read-more">
                        <a  href="#">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><img src="icon/travel-icon2.png" alt="icon"/></i>
                     <h3>Mountains Tours</h3>
                     <p> going to use a passage of Lorem Ipsum, you need to be </p>
                     <div class="read-more">
                        <a  href="#">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><img src="icon/travel-icon3.png" alt="icon"/></i>
                     <h3>Bus Tours</h3>
                     <p> going to use a passage of Lorem Ipsum, you need to be </p>
                     <div class="read-more">
                        <a  href="#">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><img src="icon/travel-icon4.png" alt="icon"/></i>
                     <h3>Summer Rest</h3>
                     <p> going to use a passage of Lorem Ipsum, you need to be </p>
                     <div class="read-more">
                        <a  href="#">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end traveling -->
      <!--London -->
      <div class="London">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Weekend in Peshawar ,Pakistan</h2>
                     <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span> 
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="London-img">
               <figure><img src="images/London.jpg" alt="img"/></figure>
            </div>
         </div>
      </div>
      <!-- end London -->
      <!--Tours -->
      <div class="Tours">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>The Best Tours</h2>
                     <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span> 
                  </div>
               </div>
            </div>
            <section id="demos">
               <div class="row">
                  <div class="col-md-12">
                     <div class="owl-carousel owl-theme">
                        <div class="item">
                           <img class="img-responsive" src="images/1.jpg" alt="#" />
                           <h3>Holiday Tour</h3>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                        </div>
                        <div class="item">
                           <img class="img-responsive" src="images/2.jpg" alt="#" />
                           <h3>New York</h3>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                        </div>
                        <div class="item">
                           <img class="img-responsive" src="images/3.jpg" alt="#" />
                           <h3>London</h3>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                        </div>
                        <div class="item">
                           <img class="img-responsive" src="images/2.jpg" alt="#" />
                           <h3>Holiday Tour</h3>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div>
      <!-- end Tours -->
      <!-- Amazing -->
      <div class="amazing">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="amazing-box">
                     <h2>Amazing London Tour</h2>
                     <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there</span>
                     <a href="#">Book Now</a><a href="#">Get More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Amazing -->
      <!-- our blog -->
      <div id="blog" class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Blog</h2>
                     <span>Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span> 
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/blog-image0.jpg" alt="#"/>
                        <span>4 Feb 2019</span>
                     </figure>
                     <div class="travel">
                        <span>Post  By :  Travel  Agency</span> 
                        <p><strong class="Comment"> 06 </strong>  Comment</p>
                        <p><strong class="like">05 </strong>Like</p>
                     </div>
                     <h3>London Amazing Tour</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/blog-image.jpg" alt="#"/>
                        <span>10 Feb 2019</span>
                     </figure>
                     <div class="travel">
                        <span>Post  By :  Travel  Agency</span> 
                        <p><strong class="Comment"> 06 </strong>  Comment</p>
                        <p><strong class="like">05 </strong>Like</p>
                     </div>
                     <h3>London Amazing Tour</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end our blog -->
      <!-- footer -->
      <?php  include "layout/footer.php"; ?>