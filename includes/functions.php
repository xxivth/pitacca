<?php

  require_once 'dbconnect.php';

  function the_title() {
    global $title;

    echo $title;
  }

  // function home_url() {
  //   echo ABS_URL;
  // }
