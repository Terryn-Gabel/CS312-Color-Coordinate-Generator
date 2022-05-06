<br>
<table class="upper">

    <?php
        $colors = array('red','orange','yellow','green','teal','blue','purple','grey','black','brown');
        $ids = array('color0','color1','color2','color3','color4','color5','color6','color7','color8','color9');
        $radioselect = array(true, false, false, false, false, false, false, false, false, false );

        for($i = 0; $i < $numcolors; $i++){
            
            echo '<tr>';
            echo '<td class="left">';
            echo Form::radio('color', $colors[$i], $radioselect[$i]);
            echo Form::select($ids[$i], $colors[$i], array(
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
            echo '<p class="colorText">' . ucfirst($colors[$i]) . '</p>';
            echo '</td>';
            echo '<td class="right" id="row';
            echo $i;
            echo '"> </td>';
            echo '</tr>';
        }
    ?>
</table>
<br>
<div class="dupErr" id="hide">
    Each color can only be selected once.
</div>
<br>
<table class="lower">
    <?php
        $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        if($rowcol != 0){
            for($i = 0; $i < $rowcol+1; $i++){
                echo '<tr>';
                for($j = 0; $j < $rowcol+1; $j++){
                    if($i == 0 && $j == 0){
                        echo '<td></td>';
                    }else if($i == 0){ // letter columns
                        echo '<td id="';
                        echo $alphabet[$j-1];
                        echo '">';
                        echo $alphabet[$j-1];
                        echo '</td>';
                    }else if($j == 0){ // number rows
                        echo '<td id="';
                        echo $i;
                        echo '">';
                        echo $i;
                        echo '</td>';
                    }else{
                        echo '<td id="';
                        echo $alphabet[$j-1];
                        echo $i;
                        echo '">';
                        echo '';
                        echo '</td>';
                    }
                }
                echo '</tr>';
            }
        }
    ?>
</table>
<div>
    <?php
        if($rowcol != 0){
            echo '<button>Print</button>';
        }
    ?>
</div>