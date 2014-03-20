<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/quiz.css">
<script src="js/jquery-2.1.0.min.js">
</script>


<script>
$(document).ready(function(){
  $("#bank").keyup(function(){
      
     var maybank = +$('#maybank').val();
     var bankislam = +$('#bankislam').val();
     
     total= maybank + bankislam;
     $('#total').val(total);
     
     
  });
});

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
                <input type="text" id="maybank" />
            </td>
            <td>
                <input type="text" id="bankislam" />
            </td>
            <td>
                <input type="text" id="total" disabled="true" />
            </td>
        </tr>
    </tbody>
</table>

</body>
</html>