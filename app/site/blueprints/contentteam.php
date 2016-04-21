<?php if(!defined('KIRBY')) exit ?>

title: Content Teammitglied
pages: false
files: true
fields:
  Title: title
  Headline: headline
  
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
            extends: picture
            label: Großes teaser Bild
            help: Hier können die Bilder ausgewählt werden, die auf der linken Seite unter "Dateien" gelistet sind. Hinzufügen von neuen Bildern z.B. per Drag and Drop oder per klick auf "hinzufügen".
          caption:
            extends: caption
            label: Bildbeschreibung für großes teaser Bild
          portrait:
            extends: picture
            label: Kleines Portrait
            help: Hier können die Bilder ausgewählt werden, die auf der linken Seite unter "Dateien" gelistet sind. Hinzufügen von neuen Bildern z.B. per Drag and Drop oder per klick auf "hinzufügen".
          text:
            extends: simpletext
            label: Text zur Person