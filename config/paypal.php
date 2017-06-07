<?php
return array(
    // set your paypal credentials

    // Sandbox vaporic
    'client_id' => 'AWndaJnsj6WBCjxbzq5UZ1iPmLq2cXjEqLjiw8XemEm5nkiWCOPfET98BjUh2DcW5l6NRJHtzQXRLF9x',
    'secret' => 'EI3iwgw4Ul6q2wSyzwepdq8jNQ_VnLQ1FsIcU7Rqix80i1JivemnLsa47TIYKppFv8BtGxp2sXgfKZiY',

    // Production vaporic
    //'client_id' => 'AT5cDb6QljzEmfLKU3iROyabw0_sNJm8I0iq8AQwoWTuPNQtwmMCIcdZ41R1uvPJ-Z4Q_Xx6p8nKipcl',
    //'secret' => 'ENiHvqllkJkahmExeUHl6QPF1bZM_neTZOnn3NZjCf-JXUtzC--OhZKetl2zbZcLXgEfwYl0yFrnG30O',


    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 60,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
