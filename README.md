$input = [
['parent_id' => 1, 'child_id' => 1],

['parent_id' => 1, 'child_id' => 2],

['parent_id' => 2, 'child_id' => 3],
];
В результирующем массиве ключами должны быть parent_id а подмассивом значений child_id


$output = [
            1 => [1,2]
            2 => [3]
          ]

