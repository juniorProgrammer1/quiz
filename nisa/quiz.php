<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/quiz.css">
<script src="js/jquery-2.1.0.min.js">
</script>


<script>
/*$(document).ready(function(){
  $("#bank").keyup(function(){
      
     var maybank = +$('.maybank').val();
     var bankislam = +$('.bankislam').val();
     
     total= maybank + bankislam;
     $('#total').val(total);
     //$('#bank #total').val(total);
     
     
  });
});*/

$(document).ready(function(){  
    $("input").keyup(function(){
        var total = 0; 
        $(this).parents("tr").children("td").children().each(function(){
            total+= parseInt($(this).val());
        });
        $(this).parent().parent().children(":last").html(total);

    });
});


    /*$("input.maybank")
      .keyup(function() {
        total = 0;
        $(this)
          .parents("bank")
          .find("input.maybank")
            .each(function() {
                totalMaybank += parseInt($(this).val());
            })
          .end()
          .find("#totalMaybank")
          .html(total);
      });
*/

    
  /*  $(document).ready(function () {
    $("#bank").keyup(function () {
        //first get number of rows in the table (because we have one input per row)
        var count = $("#mytable tr").length;

        //loop through the rows and get the sum of every input value except the last
        var sum = 0;
        for (var i = 0; i < (count - 1); i++) {
            //get the value and add it to sum
            //check if its a number
            if(!isNaN(parseInt($("#bank tr").eq(i).find("input").val(), 10))){
                sum += parseInt($("#bank tr").eq(i).find("input").val(), 10);
            }
        }

        //assign the last input's value (in last row) to the sum
        $("#bank tr").eq(count - 1).find("input").val(sum);
    });
});


/*$(document).ready(function(){
     $("#bank").keyup(function(){

       var totalMaybank=0;

            $(this).find("input.maybank").each(function(){          
                totalMaybank += parseInt($(this).val());
                $('#totalMaybank').val(totalMaybank);
            }
           
        });
    });

*/

/*$(document).ready(function(){
  $("#bank").keyup(function(){

    calculateRows();
     
    });
});


    function calculateRows(){

        var maybank = maybank[target];
        var bankislam = bankislam[target];
        var total = total[target];
     
        var total = maybank.target.val() * bankislam.target.val();
         $('#total').val(total);
    }
*/

 $(document).ready(function(){
 
        //iterate through each textboxes and add keyup
        //handler to trigger sum event
        $("#bank").each(function() {
 
            $(this).keyup(function(){
               
                calculateMaybank();
                calculateBankIslam();
            });
        });
 
    });


   /* function calculateRows() {
 
        var total = 0;
        //iterate through each textboxes and add the values
        $(".maybank").each(function() {

            $(".bankislam").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                total = parseInt(this.value) + parseInt(this.value);
                 
            }
 
        });
      });  
        //.toFixed() method will roundoff the final sum to 2 decimal places
        $('#total').val(total);
    }*/

 
    function calculateMaybank() {
 
        var totalMaybank = 0;
        //iterate through each textboxes and add the values
        $(".maybank").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                totalMaybank += parseInt(this.value);
            }
 
        });
        //.toFixed() method will roundoff the final sum to 2 decimal places
        $('#totalMaybank').val(totalMaybank);
    }

    function calculateBankIslam() {
 
        var totalBankIslam = 0;
        //iterate through each textboxes and add the values
        $(".bankislam").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                totalBankIslam += parseInt(this.value);
            }
 
        });
        //.toFixed() method will roundoff the final sum to 2 decimal places
        $('#totalBankIslam').val(totalBankIslam);
    }
   
  


  $(document).ready(function(){
  $("#bank").keyup(function(){
      
     var totalMaybank = +$('#totalMaybank').val();
     var totalBankIslam = +$('#totalBankIslam').val();
     
     totalAll= totalMaybank + totalBankIslam;
     $('#totalAll').val(totalAll);
        
  });
});

  /* $(document).ready(function(){
  $("#bank").keyup(function(){
      
     var totalMaybank = +$('#totalMaybank').val();
     
     meanMaybank= totalMaybank / 5;
     $('#meanMaybank').val(meanMaybank);
        
  });
});
*/

  $(document).ready(function(){
  $("#bank").keyup(function(){
      calculatemeanMaybank();
      calculatemeanBankIslam();
      calculatemeantotalAll();

    });
  });

   function calculatemeanMaybank() {
 
    var totalMaybank = +$('#totalMaybank').val();
     
     meanMaybank= totalMaybank / 5;

     $('#meanMaybank').val(meanMaybank);
    }

    function calculatemeanBankIslam() {
 
    var totalBankIslam = +$('#totalBankIslam').val();
     
     meanBankIslam= totalBankIslam / 5;

     $('#meanBankIslam').val(meanBankIslam);
    }

    function calculatemeantotalAll() {
 
    var totalAll = +$('#totalAll').val();
     
     meantotalAll= totalAll / 5;

     $('#meantotalAll').val(meantotalAll);
    }




   


