<br>
<table>
    <?php
        for($i = 0; $i < $numcolors; $i++){
            echo '<tr>';
            for($j = 0; $j < 2; $j++){
                echo '<td>X</td>';
            }
            echo '</tr>';
        }
    ?>
</table>
<br>
<table>
    <?php
        for($i = 0; $i < $rowcol; $i++){
            echo '<tr>';
            for($j = 0; $j < $rowcol; $j++){
                echo '<td>X</td>';
            }
            echo '</tr>';
        }
    ?>
</table>
