<?php if(!defined('KIRBY')) exit ?>

title: Content Zweispalter
pages: false
files: true
fields:
  Title: title
  Headline: headline
  TextLeftColumn:
    label: Text linke Spalte
    extends: blocktext
    width: 1/2
  TextRightColumn:
    label: Text rechte Spalte
    extends: blocktext
    width: 1/2
