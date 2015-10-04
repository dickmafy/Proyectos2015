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
public abstract class PizzaBuilder {

    public Pizza pizza;

    public Pizza getPizza() {
        System.out.println("obteniendo pizza" + this.pizza.getBase());
        return this.pizza;
    }

    public void createPizzaProduct() {
        this.pizza = new Pizza();
        System.out.println("createPizzaProduct");
    }

    public abstract void hacerBase();

    public abstract void hacerSalsa();

    public abstract void hacerIngredientes();
}
