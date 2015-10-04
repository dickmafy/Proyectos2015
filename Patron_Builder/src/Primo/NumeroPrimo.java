/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Primo;

/**
 *
 * @author DIEGO
 */
public class NumeroPrimo {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int numbero = 19;
        System.out.println("INGRESANDO 19");
        System.out.println(esPrimo(numbero));

         numbero =4;
        System.out.println("INGRESANDO 4");
        System.out.println(esPrimo(numbero));
        
        numbero =0;
         System.out.println("INGRESANDO 0");
        System.out.println(esPrimo(numbero));
        
         numbero =1;
        System.out.println("INGRESANDO 1");
        System.out.println(esPrimo(numbero));
        

    }

    public static boolean esPrimo(int num) {
        //configuracoion
        int con = 2;
        boolean estado = true;
        if(num==1) return estado;
        while ((estado) && (con != num)) {
            if (num % con == 0) {
                estado = false;
            }
            con++;
        }//while
        return estado;
    }
}
