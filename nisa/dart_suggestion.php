<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="js/jquery-1.11.0.js">
        <script src="js/jquery-2.1.0.min.js"></script>

  <script>

    $(document).ready(function(){
        $('.button').click(function() {

                var start = +$('.total1').val();
                var i;
                if ($(this).attr("value") == '20'){
                    var start = start - 20;
                   // $('.total1').val(start);
                }
               else  if ($(this).attr("value") == '40'){
                    var start = start - 40;
                }

               else if ($(this).attr("value") == '60'){
                    var start = start - 60;
               }

               else if ($(this).attr("value") == '3'){
                    var start = start - 3;
               }
               $('.total1').val(start);
           //}
              
               // alert($(this).attr("value"));
        })

        $('.button1').click(function() {

                var start = +$('.total2').val();
                var i;
                if ($(this).attr("value") == '20'){
                    var start = start - 20;
                   // $('.total1').val(start);
                }
               else  if ($(this).attr("value") == '40'){
                    var start = start - 40;
                }

               else if ($(this).attr("value") == '60'){
                    var start = start - 60;
               }

               else if ($(this).attr("value") == '3'){
                    var start = start - 3;
               }

               $('.total2').val(start);
           //}
              
               // alert($(this).attr("value"));
        })


    });



     $(document).ready(function(){
    $('.button').click(function() {


       //var total1=$('.total1');

        if ($('.total1').val() == 2 ) {

          alert("You need to target double 1");
       }    

       else if ($('.total1').val() == 3 ) {

          alert("You need to target 1 and double 1");
       }

        else if ($('.total1').val() == 4 ) {

          alert("You need to target double 2");
        }

        else if ($('.total1').val() == 5 ) {

          alert("You need to target 3 and double 1");
       }


          else if ($('.total1').val() == 6 ) {

              alert("You need to target double 3");
        }

          else if ($('.total1').val() == 7 ) {
              alert("You need to target 5 and double 1");
        }

         else if ($('.total1').val() == 8 ) {
              alert("You need to target double 4");
        }

         else if ($('.total1').val() == 9) {
             alert("You need to target triple 3 OR  7 and double 1");
       }
    });
  });


    $(document).ready(function(){
    $('.button1').click(function() {


       //var total1=$('.total1');

        if ($('.total2').val() == 2 ) {

          alert("You need to target double 1");
       }    

       else if ($('.total2').val() == 3 ) {

          alert("You need to target 1 and double 1");
       }

        else if ($('.total2').val() == 4 ) {

          alert("You need to target double 2");
        }

        else if ($('.total2').val() == 5 ) {

          alert("You need to target 3 and double 1");
       }


          else if ($('.total2').val() == 6 ) {

              alert("You need to target double 3");
        }

          else if ($('.total2').val() == 7 ) {
              alert("You need to target 5 and double 1");
        }

         else if ($('.total2').val() == 8 ) {
              alert("You need to target double 4");
        }

         else if ($('.total2').val() == 9) {
             alert("You need to target triple 3 OR  7 and double 1");
       }
    });
  });


    



</script>



<body><center><br>
<br><center><table class="table table-bordered" id="dart"></center>
    <thead>
        <tr>
            <th><center>Player 1</center></th>
            <th><center>Player 2</center></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
            <center><br>
            <div>
                <button class='button' id='no1' value='20'>20</button>
                <button class='button' id='no2' value='40'>40</button>
                <button class='button' id='no3' value='60'>60</button>
                <button class='button' id='no4' value='3'>3</button><br>
            </div></td>
            <td><center><br>
            <div>
                <button class='button1' id='no1' value='20'>20</button>
                <button class='button1' id='no2' value='40'>40</button>
                <button class='button1' id='no3' value='60'>60</button>
                <button class='button1' id='no4' value='3'>3</button><br>
            </div>
            </td>
        </tr>
        <tr>
            <td>Starting point = 500</td>
            <td>Starting point = 500</td>        </tr>
         <tr>
            <td>
            <input type='text' class='total1' value='500'></td>
            <td><input type='text' class='total2' value='500'>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>
