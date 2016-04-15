<?php if(!defined('KIRBY')) exit ?>

title: Default
files: false
pages: 
  template: 
    - contentblock
    - contenttwocolumns
    - contentarrowlist
    - contentquote
    - contentteam
fields:
  Title:
    label: Seiten Titel
    help: Der Seiten Titel ist nur für die Darstellung des Seitennamens im CMS relevant
    type:  text
    required: true