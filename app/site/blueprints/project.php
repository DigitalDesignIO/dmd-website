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
  Title: title
  Headline: headline
  Subheadline:
    extends: headline
    label: Unter-Überschriftyam
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
    extends: textsansheadline
    label: Fließtext rechte Spalte
    width: 2/3
    
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
          picture: picture
          caption: caption
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
            extends: caption
            label: Video caption
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
            extends: caption
            label: Video caption
            help: Kurze beschreibung des Videos

