<html>  
<head>  
<title>Factorial Program using loop in PHP</title>  
</head>  
<body>  
<form method="post">  
    Masukkan total character:<br>  
    <input type="number" name="number" id="number"><br> 
    Masukkan nama:<br>
    <input type="text" name="name" id="name"><br>
    Pilih warna:<br>
    <select id="warna" name="warna">
    <option value="red">Red</option>
    <option value="green">Green</option>
    <option value="blue">Blue</option>
  </select>
    <input type="submit" name="submit" value="Submit" />  
</form>  
<?php   
    if($_POST){  
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];
          echo "Harga Total Bet nama:<br><br>";  
        //start loop  
        if ($number <= 10){         
            $fact = $number * 300;  
            } elseif ($number > 10 && $number <= 20){
                $fact = $number * 500; 
            }  else{
                $fact = $number * 700;
            }
            echo "Rp. ";
            echo $fact . "<br>";  
    }  
?>  
</body>  
</html>  