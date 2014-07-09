<?php

function boxOpen($cls){
    return "<div class='{$cls}'>";
}

function boxClose(){
    return "</div>";
}

function CMS_input($type, $field, $label, $mxl=255, $req=false){
    $required = $req ? "true" : "false";
    return "<label>{$label}<input type='{$type}' maxlength='{$mxl}' required='{$required}' placeholder='{$label}' /></label>";
}

