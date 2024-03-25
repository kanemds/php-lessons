<?php

$value = 1;

//---------------------------------------------------------------

// if() : endif;

if ($value) :  // Check the condition
  // Code to be executed if the condition is true
  echo "The condition is true!";
endif;            // End the if statement's code block

if ($value === 2) :
  // Code to be executed if the condition is true
  echo "The condition is true!";
else :
  // Code to be executed if the condition is false
  echo "The condition is false!";
endif;
//---------------------------------------------------------------

//or 

//---------------------------------------------------------------

// if(){}

if ($value) {
  echo "The condition is true!";
}


if ($value === 2) {
  echo "The condition is true!";
} else {
  echo "The condition is false!";
}
//---------------------------------------------------------------
