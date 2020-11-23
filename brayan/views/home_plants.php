<?php
function scroll_style(){
    echo '
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../assets/css/docs.theme.min.css">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.theme.default.min.css">


';
}
function scroll_script(){
    echo'
    
    <script src="../assets/vendors/jquery.min.js"></script>
    <script src="../assets/owlcarousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      var owl = $(".owl-carousel");
      owl.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 1500,
        autoplayHoverPause: true
      });
    })
  </script>
    ';
}

function scroll_body(){
    echo '
    
    <div class="">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src=""></img>
        </div>
        <div class="item">
          <h4>2</h4>
        </div>
        <div class="item">
          <h4>3</h4>
        </div>
        <div class="item">
          <h4>4</h4>
        </div>
        <div class="item">
          <h4>5</h4>
        </div>
        <div class="item">
          <h4>6</h4>
        </div>
        <div class="item">
          <h4>7</h4>
        </div>
        <div class="item">
          <h4>8</h4>
        </div>
        <div class="item">
          <h4>9</h4>
        </div>
        <div class="item">
          <h4>10</h4>
        </div>
        <div class="item">
          <h4>11</h4>
        </div>
        <div class="item">
          <h4>12</h4>
        </div>
      </div>
    ';
}

?>

<!--                                help
.col- (extra small devices - screen width less than 576px)
.col-sm- (small devices - screen width equal to or greater than 576px)
.col-md- (medium devices - screen width equal to or greater than 768px)
.col-lg- (large devices - screen width equal to or greater than 992px)
.col-xl- (xlarge devices - screen width equal to or greater than 1200px)--> 



