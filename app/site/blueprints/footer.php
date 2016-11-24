<?php if(!defined('KIRBY')) exit ?>

contact: Kontakt
pages: false
files: false
preview: parent
deletable: false
icon: newspaper-o

fields:
  title:
    label: Title
    type:  text
  contact:
    label: Titel linke Spalte
    type: text
    width: 1/2
    icon: font
  impressum:
    label: Titel rechte Spalte
    type: text
    width: 1/2
    icon: font
  secretaryText:
    label: Text linke Spalte
    type:  markdown
    tools:
     - bold
     - italic
     - strikethrough
     - unorderedList
     - orderedList
     - link
     - email
    size:  large
    width: 1/2
  impressumText:
    label: Text rechte Spalte
    type: markdown
    tools:
     - bold
     - italic
     - strikethrough
     - unorderedList
     - orderedList
     - link
     - email
    size: large
    width: 1/2