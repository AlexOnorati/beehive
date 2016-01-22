
<div class="table-responsive">
                                <table class="table table-bordered table-striped">

<?php

    echo '<th>';
    echo '<td>Hive Id</td>';
    echo '<td>Date Collected</td>';
    echo '<td>Collection Period</td>';
    echo '<td>Mite Count</td>';
    echo '</th>';
$i = 1;

foreach ($sampleList as $row) {
    echo '<tr>';
    echo '<td>', $i, '</td>';
    echo '<td>', $row['id'], '</td>';
    echo '<td>', $row['date'], '</td>';
    echo '<td>', $row['period'], '</td>';
    echo '<td>', $row['count'], '</td>';
    echo '</tr>';
    $i++;
}

?>
</table>
</div>