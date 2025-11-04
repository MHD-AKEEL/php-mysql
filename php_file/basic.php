<?php

$table = 11;
$rows = 100;
$i = 0;

?>
<table border="2">
    <tr>
        <th>Multiplicant</th>
        <th>Multiplier</th>
        <th>Result</th>
    </tr>
    <?php
    for ($i = 0; $i < $rows; $i++) {

    ?>
        <tr>
            <td><?php print($table); ?></td>
            <td><?php print($i); ?></td>
            <td><?php print($i * $table); ?></td>
        </tr>
    <?php
    }
    ?>
</table>


<pre>
<?php
$rows = 10;
system('a.exe ' . $rows);
?>
</pre>