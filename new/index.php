<?php include'layouts/header.php'?>
    <?php 
      include '../config/call.php';

      $newss = getAllNews($conn);
?>
    <div class="slider_area">
      <div class="slider">
        <ul class="bxslider">
          <?php
             foreach ($newss as $key => $news) {
    ?>
          <li><img src="../admin/newsuploads/userimage/<?php echo $news['image'];?>" alt="" width="650px" title="<?php echo $news['title'];?>" /></li>
              <?php 
  }?>
        </ul>
      </div>
    </div>
    <div class="content_area">
      <div class="main_content floatleft">
        <div class="left_coloum floatleft">
          <div class="single_left_coloum_wrapper">
            <h2 class="title">from   around   the   world</h2>
            <a class="more" href="#">more</a>
            <?php
             foreach ($newss as $key => $news) {
    ?>
            <div class="single_left_coloum floatleft"> <img src="../admin/newsuploads/userimage/<?php echo $news['image'];?>" alt="" />
              <h3><?php echo $news['title'];?></h3>
              <p><span id="dots" ></span><span id="more" ></span></p>
              <a class="readmore" onclick="myFunction()"  href="newspage.php?id=<?php echo $news['id'];?>">read more</a> </div>
            <?php }?>
            
          </div>
          <div class="single_left_coloum_wrapper">
            <h2 class="title">latest  articles</h2>
            <a class="more" href="newspage.php">more</a>
            <?php
             foreach ($newss as $key => $news) {
    ?>
            <div class="single_left_coloum floatleft"> <img src="../admin/newsuploads/userimage/<?php echo $news['image'];?>" alt="" />
              <h3><?php echo $news['title'];?></h3>
              <p><span id="dots" ></span><span id="more"></span></p>
              <a class="readmore" onclick="myFunction()"  href="newspage.php?id=<?php echo $news['id'];?>">read more</a> </div>
            <?php }?>
          </div>
          <?php
          $photos = getAllgallery($conn);
          ?>
          <div class="single_left_coloum_wrapper gallery">
            <h2 class="title">gallery</h2>
            <a class="more" href="#">more</a> 
            <?php foreach ($photos as $key => $photo) {
            ?>
             <img src="../admin/photouploads/<?php echo $photo['image'];?>" alt="" />
             <?php 
           }?>
         </div>
            <?php ?>
        </div>
        <div class="right_coloum floatright">
          <div class="single_right_coloum">
            <h2 class="title">Publish news</h2>
            <ul>
              <?php
             foreach ($newss as $key => $news) {
    ?>
              <li>
                <div class="single_cat_right_content">
                  <h3><b><i><u><?php echo $news['title'];?></b></i></u></h3>
                   <p><span id="dots" ></span><span  id="more"></span></p>
                   <h3>publisher :<?php echo $news['publisher'];?></h3>
                  <p class="single_cat_right_content_meta" onclick="myFunction()" ><a href="newspage.php?id=<?php echo $news['id'];?>"><span>read more</span></a> <?php echo $news['date']?></p>
                </div>
              </li>
              <?php
            }
    ?>
            </ul>
            <a class="popular_more" href="#">more</a> </div>
          <div class="single_right_coloum">
            
          </div>
        </div>
      </div>
      <div class="sidebar floatright">
        <div class="single_sidebar"> <img src="images/add1.png" alt="" /> </div>
        <div class="single_sidebar">
          <div class="news-letter">
    <?php
     if(isset($_POST['savebtn']))
     {
 
    //  $_POST['image'] = uploadFile('newsuploads/userimage',$_FILES['file']);
      if(insertsubscriber($conn,$_POST))
      {
        redirection('index.php');
      }
      
    }
?>
            <h2>Subscriber</h2>
            <form  method="POST" enctype="multipart/form-data">
              <input type="text" name="name" class="form-control" placeholder="Name" />
              <input type="email" name="email" class="form-control" placeholder="Email Address" />
              <input type="submit" name="savebtn" class="form-control"  />
            </form>
            <p class="news-letter-privacy">We do not spam. We value your privacy!</p>
          </div>
        </div>
        <div class="single_sidebar">
          <div class="popular">
            <h2 class="title">Popular</h2>
            <a class="popular_more">more</a> </div>
        </div>

        <div class="single_sidebar"> <img src="images/add1.png" alt="" /> 
        <div class="single_sidebar"> <img src="images/4.jpg" alt="" />
          <h2 class="title">ADD</h2>
          <img src="images/add2.png" alt="" /> 
        </div>
        </div>
      </div>
    </div><hr>
    <?php
     if(isset($_POST['savebtn']))
     {
 
    //  $_POST['image'] = uploadFile('newsuploads/userimage',$_FILES['file']);
      if(insertcomment($conn,$_POST))
      {
        redirection('index.php');
      }
      
    }
?>
    <form class="row contact_form"  method="POST" id="contactForm" enctype="multipart/form-data" >
      <h1>Comment</h1>
      <p><b><i>if u have any kind of comment plz Comment down.</b></i></p>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                </div><br>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
                                </div>
            
                                <div class="form-group">
                                    <textarea class="form-control" name="comment" id="message" rows="1" placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" name="savebtn" class="btn submit_btn">Send Message</button>
                            </div>
                        </form>
                      
    <div class="footer_top_area">
      <div class="inner_footer_top"> <img src="images/add3.png" alt="" /> </div>
    </div>
    
  </div>
</div>
<style>
#more {display: none;}
</style>
<script type="text/javascript" src="assets/js/jquery-min.js"></script> 
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script> 
<script type="text/javascript" src="assets/js/selectnav.min.js"></script> 
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
</body>
</html>