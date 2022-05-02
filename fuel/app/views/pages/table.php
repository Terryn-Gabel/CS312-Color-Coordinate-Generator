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
            echo '<td class="right"> </td>';
            echo '</tr>';
        }
        
    ?>
</table>
<br>
<table class="lower">
    <?php
        $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        for($i = 0; $i < $rowcol+1; $i++){
            echo '<tr>';
            for($j = 0; $j < $rowcol+1; $j++){
                if($i == 0 && $j == 0){
                    echo '<td></td>';
                }else if($i == 0){ // letter columns
                    echo '<td>';
                    echo $alphabet[$j-1];
                    echo '</td>';
                }else if($j == 0){ // number rows
                    echo '<td>';
                    echo $i;
                    echo '</td>';
                }else{
                    echo '<td>';
                    echo '';
                    echo '</td>';
                }
                
            }
            echo '</tr>';
        }
    ?>
</table>
