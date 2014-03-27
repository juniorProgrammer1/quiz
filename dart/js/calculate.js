
    /* function untuk kira dart
    nama : w. amirah wahidah bt w. mat amin 
    tarikh : 26/3/14*/
    /* function validate nilai negative
    nama : Khairunnisa bt mat ghani
    tarikh : 27/3/2014*/

            $(document).ready(function(){
                $("area").click(function() {
                    var start = +$('.total1').val();
                
                        if ($(this).attr("id") == 't12'){
                            var start = start - (12*3);
                                if(start < 0) {

                                    alert(" Your hit value is larger.Please Try Again");

                                    return start;

                                }
                        }
                    else if ($(this).attr("id") == 't18'){
                            var start = start - (18*3);
                        }
                    else if ($(this).attr("id") == 't17'){
                            var start = start - (17*3);
                        }
                    else if ($(this).attr("id") == 's50'){
                            var start = start - (50);
                        }
                    else if ($(this).attr("id") == 's25'){
                            var start = start - (25);
                        }
                    else if ($(this).attr("id") == 'd1'){
                            var start = start - (1*2);
                        }
                    else if ($(this).attr("id") == 's1'){
                            var start = start - (1);
                        }
                    else if ($(this).attr("id") == 't1'){
                            var start = start - (1*3);
                        } 
                    else if ($(this).attr("id") == 's1_2'){
                            var start = start - (1);
                        }
                    else if ($(this).attr("id") == 'd2'){
                            var start = start - (2*2);
                        }
                    else if ($(this).attr("id") == 's2'){
                            var start = start - (2);
                        }
                    else if ($(this).attr("id") == 't2'){
                            var start = start - (2*3);
                        } 
                    else if ($(this).attr("id") == 's2_2'){
                            var start = start - (2);
                        }
                    else if ($(this).attr("id") == 'd3'){
                            var start = start - (2*3);
                        } 
                    else if ($(this).attr("id") == 's3'){
                            var start = start - (3);
                        } 
                    else if ($(this).attr("id") == 't3'){
                            var start = start - (3*3);
                        }
                    else if ($(this).attr("id") == 's3_2'){
                            var start = start - (3);
                        }
                    else if ($(this).attr("id") == 'd4'){
                            var start = start - (2*4);
                        }
                    else if ($(this).attr("id") == 's4'){
                            var start = start - (4);
                        }   
                    else if ($(this).attr("id") == 't4'){
                            var start = start - (3*4);
                        }
                    else if ($(this).attr("id") == 's4_2'){
                            var start = start - (4);
                        }
                    else if ($(this).attr("id") == 'd5'){
                            var start = start - (5*2);
                        }
                    else if ($(this).attr("id") == 's5'){
                            var start = start - (5);
                        }
                    else if ($(this).attr("id") == 's5_2'){
                            var start = start - (5);
                        }
                    else if ($(this).attr("id") == 't5'){
                            var start = start - (5*3);
                        }
                    else if ($(this).attr("id") == 'd6'){
                            var start = start - (6*2);
                        }
                    else if ($(this).attr("id") == 's6'){
                            var start = start - (6);
                        }
                    else if ($(this).attr("id") == 's6_2'){
                            var start = start - (6);
                        }
                    else if ($(this).attr("id") == 't6'){
                            var start = start - (6*3);
                        }
                    else if ($(this).attr("id") == 'd7'){
                            var start = start - (7*2);
                        }
                    else if ($(this).attr("id") == 's7'){
                            var start = start - (7);
                        }
                    else if ($(this).attr("id") == 's7_2'){
                            var start = start - (7);
                        }
                    else if ($(this).attr("id") == 't7'){
                            var start = start - (7*3);
                        }
                    else if ($(this).attr("id") == 'd8'){
                            var start = start - (8*2);
                        }
                    else if ($(this).attr("id") == 's8'){
                            var start = start - (8);
                        }
                    else if ($(this).attr("id") == 's8_2'){
                            var start = start - (8);
                        }
                    else if ($(this).attr("id") == 't8'){
                            var start = start - (8*3);
                        }
                    else if ($(this).attr("id") == 'd9'){
                            var start = start - (9*2);
                        }
                    else if ($(this).attr("id") == 's9'){
                            var start = start - (9);
                        }
                    else if ($(this).attr("id") == 's9_2'){
                            var start = start - (9);
                        }
                    else if ($(this).attr("id") == 't9'){
                            var start = start - (9*3);
                        }
                    else if ($(this).attr("id") == 'd10'){
                            var start = start - (10*2);
                        }
                    else if ($(this).attr("id") == 's10'){
                            var start = start - (10);
                        }
                    else if ($(this).attr("id") == 's10_2'){
                            var start = start - (10);
                        }
                    else if ($(this).attr("id") == 't10'){
                            var start = start - (10*3);
                        }
                    else if ($(this).attr("id") == 'd11'){
                            var start = start - (11*2);
                        }
                    else if ($(this).attr("id") == 's11'){
                            var start = start - (11);
                        }
                    else if ($(this).attr("id") == 's11_2'){
                            var start = start - (11);
                        }
                    else if ($(this).attr("id") == 't11'){
                            var start = start - (11*3);
                        }
                    else if ($(this).attr("id") == 'd12'){
                            var start = start - (12*2);
                        }
                    else if ($(this).attr("id") == 's12'){
                            var start = start - (12);
                        }
                    else if ($(this).attr("id") == 's12_2'){
                            var start = start - (12);
                        }
                    else if ($(this).attr("id") == 'd13'){
                            var start = start - (13*2);
                        }
                    else if ($(this).attr("id") == 's13'){
                            var start = start - (13);
                        }
                    else if ($(this).attr("id") == 's13_2'){
                            var start = start - (13);
                        }
                    else if ($(this).attr("id") == 't13'){
                            var start = start - (13*3);
                        }
                    else if ($(this).attr("id") == 'd14'){
                            var start = start - (14*2);
                        }
                    else if ($(this).attr("id") == 's14'){
                            var start = start - (14);
                        }
                    else if ($(this).attr("id") == 's14_2'){
                            var start = start - (14);
                        }
                    else if ($(this).attr("id") == 't14'){
                            var start = start - (14*3);
                        }
                    else if ($(this).attr("id") == 'd15'){
                            var start = start - (15*2);
                        }
                    else if ($(this).attr("id") == 's15'){
                            var start = start - (15);
                        }
                    else if ($(this).attr("id") == 's15_2'){
                            var start = start - (15);
                        }      
                    else if ($(this).attr("id") == 't15'){
                            var start = start - (15*3);
                        }
                    else if ($(this).attr("id") == 'd16'){
                            var start = start - (16*2);
                        }
                    else if ($(this).attr("id") == 's16'){
                            var start = start - (16);
                        }
                    else if ($(this).attr("id") == 's16_2'){
                            var start = start - (16);
                        }
                    else if ($(this).attr("id") == 't16'){
                            var start = start - (16*3);
                        }
                    else if ($(this).attr("id") == 'd17'){
                            var start = start - (17*2);
                        }
                    else if ($(this).attr("id") == 's17'){
                            var start = start - (17);
                        }
                    else if ($(this).attr("id") == 's17_2'){
                            var start = start - (17);
                        }
                    else if ($(this).attr("id") == 'd18'){
                            var start = start - (18*2);
                        }
                    else if ($(this).attr("id") == 's18'){
                            var start = start - (18);
                        }
                    else if ($(this).attr("id") == 's18_2'){
                            var start = start - (18);
                        }
                    else if ($(this).attr("id") == 'd19'){
                            var start = start - (19*2);
                        }
                    else if ($(this).attr("id") == 's19'){
                            var start = start - (19);
                        }
                    else if ($(this).attr("id") == 's19_2'){
                            var start = start - (19);
                        }
                    else if ($(this).attr("id") == 't19'){
                            var start = start - (19*3);
                        }
                    else if ($(this).attr("id") == 'd20'){
                            var start = start - (20*2);
                        }
                    else if ($(this).attr("id") == 's20'){
                            var start = start - (20);
                        }
                    else if ($(this).attr("id") == 's20_2'){
                            var start = start - (20);
                        }
                    else if ($(this).attr("id") == 't20'){
                            var start = start - (20*3);
                        }
                        //tentukan pemenang
                        $('.total1').val(start);

               /*winner();
                if($('.total1').val() == '0'){
                    alert('Player 1 is the winner');
                    window.location= "dart.php";}
   // winner();*/
                });
            });
/*
                $(".player2").click(function(){
                $(this).removeClass('player1').addClass('player2');
                });*/
