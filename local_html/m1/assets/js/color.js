
$(document).ready(() => {
    $(".dupErr").hide(0)
 
    $("option").click(function() {
       console.log("here")
       console.log($(this))
    });
 
    $("select").change( function() {
       
       var oldval = $(this).find("[selected='selected']").attr("value")
       // var newval = $(this).find( "option:selected")
 
       var all = []
       $( "select option:selected" ).each(function() {
          all.push($( this ).text())
        });
       
       let foundDuplicate = false;
       foundDuplicate = all.some((element, index) => {
          return all.indexOf(element) !== index
       });
       if (foundDuplicate) {
          $(this).val(oldval).change();
          $(".dupErr").show(100);
          $(".dupErr").delay(3000).hide(300);
       }else{
          $(".dupErr").hide(300);
       }
    });
 
 });