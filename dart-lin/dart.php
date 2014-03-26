<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/quiz.css">
<script src="js/jquery-2.1.0.min.js">

</script>
    <script>
   
    var image = $('#dart');

    image.mapster(
    {
        fillOpacity: 1.4,
        fillColor: "d42e16",
        stroke: true,
        strokeColor: "3320FF",
        strokeOpacity: 1.8,
        strokeWidth: 9,
        singleSelect: true,
        mapKey: 'name',
        listKey: 'name',
        onClick: function (e) {
            var newToolTip = defaultDipTooltip;
            
            // update text depending on area selected
            $('#selections').html(xref[e.key]);
            
            // if Asparagus selected, change the tooltip
            if (e.key === 'asparagus') {
                newToolTip = "";
            }
            image.mapster('set_options', { 
                areas: [{
                    key: "dip",
                    toolTip: newToolTip
                    }]
                });
        },
        showToolTip: true,
        toolTipClose: ["tooltip-click", "area-click"],
        areas: [
            {
                key: "s1",
                fillColor: "red"
            },
            {
                key: "s1",
                fillColor: "blue"
            },
            {
                key: "carrots",
                fillColor: "000000"
            },
            {
                key: "dip",
                toolTip: defaultDipTooltip
            },
            {
                key: "s2",
                strokeColor: "FFFFFF"
            }
            ]
    });
    </script>


</head>
<body>


