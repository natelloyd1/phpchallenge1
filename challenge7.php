<?php
 
 $total = ""; 

for ($i = 1; $i <= 100; $i += 1) {
    if ($i % 3 === 0) {
    $total += "Fizz";
    } if ($i % 5 === 0) {
    $total += "Buzz";
    } if  ($total === "") {
        $total += "";
            // $total = $i;
    };
    echo $total . "\n";
    $total = ""; 
};

// let total = ""

// for (let i = 1; i <= 100; i += 1) {
//     if (i % 3 === 0) {
//     total += "fizz"; 
//     } if (i % 5 === 0) {
//     total += "buzz"; 
//     } if (total === "") {
//     total += "" 
//         total = i; 
//     }
//     console.log(total); 
//     total = ""; 
// }; 
