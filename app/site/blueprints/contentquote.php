<?php if(!defined('KIRBY')) exit ?>

title: Content Quote
pages: false
files: false
fields:
  Title: title
  Text:
    extends: simpletext
    required: true
    help: Maximal 250 Zeichen, minimal 6
    validate:
      min: 6
      max: 250
