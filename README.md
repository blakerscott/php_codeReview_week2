# Word Counter 1.0

#### A simple application counting the occurrence of a word.

#### By Blake R. Scott

## Description

This application allows you to enter a word, then enter a list of words, and check how many times that word appears in the list.

## Setup/Installation Requirements

Step 1: Clone this repo.
Step 2: run $ composer install from the project root folder in your command line.
Step 3: Spin up a server from the web folder of the project folder.

## Known Bugs

One - The word counter will not count a word that has punctuation attached to it, unless that is how it was entered into the first field.  
Example:
  Enter a word to be counted: darn
  Enter a sentence, a paragraph, or just a list of words: darn darn darn darn.

  This example will only count 3 matched words, because a period (.) is attached to the 4th darn.


## Technologies Used

Silex, Twig, PHP, HTML, Composer, PHPUnit

### License

The MIT License (MIT)
Copyright (c) <2016> <Blake R. Scott>

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

Copyright (c) 2016 **_{Blake R. Scott}_**
