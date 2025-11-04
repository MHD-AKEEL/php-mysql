#include <stdio.h>
#include <stdlib.h>
int main (int argc, char * argv[]){
    int rows = atoi(argv[1]);
    for (int i=0; i<rows; i++){
        for (int j = 0; j < i; j++){
            printf("*");
        }
        {
            printf("\n");
        }
        
    }
}