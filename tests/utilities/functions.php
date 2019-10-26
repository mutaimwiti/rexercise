<?php

function get_text($filename) {
    return file_get_contents(__DIR__ . "../../fixtures/$filename");
}
