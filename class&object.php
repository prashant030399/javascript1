<html>
    <head>
        <script>

            ////////------------class and object(DIFFERENT)---------------------------


// ------1-----------------------class and object(DIFFERENT) normal----------------------------------------------


// class Demo
// {
//     show1()
//     {
//         alert("hello");
//     }
// }
//             var x=new Demo();
//             x.show1();


//----1----------------------------------------------------------------------------------------------------------

//-----2--------------------- add()----------------------------------------------------------------------------------------

// class Wrong
// {
//     add()
//     {
//         var a=parseInt(prompt("enter a"));
//         var b=parseInt(prompt("enter b"));
//         var c=parseInt(a)+parseInt(b);

//     document.write(c);

//     }
// }
// var x= new Wrong();
// x.add();
//----2-----------------------------------------------------------------------



// -----3-------------factorial------------------------------------------------
// class m
// {
//     factorial()
//     {
//         var a,f,i;
//       a=parseInt(prompt("enter a"));
//      f=1;

//        for(i=a;i>=1;i=i-1)
//        {
//         f=f*i;
//        }
//        document.write(f);
//     }}
//     var p=new m();
//     p.factorial();

//-------3--------------------------------------------------------------------------------------

//--------4-------------------greatest of 3---------------------------------------------

// class Wrong
// {
//     greatest()
//     {
//         var a=parseInt(prompt("enter a"));
//         var b=parseInt(prompt("enter b"));
//         var c=parseInt(prompt("enter c"));

//         if(a>b  && a>c)
//         {
//             document.write("a is greatest");
//         }
//         if(b>a  && b>c)
//         {
//             document.write("b is greatest");
//         }
//         else
//         {

//             document.write("c is greatest");
//         }
//     }
// }
// var p= new Wrong()
// p.greatest();

//----4-----------------------------------------------------------------------------------------


//----5------------------instance variable(this  funtion-) (only one class mostly)   ek hi mein---------------------------------------------

// class  Demo
// {
//     input()
//     {
//         this.a=parseInt(prompt("enter a"));
//         this.b=parseInt(prompt("enter b"));
//         this.c=parseInt(prompt("enter c"));

//     }

//     add()
//     {
//                   var c;
//          c = this.a + this.b;
//         document.write(c);

//     }

// sub()
// {
//     var d;
//          d = this.a - this.b;
//         document.write(d);

// }
// greatest()
// {
//     if(this.a>this.b  && this.a>this.c)
//     {
//         document.write("a is greatest");
//     }
//     if(this.b>this.a  && this.b>this.c)
//     {
//         document.write("b is greatest");
//     }
//     else
//     {
//         document.write("c is greatest");
//     }

// }
// }



// var p= new Demo();
// p.input();
// p.add();
// p.sub();
// p.greatest();


//-----5----------------------------------------------------------------------------------

//---6------------instance variable  (same class diff function) ----------------------------------------------------

// class data
// {
//         input()
//         {
//             this.a=parseInt(prompt("enter a"));
//             this.b=parseInt(prompt("enter b"));

//         }


//      }
// var c,d;
   
//    var d1=new data() ;
//    var d2= new data();

//    d1.input();
//    d2.input();

//    c= d1.a+d2.a;
//    d=d1.b+ d2.b;

//    document.write(c);
//    document.write(d);

     //---6-------------------------------------------------------------------------------------------------------

     //---7-------------instance variable  (same class diff function)  student highest marks-------------------

//      class data
//      {
// input()
// {
    // this.a=parseInt(prompt("enter rollno"));
    // this.b=prompt("enter name");
    // this.c=parseInt(prompt("enter marks"));

// }

//      }


    
//      var s1=new data();
//      var s2=new data();
//      var s3=new data();

//      s1.input();
//      s2.input();
//      s3.input();
     

//      if(s1.c > s2.c && s1.c>s3.c)
//      {
       
//         document.write("   s1 is topper");

//      }
//      if(s2.c > s1.c && s2.c>s3.c)
//      {
       
//         document.write("   s2 is topper");

//      }
//      else
//      {
//         document.write("   s3 is topper");
//      }
     