<img id="Image-Maps-Com-image-maps-2014-03-26-022649" src="http://www.image-maps.com/m/private/12289/10308-bvup3f4vrkd85a0b5u0egrt2u6_dart.jpg" border="0" width="600" height="600" orgWidth="600" orgHeight="600" usemap="#image-maps-2014-03-26-022649" alt="" />
<map name="image-maps-2014-03-26-022649" id="ImageMapsCom-image-maps-2014-03-26-022649">
<area shape="rect" coords="598,598,600,600" alt="Image Map" style="outline:none;" title="Image Map" href="http://www.image-maps.com/index.php?aff=mapped_users_12289" />
<area id="d1" alt="" title="double 1" href="" shape="poly" coords="329,114,358,124,386,134,382,143,330,126"    />
<area id="s1" alt="" title="single 1" href="" shape="poly" coords="327,128,316,189,353,200,380,146,358,134"     />
<area id="t1" alt="" title="triple 1" href="" shape="poly" coords="318,190,317,200,350,212,354,200"    />
<area id="s1_2" alt="" title="single 1" href="" shape="poly" coords="317,200,349,212,307,292,300,291"    />
<area id="d2" alt="" title="double 2" href="" shape="poly" coords="385,483,390,492,416,476,440,459,429,449"     />
<area id="s2" alt="" title="single 2" href="" shape="poly" coords="385,482,356,427,386,404,431,448,411,466"      />
<area id="t2" alt="" title="triple 2" href="" shape="poly" coords="351,416,354,426,388,404,378,396"      />
<area id="s2_2" alt="" title="single 2" href="" shape="poly" coords="349,412,379,392,312,330,308,332"     />
<area id="d3" alt="" title="double 3" href="" shape="poly" coords="268,500,264,515,297,516,328,515,325,501"    />
<area id="s3" alt="" title="single 3" href="" shape="poly" coords="267,501,279,439,315,440,324,502,295,503"     />
<area id="t3" alt="" title="triple 3" href="" shape="poly" coords="280,427,277,439,300,440,312,439,314,428"     />
<area id="s3_2" alt="" title="single 3" href="" shape="poly" coords="279,425,295,333,300,340,311,428"      />
<area id="d4" alt="" title="double 4" href="" shape="poly" coords="439,170,432,179,468,226,475,221,464,201"     />
<area id="s4" alt="" title="single 4" href="" shape="poly" coords="429,180,386,224,411,256,468,227,450,199"     />
<area id="t4" alt="" title="triple 4" href="" shape="poly" coords="379,233,386,226,408,256,398,261"    />
<area id="s4_2" alt="" title="single 4" href="" shape="poly" coords="376,233,310,297,316,304,397,262,391,247"      />
<area id="d5" alt="" title="double 5" href="" shape="poly" coords="208,134,212,142,268,126,264,116,236,123"      />
<area id="s5" alt="" title="single 5" href="" shape="poly" coords="215,145,241,198,276,188,266,126"     />
<area id="t5" alt="" title="triple 5" href="" shape="poly" coords="240,200,244,210,277,198,276,188"    />
<area id="s5_2" alt="" title="single 5" href="" shape="poly" coords="245,212,285,293,292,290,280,200"      />
<area id="d6" alt="" title="double 6" href="" shape="poly" coords="486,284,496,283,497,343,489,342"      />
<area id="s6" alt="" title="single 6" href="" shape="poly" coords="485,281,424,294,423,332,486,341,488,310"      />
<area id="t6" alt="" title="triple 6" href="" shape="poly" coords="411,296,420,293,422,331,408,330"    />
<area id="s6_2" alt="" title="single 6" href="" shape="poly" coords="316,310,410,296,409,331,318,317"      />
<area id="d7" alt="" title="double 7" href="" shape="poly" coords="154,457,163,449,208,484,203,493"      />
<area id="s7" alt="" title="single 7" href="" shape="poly" coords="162,448,207,405,236,425,207,480,182,464"      />
<area id="t7" alt="" title="triple 7" href="" shape="poly" coords="208,403,214,395,243,416,238,428"    />
<area id="s7_2" alt="" title="single 7" href="" shape="poly" coords="217,394,244,413,286,333,280,332"      />
<area id="d8" alt="" title="double 8" href="" shape="poly" coords="99,344,106,379,116,404,126,397,108,343"      />
<area id="s8" alt="" title="single 8" href="" shape="poly" coords="109,343,128,398,182,368,168,334"      />
<area id="t8" alt="" title="triple 8" href="" shape="poly" coords="171,332,184,328,192,364,184,370"     />
<area id="s8_2" alt="" title="single 8" href="" shape="poly" coords="186,331,196,363,275,325,271,318"      />
<area id="d9" alt="" title="double 9" href="" shape="poly" coords="153,172,117,221,128,226,164,180"     />
<area id="s9" alt="" title="single 9" href="" shape="poly" coords="163,180,207,224,184,255,128,228"      />
<area id="t9" alt="" title="triple 9" href="" shape="poly" coords="207,224,216,233,195,262,184,256"     />
<area id="s9_2" alt="" title="single 9" href="" shape="poly" coords="216,232,195,260,276,303,281,295"      />
<area id="d10" alt="" title="double 10" href="" shape="poly" coords="486,344,496,344,489,377,479,402,468,400"     />
<area id="s10" alt="" title="single 10" href="" shape="poly" coords="484,344,422,334,419,353,411,369,466,399,478,376"      />
<area id="t10" alt="" title="triple 10" href="" shape="poly" coords="410,331,421,333,409,371,399,369"     />
<area id="s10_2" alt="" title="single 10" href="" shape="poly" coords="409,331,398,364,318,323,319,317"     />
<area id="d11" alt="" title="" href="double 11" shape="poly" coords="98,281,95,314,97,341,108,339,109,283"      />
<area id="s11" alt="" title="single 11" href="" shape="poly" coords="108,283,170,293,171,332,109,341"      />
<area id="t11" alt="" title="triple 11" href="" shape="poly" coords="173,294,183,297,180,330,171,331"     />
<area id="s11_2" alt="" title="single 11" href="" shape="poly" coords="184,295,275,310,272,317,184,330"     />
<area id="d12" alt="" title="double 12" href="" shape="poly" coords="156,171,177,152,203,135,212,146,163,179"      />
<area id="s12" alt="" title="single 12" href="" shape="poly" coords="164,179,212,145,237,199,208,221"      />
<area id="t12" alt="" title="triple 12" href="" shape="poly" coords="208,222,238,201,244,212,217,232"     />
<area id="s12_2" alt="" title="single 12" href="" shape="poly" coords="217,231,282,296,284,293,245,212"     />
<area id="d13" alt="" title="double 13" href="" shape="poly" coords="466,229,477,224,497,280,484,280"      />
<area id="s13" alt="" title="single 13" href="" shape="poly" coords="464,230,410,256,424,292,484,280,477,252"     />
<area id="t13" alt="" title="triple 13" href="" shape="poly" coords="398,260,409,256,422,292,410,295"      />
<area id="s13_2" alt="" title="single 13" href="" shape="poly" coords="397,265,409,294,317,308,317,304"     />
<area id="d14" alt="" title="double 14" href="" shape="poly" coords="116,221,105,252,97,280,109,280,125,228"      />
<area id="s14" alt="" title="single 14" href="" shape="poly" coords="128,228,116,256,108,282,171,290,182,256"     />
<area id="t14" alt="" title="triple 14" href="" shape="poly" coords="184,256,193,262,184,294,172,293"     />
<area id="s14_2" alt="" title="single 14" href="" shape="poly" coords="194,263,276,304,274,309,184,295"      />
<area id="d15" alt="" title="double 15" href="" shape="poly" coords="468,400,477,405,464,429,440,455,433,449"    />
<area id="s15" alt="" title="single 15" href="" shape="poly" coords="410,372,467,401,451,427,432,448,388,402"     />
<area id="t15" alt="" title="triple 15" href="" shape="poly" coords="399,366,378,394,387,403,409,371"    />
<area id="s15_2" alt="" title="single 15" href="" shape="poly" coords="398,367,380,395,313,328,318,324"      />
<area id="d16" alt="" title="double 16" href="" shape="poly" coords="116,404,125,400,157,448,151,455"     />
<area id="s16" alt="" title="single 16" href="" shape="poly" coords="128,399,143,426,160,447,205,404,183,372"     />
<area id="t16" alt="" title="triple 16" href="" shape="poly" coords="186,371,192,368,212,393,205,401"     />
<area id="s16_2" alt="" title="single 16" href="" shape="poly" coords="193,365,216,392,284,328,276,324"     />
<area id="d17" alt="" title="double 17" href="" shape="poly" coords="382,484,389,496,360,505,329,515,327,504"      />
<area id="s17" alt="" title="single 17" href="" shape="poly" coords="316,440,327,500,383,482,355,427"      />
<area id="t17" alt="" title="triple 17" href="" shape="poly" coords="316,439,315,426,349,416,354,426"      />
<area id="s17_2" alt="" title="single 17" href="" shape="poly" coords="314,425,332,424,348,416,307,332,299,336"      />
<area id="d18" alt="" title="double 18" href="" shape="poly" coords="388,133,384,144,431,178,436,168,418,152"     />
<area id="s18" alt="" title="single 18" href="" shape="poly" coords="380,147,431,177,386,220,356,201"      />
<area id="t18" alt="" title="triple 18" href="" shape="poly" coords="356,201,349,210,378,232,387,224"      />
<area id="s18_2" alt="" title="single 18" href="" shape="poly" coords="349,213,375,232,312,296,307,295"      />
<area id="d19" alt="" title="double 19" href="" shape="poly" coords="209,484,234,494,265,501,262,513,236,507,204,496"   />
<area id="s19" alt="" title="single 19" href="" shape="poly" coords="207,483,234,493,264,502,277,437,240,427"     />
<area id="t19" alt="" title="triple 19" href="" shape="poly" coords="244,416,238,424,276,438,276,428"      />
<area id="s19_2" alt="" title="single 19" href="" shape="poly" coords="244,414,279,427,295,336,284,334"     />
<area id="d20" alt="" title="double 20" href="" shape="poly" coords="265,116,267,126,299,124,328,127,328,113,290,112"      />
<area id="s20" alt="" title="single 20" href="" shape="poly" coords="269,126,278,187,318,187,326,127"      />
<area id="t20" alt="" title="triple 20" href="" shape="poly" coords="277,188,279,201,314,200,316,190"      />
<area id="s20_2" alt="" title="single 20" href="" shape="poly" coords="280,200,314,200,299,289,295,292"     />
<area id="s25" alt="" title="single 25" href="" shape="poly" coords="317,310,314,323,307,331,294,334,279,323,278,313,283,301,294,296,307,297"      />
<area id="s50" alt="" title="single 50" href="" shape="poly" coords="296,306.40000915527344,305,310.40000915527344,304,320.40000915527344,296,322.40000915527344,292,318.40000915527344,290,310.40000915527344"      />
</map>



</body>
</html>