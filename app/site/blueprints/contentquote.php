<?php if(!defined('KIRBY')) exit ?>

title: Content Quote
pages: false
files: false
fields:
  Title:
    label: Seiten Titel
    help: Der Seiten Titel ist nur für die Darstellung des Seitennamens im CMS relevant
    type:  text
    required: true
  Text:
      label: Text
      icon: font
      type:  markdown
      tools: 
        - bold
        - italic
        - strikethrough
        - link
      required: true
      help: Maximal 250 Zeichen, minimal 6
      validate:
        min: 6
        max: 250
