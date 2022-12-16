<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    $arrayChiavi = array_keys($db);

    // arrayTeachers = [
    //     'teachers',
    //     'pm'
    // ]
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack6</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<body>
    
    <?php for( $i=0; $i < count($arrayChiavi); $i++){ ?>
        <?php if($arrayChiavi[$i] == 'teachers'){ ?>
            <div class="bg-secondary px-2">
            <?php for( $k=0; $k < count( $db['teachers']); $k++){ ?>
                <ul>
                    <li>
                        <?php echo $db['teachers'][$k]['name'] . ' - ' . $db['teachers'][$k]['lastname']  ?>
                    </li>
                </ul>
            <?php } ?>
            </div>

        <?php } else { ?>
            <div class="bg-success px-2">
            <?php for( $k=0; $k < count( $db['pm']); $k++){ ?>
                <ul>
                    <li>
                        <?php echo $db['pm'][$k]['name'] . ' - ' . $db['pm'][$k]['lastname']  ?>
                    </li>
                </ul>
            <?php } ?>
            </div>

        <?php } ?>
    <?php } ?>

        <!--BOOTSTRAP-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>