<?php
class Person {
  // Turn all attributes in private visibility
  // Add getters, setters
  public $courtesy;
  public $greetings;
  public $fname;
  public $lname;
  public $birth_year;
  public $identifier;
  public $password;
  public $sex;
  public $php_beginner;

  public function __construct(String $courtesy, String $fname, String $lname, int $birth_year, String $identifier, String $password, String $sex, String $php_beginner) {
    $this->courtesy = $courtesy;
    $this->fname = $fname;
    $this->lname = $lname;
    $this->birth_year = $birth_year;
    $this->identifier = $identifier;
    $this->password = $password;
    $this->sex = $sex;
    $this->php_beginner = $php_beginner;
  }

  static function create_person(Array $array): Person {
    return new Person($array['courtesy'], $array['fname'], $array['lname'], $array['birth-year'], $array['identifier'], $array['password'], $array['sex'], isset($array['php-beginner'])?$array['php-beginner']:'off');
  }
}
?>