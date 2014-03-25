<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/quiz.css">
<script src="js/jquery-2.1.0.min.js">

</script>
    <script>
   // a cross reference of area names to text to be shown for each area
    var xref = {
        carrots: "<b>Carrots</b> are delicious and may turn your skin orange!",
        asparagus: "<b>Asparagus</b> is one of the first vegetables of the spring. " 
            +"Being a dark green, it's great for you, and has interesting side effects.",
        squash: "<b>Squash</b> is a winter vegetable, and not eaten raw too much. Is that really squash?",
        redpepper: "<b>Red peppers</b> are actually the same as green peppers, they've just been left on "
            +"the vine longer. Delicious when fire-roasted.",
        yellowpepper: "Similar to red peppers, <b>yellow peppers</b> are sometimes sweeter.",
        celery: "<b>Celery</b> is a fascinating vegetable. Being mostly water, it actually takes your body "
            +"more calories to process it than it provides.",
        cucumbers: "<b>Cucumbers</b> are cool.",
        broccoli: "<b>Broccoli</b> is like a forest of goodness in your mouth. And very good for you. "
            +"Eat lots of broccoli!",
        dip: "Everything here is good for you but this one. <b>Don't be a dip!</b>"
    };
    
    var defaultDipTooltip = 'I know you want the dip. But it\'s loaded with saturated fat, just skip it '
        +'and enjoy as many delicious, crisp vegetables as you can eat.';
    
    var image = $('#vegetables');

    image.mapster(
    {
        fillOpacity: 0.4,
        fillColor: "d42e16",
        stroke: true,
        strokeColor: "3320FF",
        strokeOpacity: 0.8,
        strokeWidth: 4,
        singleSelect: true,
        mapKey: 'name',
        listKey: 'name',
        onClick: function (e) {
            var newToolTip = defaultDipTooltip;
            
            // update text depending on area selected
            $('#selections').html(xref[e.key]);
            
            // if Asparagus selected, change the tooltip
            if (e.key === 'asparagus') {
                newToolTip = "OK. I know I have come down on the dip before, but let's be real. "
                    +"Raw asparagus without any of that delicious ranch and onion dressing "
                    +"slathered all over it is not so good.";
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
                key: "redpepper",
                fillColor: "ffffff"
            },
            {
                key: "yellowpepper",
                fillColor: "000000"
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
                key: "asparagus",
                strokeColor: "FFFFFF"
            }
            ]
    });
    </script>
</head>
<body>

<div style="clear: both; width: 150px; height: 50px; border: 1px solid black;" id="selections"></div><br>
<div style="clear: both; width: 150px; height: 50px; border: 1px solid black;" id="selections"></div>
<img id="Image-Maps-Com-image-maps-2014-03-25-132725" src="http://www.image-maps.com/m/private/0/rup1qu7u83amj3kr01cqkapjd5_dart.jpg" border="0" width="1000" height="1000" orgWidth="1000" orgHeight="1000" usemap="#image-maps-2014-03-25-132725" alt="" />
<map name="image-maps-2014-03-25-132725" id="ImageMapsCom-image-maps-2014-03-25-132725">
<area  alt="" title="twelve" href="http://www.image-maps.com/" shape="rect" coords="304,271,370,341" style="outline:none;" target="_self"     />
<area  alt="" title="five" href="http://www.image-maps.com/" shape="rect" coords="384,234,450,304" style="outline:none;" target="_self"     />
<area  alt="" title="twenty" href="http://www.image-maps.com/" shape="rect" coords="465,221,531,291" style="outline:none;" target="_self"     />
<area  alt="" title="one" href="http://www.image-maps.com/" shape="rect" coords="555,245,621,315" style="outline:none;" target="_self"     />
<area  alt="" title="eighteen" href="http://www.image-maps.com/" shape="rect" coords="622,273,688,343" style="outline:none;" target="_self"     />
<area  alt="" title="thirteen" href="http://www.image-maps.com/" shape="rect" coords="713,409,779,479" style="outline:none;" target="_self"     />
<area  alt="" title="six" href="http://www.image-maps.com/" shape="rect" coords="737,483,803,553" style="outline:none;" target="_self"     />
<area  alt="" title="ten" href="http://www.image-maps.com/" shape="rect" coords="714,575,780,645" style="outline:none;" target="_self"     />
<area  alt="" title="fifteen" href="http://www.image-maps.com/" shape="rect" coords="686,645,752,715" style="outline:none;" target="_self"     />
<area  alt="" title="nine" href="http://www.image-maps.com/" shape="rect" coords="243,332,309,402" style="outline:none;" target="_self"     />
<area  alt="" title="fourteen" href="http://www.image-maps.com/" shape="rect" coords="205,401,271,471" style="outline:none;" target="_self"     />
<area  alt="" title="eleven" href="http://www.image-maps.com/" shape="rect" coords="200,486,266,556" style="outline:none;" target="_self"     />
<area  alt="" title="eight" href="http://www.image-maps.com/" shape="rect" coords="212,573,278,643" style="outline:none;" target="_self"     />
<area  alt="" title="sixteen" href="http://www.image-maps.com/" shape="rect" coords="242,647,308,717" style="outline:none;" target="_self"     />
<area  alt="" title="seven" href="http://www.image-maps.com/" shape="rect" coords="308,705,374,775" style="outline:none;" target="_self"     />
<area  alt="" title="nineteen" href="http://www.image-maps.com/" shape="rect" coords="383,742,449,812" style="outline:none;" target="_self"     />
<area  alt="" title="three" href="http://www.image-maps.com/" shape="rect" coords="463,757,529,827" style="outline:none;" target="_self"     />
<area  alt="" title="seventeen" href="http://www.image-maps.com/" shape="rect" coords="539,743,605,813" style="outline:none;" target="_self"     />
<area shape="rect" coords="998,998,1000,1000" alt="Image Map" style="outline:none;" title="Image Map" href="http://www.image-maps.com/index.php?aff=mapped_users_12289" />
<area id="d1" alt="" title="double 1" href="http://www.image-maps.com/" shape="poly" coords="550,193,546,210,637,239,644,219" style="outline:none;" target="_self"     />
<area id="d18" alt="" title="double 18" href="http://www.image-maps.com/" shape="poly" coords="649,226,640,239,717,295,730,283,692,251" style="outline:none;" target="_self"     />
<area id="single4" alt="" title="four" href="http://www.image-maps.com/" shape="poly" coords="776,378,684,423,646,375,720,299,748,332" style="outline:none;" target="_self"     />
<area id="d4" alt="" title="double 4" href="http://www.image-maps.com/" shape="poly" coords="731,288,722,299,778,376,793,370,766,330" style="outline:none;" target="_self"     />
<area id="d13" alt="" title="double 13" href="http://www.image-maps.com/" shape="poly" coords="795,374,779,383,811,468,827,466,816,425" style="outline:none;" target="_self"     />
<area id="t1" alt="" title="triple 1" href="http://www.image-maps.com/" shape="poly" coords="528,316,526,333,580,353,588,336,567,325" style="outline:none;" target="_self"     />
<area id="t5" alt="" title="triple 5" href="http://www.image-maps.com/" shape="poly" coords="400,334,410,350,464,331,461,315" style="outline:none;" target="_self"     />
</map>


</body>
</html>