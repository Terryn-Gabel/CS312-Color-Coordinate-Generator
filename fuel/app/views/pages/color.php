<body>
  
  <?php
    echo '<div class="inputForm">';

    echo Form::open(array(
      "action" => "index/mistone1/color",
      "method" => "get",
      "id" => "fuel_form"
    ));

    echo Form::label('Number of Colors (1-10):&nbsp;', 'numcolors');
    echo Form::input('numcolors', '', array('class' => 'textInputs'));
    echo '<br>';
    echo Form::label('Number of Rows and Columns (1-26):&nbsp;', 'rowcol');
    echo Form::input('rowcol', '', array('class' => 'textInputs'));
    echo '<br>';
    echo Form::submit('submitbtn', 'Submit', array('rowcol', 'numcolors'));
    
    echo Form::close();

    if (isset($failure_view)) {
      echo $failure_view;
    }
    echo '</div>';
  ?>
  
  <div id="toPrint">
    <?php
      if (isset($table_view)) {
        echo $table_view;
      }
    ?>
  </div>
    
</body>