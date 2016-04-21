<?php if(!defined('KIRBY')) exit ?>

title: Content Block
pages: false
files: true
fields:
  Title: title
  
  Headline: headline
  
  Text: blocktext
  
  Imagecaption: caption
  
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
          picture: picture
            
          caption: caption