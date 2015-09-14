 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="UTF-8">
     <title>OOP in PHP</title>

     <?php
     //Include your class in your main PHP page
     include("class.php");
     ?>






     </head>

 <body>
 <?php
 //To create an object out of a class, you need to use the 'new' keyword.
 $stephan=new person();
 $jimmy =new person();
// Set an objects properties
 $stephan->set_name("Stephan Mcgregory");
 $jimmy ->set_name("Jimmy Wanjala");
 //Accessing an object's data using ->
 echo "Stephans full name is ".$stephan->get_name();
 echo "Jimmy's full name is".$jimmy->get_name();
 ?>
 </body>
 </html>
