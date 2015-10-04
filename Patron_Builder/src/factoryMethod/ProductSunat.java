/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package factoryMethod;

import factoryMethod.Interface.IProduct;

/**
 *
 * @author DIEGO
 */
public class ProductSunat implements  IProduct{

    
    @Override
    public void Ivalidate() {
        System.out.println(" ProductSunat validando! ");
    }
    
}
