     
     </div>
     <br><br><br><br>
     <nav class="navbar navbar-inverse navbar-fixed-bottom" style="background-color:#082843">
  <div class="container-fluid">

  <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar1" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
              </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar1" >
    <ul class="nav navbar-nav" style="position: absolute;left: 30%;right:30%">
      <li><a href="<?php echo base_url(); ?>posts/questions" >Ask A Question</a></li>
      <li><a href="<?php echo base_url(); ?>forum">Forum<span class="badge">new</span></a></li>
      <li><a href="#">Feedback</a></li>
      <li><a href="#">Contact Us</a></li>
       <li><a class="up-arrow" href="#" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a></li>
    </ul>
    </div>
  </div>
  </nav>

  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip(); 
     
      $(".navbar a, footer a[href='#']").on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;

          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){  
            window.location.hash = hash;
          });
        } 
      });
    })
  </script>      
  </body>
</html>