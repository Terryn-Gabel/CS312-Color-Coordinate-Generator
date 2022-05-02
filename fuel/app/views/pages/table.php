<br>
<table class="upper">
    <?php
        $colors = array('red','orange','yellow','green','teal','blue','purple','grey','black','brown');

        for($i = 0; $i < $numcolors; $i++){
            echo '<tr>';
            echo '<td>';
            echo Form::select('color', $colors[$i], array(
                'red' => 'Red',
                'orange' => 'Orange',
                'yellow' => 'Yellow',
                'green' => 'Green',
                'teal' => 'Teal',
                'blue' => 'Blue',
                'purple' => 'Purple',
                'grey' => 'Grey',
                'black' => 'Black',
                'brown' => 'Brown',
            ));
            echo '</td>';
            echo '<td class="right">X</td>';
            echo '</tr>';
        }
        
    ?>
</table>
<br>
<table class="lower">
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
