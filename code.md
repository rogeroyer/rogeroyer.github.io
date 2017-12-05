# Answer

## Question one
```c
#include<stdio.h>
#include<math.h>
int main()
{
	float a,b,c;
	double x1 = 0,x2 = 0;
	scanf("%f %f %f",&a,&b,&c);
	if((b*b-4*a*c) >= 0)
	{
		x1=(-b+sqrt(b*b-4*a*c))/(2*a);
		x2=(-b-sqrt(b*b-4*a*c))/(2*a);
	}
	printf("x1=%.2lf,x2=%.2lf\n",x1,x2);
	return 0;
}
```

## Question two
```c
#include<stdio.h>
int main()
{
    int i,a,b,c,d;
	for(i=10000;i<100000;i++)
	{
         a=i/10000;
		 d=i%10;
		 b=i/1000%10;
		 c=i%100/10;
		 if(a==d && b==c)
		 {
			 printf("%d\n",i);
		 }
	}
	return 0;
}
```

## Question three

```c
#include<stdio.h>
int main()
{
	int score[10],temp = 0;
	int i=-1,j = 0,k = 0;
	double sum=0;
	 
	do{
		i++;
		scanf("%d",&score[i]);
	}while(i<9);

    for(j=0;j<10;j++)
		for(k=0;k< 9 - j;k++)
			if(score[k]>score[k+1])
			{
                temp=score[k];
                score[k]=score[k+1];
			    score[k+1]=temp;
			}

	for(i = 1;i < 9;i++)
	{
		sum += score[i];
	}
	printf("%.2lf\n",sum/8);
	return 0;
}
```
                      
## Question four
```c
#include <stdio.h>
int main()
{
	int N = 0;
	int a = 0,b = 0, c= 0;
	scanf("%d", &N);
	N /= 10;
	while(N != 0)
	{
		if(N >= 5)
		{
			a++;
			N -= 5;
		}
		else if(N >= 3)
		{
			b++;
			N -= 3;
		}
		else
		{
			c++;
			N -= 1;
		}
	}
	printf("%d\n", (7*a + 4*b + c));
	return 0;
}
```
