<?php
    $now                 = time();
    $start_date_web      = strtotime("1989-03-12"); // the spec
    $start_date_website  = strtotime("1991-08-06"); // first website
    $start_date_internet = strtotime("1969-09-02"); // internet
    $web_days            = floor(($now - $start_date_web)/(60*60*24));
    $internet_days       = floor(($now - $start_date_internet)/(60*60*24));
?>
<!doctype html>

<html>
        <head>
                <meta charset="utf-8">
                <title>How old is the web?</title>
                <link rel="icon" type="image/x-icon" href="/favicon.ico">
                <link type="text/plain" rel="author" href="/humans.txt" />
                <style type="text/css" media="all">
      body {
        font-family: helvetica neue, sans-serif;
      }
                        p {
                                width: 95%;
                                height: 90%;
                                margin: 5% auto;
                                text-align: center; 
                                vertical-align: middle;
                                font-size: 700%;
                                display: block;
                        }
                </style>
        </head>

        <body>
                <p>
                        The web is <?=$web_days; ?> days old today
                </p>
</html>
