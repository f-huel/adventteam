#include <stdio.h>
#include <stdlib.h>

int main(int argc, char *argv[])
{

    FILE *file = fopen(argv[1], "r");

    char line[100];
    int ari = 0;
    while (fgets(line, sizeof(line), file))
    {
        int num = atoi(line);

        ari += num;
    }

    printf("%i\n", ari);
    fclose(file);
    return 0;
}
