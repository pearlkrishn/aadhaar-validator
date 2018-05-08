[![Build Status](https://travis-ci.org/pearlkrishn/aadhaar-validator.svg?branch=master)](https://travis-ci.org/pearlkrishn/aadhaar-validator)

# Validate aadhaar number using Verhoeff algorithm in PHP language.

## Installation

   `composer require pearl/aadhaar-validator`
 
 ## How to use?
 
     use Pearl\AadhaarValidator\AadhaarValidator;
  
    $obj = new AadhaarValidator();
    $obj->validate("999999990019");
    //returns true
    $obj->validate("999999990020");
    //return false
    $obj->validate("999999990026");
    //return true
    $obj->validate("233214435423");
    //return false