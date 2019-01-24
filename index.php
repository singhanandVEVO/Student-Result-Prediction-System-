<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>SGPA Prediction</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Titillium+Web:400,700'>

      <link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    
google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBackgroundColor);

function drawBackgroundColor() {
			var one=document.getElementById('1sem').value;
      var two=document.getElementById('2sem').value;
      var three=document.getElementById('3sem').value;
      var four=document.getElementById('4sem').value;
      var five=document.getElementById('5sem').value;
      var six=document.getElementById('6sem').value;   
      var eight=document.getElementById('mmm').value;
         var seven=document.getElementById('7sem').value;
         if (seven == 0) {
  var seven=document.getElementById('mmm').value; 
  var eight=null;
} else {
   var seven=document.getElementById('7sem').value;    
  }
       
      var data = new google.visualization.arrayToDataTable([
    		 [{id: 'Semester', label: 'Semester', type: 'number'},{id: 'SGPA', label: 'SGPA', type: 'number'}],
        [1, one],  [2, two],  [3, three],  [4, four],  [5, five],
        [6, six],  [7, seven],  [8, eight]
      ]);

      var options = {
        hAxis: {
          title: 'Semesters',
          interpolateNulls: true,
          viewWindowMode:'explicit',
            viewWindow: {
            "is3D":true,
            showTextEvery:1,
              max:8,
              min:1
              
            }
          
        },
        vAxis: {
          title: 'SGPA',
          interpolateNulls: true,
          viewWindowMode:'explicit',
            viewWindow: {
            "is3D":true,
            showTextEvery:1,
              max:10,
              min:0
            }
          
        },
        
        
        backgroundColor: '#f1f8e9'
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }

</script>

 
</head>

<?php ${"\x47L\x4f\x42\x41\x4cS"}["\x68u\x78s\x67\x70\x72n\x63"]="\x74";${"\x47L\x4f\x42A\x4c\x53"}["o\x74y\x61\x78\x65"]="sm";${"G\x4c\x4f\x42\x41\x4cS"}["d\x74\x61g\x6f\x67\x76\x6c\x64"]="\x63\x6f";${"\x47\x4cO\x42A\x4cS"}["\x69qbq\x75\x71\x6d"]="\x73um";${"G\x4c\x4f\x42\x41\x4c\x53"}["\x63\x67\x71\x6bwywi\x69dh"]="a\x76\x67";${"G\x4cOB\x41\x4c\x53"}["\x77l\x6dte\x72\x6b\x6d"]="\x61v";${"\x47L\x4f\x42AL\x53"}["\x7av\x7a\x74\x74\x65x\x77\x75b"]="a";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x70\x67\x6e\x6bc\x76"]="\x77";${"GLO\x42\x41\x4c\x53"}["z\x7ap\x61jl\x78\x78\x63v\x79j"]="\x64\x69v";${"\x47\x4c\x4f\x42A\x4c\x53"}["w\x77\x68\x62\x75\x71\x76\x6fru"]="\x74\x72";${"\x47\x4cO\x42AL\x53"}["\x7a\x63\x68\x68s\x7a\x73\x6b\x6ef"]="s\x6d";${"\x47LO\x42ALS"}["\x72\x65\x6f\x67n\x64d\x73"]="\x73l1";${"\x47\x4c\x4f\x42A\x4c\x53"}["\x6c\x6c\x6fbwk\x77\x67\x72"]="\x78";${"\x47L\x4fBAL\x53"}["\x6akqyv\x6ei\x6b\x6b\x73"]="v";$eznkszb="u";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x77\x69\x74\x67\x63i\x79\x71\x6a\x62\x6b"]="ex";${"G\x4c\x4f\x42A\x4c\x53"}["k\x68\x61j\x64\x63\x62"]="\x75";$lojlmbdfw="y";${${"\x47LOB\x41\x4c\x53"}["\x6b\x68a\x6a\x64\x63\x62"]}=$_POST["\x31se\x6d"];${"\x47\x4cO\x42\x41L\x53"}["\x63\x70\x78\x75\x6d\x6e\x79t\x74\x70x"]="\x77";${${"G\x4c\x4f\x42\x41LS"}["j\x6b\x71\x79\x76ni\x6b\x6b\x73"]}=$_POST["2\x73\x65\x6d"];${"\x47\x4c\x4fBAL\x53"}["\x64f\x6c\x62s\x6c\x68n\x73"]="\x79";${${"G\x4cOBA\x4c\x53"}["\x63\x70\x78\x75m\x6e\x79\x74t\x70\x78"]}=$_POST["3\x73em"];$lsomdcn="\x74";$mldbhsjqsloa="\x7a";${${"G\x4c\x4fBA\x4c\x53"}["\x6c\x6co\x62\x77\x6b\x77\x67\x72"]}=$_POST["\x34\x73\x65\x6d"];$xuihxn="co";${$lojlmbdfw}=$_POST["5\x73\x65m"];$dmsfswmhaems="\x7a";${$dmsfswmhaems}=$_POST["\x36se\x6d"];${$xuihxn}=$_POST["\x63hoi\x63\x65"];$kbgxhyp="l\x31";${${"\x47\x4c\x4f\x42AL\x53"}["\x77\x69\x74\x67ci\x79\x71\x6a\x62k"]}=$_POST["o\x70\x74io\x6e"];${"\x47\x4cO\x42\x41\x4c\x53"}["s\x7akn\x66\x6ev\x7a\x72\x79"]="\x65\x78";${"\x47\x4c\x4fBA\x4c\x53"}["o\x6e\x63\x79\x67x\x67"]="s\x75\x6d";${$kbgxhyp}=$_POST["\x6cs\x65\x6d"];${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["r\x65ognd\x64\x73"]}=$_POST["\x73\x6csem"];${${"\x47\x4cOB\x41\x4cS"}["\x77\x77\x68\x62\x75\x71\x76\x6f\x72u"]}=$_POST["\x74\x72a\x76"];${${"\x47\x4cOB\x41L\x53"}["\x7achhs\x7a\x73\x6b\x6e\x66"]}=$_POST["\x73mtv"];$trffmlk="\x78";${"\x47\x4c\x4f\x42\x41L\x53"}["v\x63s\x6e\x70\x6fx\x6a\x79p\x62"]="t\x72";if(empty($_POST["\x37\x73em"])){${"\x47\x4c\x4f\x42\x41\x4cS"}["\x76\x6f\x65\x78\x71\x72br\x75\x6cy"]="\x64\x69\x76";${${"GLO\x42\x41\x4c\x53"}["\x76oex\x71r\x62ru\x6cy"]}=6;}else{$tymgzmcyn="\x61";${$tymgzmcyn}=$_POST["7\x73e\x6d"];${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x7a\x7ap\x61\x6a\x6c\x78\x78\x63\x76\x79\x6a"]}=7;}${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x6c\x64l\x73\x70\x75w\x7a"]="\x6c1";${${"\x47LO\x42\x41\x4cS"}["\x6f\x6e\x63\x79\x67\x78g"]}=${$eznkszb}+${${"GL\x4f\x42\x41\x4c\x53"}["\x6ak\x71\x79v\x6eik\x6b\x73"]}+${${"GL\x4fB\x41LS"}["p\x67\x6e\x6bc\x76"]}+${$trffmlk}+${${"G\x4c\x4f\x42\x41L\x53"}["d\x66lbsl\x68n\x73"]}+${$mldbhsjqsloa}+${${"\x47L\x4fB\x41\x4c\x53"}["\x7av\x7a\x74t\x65\x78\x77\x75\x62"]};${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x77\x6c\x6d\x74\x65r\x6bm"]}=(${${"\x47\x4c\x4f\x42\x41L\x53"}["l\x64\x6c\x73p\x75w\x7a"]}+${${"\x47L\x4f\x42\x41\x4c\x53"}["r\x65\x6f\x67\x6e\x64d\x73"]})/2;${${"\x47L\x4fB\x41\x4c\x53"}["\x63\x67\x71k\x77\x79\x77\x69\x69\x64\x68"]}=(${${"\x47\x4cO\x42A\x4c\x53"}["\x69q\x62\x71\x75\x71\x6d"]}/${${"\x47\x4cOB\x41\x4cS"}["\x7az\x70\x61j\x6c\x78\x78cv\x79j"]})+${${"G\x4c\x4f\x42A\x4c\x53"}["d\x74a\x67ogvl\x64"]}+${${"\x47\x4c\x4f\x42AL\x53"}["\x73\x7ak\x6e\x66\x6ev\x7a\x72\x79"]}+(${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x77\x6c\x6dt\x65\x72km"]}/200)-(${${"GL\x4f\x42\x41\x4c\x53"}["v\x63s\x6epo\x78\x6ay\x70\x62"]}/200)-(${${"G\x4c\x4f\x42\x41L\x53"}["\x6f\x74y\x61x\x65"]}/100);${$lsomdcn}=${${"G\x4c\x4f\x42ALS"}["c\x67q\x6bwy\x77iid\x68"]};if(${${"\x47L\x4f\x42\x41\x4c\x53"}["h\x75\x78\x73\x67\x70\x72n\x63"]}>"\x31\x30"){${${"\x47L\x4f\x42\x41\x4c\x53"}["\x68\x75xsg\x70r\x6e\x63"]}=10;}else{${"G\x4cO\x42A\x4c\x53"}["du\x6c\x6feo\x70d"]="\x74";${${"\x47L\x4fBA\x4c\x53"}["\x64\x75\x6c\x6f\x65\x6f\x70\x64"]}=${${"\x47LOB\x41\x4c\x53"}["\x63g\x71\x6b\x77\x79w\x69\x69\x64h"]};}
?>






