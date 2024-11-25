<?php

function ducan($stanje="otvoren") {
    echo "Ducan je $stanje";
}

$blagdani = array(
    "2024-01-01", 
    "2024-04-09", 
    "2024-04-10", 
    "2024-06-22", 
    "2024-08-05", 
    "2024-11-01", 
    "2024-12-25", 
    "2024-12-26"  
);

$currentDate = new DateTime();
$dayOfWeek = $currentDate->format('l'); // Dan 
$currentTime = $currentDate->format('H:i'); // Trenutno vrijeme

if (in_array($currentDate->format('Y-m-d'), $blagdani)) {
    ducan("zatvoren");
} else if ($dayOfWeek == "Saturday") {
    
    if ($currentTime >= "09:00" && $currentTime <= "14:00") {
        ducan("otvoren");
    } else {
        ducan("zatvoren");
    }
} else if ($dayOfWeek == "Sunday") {
    
    ducan("zatvoren");
} else {
    
    if ($currentTime >= "08:00" && $currentTime <= "20:00") {
        ducan("otvoren");
    } else {
        ducan("zatvoren");
    }
}

?>
