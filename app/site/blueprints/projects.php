<?php if(!defined('KIRBY')) exit ?>

title: Projects
pages: true
  template:
    - project
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
    required: true
    width: 1/2
    icon: font
    help: Maximal 60 Zeichen, minimal 4
    validate:
      min: 4
      max: 60
  Text:
      label: Text
      type: markdown
      tools:
       - header1
       - header2
       - bold
       - italic
       - strikethrough
       - blockquote
       - unorderedList
       - orderedList
       - link
       - button
       - email
       - image
       - line
      required: true
      header1: h2
      header2: h3
