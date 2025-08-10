<?php
class VotingSystem {
    public $votes = [];

    function vote($name, $candidate) {
        if (!isset($this->votes[$candidate])) {
            $this->votes[$candidate] = 0;
        }
        $this->votes[$candidate]++;
    }

    function getVotes() {
        return $this->votes;
    }

    function getWinner() {
        arsort($this->votes);
        $top = array_keys($this->votes)[0];
        $count = $this->votes[$top];
        return "$top wins with $count votes.";
    }
}
// Tes
$vs = new VotingSystem();
$vs->vote("Ali", "John");
$vs->vote("Bee", "Jane");
$vs->vote("Chen", "John");
$vs->vote("Dan", "John");

echo "<br>";

echo $vs->getWinner();