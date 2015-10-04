/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package verizon;

import java.util.ArrayList;  
import java.util.List;  
  
public class Ejemplo {  
  public static void main2(String[] args) {
      //NO COMPILA
      /*
    List<String> lista = new ArrayList<String>();  
    lista.add(new Integer(22));  
  
    Integer numero = lista.get(0);  
    System.out.println(numero);  
              */
  }  
  
  public static void main(String[] args) {  
    List<Integer> lista = new ArrayList<Integer>();  
    lista.add(22);  
  
    int numero = lista.get(0);  
    System.out.println(numero);  
  }  
  
}  