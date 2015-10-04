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
public class Barbacoa extends PizzaBuilder{
    public void hacerBase() {
        this.pizza.setBase("Barbacoa GRUESA");
    }
 
    public void hacerSalsa() {
        this.pizza.setSalsa("Barbacoa TOMATE");
    }
 
    public void hacerIngredientes() {
        this.pizza.setIngredientes("Barbacoa ARNE + CARNE");
    }
}