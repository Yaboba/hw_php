<?php

abstract class Client{
    abstract protected function battle_roar();
    protected function some_func(){
        return 'Ныаааа';
    }
}


interface Human{
    public function speak();
    public function sleep();
}


class User extends Client implements Human{
    private const GSPEECH = 'Greetings to the viewers';
    private const DSPEECH = "I won't die, I'll live forever";
    private const SLEEP = 'Zzz';
    protected const  TYPE = 'user';
    public string $first_name;
    public string $second_name;


    public function __construct(string $f_name, string $s_name){
        $this->first_name = $f_name;
        $this->second_name = $s_name;
        echo self::GSPEECH,'</br>';
    }

    public function __destruct()
    {
        echo self::DSPEECH, '</br>';
    }

    public function speak(){
        $s = $this->first_name . ' ' . $this->second_name . ' ' . ' - ' . self::TYPE;
        echo $s, '</br>';
    }

    public function sleep()
    {
        echo self::SLEEP, '</br>';
    }

    public function battle_roar()
    {
        echo $this->some_func(), '</br>';
    }
}

$obj = new User('Vitaly', 'Solaridze');
$obj->speak();
$obj->battle_roar();
$obj->sleep();
?>