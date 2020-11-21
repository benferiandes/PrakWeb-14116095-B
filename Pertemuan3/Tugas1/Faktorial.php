<html>  
<head>  
<title>Faktorial menggunakan fungsi</title>  
</head>  
<body>  
<form method="post">  
    Masukkan nomor:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  
<?php   
    if($_POST){  
        $number = $_POST['number'];  
        echo "Faktorial dari $number:<br><br>";    
       function factorial($number) {
        if ($number == 0) return 1;
        return $number * factorial($number - 1);
    }

    print factorial($number);  
    }  
?>  
</body>  
</html>  