<?php if(!defined('KIRBY')) exit ?>

title: Content Zweispalter
pages: false
files: true
fields:
  Title:
    label: Seiten Titel
    help: Der Seiten Titel ist nur für die Darstellung des Seitennamens im CMS relevant
    type:  text
    required: true
  Headline:
    label: Überschrift
    type:  text
    width: 1/2
    required: true
    icon: font
    help: Maximal 60 Zeichen, minimal 4
    validate:
      min: 4
      max: 60
  TextLeftColumn:
    label: Text linke Spalte
    type:  markdown
    header1: h2
    header2: h3
  TextRightColumn:
    label: Text rechte Spalte
    type: markdown
    header1: h2
    header2: h3
