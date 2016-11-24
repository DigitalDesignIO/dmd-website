<?php if(!defined('KIRBY')) exit ?>

title: News
pages: false
files: true
fields:
  Title: title
  Headline: headline

  divider:
    type: headline
    label: News

  info:
    type: info
    label: Hier werden die aktuellen DmD Veranstaltungen angezeigt. Die Felder sind für die manuelle Eingabe deaktiviert, da die Inhalte von den Veranstaltungen der DMD-Facebook Seite geholt werden. Der Inhalt wird dabei 1x pro Tag automatisch aktuallisiert um mögliche Veränderungen anzeigen zu können. Der Inhalt wird also nur über Facebook gepflegt.

  name:
    label: Veranstaltungsname
    type: text
    disabled: true

  event_image:
    label: Veranstaltungs Image
    type: url
    disabled: true

  description:
    label: Description
    type:  textarea
    disabled: true

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
