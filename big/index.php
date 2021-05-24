<?php include "includes/header.php"?>
<?php
  /*
   * Below are 2 different forms to be re-used       
   * 
   * Only use one at a time, comment out the other!       
   *
   */

  include 'includes/contact_include.php'; #site keys & code here

  $toAddress = "bigmagoona@gmail.com";  //place your/your client's email address here
  $toName = "Lucas Gonczy"; //place your client's name here
  $website = "The Pint And Ladle";  //place NAME of your client's website

  //echo loadContact('simple.php');#demonstrates a simple contact form
  echo loadContact('includes/multiple.php');  //demonstrates multiple form elements

?>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Basic Website Design Cycle</h3>
 
 <p>
     <a href="https://business.tutsplus.com/articles/how-to-extract-the-facts-with-a-web-design-client-questionnaire--fsw-1830">website</a> 
     <a href="https://business.tutsplus.com/articles/how-to-extract-the-facts-with-a-web-design-client-questionnaire--fsw-1830">website</a> 
     <a href="https://business.tutsplus.com/articles/how-to-extract-the-facts-with-a-web-design-client-questionnaire--fsw-1830">website</a>  


    </p>
</aside>
<!-- END RIGHT COL -->
<?php include "includes/footer.php"?>