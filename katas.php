<?php





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
