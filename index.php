<?php
for($i = 1; $i <= 100; $i++) {

    
    
    if ($i%3 === 0 && $i%5 != 0) {
        echo 'Ali'.'<br>';
        
    }
    else if ($i%5 === 0 && $i%3 != 0 ) {
        echo 'Simbi'.'<br>';
        
    }
    else if ($i%3 === 0 && $i%5 == 0) {
        echo 'AliandSimbi'.'<br>';
        
    }
    else {
        echo $i.'<br>';
    }


    
    

}
?>
