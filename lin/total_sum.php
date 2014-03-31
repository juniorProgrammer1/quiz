<html>
<head>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<script src="js/jquery-2.1.0.min.js">

</script>
   
<script>
     $.fn.sumValues = function() {
    var sum = 0; 
    this.each(function() {
        if ( $(this).is(':input') ) {
            var val = $(this).val();
        } else {
            var val = $(this).text();
        }
        sum += parseFloat( ('0' + val).replace(/[^0-9-\.]/g, ''), 10 );
    });
    return sum;
    };
    
</script>

<script>
    //total of each maybank and bank islam
    $(document).ready(function() {
    $('input.txt1').bind('keyup', function() {
        $('span.total1').html( $('input.txt1').sumValues() );
    });
    $('input.txt2').bind('keyup', function() {
        $('span.total2').html( $('input.txt2').sumValues() );
        });
        });

        //sum of maybank and bank islam
            $(document).ready(function(){
                
            $("#bank").keyup(function () {
            $('.table tbody tr').each(function() {
                    var maybank = +$(this).find('input.txt1').val();
                    var bankislam =  +$(this).find('input.txt2').val();
                    var sum = (maybank + bankislam);
                    $(this).find('input.sum').val(sum);    
                    });
            return false;
                });
        });


 $(document).ready(function(){
  $("#bank").keyup(function(){
      medianMaybank();
      medianBankIslam();
    });
  });


      function medianMaybank(values) {

    values.sort( function(a,b) {return a - b;} );

    var total1 = Math.floor(values.length/2);

    if(values.length % 2)
        return values[total1];
    else
        return (values[total1-1] + values[total1]) / 2.0;
}



</script>

<style>
table
{
border-collapse:collapse;
}
table, td, th
{
border:3px solid black;
}
</style>
    <title></title>
</head>
<body>

<table class="table table-bordered" id="bank" cellpadding="10" style="width:500px">
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
                <input class="txt1" type="text" name="txt1" id="maybank" />
            </td>
            <td>
                <input class="txt2" type="text" name="txt2" id="bankislam" />
            </td>
            <td>
                <input type="text" class="sum" disabled="true" />
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td>Adam</td>
            <td>
                <input class="txt1" type="text" name="txt1" id="maybank" />
            </td>
            <td>
                <input class="txt2" type="text" name="txt2" id="bankislam" />
            </td>
            <td>
                <input type="text" class="sum" disabled="true" />
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Sarah</td>
            <td>
                <input class="txt1" type="text" name="txt1" id="maybank" />
            </td>
            <td>
                <input class="txt2" type="text" name="txt2" id="bankislam" />
            </td>
            <td>
                <input type="text" class="sum" disabled="true" />
            </td>
        </tr>
        
        <tr>
            <td>4</td>
            <td>Julia</td>
            <td>
                <input class="txt1" type="text" name="txt1" id="maybank" />
            </td>
            <td>
                <input class="txt2" type="text" name="txt2" id="bankislam" />
            </td>
            <td>
                <input type="text" class="sum" disabled="true" />
            </td>
        </tr>

         <tr>
            <td>5</td>
            <td>Bob</td>
            <td>
                <input class="txt1" type="text" name="txt1" id="maybank" />
            </td>
            <td>
                <input class="txt2" type="text" name="txt2" id="bankislam" />
            </td>
            <td>
                <input type="text" class="sum" disabled="true" />
            </td>
        </tr>

         <tr>
            <td>6</td>
            <td>Kitty</td>
            <td>
                <input class="txt1" type="text" name="txt1" id="maybank" />
            </td>
            <td>
                <input class="txt2" type="text" name="txt2" id="bankislam" />
            </td>
            <td>
                <input type="text" class="sum" disabled="true" />
            </td>
        </tr>
    

<tr>
    <td></td>
    <td></td>
    <td>Amount of MayBank: <span class="total1"></span></td>
    <td>Amount of Bank Islam: <span class="total2"></span></td>

</tr>
<tr>
            <td></td>
            <td>Mean</td>
            <td>
                <input class="txt1_mean" type="text" disabled="true" />
            </td>
            <td>
                <input class="txt2_mean" type="text" disabled="true" />
            </td>
            <td>
                <input type="text" class="sum" disabled="true" />
            </td>
        </tr>

<tr>
            <td></td>
            <td>Mode</td>
            <td>
                <input class="txt1_mode" type="text" disabled="true" />
            </td>
            <td>
                <input class="txt2_mode" type="text" disabled="true" />
            </td>
            <td>
                <input type="text" class="sum" disabled="true" />
            </td>
        </tr>

    <tr>
            <td></td>
            <td>Median</td>
            <td>
                <input class="txt1_median" type="text" disabled="true" />
            </td>
            <td>
                <input class="txt2_median" type="text" disabled="true" />
            </td>
            <td>
                <input type="text" class="sum" disabled="true" />
            </td>
        </tr>

</tbody>
</table>
</body>
</html>




