<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = 'zawodnicynba';    //tutaj nazwa twojej bazy
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
         {
             $imie = $_GET['num'];
             $nazwisko = $_GET['nazw'];
            
$query = "Insert into zawodnicy(imie, nazwisko) values('$imie', '$nazwisko')";
$run =mysqli_query($con,$query) or die(mysqli_error($con));
 
if($run){
    echo "Formularz zatwierdzony";
}
else{
    echo "formularz jest błędny";
}
         }
         mysqli_close($con);
?>
 
<form action="" method="get">
Imie:<input type="text" name="num"><br>
Nazwisko:<input type="text" name="nazw"><br>
<input name="sub" type="submit" value="ok">
</form>