<body>
<center><p><h1 style="color:red;"><u> SGPA PREDICTOR </u></h1></p></center>
<form method="post" form action='' class='form'>
  
  
   <p class='field required half'>
    <label class='label' for='1sem'>Semester 1 SGPA:</label>
    <input class='text-input' id='1sem' name='1sem' required type='number' min="0" max="10" step=".01" <?php if (isset($_POST['1sem'])) echo 'value="'.$_POST['1sem'].'"';?>>
 
  </p>
  <p class='field required half'>
    <label class='label' for='2sem'>Semester 2 SGPA:</label>
    <input class='text-input' id='2sem' name='2sem' required type='number' min="0" max="10" step=".01" <?php if (isset($_POST['2sem'])) echo 'value="'.$_POST['2sem'].'"';?>>
  </p>
  <p class='field required half'>
    <label class='label' for='3sem'>Semester 3 SGPA:</label>
    <input class='text-input' id='3sem' name='3sem' required type='number' min="0" max="10" step=".01" <?php if (isset($_POST['3sem'])) echo 'value="'.$_POST['3sem'].'"';?>>
  </p>
  <p class='field required half'>
    <label class='label' for='4sem'>Semester 4 SGPA:</label>
    <input class='text-input' id='4sem' name='4sem' required type='number' min="0" max="10" step=".01" <?php if (isset($_POST['4sem'])) echo 'value="'.$_POST['4sem'].'"';?>>
  </p>
  <p class='field half required'>
    <label class='label' for='5sem'>Semester 5 SGPA:</label>
    <input class='text-input' id='5sem' name='5sem' required type='number' min="0" max="10" step=".01" <?php if (isset($_POST['5sem'])) echo 'value="'.$_POST['5sem'].'"';?>>
  </p>
  <p class='field half required'>
    <label class='label' for='6sem'>Semester 6 SGPA:</label>
    <input class='text-input' id='6sem' name='6sem' required type='number' min="0" max="10" step=".01" <?php if (isset($_POST['6sem'])) echo 'value="'.$_POST['6sem'].'"';?>>
  </p>
  <p class='field'>
    <label class='label' for='7sem'>Semester 7 SGPA: (optional)</label>
    <input class='text-input' id='7sem' name='7sem' type='number' min="0" max="10" step=".01" <?php if (isset($_POST['7sem'])) echo 'value="'.$_POST['7sem'].'"';?>>
  </p>
  <p class='field half required'>
    <label class='label' for='lsem'>Last Semester Attendance: (in %)</label>
    <input class='text-input' id='lsem' name='lsem' required type='number' min="0" max="100" step=".01" <?php if (isset($_POST['lsem'])) echo 'value="'.$_POST['lsem'].'"';?>>
  </p>
  <p class='field half required'>
    <label class='label' for='slsem'>Second Last Semester Attendance:</label>
    <input class='text-input' id='slsem' name='slsem' required type='number' min="0" max="100" step=".01" <?php if (isset($_POST['slsem'])) echo 'value="'.$_POST['slsem'].'"';?>>
  </p>
  <p class='field half required'>
    <label class='label' for='trav'>Time spent daily in travelling: (in hours)</label>
    <input class='text-input' id='trav' name='trav' required type='number' min="0" max="24" step=".10" <?php if (isset($_POST['trav'])) echo 'value="'.$_POST['trav'].'"';?>>
  </p>
  <p class='field half required'>
    <label class='label' for='smtv'>Time spent daily on Social Media/TV: (in hours)</label>
    <input class='text-input' id='smtv' name='smtv' required type='number' min="0" max="24" step=".10" <?php if (isset($_POST['smtv'])) echo 'value="'.$_POST['smtv'].'"';?>>
  </p>
  <div class='field'>
    <label class='label'>Co Curricular Activities:</label>
    <ul class='options'>
      <li class='option'>
        <input class='option-input' id='choice-0' name='choice' type='radio' value='0.40'>
        <label class='option-label' for='choice-0'>Technical Workshop</label>
      </li>
      <li class='option'>
        <input class='option-input' id='choice-1' name='choice' type='radio' value='0.10'>
        <label class='option-label' for='choice-1'>Paper Presentation</label>
      </li>
      <li class='option'>
        <input class='option-input' id='choice-2' name='choice' type='radio' value='0.30'>
        <label class='option-label' for='choice-2'>Certification Course</label>
      </li>
      <li class='option'>
        <input class='option-input' id='choice-3' name='choice' type='radio' value='0.50'>
        <label class='option-label' for='choice-3'>Internship</label>
      </li>
      <li class='option'>
        <input class='option-input' id='choice-4' name='choice' type='radio' value='0.25'>
        <label class='option-label' for='choice-4'>Hackathon</label>
      </li>
	  <li class='option'>
        <input class='option-input' id='choice-5' name='choice' type='radio' value='0.23'>
        <label class='option-label' for='choice-5'>Multicon</label>
      </li>
	  <li class='option'>
        <input class='option-input' id='choice-6' name='choice' type='radio' value='0.20'>
        <label class='option-label' for='choice-6'>Robocon</label>
      </li>
	  <li class='option'>
        <input class='option-input' id='choice-7' name='choice' type='radio' value='0.05'>
        <label class='option-label' for='choice-7'>Poster Making Competition</label>
      </li>
    </ul>
  </div>
  <div class='field'>
    <label class='label'>Extra Curricular Activities:</label>
    <ul class='options'>
      <li class='option'>
        <input class='option-input' id='option-0' name='option' type='radio' value='0.10'>
        <label class='option-label' for='option-0'>Non Technical Workshop</label>
      </li>
      <li class='option'>
        <input class='option-input' id='option-1' name='option' type='radio' value='-1'>
        <label class='option-label' for='option-1'>College Committee Head</label>
      </li>
      <li class='option'>
        <input class='option-input' id='option-2' name='option' type='radio' value='-0.50'>
        <label class='option-label' for='option-2'>College Committee Member</label>
      </li>
      <li class='option'>
        <input class='option-input' id='option-3' name='option' type='radio' value='0'>
        <label class='option-label' for='option-3'>Foreign Language Course</label>
      </li>
      <li class='option'>
        <input class='option-input' id='option-4' name='option' type='radio' value='-0.20'>
        <label class='option-label' for='option-4'>Sports Competition</label>
      </li>
      <li class='option'>
        <input class='option-input' id='option-5' name='option' type='radio' value='-0.40'>
        <label class='option-label' for='option-5'>Dance Competition</label>
      </li>
      
    </ul>
  </div>
  
 
  <p class='field half'>
    <input class='button' type='submit' value='PREDICT MY SGPA FOR NEXT SEM -->' onClick="drawBackgroundColor();">
  </p>
  
  <p class='field half'>
    <label class='label' for='mmm'>Predicted SGPA:</label>
    <input class='text-input' id='mmm' name='mmm' type='text' value='<?php echo(round(@$t,2));?>' readonly/>
  </p>
  
</form>
<center>
  <h5 style="color:white;">Appoximated prediction. Variation of +/- 0.5 expected.</h5>
  </center>
  <center>
  <p><h1 style="color:red;"><u> A Graphical View of your Progress </u></h1></p>
  </center>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.customSelect/0.5.1/jquery.customSelect.min.js'></script>
<script src='js/xgrmnr.js'></script>

  

    <script  src="js/index.js"></script>

<center>
 <div id="chart_div" style="width: 850px; height: 450px"></div>
</center>
</br>
 <center>
  <input type="button" value="Clear Values" onclick="window.location.href=window.location.href" />
  <br><br>
 <a style="color:red" href="https://www.youthcentral.vic.gov.au/study-and-training/help-with-study/how-to-study-better/top-10-study-tips">Study Guidelines</a> 
<br><br>
 <a style="color:red" href="http://www.creativitypost.com/create/work_smarter_not_harder_21_time_management_tips_to_hack_productivity">Time Management Hacks</a> 
<br><br>
 <a style="color:red" href="https://www.villanovau.com/resources/project-management/project-management-tips/">Project Management Tips</a> 
<br><br>
  </center>
</body>

</html>