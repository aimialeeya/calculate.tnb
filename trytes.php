<!DOCTYPE html>
<html lang="en">
<head>
  <title>Calculate TnB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    .border{
    width:400px;
    height:450px;
    padding:30px; 
    margin:40px;
    }
    .border2{
    padding: 10px 50px;
    }
</style>
  
</head>  
<body>  
<div class="border">
<h1>CALCULATE</h1>
<form method="post">  
Voltage<br>
<input type="number" name="voltage" class="form-control" step="0.1" required="required" >Voltage (V)<br><br>  
Current<br>
<input type="number" name="current" class="form-control" step="0.1" required="required" >Ampere (A)<br><br>  
Current Rate<br>
<input type="number" name="currentRate" class="form-control" step="0.1" required="required">sen/kWh<br><br>  
<input  type="submit" name="submit" value="calculate"><br><br>  
</form>  
</div>

<div class="border2">
<?php  
    if(isset($_POST['submit']))  
    {  
        $voltage = $_POST['voltage'];  
        $current = $_POST['current'];
        $currentRate = $_POST['currentRate'];
        $Hour=1;
        $power   =  $voltage*$current;
        $energy  =  $power*$Hour*1000;     
        $total   =  $energy*($currentRate/100);     
        $powerKw =  $power/1000;
        $rate    =  $currentRate/100;
  
echo nl2br("\n POWER: $powerKw" );
echo nl2br("\n Rates per hour  \nRATE: $rate \nRates per day \nRATE: " .$rate*24);
}  
?>
</div>

</body>  
</html>  