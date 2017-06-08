$("#enviar0").click( function() {
 $.post( $("#enviar0").attr("formaction"), 
         $("#myForm0 :input").serializeArray(), 
         function(info){ $("#result0").html(info); 
   });
 
});
 
$("#myForm0").submit( function() {
  return false;	
});

$("#enviar1").click( function() {
 $.post( $("#enviar1").attr("formaction"), 
         $("#myForm1 :input").serializeArray(), 
         function(info){ $("#result1").html(info); 
   });

});
 
$("#myForm1").submit( function() {
  return false;	
});

$("#enviar2").click( function() {
 $.post( $("#enviar2").attr("formaction"), 
         $("#myForm2 :input").serializeArray(), 
         function(info){ $("#result2").html(info); 
   });
 
});
 
$("#myForm2").submit( function() {
  return false;	
});


 