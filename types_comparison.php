<?php
$funcs = array(
        /* Testing equality */
        'eq' => '==',
        'ne' => '!=',
        'gt' => '>',
        'lt' => '<',
        'ne2' => '<>',
        'lte' => '<=',
        'gte' => '>=',
        /* Testing identity */
        'id' => '===',
        'nid' => '!=='
);
class Test {
        protected $a;
        public $b;
        public function __construct($a,$b){
                $this->a = $a;
                $this->b = $b;
        }
        public function getab(){
                return $this->a.",". $this->b;
        }

}
$tst1 = new Test(1,2);
$tst2 = new Test(1,2);
$tst3 = new Test(2,2);
$tst4 = new Test(1,1);

$arr1 = array(1,2,3);
$arr2 = array(2,3,4);
$arr3 = array('a','b','c','d');
$arr4 = array('a','b','c');
$arr5 = array();

$comp1 = array(
        'ints' => array(-1,0,1,2),
        'floats' => array(-1.1,0.0,1.1,2.0),
        'string' => array('str', 'str1', '', '1'),
        'bools' => array(true, false),
        'null' => array(null),
        'objects' => array($tst1,$tst2,$tst3,$tst4),
        'arrays' => array($arr1, $arr2, $arr3, $arr4, $arr5)
);
$fbody = array();

foreach($funcs as $name => $op){
        $fbody[$name] = create_function('$a,$b', 'return $a ' . $op . ' $b;');
}

$table = array(array('function', 'comp1', 'comp2', 'f comp1 comp2', 'type'));
/* Do comparisons */
$comp2  = array();
foreach($comp1 as $type => $val){
        $comp2[$type] = $val;
}

foreach($comp1 as $key1 => $val1){
        foreach($comp2 as $key2 => $val2){
                addTableEntry($key1, $key2, $val1, $val2);
        }
}
$out = '';
foreach($table as $row){
        $out .= sprintf("%-20s\t%-20s\t%-20s\t%-20s\t%-20s\n", $row[0], $row[1], $row[2], $row[3], $row[4]);
}

print $out;
exit;

function addTableEntry($n1, $n2, $comp1, $comp2){
        global $table, $fbody;
        foreach($fbody as $fname => $func){
                        foreach($comp1 as $val1){
  foreach($comp2 as $val2){
                                        $val = $func($val1,$val2);
                                                $table[] = array($fname, gettype($val1) . ' => ' . sprintval($val1), gettype($val2) .' => ' . sprintval($val2), gettype($val) . ' => ' . sprintval($val), gettype($val1) . "-" . gettype($val2) . '-' . $fname);
                                        }
                        }
        }
}

function sprintval($val){
        if(is_object($val)){
                return 'object-' . $val->getab();
        }
        if(is_array($val)){
                return implode(',', $val);
        }
        if(is_bool($val)){
                if($val){
                        return 'true';
                }
                return 'false';
        }
        return strval($val);
}

?>
