<?php
  $content=file_get_contents("https://calendar.google.com/calendar/embed?src=39puh1lr6t17cs634lsmdrn86k%40group.calendar.google.com&ctz=America/New_York");
  $content = str_replace('</title>','</title><base href="https://www.google.com/calendar/" />',$content);
  $content = str_replace('</head>','<link rel="stylesheet" href="http://67.205.169.135/google.css" /></head>', $content);

  print $content;
?>
