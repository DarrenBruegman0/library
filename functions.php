<?php
function date_same() {
    return("That is due today");
}
function date_late($returnDate, $dueDate) {
    return(date_interval_format(date_diff($returnDate, $dueDate), 
    '%y years, %m months, %d days late'));
}
function date_early($returnDate, $dueDate) {
    return(date_interval_format(date_diff($dueDate, $returnDate), 
    '%y years, %m months, %d days early'));
}
function date_query($returnDate, $dueDate) {
    $rdate = date_create($returnDate);
    $ddate = date_create($dueDate);
    if ($ddate < $rdate) {
        return(date_late($rdate, $ddate));
    } elseif ($ddate > $rdate) {
        return(date_early($rdate, $ddate));
    } else {
        return(date_same());
    }
}
?>