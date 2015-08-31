<?php if(!defined('KIRBY')) exit ?>

title: Module
pages: false
files: true
fields:
  title:
    label: Title
    type: text
    placeholder: Page Name
    required: true
  title_public:
    type: text
    placeholder: Public Title
  subtitle:
    label: Subtitle
    type: text
    placeholder: Subtitle
  text:
    label: Text
    type: textarea