
    /* function untuk kira dart
    nama : w. amirah wahidah bt w. mat amin 
    tarikh : 26/3/14*/
    /* function validate nilai negative
    nama : Khairunnisa bt mat ghani
    tarikh : 27/3/2014*/

            $(document).ready(function(){
                $("area").click(function() {
                    //x complete lgi
                    var i =1;
                    for (var i=1;i<=6;i++){
 
                            if(i>0 && i<=3){

                                    var player = 'player 1';
                                    var result1 = +$('#total1').val();
                                    var start =result1;
                                
                            }
                                

                            if(i>3 && i<=6){
                                var player = 'player 2';
                                var result = +$('#total2').val();
                                var start =result;
                           // break;
                        }
                     }

                
                        if ($(this).attr("id") == 't12'){
                            var start = start - (12*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't18'){
                            var start = start - (18*3);
                               if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't17'){
                            var start = start - (17*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's50'){
                            var start = start - (50);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's25_1'){
                            var start = start - (25);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                        else if ($(this).attr("id") == 's25_2'){
                            var start = start - (25);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                        else if ($(this).attr("id") == 's25_3'){
                            var start = start - (25);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                        else if ($(this).attr("id") == 's25_4'){
                            var start = start - (25);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                        else if ($(this).attr("id") == 's25_5'){
                            var start = start - (25);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                        else if ($(this).attr("id") == 's25_6'){
                            var start = start - (25);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                        else if ($(this).attr("id") == 's25_7'){
                            var start = start - (25);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd1'){
                            var start = start - (1*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's1'){
                            var start = start - (1);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't1'){
                            var start = start - (1*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        } 
                    else if ($(this).attr("id") == 's1_2'){
                            var start = start - (1);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd2'){
                            var start = start - (2*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's2'){
                            var start = start - (2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't2'){
                            var start = start - (2*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        } 
                    else if ($(this).attr("id") == 's2_2'){
                            var start = start - (2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd3'){
                            var start = start - (2*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        } 
                    else if ($(this).attr("id") == 's3'){
                            var start = start - (3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        } 
                    else if ($(this).attr("id") == 't3'){
                            var start = start - (3*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's3_2'){
                            var start = start - (3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd4'){
                            var start = start - (2*4);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }

                        }
                    else if ($(this).attr("id") == 's4'){
                            var start = start - (4);

                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }   
                    else if ($(this).attr("id") == 't4'){
                            var start = start - (3*4);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's4_2'){
                            var start = start - (4);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd5'){
                            var start = start - (5*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's5'){
                            var start = start - (5);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's5_2'){
                            var start = start - (5);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't5'){
                            var start = start - (5*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd6'){
                            var start = start - (6*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's6'){
                            var start = start - (6);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's6_2'){
                            var start = start - (6);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                                
                        }
                    else if ($(this).attr("id") == 't6'){
                            var start = start - (6*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd7'){
                            var start = start - (7*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's7'){
                            var start = start - (7);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's7_2'){
                            var start = start - (7);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't7'){
                            var start = start - (7*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd8'){
                            var start = start - (8*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's8'){
                            var start = start - (8);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's8_2'){
                            var start = start - (8);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't8'){
                            var start = start - (8*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd9'){
                            var start = start - (9*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's9'){
                            var start = start - (9);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's9_2'){
                            var start = start - (9);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't9'){
                            var start = start - (9*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd10'){
                            var start = start - (10*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's10'){
                            var start = start - (10);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's10_2'){
                            var start = start - (10);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't10'){
                            var start = start - (10*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd11'){
                            var start = start - (11*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's11'){
                            var start = start - (11);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's11_2'){
                            var start = start - (11);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't11'){
                            var start = start - (11*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd12'){
                            var start = start - (12*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's12'){
                            var start = start - (12);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's12_2'){
                            var start = start - (12);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd13'){
                            var start = start - (13*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's13'){
                            var start = start - (13);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's13_2'){
                            var start = start - (13);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't13'){
                            var start = start - (13*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd14'){
                            var start = start - (14*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's14'){
                            var start = start - (14);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's14_2'){
                            var start = start - (14);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't14'){
                            var start = start - (14*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd15'){
                            var start = start - (15*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's15'){
                            var start = start - (15);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's15_2'){
                            var start = start - (15);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }      
                    else if ($(this).attr("id") == 't15'){
                            var start = start - (15*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd16'){
                            var start = start - (16*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's16'){
                            var start = start - (16);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's16_2'){
                            var start = start - (16);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't16'){
                            var start = start - (16*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd17'){
                            var start = start - (17*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's17'){
                            var start = start - (17);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's17_2'){
                            var start = start - (17);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd18'){
                            var start = start - (18*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's18'){
                            var start = start - (18);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's18_2'){
                            var start = start - (18);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd19'){
                            var start = start - (19*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's19'){
                            var start = start - (19);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's19_2'){
                            var start = start - (19);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't19'){
                            var start = start - (19*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 'd20'){
                            var start = start - (20*2);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's20'){
                            var start = start - (20);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 's20_2'){
                            var start = start - (20);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't20'){
                            var start = start - (20*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                        //function return total untuk player 1 dan player 2
                            if (player =='player 1')
                                {
                                    $('#total1').val(start);
                                }
                       else if (player =='player 2')
                                {
                                    $('#total2').val(start);
                                }

                        //function  untuk tentukan pemenang
                            if ($('#total1').val() == '0')
                                {
                                    alert('Player 1 is the winner');
                                    window.location= "dart.php";
                                }

                        
                      else if ($('#total2').val() == '0')
                                {
                                    alert('Player 2 is the winner');
                                    window.location= "dart.php";
                                }

                });
            });
/*
                $(".player2").click(function(){
                $(this).removeClass('player1').addClass('player2');
                });*/

                 $(document).ready(function(){
                        $("area").click(function() {
                            //var start = +$('.total1').val();
                        
                               if ($('#total1').val() == 2 ) {

                                  alert("You need to target double 1");
                               }    

                               else if ($('#total1').val() == 3 ) {

                                  alert("You need to target 1 and double 1");
                               }

                                else if ($('#total1').val() == 4 ) {

                                  alert("You need to target double 2");
                                }

                                else if ($('#total1').val() == 5 ) {

                                  alert("You need to target 3 and double 1");
                               }


                                  else if ($('#total1').val() == 6 ) {

                                      alert("You need to target double 3");
                                }

                                  else if ($('#total1').val() == 7 ) {
                                      alert("You need to target 5 and double 1");
                                }

                                 else if ($('#total1').val() == 8 ) {
                                      alert("You need to target double 4");
                                }

                                 else if ($('#total1').val() == 9) {
                                     alert("You need to target triple 3 OR  7 and double 1");
                               }
                                
                        });
                 });


                 $(document).ready(function(){
                        $("area").click(function() {
                            //var start = +$('.total2').val();
                        
                               if ($('#total2').val() == 2 ) {

                                  alert("You need to target double 1");
                               }    

                               else if ($('#total2').val() == 3 ) {

                                  alert("You need to target 1 and double 1");
                               }

                                else if ($('#total2').val() == 4 ) {

                                  alert("You need to target double 2");
                                }

                                else if ($('.total2').val() == 5 ) {

                                  alert("You need to target 3 and double 1");
                               }


                                  else if ($('#total2').val() == 6 ) {

                                      alert("You need to target double 3");
                                }

                                  else if ($('#total2').val() == 7 ) {
                                      alert("You need to target 5 and double 1");
                                }

                                 else if ($('#total2').val() == 8 ) {
                                      alert("You need to target double 4");
                                }

                                 else if ($('#total2').val() == 9) {
                                     alert("You need to target triple 3 OR  7 and double 1");
                               }
                                
                        });
                 });