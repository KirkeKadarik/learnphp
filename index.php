<?php

//library

class Job {
    public function task(ConsoleLogger|NothingLogger $logger) {
        for($i=0; $i<10; $i++) {
            //some work is done (video processing, etc)
            $logger->log("Task $i done");
    }
    }
}

class ConsoleLogger implements Logger {
    public function log($message) {
        echo "$message\n";
    }
}

interface Logger {
    public function log($message);
}

class NothingLogger {
    public function log($message) {
       
    }
}

// user code 

class FileLogger implements Logger {
    public function log($message) {
        $file = fopen('log.txt', 'a');
        fwrite($file, $message . "\n");
        fclose($file);
    }
}

$job = new Job();
$logger = new FileLogger();
$job->task($logger);