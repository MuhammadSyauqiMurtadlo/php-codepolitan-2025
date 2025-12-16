<?php

trait Log {
    protected function log(string $message) {
        echo "$message" . PHP_EOL;
    }
}

class Table {
    use Log;

    public function save(array $data) {
        $this->log("Saving data");
        return "Data saved: " . json_encode($data) . PHP_EOL;
    }
}

(new Table())->save([]);