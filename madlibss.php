<?php
function generateStory($singular_noun, $verb, $color, $distance_unit){
 $story = " 
The ${singular_noun}s are lovely, ${color}, and deep.
But I have promises to keep,
And ${distance_unit} to go before I ${verb},
And ${distance_unit} to go before I ${verb}.\n";
  return $story;
};


echo generateStory("dog", "jump", "blue", "miles");
echo generateStory("cat", "run", "red", "kilometers");
echo generateStory("hamster", "dance", "black", "inches");
