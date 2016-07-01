#include <stdio.h>
#include <stdlib.h>
 
int Desc(int n)
{
	 if (n == 0)
	 return 1;
	 else if (n<0){
		 printf("\nErro: fatorial de numero negativo!\n");
	 }
	 return n*Desc(n-1);
 }

 
int main(void)
{
    int i, total;
    printf("Digite um nomero inteiro: \n");
    scanf("%d",&i);
    i = rand()% i;
   	total = Desc(i);
   	printf("O fatorial do numero dondomico %d : %d",i,total);
}
