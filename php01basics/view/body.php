<!-- HTML Direclty -->

New message in HTML / PHP
<table>
    <?php

    echo "</br>";

    $students = array('Cesar', 'John', "Maria");
    $programs = array('PHP', 'Java', 'C++');
    $languages = array('PC'=>$programs);

    foreach($languages['PC'] as $key => $value){
        echo $value . ", ";
    }
    echo $languages['PC'][1];

    echo $students[1];



    for( $i = 0; $i < 10; $i++ ) { ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>2</td>
    </tr>
    <?php }





    ?>

</table>