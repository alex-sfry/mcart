<?php 
require 'include/addToGroup.php';

AddEventHandler(
    'main',
    'OnAfterUserAdd',
    Array("NewUser", "addToGroup")
);