<?php

class Timer {
    /**
     * @var The microtime when start() was executed.
     */
        protected $startTime;

    /**
     * Instantiates and starts() the Timer
     */
        public function __construct() {
                $this->start();
        }

    /**
     * (Re)Starts the Timer
     *
     * @return void
     */
        public function start() {
                $this->startTime = microtime(true);
        }

    /**
     * Returns time in microseconds since last start()
     *
     * @return int
     */
        public function stop() {
                return 1000 * (microtime(true) - $this->startTime);
        }
}