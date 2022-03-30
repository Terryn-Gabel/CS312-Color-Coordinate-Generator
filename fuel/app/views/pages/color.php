<!DOCTYPE HTML>
<html lang = "en">
  <title>Our Color Coordinate Page</title>
  <head>
  <script>
      function validateInput() {
         var rowcols = document.myForm.rowscol.value;
         var color = document.myForm.colors.value;
         
         if (rowcols < 1 || rowcols > 26) {
            alert("Please enter valid number of rows/columns, must be a number between 0 and 27!");
            document.myForm.rowscol.focus();
            return false;
         }
         if (color < 1 || color > 10) {
            alert("Please enter valid number of colors, must be a number between 0 and 11!");
            document.myForm.colors.focus();
            return false;
         }
         return( true );
      }
  </script>
  </head>
  <body>
    <form action = "color" name="myForm" onsubmit="return validateInput()">
      <label for="rowscol">Number of Rows/Columns:</label>
      <input type="number" min="1" max="26" name="rowscol" id="rowscol" required>
      <label for="colors">Number of Colors:</label>
      <input type="number" min="1" max="10" name="colors" id="colors" required>
      <input type="submit" value="Submit">
    </form>  
  </body>
</html>  
