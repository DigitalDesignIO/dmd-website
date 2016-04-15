<?php if(!defined('KIRBY')) exit ?>

title: Content Arrowlist
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
    icon: font
    required: true
    help: Maximal 60 Zeichen, minimal 4
    validate:
      min: 4
      max: 60
  Text:
      label: Text
      type:  markdown
      required: true
      header1: h2
      header2: h3
