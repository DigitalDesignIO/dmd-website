<?php if(!defined('KIRBY')) exit ?>

title: News
pages: false
files: true
icon: facebook-official

fields:
  Title: title
  Headline: headline

  divider:
    type: headline
    label: News

  info:
    type: info
    label: Die Events / News werden automatisch von Facebook mittels API bezogen und angezeigt. Änderungen an deren Inhalt müssen also über Facebook erfolgen.
