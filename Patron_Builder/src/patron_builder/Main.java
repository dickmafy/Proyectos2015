/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package patron_builder;

/**
 *
 * @author DIEGO
 */
public class Main {

   
   public static void main(String[] args) {
        Cook cook = new Cook();
        //PizzaBuilder = abstract class PizzaBuilder
        //Carbonara  = Carbonara extends PizzaBuilder 
        PizzaBuilder carbonaraB = new Carbonara();
 
        cook.setPizzaBuilder(carbonaraB);
        cook.hacerPizza();
 
        Pizza pizza = cook.getPizza();
        System.out.println(" " + pizza.getBase());
        System.out.println(" " + pizza.getIngredientes());
        System.out.println(" " + pizza.getIngredientes());
        
        carbonaraB = new Mediterranea();
        cook.setPizzaBuilder(carbonaraB);
        cook.hacerPizza();
 
        pizza = cook.getPizza();
        System.out.println(" " + pizza.getBase());
        System.out.println(" " + pizza.getIngredientes());
        System.out.println(" " + pizza.getIngredientes());
        
        
       
    }
    
}
