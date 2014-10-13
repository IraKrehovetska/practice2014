<?php
class Travels extends CWidget
{
    public $title='Recent Travels';
    public $maxTravels=5;
 
    public function getTravels()
    {
        return Travel::model()->findRecentTravels($this->maxTravels);
    }

    public function run()
    {
        $this->render('travels'));
    }
}
?>