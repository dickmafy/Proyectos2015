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
public class Main_Sort_TreeMap {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
TreeMap treeMapOrdenar = new TreeMap();
treeMapOrdenar.put("Fixed Income", "Fixed income is related to bonds, Fixed Deposit, Swaps etc");
treeMapOrdenar.put("Equity", "Equity is related to Stock trading in Cash also called Cash Equity");
treeMapOrdenar.put("Derivative", "Derivative is mostly futures, options trading ");
treeMapOrdenar.put("Foriegn Exchange", "FX is converting currency from one to other e.g. USD to YEN");

//mostrar ordenado
System.out.println("-" + treeMapOrdenar.keySet());
System.out.println("-" + treeMapOrdenar.values());
        


    }
    
}
