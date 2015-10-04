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
public class Mediterranea extends PizzaBuilder{
     
    public void hacerBase() {
        this.pizza.setBase("Mediterranea FINA");
    } 
 
    public void hacerSalsa() {
        this.pizza.setSalsa("Mediterranea NO");
    }
 
    public void hacerIngredientes() {
        this.pizza.setIngredientes("Mediterranea ACEITUNA + ALCACHOFA");
    }
}
