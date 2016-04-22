<?php if(!defined('KIRBY')) exit ?>

title: Content Timetable
pages: false
files: true
fields:
  Title: title
  Headline: headline

  Flyer:
    extends: simpletext
    label: Flyer PDF download
    help: Für Smartphones wird anstelle des Studienplans eine PDF angeboten

  Semester11:
    extends: selectcourse
    label: 1. Semester
  Semester12: selectcourse
  Semester13: selectcourse
  Semester14: selectcourse
  Semester15: selectcourse

  Modul11: selectmodule
  Modul12: selectmodule
  Modul13: selectmodule
  Modul14: selectmodule
  Modul15: selectmodule
      
  colour11: selectcolour
  colour12: selectcolour
  colour13: selectcolour
  colour14: selectcolour
  colour15: selectcolour
    
  Semester21:
    extends: selectcourse
    label: 2. Semester
  Semester22: selectcourse
  Semester23: selectcourse
  Semester24: selectcourse
  Semester25: selectcourse

  Modul21: selectmodule
  Modul22: selectmodule
  Modul23: selectmodule
  Modul24: selectmodule
  Modul25: selectmodule
      
  colour21: selectcolour
  colour22: selectcolour
  colour23: selectcolour
  colour24: selectcolour
  colour25: selectcolour

  Semester31:
    extends: selectcourse
    label: 3. Semester
  Semester32: selectcourse
  Semester33: selectcourse
  Semester34: selectcourse 
  Semester35: selectcourse

  Modul31: selectmodule
  Modul32: selectmodule
  Modul33: selectmodule
  Modul34: selectmodule
  Modul35: selectmodule
  
  colour31: selectcolour
  colour32: selectcolour
  colour33: selectcolour
  colour34: selectcolour
  colour35: selectcolour

  Semester41:
    extends: selectcourse
    label: 4. Semester
  Semester42: selectcourse
  Semester43: selectcourse
  Semester44: selectcourse
  Semester45: selectcourse

  Modul41: selectmodule
  Modul42: selectmodule
  Modul43: selectmodule
  Modul44: selectmodule
  Modul45: selectmodule

  colour41: selectcolour
  colour42: selectcolour
  colour43: selectcolour
  colour44: selectcolour
  colour45: selectcolour

  Semester51: selectcourse
  Semester52: selectcourse
  Semester53: selectcourse
  Semester54: selectcourse
  Semester55: selectcourse
  
  Modul51: selectmodule
  Modul52: selectmodule
  Modul53: selectmodule
  Modul54: selectmodule
  Modul55: selectmodule
  
  colour51: selectcolour
  colour52: selectcolour
  colour53: selectcolour
  colour54: selectcolour
  colour55: selectcolour
  
  Semester61:
    extends: selectcourse
    label: 6. Semester
    width: 5/5
    
  colour61:
    extends: selectcolour
    width: 1/1

  Semester71:
    extends: selectcourse
    label: 7. Semester
    width: 1/2
    
  Semester72:
    extends: selectcourse
    width: 1/2
  
  colour71:
    extends: selectcolour
    width: 1/2
    
  colour72:
    extends: selectcolour
    width: 1/2
