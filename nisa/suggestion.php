<!DOCTYPE html>
<html>
<head>
<script src="js/jquery-2.1.0.min.js">
</script>

<script>

$(document).ready(function(){
  
  $(".point").keyup(function(){

   if ($(this).val() == 9) {
     alert("You need to target triple 3 OR  7 and double 1");
   }

   else if ($(this).val() == 8 ) {
     alert("You need to target double 4");
   }

   else if ($(this).val() == 7 ) {
     alert("You need to target 5 and double 1");
   }
   
   else if ($(this).val() == 6 ) {
     alert("You need to target double 3");
   }

    else if ($(this).val() == 5 ) {
     alert("You need to target 3 and double 1");
   }

   else if ($(this).val() == 4 ) {
     alert("You need to target double 2");
   }

   else if ($(this).val() == 3 ) {
     alert("You need to target 1 and double 1");
   }

   else if ($(this).val() == 2 ) {
     alert("You need to target double 1");
   }    
  });
});

</script>

	<title></title>
</head>
<body>
		
               <input type="text" class="point">
            
</table>
</body>
</html>