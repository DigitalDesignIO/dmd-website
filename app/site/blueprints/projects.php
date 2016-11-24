<?php if(!defined('KIRBY')) exit ?>

title: Projects
pages: true
  template:
    - project
icon: users
preview: parent
files: true

fields:
  Title: title
  Headline: headline
  Text:
    extends: blocktext
    required: false