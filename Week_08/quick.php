<?php
class Test{
    public function sort($array){
        $this->quick($array,0,count($array)-1);
        return $array;
    }

    public function quick(&$array,$l,$r){
        if($l>$r){
            return;
        }
        $key=$this->getKey($array,$l,$r);
        $this->quick($array,$l,$key-1);
        $this->quick($array,$key+1,$r);
    }


    public function getKey(&$array,$l,$r){
        $index=$l;
        for($i=$l;$i<$r;$i++){
            if($array[$i]<$array[$r]){
                $this->swap($array,$i,$index);
                $index++;
            }
        }
        $this->swap($array,$index,$r);
        return $index;
    }

    public function swap(&$array,$a,$b){
        $temp=$array[$a];
        $array[$a]=$array[$b];
        $array[$b]=$temp;
    }
}

$test=new Test();
$res=$test->sort([3,4,1,555,23,54,64,222,33]);
echo join(",",$res);