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
public class FactoryProduct {

    public IProduct createProduct(String tipo) {

        switch (tipo) {
            case "1":
                return new ProductBoletin();

            case "2":
                return new ProductDocumoro();

            case "3":
                return new ProductSunat();

        }
        return null;

    }

}
