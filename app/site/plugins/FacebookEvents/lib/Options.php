<?php

  // todo make options available through kirby
  class Options {
    private static $expire = '1 day';
    private static $year_range = 1;

    function __construct() {
      $this->kirby = kirby();
      self::$expire = $this->kirby->option('fbe_expire');
    }
  }