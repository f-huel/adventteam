#include <stdio.h>
#include <ctype.h>
#include <string.h>

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
                break;
            }
            ptr++;
        }

        while (*ptr != '\0')
        {
            if (isdigit(*ptr))
            {
                ari = *ptr;
            }
            ptr++;
        }

        printf("%c%c\n", a, ari);
    }

    fclose(file);
    return 0;
}
