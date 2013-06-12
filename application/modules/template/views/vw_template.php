<html>
<!-- //LOCATION: afc/home 
-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Foundation 4</title>

  <link rel="stylesheet" href="comp/stylesheets/normalize.css" />

  <link href="comp/stylesheets/app.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
  <link href="comp/stylesheets/screen.css" media="screen, projector, print" rel="stylesheet" type="text/css" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="comp/javascripts/foundation.min.js"></script>
  <script src="comp/javascripts/vendor/custom.modernizr.js"></script>



  <link href="<?php echo base_url();?>comp/stylesheets/screen.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>comp/stylesheets/normalize.css" media="screen, projector, print" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="<?php echo base_url(); ?>comp/javascripts/jquery-1.9.1.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> 
  <script type="text/javascript" src="<?php echo base_url(); ?>comp/javascripts/script.js"></script>


  <title>Chicago Ukrainan Village Real Estate Company</title>
</head>
<body class anti-aliased>
    <div id="inline">
    <a class="close-reveal-modal" id="close">&#215</a>
    <h2>Send us a message</h2>

    <form id="contact" name="contact" action="#" method="post">
      <label for="email">Your e-mail</label>
      <input type="text" id="email" name="email" class="txt">
      <label for="message">Your message</label>
      <textarea id="msg" name="msg" class="txtarea"></textarea>
<input  class='button radius' type="submit" value="Send" />
    </form>
  </div>

  <div class="dividerTop"></div>

  <div class="myNavPanel">
    <nav class="top-bar mTopBar">
      <section class="top-bar-section">

        <ul class="socMed">
          <li><a href="#"><img width='40' height='40' src="comp/img/f.png"></a></li>
          <li><a href="#"><img width='40' height='40' src="comp/img/t.png"></a</li>
          <li><a href="#"><img width='40' height='40' src="comp/img/e.png"></a</li>
          <li><a href="#"><img width='40' height='40' src="comp/img/m.png"></a</li>
          <li><a href="#"><img width='40' height='40' src="comp/img/d.png"></a</li>
          <li><a href="#"><img width='40' height='40' src="comp/img/s.png"></a</li>


        </ul>

        <ul class="right  navRight">
          <li class="divider"></li>
          <li>
            <?php 
            echo anchor ('home', 'Home', array('class'=>'home'));
            ?>
          </li>
          <li class="divider"></li>
          <li>
            <?php 
            echo anchor ('about_us', 'About Us');
            ?>
          </li>
          <li class="divider"></li>
          <li>
            <?php 
            echo anchor ('buying', 'Buying');
            ?>
          </li>
          <li class="divider"></li>
          <li>
            <?php 
            echo anchor ('selling', 'Selling');
            ?>
          </li>
          <li class="divider"></li>
          
          <li>
            <?php 
            echo anchor ('news', 'News');
            ?>
          </li>
          <li class="divider"></li>
          <li>
            <?php 
            echo anchor ('contact_us', 'Contact Us');
            ?>
          </li>

        </ul>
      </section>
    </nav>
  </div>

  <div class="divider">

  </div>

  <div class="header" >
    <div class="logoWrapper">
      <?php echo "<img width=230  src=".base_url()."/comp/img/UV_logo_300.png>"; ?>
    </div> <div class="contactHeader">Contact an American First Class Agent
    <p class="plCall">Please call 312-544-0034 and our qualified</br> Realtors will be happy to assist you</p></div>
    <div class="loginForm">
      <div class='SignInTitle'>Sign in to your account:</div>
      <form method="POST">
        <span class='uname'>  Username:</span> <input class="fld" type="text" name="username"/><br />
        <span class='uname'>Password:</span> <input class="fld" type="password" name="passwort" />

        <input  class='button tiny radius' type="submit" value="Login" />
      </form>
    </div> 
    


    <div class="mailIcon">
      <?php echo "<img id=\"mailIcon1\" src=".base_url()."/comp/img/mail_icon1.png>"; ?>
    </div>




    <div class="homeIcon">
      <?php echo "<img id=\"homeIcon\" src=".base_url()."/comp/img/home_icon.png>"; ?>
    </div>

  </div>

  <div class="mainContentWrapper large-centered">


    <?php 
    $this->load->view($module. '/' .$view, $data2);
    ?>
  </div>


  <div class="footer">
    <footer class="row full-width">
    <div class="large-3 columns bwLogo">
      <a href="#">
        <?php echo "<img class=imgLogo src=".base_url()."/comp/img/UV_logo_300bw.png>"; ?>
      </a>

    </div>
    <div class="large-9 columns copyright">
      <ul class="inline-list lfooter">
    <li><img src="comp/img/footer-icon-phone.png"><span>312-544-0034</span></li>
      <li><img src="comp/img/footer-icon-address.png" alt=""><span>2219 W Chicago Ave Chicago, IL 60622</span></li>
        <li><img src="comp/img/footer-icon-email.png" alt=""><span><a href='mailto:borisoberman@aol.com'>borisoberman@aol.com</a></span></li> 
      </ul>
    </div>    
  </footer>
  </div>


  <!-- javascript -->


  <script type="text/javascript">

  /* My popup starts here */
  

  $(function () {
    $('#homeIcon').on('mousemove', function(e){

      $('#popup').remove();
      var varPopup=$('<div></div>', {text: 'Home page', id: 'popup'});      
      varPopup.css('position', 'absolute');
      varPopup.css('left', e.pageX-70);
      varPopup.css('top', e.pageY-30);
      varPopup.appendTo('body');

    });

    $('#homeIcon').on('mouseout', function(){
      $('#popup').remove();

    });
  });


  $(function () {
    $('#mailIcon1').on('mousemove',function(e){

      $('#popup').remove();

      var varPopup = $('<div></div>',{
        text: 'Message',
        id:'popup'});

      varPopup.css('position', 'absolute');
      varPopup.css('left', e.pageX-40);
      varPopup.css('top', e.pageY-30);

      varPopup.appendTo('body');
    });

    $('#mailIcon1').on('mouseout',function(){

      $('#popup').remove();
    });
  }); 


  /* My slideDown mail form starts here */

  $('#mailIcon1').on('click', function(){
    $('#inline').slideDown();
  });

  $('#close').on('click', function(){

    $('#inline').slideUp();
  })


  </script>



</body>
</html>