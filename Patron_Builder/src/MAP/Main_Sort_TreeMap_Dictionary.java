/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MAP;

import java.util.Iterator;
import java.util.TreeMap;

/**
 *
 * @author DIEGO
 */
public class Main_Sort_TreeMap_Dictionary {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        TreeMap eng = new TreeMap();

        eng.put("casa;casa es ", "house;house is");
        eng.put("raton animal;raton es ", "mouse;mouse is ..");
        eng.put("raton de computadora;raton es ", "mouse;mouse is ..");

        String palabra = "";
        obtenerValueOrKeyPorSemiColon(palabra);
//mostrar ordenado
        System.out.println("-" + eng.values());
    }

    private static void obtenerValueOrKeyPorSemiColon(String palabra) {
        System.out.println("retorna lista de map con raton");

    }

}
