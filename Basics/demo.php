<?php

function answer_yes_no ($msg) {
    while(true) {
        $answer = readline($msg . ' (y/n)');
        if($answer === 'n') {
            return false;
        } elseif ($answer === 'y') {
            return true;
        }
    }
}

function ask_schedule () {
    while(true) {
        $startTime = (int)readline('Enter start time: ');
        if($startTime >= 0 && $startTime <= 23) {
            break;
        }
    }

    while(true) {
        $endTime = (int)readline('Enter end time: ');
        if($endTime >= 0 && $endTime <= 23 && $endTime > $startTime) {
            break;
        }
    }
    return [$startTime, $endTime];
}

function ask_schedules () {
    $schedules = [];
    $continue = true;

    while ($continue) {
        $schedules[] = ask_schedule();
        $continue = answer_yes_no('Do you want to continue?');
    }
    return $schedules;
}
$schedules = ask_schedules();
var_dump($schedules);
?>
