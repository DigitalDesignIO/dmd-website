<?php

  include __DIR__ . DS . 'lib' . DS . 'Credentials.php';
  include __DIR__ . DS . 'lib' . DS . 'Event.php';
  include __DIR__ . DS . 'lib' . DS . 'Options.php';

  function FacebookEvents($page) {
    return new Event($page);
  }
