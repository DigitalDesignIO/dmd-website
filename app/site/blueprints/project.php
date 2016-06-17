<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: true
  template:
    - projectitem
files: true
fields:
  Title: title

  Coursedata:
    label: Kurs Informationen
    type: textarea
    required: true
    help: z.B. HS Ravensburg-Weingarten Wintersemester 2015/16 Prof. Benedikt Groß
    
  previewimage:
    label: Vorschaubild
    type: select
    options: images
    required: true

  Headline: headline
  
  Subheadline:
    extends: headline
    label: Unter-Überschrift
