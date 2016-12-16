import java.util.*;

class displaylargestnum
{
  public static void main(String[] args)
  {
      int a,b,c;

      
   Scanner s=new Scanner(System.in);

   
   System.out.println("Enter any three numbers: ");
    
    a=s.nextInt();
    b=s.nextInt();
    c=s.nextInt();



      if ((a > b) && (a > c) )
      {
          System.out.println("largest number is " + a);

      }
       if ((b > a) && (b > c) )
      {
          System.out.println("largest number is " + b);

      }
       if ((c > a) && (c > b) )
      {
          System.out.println("largest number is " + c);

      }
  }
}

      

  