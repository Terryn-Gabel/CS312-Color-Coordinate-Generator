
<body>
  <!-- <form action = "color" name="myForm" onsubmit="return validateInput()">
    <label for="rowscol">Number of Rows/Columns:</label>
    <input type="number" name="rowscol" id="rowscol" required>
    <label for="colors">Number of Colors:</label>
    <input type="number" name="colors" id="colors" required>
    <input type="submit" value="Submit">
  </form>   -->
  
  <div>
    <?php
      echo Form::open(array(
        "action" => "index/mistone1/color",
        "method" => "get",
        "id" => "fuel_form"
      ));

      echo Form::label('Number of Rows and Columns:&nbsp;', 'rowcol');
      echo Form::input('rowcol', '', array('style' => 'border: 2px;'));
      echo Form::label('<br>Number of Colors:&nbsp;', 'numcolors');
      echo Form::input('numcolors', '', array('style' => 'border: 2px;'));
      echo '<br>';
      echo Form::submit('submitbtn', 'Submit', array('rowcol', 'numcolors'));

      echo Form::close();
    ?>
  </div>

  <div>
    <?php
      if (isset($failure_view)) {
          echo $failure_view;
      }
      if (isset($table_view)) {
        echo $table_view;
      }
    ?>
  </div>
  
</body>


