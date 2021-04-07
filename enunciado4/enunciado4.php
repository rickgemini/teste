<?php 

$str1 = '{}()[]';

echo "<h1>$str1</h1>";

preg_match('/\[(.*?)\]/', $str1, $expressao1);

if(!empty($expressao1) ) {
    if($expressao1[1] == '') {
        preg_match('/\{(.*?)\}/', $str1, $expressao2);
        
        if($expressao2[1] == '') {
            preg_match('/\((.*?)\)/', $str1, $expressao3);
    
            if($expressao3[1] == '' ) {
                echo "<h2> - válido </h2>";
            }
        }
    }
} else {
    echo "<h2> - inválido </h2>";
}

echo '<hr>';


$str2 = '{[}()';
echo "<h1>$str2</h1>";

preg_match('/\[(.*?)\]/', $str2, $expressao1);
preg_match('/\{(.*?)\}/', $str2, $expressao2);
preg_match('/\((.*?)\)/', $str2, $expressao3);

if(!empty($expressao1)) {
    if($expressao1[1] == '') {
        preg_match('/\{(.*?)\}/', $str1, $expressao2);
        
        if($expressao2[1] == '') {
            preg_match('/\((.*?)\)/', $str1, $expressao3);
    
            if($expressao3[1] == '' ) {
                echo "<h2> - válido </h2>";
            }
        }
    }
} else {
    echo "<h2> - inválido </h2>";
}

echo '<hr>';

$str3 = '{)[{()}]';

echo "<h1>$str3</h1>";

preg_match('/\{(.*?)\}/', $str3, $expressao1);

if(!empty($expressao1)) {
    if($expressao1[1] == '') {
        preg_match('/\{(.*?)\}/', $str1, $expressao2);
        
        if($expressao2[1] == '') {
            preg_match('/\((.*?)\)/', $str1, $expressao3);
    
            if($expressao3[1] == '' ) {
                echo "<h2> - válido </h2>";
            }
        }
    } else {

        preg_match('/\{(.*?)\}/', $expressao1[1], $expressao4);

        if( empty($expressao4) ) {
            echo "<h2> - inválido </h2>";
        }

    }
} else {
    echo "<h2> - inválido </h2>";
}

echo '<hr>';

$str4 = '{[()]}(){}"';

echo "<h1>$str4</h1>";

preg_match('/\[(.*?)\]/', $str4, $expressao1);
preg_match('/\{(.*?)\}/', $str4, $expressao2);
preg_match('/\((.*?)\)/', $str4, $expressao3);

if(!empty($expressao1)) {
    if($expressao1[1] == '') {
        preg_match('/\{(.*?)\}/', $str1, $expressao2);
        
        if($expressao2[1] == '') {
            preg_match('/\((.*?)\)/', $str1, $expressao3);
    
            if($expressao3[1] == '' ) {
                echo "<h2> - válido </h2>";
            }
        }
    } else {
        preg_match('/\((.*?)\)/', $expressao1[1], $expressao4);
        
        if(empty($expressao4)) {
            echo "<h2> - inválido </h2>";             
            
        }
    }
} else {
    echo "<h2> - inválido </h2>";
}

if(!empty($expressao1)) {
    if($expressao1[1] == '') {
        preg_match('/\{(.*?)\}/', $str1, $expressao2);
        
        if($expressao2[1] == '') {
            preg_match('/\((.*?)\)/', $str1, $expressao3);
    
            if($expressao3[1] == '' ) {
                echo "<h2> - válido </h2>";
            }
        }
    } else {
        
        preg_match('/\((.*?)\)/', $expressao1[1], $expressao4);
        
        if(empty($expressao4)) {
            echo "<h2> - inválido </h2>";             
            
        }
    }
} else {
    echo "<h2> - inválido </h2>";
}

if(!empty($expressao2)) {
    preg_match('/\((.*?)\)/', $expressao2[1], $expressao5);
       
    if(empty($expressao5)) {
        echo "<h2> - inválido </h2>";             
    }

}else {
    echo "<h2> - inválido </h2>";
}

if($expressao3[1] == '') {
    preg_match('/\((.*?)\)/', $str1, $expressao3);

    if($expressao3[1] == '' ) {
        echo "<h2> - válido </h2>";
    }
}
