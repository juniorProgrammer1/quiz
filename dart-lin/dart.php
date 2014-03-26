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


<img id="dart" src="http://www.image-maps.com/m/private/12289/10291-bvup3f4vrkd85a0b5u0egrt2u6_dart.jpg" border="0" width="1000" height="1000" orgWidth="1000" orgHeight="1000" usemap="#image-maps-2014-03-25-211224" border="0" width="1000" height="1000" orgWidth="1000" orgHeight="1000" usemap="#image-maps-2014-03-25-211224" alt="" />
<map name="image-maps-2014-03-25-211224" id="ImageMapsCom-image-maps-2014-03-25-211224">
<area id="t12" alt="" title="triple 12" href="" shape="rect" coords="364,345,390,374"     />
<area id="t18" alt="" title="triple 18" href="" shape="rect" coords="595,347,627,375"  />
<area id="t17" alt="" title="triple 17" href="" shape="rect" coords="540,703,573,729"    />
<area id="s50" alt="" title="single 50" href="" shape="rect" coords="479,507,512,533"     />
<area id="s25" alt="" title="single 25" href="" shape="rect" coords="491,492,520,513"      />
<area shape="rect" coords="998,998,1000,1000" alt="Image Map"  title="Image Map" href="" />
<area id="d1" alt="" title="double 1" href="" shape="poly" coords="551,192,547,210,637,240,646,222,603,207"     />
<area name="s1" id="s1" alt="" title="single 1" href="" shape="poly" coords="547,212,529,314,589,332,638,243"      />
<area id="t3" alt="" title="triple 3" href="" shape="poly" coords="528,314,588,335,578,355,525,332"    />
<area id="s1_2" alt="" title="single 1" href="" shape="poly" coords="524,354,500,484,509,489,580,355,528,336"      />
<area id="d2" alt="" title="double 2" href="" shape="poly" coords="721,750,642,804,651,823,697,794,733,763"  />
<area id="s2" alt="" title="single 2" href="" shape="poly" coords="592,710,645,674,717,748,683,776,641,803"     />
<area id="t2" alt="" title="triple 2" href="" shape="poly" coords="584,693,631,662,642,673,617,692,593,706"    />
<area id="s2_2" alt="" title="single 2" href="" shape="poly" coords="514,554,519,548,629,658,603,680,583,690"      />
<area id="d3" alt="" title="double 3" href="" shape="poly" coords="541,838,545,857,492,861,443,854,446,839"   />
<area id="s3" alt="" title="single 3" href="" shape="poly" coords="465,740,448,835,495,836,541,837,527,735" 
<area id="t3" alt="" title="triple 3" href="" shape="poly" coords="466,711,522,713,524,728,496,732,468,732"    />
<area id="s3_2" alt="" title="single 3" href="" shape="poly" coords="492,556,499,557,522,709,494,711,469,706"      />
<area id="d4" alt="" title="double 4" href="" shape="poly" coords="738,289,791,371,778,376,752,335,718,298"     />
<area id="s4" alt="" title="single 4" href="" shape="poly" coords="718,301,774,379,685,422,648,374"     />
<area id="t4" alt="" title="triple 4" href="" shape="poly" coords="643,376,633,390,665,432,680,424" />
<area id="s4_2" alt="" title="single 4" href="" shape="poly" coords="631,390,519,497,525,504,665,435,647,411"     />
<area id="d5" alt="" title="double 5" href="" shape="poly" coords="346,224,353,238,444,210,440,196,394,205"     />
<area id="s5" alt="" title="single 5" href="" shape="poly" coords="353,240,404,331,463,308,444,212"     />
<area id="t5" alt="" title="triple 5" href="" shape="poly" coords="404,333,458,317,464,332,410,349"     />
<area id="s5_2" alt="" title="single 5" href="" shape="poly" coords="409,353,478,489,491,479,464,336"   />
<area id="d6" alt="" title="double 6" href="" shape="poly" coords="812,474,825,471,832,525,829,573,813,568"    />
<area id="s6" alt="" title="single 6" href="" shape="poly" coords="806,472,708,491,708,553,805,567,812,523"    />
<area id="t6" alt="" title="triple 6" href="" shape="poly" coords="686,491,702,490,704,525,703,552,689,549"     />
<area id="s6_2" alt="" title="single 6" href="" shape="poly" coords="683,494,531,516,533,525,684,549"     />
<area id="d7" alt="" title="double 7" href="" shape="poly" coords="258,761,269,746,308,784,346,810,338,822,296,791"      />
<area id="s7" alt="" title="single 7" href="" shape="poly" coords="270,744,345,676,395,711,346,802"      />
<area id="t7" alt="" title="triple 7" href="" shape="poly" coords="348,671,360,659,407,693,397,711"   />
<area id="s7_2" alt="" title="single 7" href="" shape="poly" coords="361,654,471,550,479,557,406,687"     />
<area id="d8" alt="" title="double 8" href="" shape="poly" coords="162,573,182,572,211,666,195,674,178,635"     />
<area id="s8" alt="" title="single 8" href="" shape="poly" coords="185,571,285,554,307,615,215,663,194,619"      />
<area id="t8" alt="" title="triple 8" href="" shape="poly" coords="288,556,304,554,321,608,308,616"    />
<area id="s8_2" alt="" title="single 8" href="" shape="poly" coords="309,550,323,605,461,537,457,531"      />
<area id="d9" alt="" title="double 9" href="" shape="poly" coords="255,289,270,302,214,375,200,367"    />
<area id="s9" alt="" title="single 9" href="" shape="poly" coords="214,380,306,423,343,374,272,303"     />
<area id="t9" alt="" title="triple 9" href="" shape="poly" coords="312,425,328,431,358,385,343,377"    />
<area id="s9_2" alt="" title="single 9" href="" shape="poly" coords="332,438,463,506,467,495,358,389,327,436"     />
<area id="d10" alt="" title="double 10" href="" shape="poly" coords="810,574,827,577,816,622,796,672,782,666"     />
<area id="s10" alt="" title="single 10" href="" shape="poly" coords="808,575,707,558,686,616,781,664"     />
<area id="t10" alt="" title="triple 10" href="" shape="poly" coords="688,552,704,555,682,617,667,607"     />
<area id="s10_2" alt="" title="single 10" href="" shape="poly" coords="680,554,532,527,530,537,666,606"      />
<area id="d11" alt="" title="double 11" href="" shape="poly" coords="162,470,178,474,181,568,163,572"     />
<area id="s11" alt="" title="single 11" href="" shape="poly" coords="185,472,286,490,286,554,184,568"     />
<area id="t11" alt="" title="triple 11" href="" shape="poly" coords="294,493,304,493,301,550,288,552,287,493"      />
<area id="s11_2" alt="" title="single 11" href="" shape="poly" coords="310,492,457,519,455,529,307,546"      />
<area id="d12" alt="" title="double 12" href="" shape="poly" coords="259,282,270,295,349,241,342,228"   />
<area id="s12" alt="" title="single 12" href="" shape="poly" coords="358,251,399,332,347,365,273,297,353,241"    />
<area id="s12_2" alt="" title="single 12" href="" shape="poly" coords="361,385,471,494,474,489,409,355"      />
<area id="d13" alt="" title="double 13" href="" shape="poly" coords="781,379,793,374,826,467,809,469"      />
<area id="s13" alt="" title="single 13" href="" shape="poly" coords="689,425,774,381,809,470,706,484"     />
<area id="s13_2" alt="" title="single 13" href="" shape="poly" coords="668,444,685,490,531,515,530,506,666,437"      />
<area id="t13" alt="" title="triple 13" href="" shape="poly" coords="667,435,681,432,699,486,684,490"    />
<area id="d14" alt="" title="double 14" href="" shape="poly" coords="193,373,208,382,178,471,162,467"      />
<area id="s14" alt="" title="single 14" href="" shape="poly" coords="212,379,182,469,283,487,303,427"      />
<area id="t14" alt="" title="triple 14" href="" shape="poly" coords="309,429,325,436,301,492,290,488"     />
<area id="s14_2" alt="" title="single 14" href="" shape="poly" coords="326,438,309,492,459,515,458,506"    />
<area id="d15" alt="" title="double 15" href="" shape="poly" coords="777,670,793,678,771,719,737,757,722,748"     />
<area id="s15" alt="" title="single 15" href="" shape="poly" coords="778,669,683,620,649,672,720,744"      />
<area id="t15" alt="" title="triple 15" href="" shape="poly" coords="665,614,636,658,644,668,663,648,680,620"      />
<area id="s15_2" alt="" title="single 15" href="" shape="poly" coords="663,610,527,537,519,546,633,655"      />
<area id="d16" alt="" title="double 16" href="" shape="poly" coords="196,676,208,668,266,746,254,756,228,724"     />
<area id="s16" alt="" title="single 16" href="" shape="poly" coords="214,664,307,617,342,674,265,745"     />
<area id="t16" alt="" title="triple 16" href="" shape="poly" coords="310,618,321,612,357,659,345,666"     />
<area id="s16_2" alt="" title="single 16" href="" shape="poly" coords="327,610,464,539,468,548,360,653"      />
<area id="d17" alt="" title="double 17" href="" shape="poly" coords="548,835,549,856,645,825,635,811"   />
<area id="s17" alt="" title="single 17" href="" shape="poly" coords="635,806,591,711,530,733,548,833,593,823"     />
<area id="s17_2" alt="" title="single 17" href="" shape="poly" coords="523,708,500,556,510,552,579,693"      />
<area id="d18" alt="" title="double 18" href="" shape="poly" coords="648,224,642,241,722,297,725,283"      />
<area id="s18" alt="" title="single 18" href="" shape="poly" coords="637,245,593,334,645,373,714,297,666,264"      />
<area id="t18" alt="" title="triple 18" href="" shape="poly" coords="532,318,528,331,580,352,586,333"    />
<area id="s18_2" alt="" title="single 18" href="" shape="poly" coords="583,354,510,493,517,497,625,386"    />
<area id="d19" alt="" title="double 19" href="" shape="poly" coords="350,809,399,827,439,839,438,857,392,846,343,824"     />
<area id="s19" alt="" title="single 19" href="" shape="poly" coords="352,805,397,713,459,732,441,836"     />
<area id="t19" alt="" title="triple 19" href="" shape="poly" coords="407,694,403,709,458,729,458,716"      />
<area id="s19_2" alt="" title="single 19" href="" shape="poly" coords="412,689,480,553,490,557,464,710,409,692"      />
<area id="d20" alt="" title="double 20" href="" shape="poly" coords="444,190,445,211,502,206,546,209,545,192"      />
<area id="s20" alt="" title="single 20" href="" shape="poly" coords="446,216,465,312,528,311,543,210,489,207"      />
<area id="t20" alt="" title="triple 20" href="" shape="poly" coords="464,315,471,333,522,330,526,315"     />
<area id="s20_2" alt="" title="single 20" href="" shape="poly" coords="469,334,522,337,498,490,490,487"      />
</map>

</map>


</body>
</html>