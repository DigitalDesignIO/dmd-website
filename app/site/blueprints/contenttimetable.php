<?php if(!defined('KIRBY')) exit ?>

title: Content Timetable
pages: false
files: true
fields:
  Title: title
  Headline: headline

  Flyer:
    extends: simpletext
    label: Flyer PDF download
    help: Für Smartphones wird anstelle des Studienplans eine PDF angeboten

  imageDesktop:
    label: Studenplan im Querformat
    type: select
    options: images
    required: true
    help: Für Desktop und Geräte mit großem Bildschirm.

  imageMobile:
    label: Studenplan im Hochformat
    type: select
    options: images
    required: true
    help: Für Smartphones und Geräte mit kleinem Bildschirm.
