<?php

namespace AppBundle\Util ;

class Tdd {

    public function add($a){
        $result = 0;

        $patternDelimter = '/\[[\s\S]*]/';

        // On créer le pattern par défault
        $pattern = '/,|\n/';

        $pieces = preg_split($pattern,$a);
        $count = count($pieces);

        for ($i=0; $i<$count; $i++){
            $result += $pieces[$i];
        }

        return $result;
    }

}
