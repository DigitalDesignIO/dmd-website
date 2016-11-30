<?php

  include __DIR__ . DS . 'lib' . DS . 'Credentials.php';
  include __DIR__ . DS . 'lib' . DS . 'Event.php';

  function FacebookEvents($page) {
    return new Event($page);
  }
