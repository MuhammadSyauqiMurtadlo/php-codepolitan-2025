<?php

interface TableInterface {
    public function save(array $data);
}

interface LogInterface {
    public function log(string $message);
}

class Table implements TableInterface, LogInterface {
    public function save (array $data) {
        return "Data saved: " . json_encode($data);
    }

    public function log (string $message) {
        return "Log entry: " . $message;
    }
}

echo (new Table)->log("This is a log message.") . PHP_EOL;
echo (new Table)->save([]);