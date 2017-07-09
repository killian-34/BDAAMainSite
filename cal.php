<?php
  $content=file_get_contents("https://calendar.google.com/calendar/embed?src=39puh1lr6t17cs634lsmdrn86k%40group.calendar.google.com&ctz=America/New_York");
  //$content=file_get_contents("https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=39puh1lr6t17cs634lsmdrn86k%40group.calendar.google.com&amp;color=%23333333&amp;ctz=America%2FNew_York");
  $content = str_replace('</title>','</title><base href="https://www.google.com/calendar/" />',$content);
  $content = str_replace('</head>','<link rel="stylesheet" href="http://67.205.169.135/google.css" /></head>', $content);
  $content = str_replace('<body onload="pageLoaded()" style="background-color:#fff">','<body onload="pageLoaded()">', $content);
  $content = str_replace('onmouseover="gcal$func$[2](true);"','',$content);

  print $content;
?>
