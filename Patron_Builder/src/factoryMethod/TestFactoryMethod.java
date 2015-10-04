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
public class TestFactoryMethod {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
        //COMO NORMALMENTE SERA
        ProductDocumoro p = new ProductDocumoro();
        p.Ivalidate();
        //tiene q ser P2 , no deja con el mismo nombre
        ProductSunat p2 = new ProductSunat();
        p2.Ivalidate();
        
        
        //usando factory method
        FactoryProduct fp = new FactoryProduct();
        IProduct ip = fp.createProduct("1");
        ip.Ivalidate();
        
    }
    
}
