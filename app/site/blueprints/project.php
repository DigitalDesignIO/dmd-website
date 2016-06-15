<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: true
  template:
    - projectitem
files: true
fields:
  Title: title

  Coursedata:
    label: Kurs Informationen
    type: textarea
    required: true
    help: z.B. HS Ravensburg-Weingarten Wintersemester 2015/16 Prof. Benedikt Groß
    
  previewimage:
    label: Vorschaubild
    type: select
    options: images
    required: true

  Headline: headline
  
  Subheadline:
    extends: headline
    label: Unter-Überschrift
    
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
    modalsize: large
    fieldsets:
      contentprojectimage:
        label: Zusätzliches Bild
        entry: >
          {{picture}}
          <br>
          <img src="{{_fileUrl}}{{picture}}" height=120px/></br>
          </br>
          {{caption}}
        fields:
          picture: picture
          caption: caption
          
      contentprojectvimeo:
        label: Video von Vimeo
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
        label: Video von Youtube 
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
            
      contentprojectvideo:
        label: Video
        entry: >
          <div style="text-align: center;">
            <video width="50%" src="{{_fileUrl}}{{video}}" controls>
            <span>Your browser does not support HTML5 video.</span>
          </video>
          </div>
          {{videocaption}}
        fields:
          video:
            label: Video auswählen
            type: select
            options: videos
            required: true
            help: Video muss hochgeladen werden, bevor es ausgewählt werden kann. Videos im MP4-Format werden momentan leider nicht von Firefox unterstützt. Große Video Dateien können unter umständen Probleme beim Upload bereiten.
          videocaption:
            extends: caption
            label: Video caption
            help: Kurze beschreibung des Videos

      contentproject3d:
        label: Sketchfab Iframe
        entry: >
          <div style="text-align: center;">
            <a href="{{sketchfabmodel}}" target="_blank">Source: {{sketchfabmodel}}</a><br>
            <br>
            <iframe width="590" height="350" src="{{sketchfabmodel}}/embed" 
                frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel="">
            </iframe>
          </div>
          <br>
          {{modelcaption}}
        fields:
          sketchfabmodel:
            label: 3d auswählen
            required: true
            type: text
            required: true
            placeholder: example url https://sketchfab.com/models/74503ea8f90945168208eaa9803cc0c1
            help: Paste the URL of your 3D Model here. To do so, go to your 3d model you uploaded at <a target="_blank" href="https://sketchfab.com">https://sketchfab.com</a>. Then copy / paste the URL of your model here.
          modelcaption:
            extends: caption
            label: Video caption
            help: Kurze beschreibung des Videos

