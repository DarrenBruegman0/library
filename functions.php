<?php
function date_same() {

}
function date_late($returnDate, $dueDate) {

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