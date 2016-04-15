<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: true
files: true
fields:
  Coursedata:
    label: Kurs Informationen
    type: textarea
    required: true
    help: z.B. HS Ravensburg-Weingarten Wintersemester 2015/16 Prof. Benedikt Groß
  effect:
    label: Bildeffekt
    type: select
    default: chico
    help: Auswahl des Effekts, der für die Projekt Gallerie auf der Startseite verwendet werden soll. Showroom aller Styles http://tympanus.net/Development/HoverEffectIdeas/
    options:
      sadie: Sadie
      chico: Digital Design
      oscar: Oscar
      lily: Lily
      layla: Layla
      marley: Marley
      ruby: Ruby
      roxy: Roxy
      bubba: Bubba
      romeo: Romeo
      sarah: Sarah
      milo: Milo

  Title:
    label: Seiten Titel
    help: Der Seiten Titel ist nur für die Darstellung des Seitennamens im CMS relevant
    type:  text
    required: true
  Headline:
    label: Überschrift
    type:  text
    required: true
    icon: font
    help: Maximal 60 Zeichen, minimal 4
    validate:
      min: 4
      max: 60
  Subheadline:
    label: Unter-Überschrift
    type:  text
    required: true
    icon: font
    help: Maximal 60 Zeichen, minimal 4
    validate:
      min: 4
      max: 60
  Textleft:
      label: Linke Spalte
      width: 1/3
      type:  markdown
      tools:
       - bold
       - italic
       - strikethrough
       - unorderedList
       - orderedList
       - link
  Text:
      label: Fließtext rechte Spalte
      width: 2/3
      type:  markdown
      tools:
       - bold
       - italic
       - strikethrough
       - blockquote
       - unorderedList
       - orderedList
       - link
       - email
       - image
       - line
      required: true
  Builder:
    label: Zusätzlicher Inhalt
    type: builder
    fieldsets:
      contentprojectimage:
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
      contentprojectvimeo:
        label: Vimeo Video
        entry: >
          {{vimeocaption}}
        fields:
          vimeoid:
            label: Vimeo ID eingeben
            type: number
            required: true
            help: Vimeo videos haben folgendes Format - https://vimeo.com/15711020. Die letzte Nummer ist die benötigte ID
          vimeocaption:
            label: Video caption
            type: markdown
            tools:
              - bold
              - italic
              - link
            help: Kurze beschreibung des Videos
      contentprojectyoutube:
        label: Youtube Video
        entry: >
          {{youtubecaption}}
        fields:
          youtubeid:
            label: Youtube ID eingeben
            type: text
            required: true
            help: Youtube videos haben folgendes Format https://www.youtube.com/watch?v=M8mA-ufGEkQ. Nach dem = steht die benötigte ID.
          youtubecaption:
            label: Video caption
            type: markdown
            tools:
              - bold
              - italic
              - link
            help: Kurze beschreibung des Videos

