<?php
for($i = 1; $i <= 100; $i++) {

    
    
    if ($i%3 === 0 && $i%5 != 0) {
        echo $i.'Ali'.'<br>';
        
    }
    else if ($i%5 === 0 && $i%3 != 0 ) {
        echo $i.'Simbi'.'<br>';
        
    }
    else if ($i%3 === 0 && $i%5 == 0) {
        echo $i.'AliandSimbi'.'<br>';
        
    }
    else {
        echo $i.'<br>';
    }


    
    

}
?>