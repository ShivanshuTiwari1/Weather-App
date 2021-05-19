
<?php


$errormessage = "";
$returnmessage = "";

if($_POST)
{
    $finalcityname = str_replace(' ','-',$_POST['cityname']);
    $finalurl = "https://www.weather-forecast.com/locations/".$finalcityname."/forecasts/latest";
    
    $data = @file_get_contents($finalurl);
    
    if($data == false)
    {
        $returnmessage = '<div class="alert alert-danger" role="alert">
        Couldn\'t find the city. Please Try Again.
      </div>';
    }
    else
    {
        $start_point = strpos($data, '</h2> (1&ndash;3 days)</div><p class="b-forecast__table-description-content"><span class="phrase">');
        
        $before_first_char_of_str = strpos($data, 'e">', $start_point) + 2;
        $last_char_of_str = strpos($data, '</span></p></td><td class="b-forecast__table-description-cell--js" colspan="9"><div class="b-forecast__table-description-title"><h2>', $start_point) - 1;
        
        $length = $last_char_of_str-($before_first_char_of_str);
        $forecast = substr($data, $before_first_char_of_str+1, $length);
        
        $returnmessage='<div class="alert alert-success" role="alert">'.$forecast.'</div>';
        
        // echo $successmessage;
    }
}

?>

