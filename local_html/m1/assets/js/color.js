// not currently in use but here just in case

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