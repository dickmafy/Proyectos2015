/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package HashMap;

/**
 *
 * @author DIEGO
 */
import java.util.*;

public class HashMap1 {

    public static void main(String[] args) {

        //VARIAS CONFIOGURACION
        //1
        //Hashtable<Integer, String> source = new Hashtable<Integer, String>();
        //HashMap<Integer, String> map = new HashMap(source);
        
        //2
        //HashMap<Integer, String> map = new HashMap<>();
        
        //3
        HashMap<Integer, String> map = new HashMap<>();
        
        
        map.put(21, "Twenty One");
        //map.put(21.0, "Twenty One"); //this will throw compiler error because 21.0 is not integer
        Integer key3 = 21;
        String value = map.get(key3);
        System.out.println("Key: " + key3 + " value: " + value);
        System.out.println("##############################################################################");
        System.out.println("No permite repetidos");
        map.put(21, "Twenty One");
        map.put(21, "Twenty One");
        map.put(25, "a One");
        map.put(21, "Twenty One");
        map.put(31, "Thirty One");
        Iterator<Integer> keySetIterator = map.keySet().iterator();
        while (keySetIterator.hasNext()) {
            Integer key2 = keySetIterator.next();
            System.out.println("key: " + key2 + " value: " + map.get(key2));
        }
        System.out.println("##############################################################################");

        System.out.println(" CONTIENE? >>>");
        System.out.println("##############################################################################");
        System.out.println("Does HashMap contains 21 as key: " + map.containsKey(21));
        System.out.println("Does HashMap contains 21 as value: " + map.containsValue(21));
        System.out.println("Does HashMap contains Twenty One as value: " + map.containsValue("Twenty One"));

        System.out.println("REMOVER ##############################################################################");

        Integer key4 = 21;
        Object value2 = map.remove(key4);
        System.out.println("Following value is removed from Map: " + value2);

        System.out.println("ORDENAR ##############################################################################");
        map.put(21, "Twenty One");
        map.put(31, "Thirty One");
        map.put(41, "Thirty One");

        System.out.println("Unsorted HashMap: " + map);
        TreeMap sortedHashMap = new TreeMap(map);
        System.out.println("Sorted HashMap: " + sortedHashMap);
        System.out.println("##############################################################################");

        System.out.println("##############################################################################");

        System.out.println("Size of Map: " + map.size());
        map.clear(); //clears hashmap , removes all element
        System.out.println("Size of Map: " + map.size());
        System.out.println("##############################################################################");

        boolean isEmpty = map.isEmpty();
        System.out.println("Is HashMap is empty: " + isEmpty);

    }

}
