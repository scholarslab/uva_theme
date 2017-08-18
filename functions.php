<?php

function filter_contribution_description($components) {
    $components['label'] = "Tell us about this deposit.";
    $components['comment'] = "Please include as much information as you can. For example: What was happening at this moment? Who is involved? What else do we need to know about this moment in time?";
    return $components;
}
