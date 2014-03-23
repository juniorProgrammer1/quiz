<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="js/jquery-1.11.0.js">
		<script src="js/jquery-2.1.0.min.js"></script>
        <script>
    $(document).ready(function(){
                $("#bank > tbody > tr").each(function() {
                $(this).keyup(function () {
                     var value1 = +$(this).find('.maybank').val();
                    var value2 = +$(this).find('.bankislam').val();
                    var sum = value1 + value2;
                    $(this).find('.total').val(sum);  
                    var totalsum = $(this).find('.total').val(sum); 
                    total(totalsum);
                    });
            });
 
        //iterate through each textboxes and add keyup
        //handler to trigger sum event
        $(".maybank").each(function() {
 
            $(this).keyup(function(){
                calculatemaybank();
              //  calculatemaybankmean();
            });
        });

         $(".bankislam").each(function() {
 
            $(this).keyup(function(){
                calculatebankislam();
            });
        });
 
    });
 
    function calculatemaybank() {
 
        var summaybank = 0;
        count = 0;
        //iterate through each textboxes and add the values
        $(".maybank").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                summaybank += parseInt(this.value);
                count++;
            }

            //var totalmean  = +$('#summaybank').val;
            //all.find('#maybankmean').text((totalmean/count).toFixed(3));
 
        });
        //.toFixed() method will roundoff the final sum to 2 decimal places
        $("#summaybank").html(summaybank);
        //calculatemaybankmean(summaybank);
    }

        function calculatebankislam() {
 
        var sumbankislam = 0;
        //iterate through each textboxes and add the values
        $(".bankislam").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                sumbankislam += parseInt(this.value);
            }
 
        });
        //.toFixed() method will roundoff the final sum to 2 decimal places
        $("#sumbankislam").html(sumbankislam);
    }


    function total(totalsum) {
 
        var sum = 0;
        //iterate through each textboxes and add the values
        $(".total").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                sum += parseInt(this.value);
            }
 
        });
        //.toFixed() method will roundoff the final sum to 2 decimal places
        $("#totalall").html(sum);
    }

</script>
	</head>
	<body>

	<br><table class="table table-bordered" id="bank" border="1">
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
            <input type='text' class='maybank'>
            </td>
           <td>
            <input type='text' class='bankislam'/>
            </td>
            <td>
            <input type='text' class='total' disabled='true' />
            </td>
            </tr>
            <tr>
           <td>2</td>
           <td>Idah</td>
            <td>
            <input type='text' class='maybank'>
            </td>
           <td>
            <input type='text' class='bankislam'/>
            </td>
            <td>
            <input type='text' class='total' disabled='true' />
            </td>
            </tr>
            <tr>
           <td>3</td>
           <td>Nisa</td>
            <td>
            <input type='text' class='maybank'>
            </td>
           <td>
            <input type='text' class='bankislam'/>
            </td>
            <td>
            <input type='text' class='total' disabled='true' />
            </td>
            </tr>
            <tr>
           <td>4</td>
           <td>Lin</td>
            <td>
            <input type='text' class='maybank'>
            </td>
           <td>
            <input type='text' class='bankislam'/>
            </td>
            <td>
            <input type='text' class='total' disabled='true' />
            </td>
            </tr>
             <tr >
             <td>&nbsp;</td>
            <td></td>
            <td align="center">total sum: <span id="summaybank">0</span></td>
            <td align="center">total sum: <span id="sumbankislam">0</span></td>
             <td align="center">total sum: <span id="totalall">0</span></td>
            
             </tr>
              <td>&nbsp;</td>
            <td></td>
            <td align="center"><p>Mean: <span id="maybankmean">0</span></p>
                               <p>Mode : <span id="maybankmode">0</span></p>
                               <p>median : <span id="maybankmedian">0</span></p></td>
            <td align="center"><p>Mean: <span id="bankislammean">0</span></p>
                               <p>Mode : <span id="bankislammode">0</span></p>
                               <p>median : <span id="bankislammedian">0</span></p></td>
             <td align="center"><p>Mean: <span id="totalmean">0</span></p>
                               <p>Mode : <span id="totalmode">0</span></p>
                               <p>median : <span id="totalmedian">0</span></p></td>
            
             </tr>
        </tbody>
</table>
	</body>
</html>