</script>



    <title></title>
</head>
<body>
<table class="table table-bordered" id="bank">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Maybank</th>
            <th>Bank Islam</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Mark</td>
            <td>
                <input type="text" class="maybank" />
            </td>
            <td>
                <input type="text" class="bankislam" />
            </td>
            <td>
                <input type="text" id="total" disabled="true" />
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>John</td>
            <td>
                <input type="text" class="maybank" />
            </td>
            <td>
                <input type="text" class="bankislam" />
            </td>
            <td>
                <input type="text" id="total" disabled="true" />
            </td>
        </tr>
         <tr>
            <td>3</td>
            <td>Mariah</td>
            <td>
                <input type="text" class="maybank" />
            </td>
            <td>
                <input type="text" class="bankislam" />
            </td>
            <td>
                <input type="text" id="total" disabled="true" />
            </td>
        </tr>
         <tr>
            <td>4</td>
            <td>Alice</td>
            <td>
                <input type="text" class="maybank" />
            </td>
            <td>
                <input type="text" class="bankislam" />
            </td>
            <td>
                <input type="text" id="total" disabled="true" />
            </td>
        </tr>
         <tr>
            <td>5</td>
            <td>Diyana</td>
            <td>
                <input type="text" class="maybank" />
            </td>
            <td>
                <input type="text" class="bankislam" />
            </td>
            <td>
                <input type="text" id="total" disabled="true" />
            </td>
        </tr>
         <tr>
            <td></td>
            <td><b>TOTAL</b></td>
            <td>
                <input type="text" id="totalMaybank" disabled="true" />
            </td>
            <td>
                <input type="text" id="totalBankIslam" disabled="true" />
            </td>
            <td>
                <input type="text" id="totalAll" disabled="true" />
            </td>
        </tr>
        <!--  <tr>
            <td></td>
            <td><b>Mode</b></td>
            <td>
                <input type="text" id="modeMaybank" disabled="true" />
            </td>
            <td>
                <input type="text" id="modeBankIslam" disabled="true" />
            </td>
            <td>
                <input type="text" id="modetotalAll" disabled="true" />
            </td>
        </tr> -->
        <tr>
            <td></td>
            <td><b>Mean</b></td>
            <td>
                <input type="text" id="meanMaybank" disabled="true" />
            </td>
            <td>
                <input type="text" id="meanBankIslam" disabled="true" />
            </td>
            <td>
                <input type="text" id="meantotalAll" disabled="true" />
            </td>
        </tr>
         <!--  <td></td> -->
           <!--  <td><b>Median</b></td>
            <td>
                <input type="text" id="medianMaybank" disabled="true" />
            </td>
            <td>
                <input type="text" id="medianBankIslam" disabled="true" />
            </td>
            <td>
                <input type="text" id="mediantotalAll" disabled="true" />
            </td> -->
   <!--      </tr> -->
    </tbody>
</table>

</body>
</html>