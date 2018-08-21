# Number Pyramid


By starting at the top of the triangle below and moving to adjacent numbers on the row below, find the maximum possible total from top to bottom. 

```
      98                98
    39  06            39  --
  90  42  69        90  --  --     
48  66  39  94    --  66  --  --    98 + 39 + 90 + 66 = 293 
```

Find the solutions for [Pyramid 1](examples/files/codegym-problem-1.txt) and [Pyramid 2](examples/files/codegym-problem-2.txt)

## Running

```
composer install
php examples/SolveCodeGymProblem1.php
php examples/SolveCodeGymProblem2.php
```

## Using

Get data from a file or from a seed with
```
$pyramid = NumberPyramid::fromFile( string $filePath )
$pyramid = NumberPyramid::fromSeed( int $seed = null, int $numberOfRows = null )
```
Then using that data you can solve for the min or max path with
```
$pyramid->solveMin()
$pyramid->solveMax()
```
Or generate a file from the loaded data with
```
$pyramid->generate()
```
