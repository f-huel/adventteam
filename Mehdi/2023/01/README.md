# Brainstorm
For part 1 I will try to make a program in c that loops through a string with a pointer. \
Once it hits a number it will save that number and start the same backwards but looping from the end to the start of the string.

## The C program
I started out making the first looper. It continues until it finds a number, stores that number and then replaces it if it finds any other number. \
I noticed I accidentally made the last number grabber first which is fine because all I had to do was copy-paste it and break the loop after grabbing the first number and then concatenate those numbers.\
After that I made sure I was able to read every line seperately and generated an output file.\
I duplicated my program and did the same for my output file but this time I made them all add up to each other.

## Part 2
I saw part 2 and knew to adjust my first program with a few exceptions.\
A few exceptions became many. It's pretty much hardcoded.\
This was excruciating.

## Usage
If you want to use this for yourself it's fairly straight forward.

### Step 1
Put your input in an input.txt file.

### Step 2
Generate an output file using: <p>./program.out input.txt > output.txt</p>

### Step 3
Get your answer with: <p>./sum.out output.txt</p>

### Step 4
For part 2 generate an output file using: <p>./parttwo.out input.txt > output2.txt</p>

### Step 5
Get your part 2 answer with: <p>./sum.out output2.txt</p>