/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Generic_JAVA;

import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author DIEGO
 */
public class NewMain {

    /**
     * @param args the command line arguments
     */
    public static void main2(String[] args) {
        List miLista = new ArrayList();
        miLista.add("Hola");
        miLista.add("Galaxia");
        miLista.add(new Integer(2001));
        System.out.println(" list : " + miLista);

        String s = (String) miLista.get(0);
        String st = (String) miLista.get(1);
        String str = (String) miLista.get(2);
    }

    public static void main(String[] args) {

        //JAVA 7 : 
        //List <String> miLista = new ArrayList<>();
        //Java 6
        List<String> miLista = new ArrayList<String>();
        //al poner <String> estamos indicando que la lista sólo acepta Strings
        miLista.add("Hola"); //un String, perfecto
        miLista.add("Galaxia"); //otro String, muy bien
           //miLista.add(new Integer(2001)); //¡error de compilación, no es un String!
        
        
        
    }

}
