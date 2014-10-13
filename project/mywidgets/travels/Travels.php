<?php

namespace mywidgets\travels;

/**
 * This is just an example.
 */
class Travels extends \yii\base\Widget
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