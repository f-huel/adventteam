#include <stdio.h>
#include <ctype.h>
#include <string.h>
#include <stdlib.h>

int main(int argc, char *argv[])
{

    FILE *file = fopen(argv[1], "r");

    char line[100];
    while (fgets(line, sizeof(line), file))
    {
        int ari = 0;
        int a = 0;
        char *ptr = line;

        while (*ptr != '\0')
        {
            if (isdigit(*ptr))
            {
                a = *ptr;
                a = a - 48;
            }

            else if (*ptr == 'o' && *(ptr + 1) == 'n' && *(ptr + 2) == 'e') // ONE
            {
                a = 1;
            }

            else if (*ptr == 't') // Two Three
            {
                if (*(ptr + 1) == 'w' && *(ptr + 2) == 'o') // TWO
                {
                    a = 2;
                }
                else if (*(ptr + 1) == 'h' && *(ptr + 2) == 'r' && *(ptr + 3) == 'e' && *(ptr + 4) == 'e') // THREE
                {
                    a = 3;
                }
            }

            else if (*ptr == 'f') // Four Five
            {
                if (*(ptr + 1) == 'o' && *(ptr + 2) == 'u' && *(ptr + 3) == 'r') // FOUR
                {
                    a = 4;
                }
                else if (*(ptr + 1) == 'i' && *(ptr + 2) == 'v' && *(ptr + 3) == 'e') // FIVE
                {
                    a = 5;
                }
            }

            else if (*ptr == 's') // Six Seven
            {
                if (*(ptr + 1) == 'i' && *(ptr + 2) == 'x') // SIX
                {
                    a = 6;
                }
                else if (*(ptr + 1) == 'e' && *(ptr + 2) == 'v' && *(ptr + 3) == 'e' && *(ptr + 4) == 'n') // SEVEN
                {
                    a = 7;
                }
            }

            else if (*ptr == 'e' && *(ptr + 1) == 'i' && *(ptr + 2) == 'g' && *(ptr + 3) == 'h' && *(ptr + 4) == 't') // EIGHT
            {
                a = 8;
            }

            else if (*ptr == 'n' && *(ptr + 1) == 'i' && *(ptr + 2) == 'n' && *(ptr + 3) == 'e') // NINE
            {
                a = 9;
            }

            if (a > 0)
            {
                break;
            }
            ptr++;
        }

        while (*ptr != '\0')
        {
            if (isdigit(*ptr))
            {
                ari = *ptr;
                ari = ari - 48;
            }

            else if (*ptr == 'o' && *(ptr + 1) == 'n' && *(ptr + 2) == 'e') // ONE
            {
                ari = 1;
            }

            else if (*ptr == 't') // Two Three
            {
                if (*(ptr + 1) == 'w' && *(ptr + 2) == 'o') // TWO
                {
                    ari = 2;
                }
                else if (*(ptr + 1) == 'h' && *(ptr + 2) == 'r' && *(ptr + 3) == 'e' && *(ptr + 4) == 'e') // THREE
                {
                    ari = 3;
                }
            }

            else if (*ptr == 'f') // Four Five
            {
                if (*(ptr + 1) == 'o' && *(ptr + 2) == 'u' && *(ptr + 3) == 'r') // FOUR
                {
                    ari = 4;
                }
                else if (*(ptr + 1) == 'i' && *(ptr + 2) == 'v' && *(ptr + 3) == 'e') // FIVE
                {
                    ari = 5;
                }
            }

            else if (*ptr == 's') // Six Seven
            {
                if (*(ptr + 1) == 'i' && *(ptr + 2) == 'x') // SIX
                {
                    ari = 6;
                }
                else if (*(ptr + 1) == 'e' && *(ptr + 2) == 'v' && *(ptr + 3) == 'e' && *(ptr + 4) == 'n') // SEVEN
                {
                    ari = 7;
                }
            }

            else if (*ptr == 'e' && *(ptr + 1) == 'i' && *(ptr + 2) == 'g' && *(ptr + 3) == 'h' && *(ptr + 4) == 't') // EIGHT
            {
                ari = 8;
            }

            else if (*ptr == 'n' && *(ptr + 1) == 'i' && *(ptr + 2) == 'n' && *(ptr + 3) == 'e') // NINE
            {
                ari = 9;
            }
            ptr++;
        }

        printf("%i%i\n", a, ari);
    }

    fclose(file);
    return 0;
}
