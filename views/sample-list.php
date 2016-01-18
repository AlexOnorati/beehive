
<table>
<?php
foreach ($sampleList as $row) {
    echo '<tr>';
    echo '<td>', $row['id'], '</td>';
    echo '<td>', $row['date'], '</td>';
    echo '<td>', $row['period'], '</td>';
    echo '<td>', $row['count'], '</td>';
    echo '</tr>';
}
?>
</table>