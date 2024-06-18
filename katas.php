<?php
// String ends with?

function endsWith($str, $ending){
  return str_ends_with($str, $ending);
}

// Wave Function
function wave(string $people): array {
  
  $result = [];

  for($i = 0; $i < strlen($people); $i++){
    if(ctype_space($people[$i])) continue;
    $result[] = substr_replace($people, strtoupper($people[$i]), $i, 1);
  }

  return $result;
}

var_dump(wave("hello"));



// Love pedal kata

function how_much_i_love_you(int $nb_petals): string {
  $finalNum = $nb_petals;
  
  if ($finalNum > 6){
    $subNum = floor($finalNum/6) * 6;
    $finalNum = $finalNum - $subNum;
  }
  
  switch ($finalNum) {
      case 1:
        return "I love you";
        break;
      case 2:
        return "a little";
        break;
      case 3:
        return "a lot";
        break;
      case 4:
        return "passionately";
        break;
      case 5:
        return "madly";
        break;
      case 6:
        return "not at all";
      
  }   
}

// echo(how_much_i_love_you(10000000));

// echo(array_unique([ 1, 1, 1, 2, 1, 1 ]));

// There is an array with some numbers. All numbers are equal except for one. Try to find it!

function find_uniq($a) {
  $diffNum = null;
  for($i = 0; $i < count($a); $i++){
    if($i === count($a) - 1){
      if($a[$i] !== $a[$i - 1] && $a[$i] !== $a[$i - 2]){
        $diffNum = $a[$i];
      }
    } elseif($i === 0) {
      if($a[$i] !== $a[$i + 1] && $a[$i] !== $a[$i + 2]){
        $diffNum = $a[$i];
      }
    } else {
      if($a[$i] !== $a[$i - 1] && $a[$i] !== $a[$i + 1]){
        $diffNum = $a[$i]; 
      }
    }
  }

  return $diffNum;
}

// echo(find_uniq([ 1, 1, 1, 2, 1, 1 ]));



// Write a function to split a string and convert it into an array of words.

function string_to_array($s){
  return explode(" ", $s);
}



// Write a 'welcome' function that takes a parameter 'language', with a type String, and returns a greeting - if you have it in your database. 
// It should default to English if the language is not in the database, or in the event of an invalid input.

$lang = [
  ["english", "Welcome"], ["czech", "Vitejte"], ["danish", "Velkomst"], ["dutch", "Welkom"], ["estonian", "Tere tulemast"], ["finnish", "Tervetuloa"], ["flemish", "Welgekomen"], ["french", "Bienvenue"], ["german", "Willkommen"], ["irish", "Failte"], ["italian", "Benvenuto"], ["latvian", "Gaidits"], ["lithuanian", "Laukiamas"], ["polish", "Witamy"], ["spanish", "Bienvenido"], ["swedish", "Valkommen"], ["welsh", "Croeso"]
];

// My Solution 
function greets(string $language): string {
  
  $lang = [ ["english", "Welcome"]
  , ["czech", "Vitejte"]
  , ["danish", "Velkomst"]
  , ["dutch", "Welkom"]
  , ["estonian", "Tere tulemast"]
  , ["finnish", "Tervetuloa"]
  , ["flemish", "Welgekomen"]
  , ["french", "Bienvenue"]
  , ["german", "Willkommen"]
  , ["irish", "Failte"]
  , ["italian", "Benvenuto"]
  , ["latvian", "Gaidits"]
  , ["lithuanian", "Laukiamas"]
  , ["polish", "Witamy"]
  , ["spanish", "Bienvenido"]
  , ["swedish", "Valkommen"]
  , ["welsh", "Croeso"]
  ];
  
  $welcome = 'Welcome';
  
  for($i = 0; $i < count($lang); $i++){
    if($lang[$i][0] === $language){
      $welcome = $lang[$i][1];
    }
  }                                                                                                                                                            
  
  return $welcome;
}

// Best solution
function greet(string $language): string {
  $langs = [
    "english" => 'Welcome',
    "czech" => 'Vitejte',
    "danish" => 'Velkomst',
    "dutch" => 'Welkom',
    "estonian" => 'Tere tulemast',
    "finnish" => 'Tervetuloa',
    "flemish" => 'Welgekomen',
    "french" => 'Bienvenue',
    "german" => 'Willkommen',
    "irish" => 'Failte',
    "italian" => 'Benvenuto',
    "latvian" => 'Gaidits',
    "lithuanian" => 'Laukiamas',
    "polish" => 'Witamy',
    "spanish" => 'Bienvenido',
    "swedish" => 'Valkommen',
    "welsh" => 'Croeso'
  ];
  return $langs[$language] ?? "Welcome";
}
