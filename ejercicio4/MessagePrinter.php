<?php

// Context: Message Printer
class MessagePrinter {
    private $strategy;

    public function __construct(OutputStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function setStrategy(OutputStrategy $strategy): void {
        $this->strategy = $strategy;
    }

    public function print(string $message): void {
        $this->strategy->output($message);
    }
}

?>
