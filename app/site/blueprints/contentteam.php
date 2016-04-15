<?php if(!defined('KIRBY')) exit ?>

title: Content Teammitglied
pages: false
files: true
fields:
  Title:
    label: Seiten Titel
    help: Der Seiten Titel ist nur für die Darstellung des Seitennamens im CMS relevant
    type:  text
    required: true
  Headline:
    label: Überschrift
    type:  text
    required: true
    width: 1/2
    icon: font
    help: Maximal 60 Zeichen, minimal 4
    validate:
      min: 4
      max: 60
  Builder:
    label: Teammitglieder hinzufügen
    type: builder
    modalsize: large
    fieldsets:
      contentteammember:
        label: Teammitglied
        entry: >
          <strong>{{name}}</strong><br />
          <img class="team-teaserpic" src="{{_fileUrl}}{{picture}}" height=120px/>
          <br />
          {{caption}}
          <hr>
          <img class="team-portrait" src="{{_fileUrl}}{{portrait}}" height=50px/>{{text}}
        fields:
          name: 
            label: Name der Person
            placeholder: z.B. Prof. Dr. Med. Example
            type: text
            required: true
          picture:
            label: Großes teaser Bild
            help: Hier können die Bilder ausgewählt werden, die auf der linken Seite unter "Dateien" gelistet sind. Hinzufügen von neuen Bildern z.B. per Drag and Drop oder per klick auf "hinzufügen".
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
          portrait:
            label: Kleines Portrait
            help: Hier können die Bilder ausgewählt werden, die auf der linken Seite unter "Dateien" gelistet sind. Hinzufügen von neuen Bildern z.B. per Drag and Drop oder per klick auf "hinzufügen".
            type: select
            options: images
            required: true

          text:
            label: Text zur Person
            type: markdown
            tools:
              - bold
              - italic
              - link