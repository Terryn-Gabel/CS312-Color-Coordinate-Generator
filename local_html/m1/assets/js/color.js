
$(document).ready(() => {
   $(".dupErr").hide(0)

   let defaultColors = ['red','orange','yellow','green','teal','blue','purple','grey','black','brown']
   let colorCoordData = {
      row0:{
         id: "row0",
         color: defaultColors[0],
         coords: []
      },
      row1:{
         id: "row1",
         color: defaultColors[1],
         coords: []
      },
      row2:{
         id: "row2",
         color: defaultColors[2],
         coords: []
      },
      row3:{
         id: "row3",
         color: defaultColors[3],
         coords: []
      },
      row4:{
         id: "row4",
         color: defaultColors[4],
         coords: []
      },
      row5:{
         id: "row5",
         color: defaultColors[5],
         coords: []
      },
      row6:{
         id: "row6",
         color: defaultColors[6],
         coords: []
      },
      row7:{
         id: "row7",
         color: defaultColors[7],
         coords: []
      },
      row8:{
         id: "row8",
         color: defaultColors[8],
         coords: []
      },
      row9:{
         id: "row9",
         color: defaultColors[9],
         coords: []
      },
   }

   // revert color selection if user selects a duplicate
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

   //color cells
   $('table.lower td').click(function() {    
      
      let color = $("input:checked").attr("value")

      let coord = $(this).attr("id")

      if(coord!=undefined && coord.length == 2){
         $(this).css("background-color", color)

         let row = $(".upper").find("input:checked").parent().next()
         let rowNum = row.attr("id")
         
         Object.values(colorCoordData).forEach(val => {
            if (val.coords.includes(coord)){

               val.coords = val.coords.filter(function(item) {
                  return item !== coord
               })

               let dupRowId = val.id
               $("#"+dupRowId).text(val.coords)
            }
         });

         colorCoordData[rowNum].coords.push(coord)
         colorCoordData[rowNum].coords.sort()

         row.text(colorCoordData[rowNum].coords)
      }

  });


  // Print Function
  $(':button').click(function() {
      // print is the class name in the css file
      // * indicated that this style applies to everything, might need to change this
      $("*").toggleClass("print"); 
   });

});