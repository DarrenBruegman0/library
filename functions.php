<!--
Darren Bruegman
---------------
Purpose: stores main code logic inside of functions, abstracting logic
-->

<?php
//returns the message for the dates being the same
function date_same()
{
    return ("That is due today");
}
// parses data into the late outcome
function date_late($returnDate, $dueDate)
{
    return (date_interval_format(
        date_diff($returnDate, $dueDate),
        '%y years, %m months, %d days late'
    ));
}
// same as date_late() but with reversed logic
function date_early($returnDate, $dueDate)
{
    return (date_interval_format(
        date_diff($dueDate, $returnDate),
        '%y years, %m months, %d days early'
    ));
}
// compares the dates, and calls the appropriate function 
function date_query($returnDate, $dueDate)
{
    $rdate = date_create($returnDate);
    $ddate = date_create($dueDate);
    if ($ddate < $rdate) {
        return (date_late($rdate, $ddate));
    } elseif ($ddate > $rdate) {
        return (date_early($rdate, $ddate));
    } else {
        return (date_same());
    }
}
?>