//------7-------------------------------------------------------------------------------

//---8---------constructor  ( substitute of input/initialize instance variable)-------basic q --------------------------------------------------------

// class m
// {
//     constructor()
//     {
//         document.write("a");
//     }
// }

//     var  x = new m();

    //////----8---------------------------------------------------------------------------------

    //----9-----------constructor  (substitute of input/initialize instance variable)-------add-------------------------------------

    
// class  m
// {
// constructor(y,z)
// {
//        this.a=y;
//        this.b=z;
 
// }
// add()
// {
// document.write(this.a+this.b);
// }
// }
// var x=new m(8,9);
// x.add();

//-------9---------------------------------------------------------------------------------------------------------

///------10---------------constructor  (substitute of input/initialize instance variable)-------greatestof3-----------

// class m
// {
//     constructor(rno,name,mark)
//     {
//         this.rollno=rno;
//         this.name=name;
//         this.mark=mark;
//     }
//     greatestof3(y,z)
//     {
//         if(this.mark>y.mark && this.mark>z.mark)
//         {
//             document.write("x is greatest");

//         }
//         else if(y.mark>this.mark  && y.mark>z.mark)
//         {
//             document.write("y is greatest");
//         }
//         else
// {
//     document.write("z is greatest");
// }

    
        
//     }
// }

// var x = new m(101,"ash",567);
// var y = new m(102,"ajay",67);
// var z=new m(103,"tani",45);

// x.greatestof3(y,z);



//------10------------------------------------------------------------------------------------------

//------11---------------constructor  (substitute of input/initialize instance variable)-------metre,centimeter  add-----------

// class my
// {
//     constructor(m,cm)
//     {
//         this.m=m;
//         this.cm=cm;
//     }
//     convertadd(q)
//     {
//         if((this.cm + q.cm)>=100)
//         {
//             document.write((this.m + q.m)+1);
//             document.write((this.cm + q.cm)-100);
//         }
//         else
//         {
//             document.write(this.m + q.m);
//             document.write(this.cm  + q.cm);

//         }
       
//     }
// }

//  var p= new my(4,80);
//  var q =new my(3,80);
//  p.convertadd(q);

 //----11--------------------------------------------------------------------------------------------------------------------

 //---12-------------constructor  (substitute of input/initialize instance variable)-------salary deduct add  by AMT-------------

//  class my
//  {
//     constructor(id,name,salary)
//     {
//         this.id=id;
//         this.name=name;
//         this.salary=salary;
        
//     }
//     input()
//     {
//         this.amt=parseInt(prompt("enter amt"));
//     }

//     amount(s2)
//     {
//         if(s2.salary<this.amt)
//         {
//             document.write(this.salary);
//             document.write(s2.salary);
//         }
//     else
//       {
//         document.write(this.salary+this.amt);
//          document.write(s2.salary-this.amt);
//       }

//     }
//  }
  
//  var s1= new my(101,"a",4000);
//  var s2=new my(102,"b",800);

//  s1.input();

//  s1.amount(s2);

//----12----------------------------------------------------------------------------------------------------------------------

//---13-------constructor  (substitute of input/initialize instance variable)-------code dope(class and object) q1-------------

// q1                Create a class named 'Student' with a string variable 'name' and an integer variable 'roll_no'.
//                      Assign the value of roll_no as '2' and that of name as "John" by creating an object of the class Student.

// class student
// {
//     constructor(name,rollno)
//     {
//        this.name=name;
//        this.rollno=rollno;

//     }
//     s1()
//     {
//         document.write( "name: " + this.name+          "<br>" + "rollno:" + this.rollno);
//     }
    

// }
//  var p=new student( "john",2);
//  p.s1();






//---13----------------------------------------------------------------------------------------------------------------------

//---14-------constructor  (substitute of input/initialize instance variable)-------code dope(class and object) q2-------------

//                Q2 Assign and print the roll number, phone number and address of two students having names 
                    //    "Sam" and "John"respectively by creating two objects of the class 'Student'.

