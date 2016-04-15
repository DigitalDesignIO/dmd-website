<?php if(!defined('KIRBY')) exit ?>

title: Content Block
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
  Imagecaption:
    label: Bildbeschreibung
    type: markdown
    tools:
      - bold
      - italic
      - link
  Builder:
    label: Zusätzlicher Inhalt
    type: builder
    fieldsets:
      contentimage:
        label: Zusätzliches Bild
        entry: >
          <img src="{{_fileUrl}}{{picture}}" height=120px/></br>
          {{caption}}

        fields:
          picture:
            label: Bild
            type: select
            options: images
            required: true
          caption:
            label: Bildbeschreibung
            help: optional
            type: markdown
            tools:
              - bold
              - italic
              - link