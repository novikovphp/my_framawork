<?php
interface Listener{
    public function onMessage($message);
}

class MessageDealer{
    private $observers = [];

    public function message($message)
    {
        $this->callHandlers($message);

    }

    public function addListener(Listener $listener){
        array_push($this->observers,$listener);
    }

    private function callHandlers($message)
    {
        foreach ($this->observers as $observer){
            $observer->onMessage($message);
        }
    }
}

class Person implements Listener{
    public function __construct($name)
    {
        $this->name = $name;
    }
    private $name;
    public function onMessage($message)
    {
        echo "Person ".$this->name." have got the message ".$message."\n";
    }
}

class Company implements Listener{
    public function __construct($name)
    {
        $this->name = $name;
    }
    private $name;
    public function onMessage($message)
    {
        echo "Company ".$this->name." have got the message ".$message."\n";
    }
}

$dealer = new MessageDealer();
$company1 = new Company("SurGU");
$person1 = new Person("Ivaniv I.I.");
$dealer->addListener($company1);
$dealer->addListener($person1);
$dealer->message("Hello!!");
?>