// class student
// {
//   constructor(rollno,phoneno,address)
//   {
//     this.rollno=rollno;
//     this.phoneno=phoneno;
//     this.address=address;

//   }
//   sam()
//   {
//    document.write( "Sam Details-" + "rollno:" + this.rollno + "," + "phoneno:"+ + this.phoneno + "," +"address:"+ this.address +"<br>" );
//   }
//   john()
//   {
//     document.write( "John Details-" + "rollno:" +this.rollno + "," + "phoneno:"+  this.phoneno + "," +"address:" + this.address);
//   }
  
// }
// var s1= new student(101,2222234372," durg");
// var s2=new student(102,3333334372," bhilai");

// s1.sam();
// s2.john();





//--14-------------------------------------------------------------------------------------------------------------------------

//---15-------constructor  (substitute of input/initialize instance variable)-------code dope(class and object) q3---------------

//                       q3.Write a program to print the area and perimeter of a triangle having sides
//               of 3, 4 and 5 units by creating a class named 'Triangle' with a function to print the area and perimeter.

// class triangle

// {
//     constructor(s1,s2,s3)
//     {
//         this.s1=s1;
//         this.s2=s2;
//         this.s3=s3;
        


//     }


//     area()
//     {
        
//         const s=(this.s1 + this.s2 + this.s3)/2;
//         const area= Math.sqrt((this.s)*(this.s-this.s1)*(this.s-this.s2)*(this.s-this.s3));
//     }

//     perimeter()
//     {
//         document.write("Perimeter:" + (this.s1 + this.s2  + this.s3) );

//     }
   


// }
//  var p=new triangle(3,4,5);
//  p.area();
//  p.perimeter();


 //---15----------------------------------------------------------------------------------------------------

 ////---16-------constructor  (substitute of input/initialize instance variable)-------code dope(class and object) ---q4---------------

//           q4      Write a program to print the area and perimeter of a triangle having sides of 3, 4 and 5 units by 
                    // creating a class named 'Triangle' with the constructor having the three sides as its parameters

                    // class triangle

// {
//     constructor(s1,s2,s3)
//     {
//         this.s1=s1;
//         this.s2=s2;
//         this.s3=s3;
        


//     }


//     area()
//     {
        
//         const s=(this.s1 + this.s2 + this.s3)/2;
//         const area= Math.sqrt((this.s)*(this.s-this.s1)*(this.s-this.s2)*(this.s-this.s3));
//     }

//     perimeter()
//     {
//         document.write("Perimeter:" + (this.s1 + this.s2  + this.s3) );

//     }
   


// }
//  var p=new triangle(3,4,5);
//  p.area();
//  p.perimeter();








   //---16-------------------------------------------------------------------------------------

   //--17----constructor  (substitute of input/initialize instance variable)-------code dope(class and object) ---q5---------------

    //  q5         Write a program to print the area of two rectangles having sides (4,5) and (5,8) respectively by 
    //                               creating a class named 'Rectangle' with a function named 'Area' 
    //                   which returns the area. Length and breadth are passed as parameters to its constructor.

// class rectangle
// {
//  constructor(l,b)
//  {
//     this.length=l;
//     this.breadth=b;
//  }

//  area()
//  {
// document.write(this.length*this.breadth + "<br>");
//  }
// }
// var p= new rectangle(4,5);
// var q= new rectangle(5,8);

// p.area();
// q.area();

//--17------------------------------------------------------------------------------------------------------------------------

//--18----constructor  (substitute of input/initialize instance variable)-------code dope(class and object) ---q6---------------

    // q6                Write a program to print the area of a rectangle by creating a class named 'Area' having two functions. 
    //            First function named as 'setDim' takes the length and breadth of the rectangle as parameters and the second 
    //    function named as 'getArea' returns the area of the rectangle. Length and breadth of the rectangle are entered through keyboard.

//     class area
//     {
//         setDim()
//         {
// this.length=parseInt(prompt("enter length"));
// this.breadth=parseInt(prompt("enter breadth"));
//         }
//         getArea()
//         {
           
//           document.write(  this.length*this.breadth);

