<?php
date_default_timezone_set('Your/Timezone'); // Set your timezone, e.g., 'America/New_York'

// Get the current hour
$currentHour = date('G'); // 'G' gives the hour in 24-hour format without leading zero

// Determine the feeding schedule
if ($currentHour >= 5 && $currentHour < 9) {
    echo "It's breakfast time! The animals should have: Bananas, Apples, and Oats.";
} elseif ($currentHour >= 12 && $currentHour < 14) {
    echo "It's lunch time! The animals should have: Fish, Chicken, and Vegetables.";
} elseif ($currentHour >= 19 && $currentHour < 21) {
    echo "It's dinner time! The animals should have: Steak, Carrots, and Broccoli.";
} else {
    echo "The animals are not being fed at this time.";
}
?>
