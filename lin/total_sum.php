<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/quiz.css">
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
            $("#bank").bind('each keyup',function () {
                     var val1 = +$('#maybank').val();
                    var val2 = +$('#bankislam').val();
                    var sum = val1 + val2;
                    $('input.sum').val(sum);    
                    });
            
                });

        </script>
<style>
table
{
border-collapse:collapse;
}
table, td, th
{
border:3px solid teal;
}
</style>
    <title></title>
</head>
<body>

<table class="table table-bordered" id="bank" cellpadding="10" >
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

        
    </tbody>

<tr>
    <td></td>
    <td></td>
    <td>Amount of MayBank: <span class="total1"></span></td>
    <td>Amount of Bank Islam: <span class="total2"></span></td>

</tr>

</table>
</body>
</html>




