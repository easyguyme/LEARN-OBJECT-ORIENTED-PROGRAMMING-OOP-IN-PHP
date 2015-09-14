 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="UTF-8">
     <title>OOP in PHP</title>

     <?php include("class.php");?>






     </head>

 <body>
 <?php
 $stephan=new person();
 $jimmy =new person();

 $stephan->set_name("Stephan Mcgregory");
 $jimmy ->set_name("Jimmy Wanjala");

 echo "Stephans full name is ".$stephan->get_name();
 echo "Jimmy's full name is".$jimmy->get_name();
 ?>
 </body>
 </html>