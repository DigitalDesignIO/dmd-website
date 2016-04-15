<?php if(!defined('KIRBY')) exit ?>

title: Content Timetable
pages: false
files: true
fields:
  Title:
    label: Seiten Titel
    help: Der Seiten Titel ist nur für die Darstellung des Seitennamens im CMS relevant
    type:  text
    required: true
  Headline:
    label: Stundenplan Überschrift
    type:  text
    required: true
    icon: font
    help: Maximal 60 Zeichen, minimal 4
    validate:
      min: 4
      max: 60

  Flyer:
    label: Flyer PDF download
    type: markdown
    tools:
      - bold
      - italic
      - link
    help: Für Smartphones wird anstelle des Studienplans eine PDF angeboten

  Semester11:
      label: 1. Semester
      type:  text
      width: 1/5
  Semester12:
      label: 1. 
      type:  text
      width: 2/5
  Semester13:
      label: 1. 
      type:  text
      width: 1/5
  Semester14:
      label: 1. 
      type:  text
      width: 1/5

  Modul11:
      type:  text
      width: 1/5
  Modul12:
      type:  text
      width: 2/5
  Modul13:
      type:  text
      width: 1/5
  Modul14:
      type:  text
      width: 1/5

  Semester21:
      label: 2. Semester
      type:  text
      width: 1/5
  Semester22:
      label: 2. 
      type:  text
      width: 1/5
  Semester23:
      label: 2. 
      type:  text
      width: 1/5
  Semester24:
      label: 2. 
      type:  text
      width: 1/5
  Semester25:
      label: 2. 
      type:  text
      width: 1/5

  Modul21:
      type:  text
      width: 1/5
  Modul22:
      type:  text
      width: 1/5
  Modul23:
      type:  text
      width: 1/5
  Modul24:
      type:  text
      width: 1/5
  Modul25:
      type:  text
      width: 1/5

  Semester31:
      label: 3. Semester
      type:  text
      width: 1/5
  Semester32:
      label: 3. 
      type:  text
      width: 1/5
  Semester33:
      label: 3. 
      type:  text
      width: 1/5
  Semester34:
      label: 3. 
      type:  text
      width: 1/5
  Semester35:
      label: 3. 
      type:  text
      width: 1/5

  Modul31:
      type:  text
      width: 1/5
  Modul32:
      type:  text
      width: 1/5
  Modul33:
      type:  text
      width: 1/5
  Modul34:
      type:  text
      width: 1/5
  Modul35:
      type:  text
      width: 1/5


  Semester41:
      label: 4. Semester
      type:  text
      width: 1/5
  Semester42:
      label: 4. 
      type:  text
      width: 1/5
  Semester43:
      label: 4. 
      type:  text
      width: 1/5
  Semester44:
      label: 4. 
      type:  text
      width: 2/5

  Modul41:
      type:  text
      width: 1/5
  Modul42:
      type:  text
      width: 1/5
  Modul43:
      type:  text
      width: 1/5
  Modul44:
      type:  text
      width: 2/5


  Semester51:
      label: 5. Semester
      type:  text
      width: 1/5
  Semester52:
      label: 5. 
      type:  text
      width: 1/5
  Semester53:
      label: 5. 
      type:  text
      width: 1/5
  Semester54:
      label: 5. 
      type:  text
      width: 2/5

  Modul51:
      type:  text
      width: 1/5
  Modul52:
      type:  text
      width: 1/5
  Modul53:
      type:  text
      width: 1/5
  Modul54:
      type:  text
      width: 2/5

  Semester61:
      label: 6. Semester
      type:  text

  Semester71:
      label: 7. Semester
      type:  text
      width: 1/2
  Semester72:
      label: 7. 
      type:  text
      width: 1/2
