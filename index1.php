<?php
/**$array = array(2,3,4,5,6,7,'a','test' => array(10,25,30,40));-----array multi dimensionnelle 

var_dump($array);*/



/**-
 * array_push ($array,15); --------------manampy
 * $array[1] =  8;
 * unset( $array[3]);
 * echo $array[4];
 * //array[kay] manova valeur
 * 
*/
/**---------Boucle-------------------  */
/**---------incrementation-------------------  */

$array2 = array(2,3,4);

for ($i=0 ; $i < count($array2); $i++){
    $array2[$i] = $array2[$i] * 2;
    var_dump ($array2);
}

/**---------decrementation-------------------  */

$array3 = array(2,3,4);
$array4 = array();
for ($i=count($array3 ) -1; $i>=0; $i--){
    var_dump ($array3[$i]);

/**---------reverse-------------------  */

    array_push($array4, $array3[$i]);

    $array3 = $array4;
    var_dump($array4);
}

/**---------nombre pair-------------------  */

$array5 = array(2,3,4,5,6,7);
$array6 = array();
foreach($array5 as $value){
    if(($value % 2)===0){
        array_push($array6, $value);
    }
    var_dump($array6);
}

/**---------nombre impair-------------------  */

$array7 = array(2,3,4,5,6,7);
$array8 = array();
foreach($array7 as $value){
    if(($value % 2)!==0){
        array_push($array8, $value);
    }
    var_dump($array8);
}
/**------------Concatenation--------------------- */
$arr = array(array('rakoto','rasoa'),array('rabe','kely'),array('rabozaka','be'),array('rakotofrah'));
$arr2=array();
foreach($arr as $value){
    array_push($arr2, $value[0].''.$value[1]);
}
 var_dump($arr2);

?>
