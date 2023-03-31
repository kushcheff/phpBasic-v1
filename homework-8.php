<?php
function html_list($array, $list_type = "ul") {
    if (count($array) == 0) {
        return "";
    }
    $list = "<{$list_type}>";
    foreach ($array as $item) {
        $list .= "<li>{$item}</li>";
    }
    $list .= "</{$list_type}>";

    return $list;
}
$my_array = array("first", "second");
echo html_list($my_array, "ul");
echo html_list($my_array, "ol");
