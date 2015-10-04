/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates


"Reflection" is a language's ability to inspect and dynamically call classes, methods, attributes, etc. at runtime. For example, all objects in Java has the method getClass, which lets you determine its class even if you don't know it at compile time (like if you declared it as Object) - this might seem trivial, but such reflection is not by default possible in less dynamic languages such as C++.

More advanced uses lets you list and call methods, constructors, etc.

Reflection is important since it lets you write programs that does not have to "know" everything at compile time, making them more dynamic, since they can be tied together at runtime. The code can be written against known interfaces, but the actual classes to be used can be instantiated using reflection from configuration files.
Lots of modern frameworks uses reflection extensively for this very reason.
Most other modern languages uses reflection as well, and in script languages like Python can be said to be even more tightly integrated, since it matches more naturally with the general programming model for those languages.


 */
package JavaApi_REFLECTION;

import java.lang.reflect.InvocationTargetException;
import java.lang.reflect.Method;

/**
 *
 * @author DIEGO
 */

public class Test {

	public void firstMoveChoice(){
		System.out.println("First Move");
	} 
	public void secondMOveChoice(){
		System.out.println("Second Move");
	}
	public void thirdMoveChoice(){
		System.out.println("Third Move");
	}
	
	public static void main(String[] args) throws IllegalAccessException, IllegalArgumentException, InvocationTargetException { 
            
            Method[] methods = Test.class.getMethods();
    for(Method method : methods){
        System.out.println("method = " + method.getName());
    }
    
		Test test = new Test();
		Method[] method = test.getClass().getMethods();
		//firstMoveChoice
		method[0].invoke(test, null);
		//secondMoveChoice
		method[1].invoke(test, null);
		//thirdMoveChoice
		method[2].invoke(test, null);
	}
	
} 