<?php

$creneaux = [
    [
        [8, 12],
        [14, 19],
    ],
    [
        [8, 12],
        [14, 19],
    ],
    [
        [8, 12],
        [14, 19],
    ], [
        [8, 12],
        [14, 19],
    ], [
        [8, 12],
        [14, 19],
    ],
];

$jours = [
    'lundi',
    'mardi',
    'mercredi',
    'jeudi',
    'vendredi',
];

?>

<?php

foreach ($jours as $key => $jour) {
    print_r($creneaux[$key]);
}

?>