//         }
//     }
//     var p= new area()
//      p.setDim();
//     p.getArea();

    //---18---------------------------------------------------------------------------------------------------------------------------

    ////--19----constructor  (substitute of input/initialize instance variable)-------code dope(class and object) ---q7---------------

//    q7             Write a program to print the area of a rectangle by creating a class named 'Area' taking the values of 
//                 its length and breadth as parameters of its constructor and having a function named 'returnArea' which
//                  returns the area of the rectangle. Length and breadth of the rectangle are entered through keyboard.

// class area
// {
//     constructor()
//     {
//         this.length=parseInt(prompt("enter length :"));
//         this.breadth=parseInt(prompt("enter breadth :"));


//     }
//     returnArea()
//     {
//         document.write(this.length*this.breadth);

//     }

// }
// var p= new area();
// p.returnArea()

//---19---------------------------------------------------------------------------------------------------------------------------

 //--20----constructor  (substitute of input/initialize instance variable)-------code dope(constructor) ---q1---------------

            //   q1 Write a program to print the names of students by creating a Student class. If no name is passed while 
            //                     creating an object of the Student class, then the name should be "Unknown", 
            //     otherwise the name should be equal to the String value passed while creating the object of the Student class.

           
            
            // class student
            // {
            //     constructor(name)
            //     {
            //         this.name=name || "";
            //     }
            //     s1()
            //     {
            //         if(this.name=="")
            //         {
            //             document.write("unknown");
            //         }
            //         else
            //         {
            //         document.write(this.name);
            //         }
            //     }
            // }
            // var p= new student('Prashant');
            // p.s1();

//--20----------------------------------------------------------------------------------------------------------------------------

//--21----constructor  (substitute of input/initialize instance variable)-------code dope(constructor) ---q2---------------

           //     q2        Create a class named 'Rectangle' with two data members- length and breadth and a function to 
            // 1 - having no parameter - values of both length and breadth are assigned zero.
                   // 2 - having two numbers as parameters - the two numbers are assigned as length and breadth respectively.
                            // 3 - having one number as parameter - both length and breadth are assigned that number.
             // Now, create objects of the 'Rectangle' class having none, one and two parameters and print their areas.


class Rectangle
{
    
    constructor(l,b)
    {
        this.length=l;
        this.breadth=b;
    }
   

    area()
    {
        document.write(this.length*this.breadth);
        document.write("<br>");
    }
    
    

}
var p= new Rectangle(0,0);
var q= new Rectangle(2,3);
var r=new Rectangle(9); 
p.area();
q.area();
r.area();

//---21------------------------------------------------------------------------------------------------------------------------

//--22----constructor  (substitute of input/initialize instance variable)-------code dope(constructor) ---q3---------------

              // //   q3  Suppose you have a Piggie Bank with an initial amount of $50 and you have to add some more amount to it.
                    //  Create a class 'AddAmount' with a data member named 'amount' with an initial value of $50.
                             //   Now make two constructors of this class as follows:
                         // // 1 - without any parameter - no amount will be added to the Piggie Bank
                      // // 2 - having a parameter which is the amount that will be added to the Piggie Bank
                  // // Create an object of the 'AddAmount' class and display the final amount in the Piggie Bank.
 
                // class AddAmount
                // {
                //     constructor(amt)
                //     {
                //         this.initial=50;
                //         this.amt=amt;

                //     }
                //     addtopiggie()
                //     {
                //         document.write(this.initial=50+this.amt)
                //     }
                // }
                // var p=new AddAmount(99);
                // p.addtopiggie();










                  
// --22-----------------------------------------------------------------------------------------------------------------------------------

//--23----constructor  (substitute of input/initialize instance variable)-------code dope(constructor) ---q4---------------


            // //  q4   Create a class named 'Programming'. While creating an object of the class, if nothing is passed to it, 
                   // then the message "I love programming languages" should be printed. If some String is passed to it, 
                      // then in place of "programming languages" the name of that String variable should be printed.
                 // / / // For example, while creating the object if we pass "cpp", then "I love cpp" should be printed. 

























 
















</script>

    </head>


</html>