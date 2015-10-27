<?php

function isCurrentRoute($routeName)
{
    return Route::currentRouteName() == $routeName;
}