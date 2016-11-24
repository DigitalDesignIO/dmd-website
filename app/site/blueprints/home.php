<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
visible: true
icon: home

files:
  fields:
    focus:
      label: Bild Fokuspunkt
      type: focus
fields:
  title:
    label: Title
    type:  text
  headline:
    label: Überschrift
    type: text
  subheadline:
    label: Unterüberschrift
    type: text


  Builder:
    label: Zusätzlicher Inhalt
    type: builder
    fieldsets:
      srcset:
        label: Zusätzliches Bild
        entry: >
          <img src="{{_fileUrl}}{{picture}}" height=120px/></br>
          {{caption}}

        fields:
          picture: picture
          caption: caption
