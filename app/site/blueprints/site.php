<?php if(!defined('KIRBY')) exit ?>

title: Site
pages:
  max: 10
options:

fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
    icon: font
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea