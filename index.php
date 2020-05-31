<?php
$input = [
    ['parent_id' => 10, 'child_id' => 1],
    ['parent_id' => 10, 'child_id' => 2],
    ['parent_id' => 8, 'child_id' => 3]
];

$a=[];

foreach ($input as $item=>$v) {
$parent = $v['parent_id'];
$child = $v['child_id'];

    if(array_key_exists($parent,$a)){
        $b[$parent]=[$child];

        echo '<pre>';
        $a[$parent]=array_merge($a[$parent],$b[$parent]);
    }
    else

    $a[$parent] = [$child];
}
echo '<pre>';
print_r($a);
echo '</pre>';
?>