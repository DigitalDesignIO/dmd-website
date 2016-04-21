<?php if(!defined('KIRBY')) exit ?>

title: Content Arrowlist
pages: false
files: true
fields:
  Title: title
  Headline: headline
  Text:
      label: Text
      type:  markdown
      tools:
        - header1
        - header2
        - bold
        - italic
        - email 
        - link
        - arrow
      required: true
      header1: h2
      header2: h3
