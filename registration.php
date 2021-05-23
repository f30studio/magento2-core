<?php
/*
//
//  ______ ____   ___     _____ _             _ _
// |  ____|___ \ / _ \   / ____| |           | (_)
// | |__    __) | | | | | (___ | |_ _   _  __| |_  ___
// |  __|  |__ <| | | |  \___ \| __| | | |/ _` | |/ _ \
// | |     ___) | |_| |  ____) | |_| |_| | (_| | | (_) |
// |_|    |____/ \___/  |_____/ \__|\__,_|\__,_|_|\___/
//
// !! DISCLAIMER !!
//
// Do not edit or replace this file if you wish to upgrade this extension
// to newer version in the future and to make sure this extension is work
// properly.
//
// Copyright (c) 2021 F30 Studio.
// Github : https://github.com/f30studio
//
*/

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
// component type
  ComponentRegistrar::MODULE,

  // component name
  'F30Studio_Social',

  // current directory
  __DIR__
);
