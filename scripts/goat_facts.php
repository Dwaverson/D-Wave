<?php

require __DIR__ . "/../lib/QuoteServer.php";

echo (new QuoteServer())->
    loadFromUrl('https://raw.githubusercontent.com/Dwaverson/D-Wave/master/quote_lists/goat_facts.txt')->
    pickRandomQuote() . "\n";
