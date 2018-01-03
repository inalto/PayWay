<?php

namespace PayWay\Exception;

class ReadWriteException extends IOException {
    public function __construct($url, $message) {
        parent::__construct("[" . $url . "] " . $message);
    }
}