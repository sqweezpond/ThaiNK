    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/vandor/OwlCarousel/dist/owl.carousel.min.js"></script>
  


<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
     loop:true,
     margin:10,
     nav:true,
     responsiveClass:true,
     responsive:{
           0:{
              items:2,
              nav:true
          },
          600:{
              items:3,
              nav:true
          },
          1000:{
              items:4,
              nav:true,
              loop:true
          }
       }
    })
</script>
