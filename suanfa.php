<?php

$arr=array(1,43,54,62,21,66,32,78,36,76,39);
/******************冒泡排序*******************/
function getpao($arr){
    $len = count($arr);
    for($i=1;$i<$len;$i++){

        for($j=0;$j<$len-$i;$j++){
            if($arr[$j+1]<$arr[$j]){

                $tem = $arr[$j+1];
                $arr[$j+1] =$arr[$j];
                $arr[$j] = $tem;

            }
        }
    }
    return $arr;
}

//var_dump(getpao($arr)) ;

/*******************************快速排序***********/
function kuaisu($arr){
    //先判断是否需要继续进行
    $len = count($arr);
    if($len<=1){
        return $arr;
    }

    $base = $arr[0];
    $left_arr = array();
    $right_arr = array();

    for($i=1;$i<$len;$i++){
        if($base > $arr[$i]){
            $left_arr[]= $arr[$i]; //小的放左边的数组
        }else{
            $right_arr[] = $arr[$i]; //大的放右边的数组
        }
    }
    //分别对左右数组进行相同的排序方式
    $left_arr = kuaisu($left_arr);
    $right_arr = kuaisu($right_arr);

    //合并左右两边的数组
    return array_merge($left_arr,array($base),$right_arr);
}

var_dump(kuaisu($arr));
