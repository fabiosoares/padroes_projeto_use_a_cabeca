<?php
include_once 'SubjectInterface.php';

class WeatherData implements SubjectInterface {
    private $observers;
    private $temperature;
    private $humidity;
    private $preassure;
    
    public function __construct() {
        $this->observers = array();
    }
    
    public function registerObserver(Observer $o){
        $this->observers[] = $o;
    }
    
    public function removeObserver(Observer $o){
        $key = array_search($o, $this->observers);
        if (isset($key) && $key >= 0) {
            unset($this->observers[$key]);
        }
    }
    
    public function notifyObservers(){
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->preassure);
        }
    }
    
    //measurements 
}
