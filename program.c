#include<stdio.h>
#include<conio.h>

void main()
{

    int i,num;
    printf("Enter One number : ");
    scanf("%d",&num);

    for(i=1;i<=num;i++)
    {
        if(i%3==0)
        {
            printf("Fiiz");
        }
        else  if(i%5==0)
        {
            printf("Biiz");
        }
        
        else{
            printf("%d",i);
            }
            printf("/n");
            
    }
}