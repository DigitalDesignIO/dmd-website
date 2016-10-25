<?php if(!defined('KIRBY')) exit ?>

title: News
pages: false
files: false
fields:
  Title: title
  Headline: headline

  name:
    label: Veranstaltungsname
    type: text

  description:
    label: Description
    type:  textarea

  start_date_humanized:
    label: Event Datum
    type: date
    disabled: true
    width: 1/4

  start_date_time:
    label: Event Uhrzeit
    type: time
    disabled: true
    width: 1/4

  place_city:
    label: Event Location
    type: text
    icon: map-marker
    disabled: true
    width: 1/4

  place_street:
    label: Event Straße
    type: text
    icon: map-marker
    disabled: true
    width: 1/4
