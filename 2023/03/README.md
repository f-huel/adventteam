# Brainstorm
Ok for this one I will most likely make a multidimensional array. Splitting the input in lines and then in charachters.\
After that the program has to scan for numbers. Once it hits a number it stores the number and it's location within the multidimensional array.\
Then it checks for symbols (anything that's not a number or a period is symbol) at adjacent locations. Adjacent meaning in a block form so for instance\
If we have a number at location [3][5] => [3][7] then we must check for symbols at [2][4] => [2][8], [3][4], [3][8] and [4][4] => [4][8].\
Since we wont know the size of the number we have to use the difference in the second dimension as the sizeof.\
So the number location will be [i][js] => [i][je] and the locations that must be checked are [i-1][js-1] => [i-1][je+1], [i][js-1]\
[i][je+1], [i+1][js-1] => [i+1][je+1].\
I will most likely be doing this in C again.

## C
I have no idea how to use multidimensional arrays in C.\
I will just keep a counter to know on what line I am for [i].\
After struggling for hours on end trying to save 3 rotating lines in C I have decided to switch to PHP.

## PHP