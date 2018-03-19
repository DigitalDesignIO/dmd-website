<?php

return [
  'name'        => 'Student',
  'default'     => false,
  'permissions' => [
    '*'                 => true,
    'panel.access.options' => false,
    'panel.access.users' => false,
    'panel.widget.account' => false,
    'panel.widget.history' => false,
    'panel.widget.site' => false,
    'panel.widget.widget' => false,
    'panel.widget.version' => false,
    'panel.page.create' => function() {

      if($this->state() === 'ui') {
        // always show the add button
        return true;
      }

      if($this->target()->template() !== 'project') {
        return 'You are only allowed to add Projects';
      }

      return true;

    }

  ]
];