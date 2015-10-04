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
public class Cook {
    private PizzaBuilder pizzaBuilder;
 
    public void setPizzaBuilder(PizzaBuilder pb) {
        this.pizzaBuilder = pb;
    }
 
    public Pizza getPizza() {
        return this.pizzaBuilder.getPizza();
    }
 
    public void hacerPizza() {
        pizzaBuilder.createPizzaProduct();
        pizzaBuilder.hacerBase();
        pizzaBuilder.hacerSalsa();
        pizzaBuilder.hacerIngredientes();
    }
}
