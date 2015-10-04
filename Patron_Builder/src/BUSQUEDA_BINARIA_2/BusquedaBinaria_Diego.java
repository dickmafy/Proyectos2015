/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BUSQUEDA_BINARIA_2;

/**
 *
 * @author DIEGO
 */
public class BusquedaBinaria_Diego {
    public static void  main (String args[]) {
        
 /*1. CONFIGURACION */
 // Llenar arreglo
 int [] edades = new int [35];
 for (int i = 0; i < edades.length ; i++)
     edades[i] = i*i ;

 // Mostrar arreglo.
 for (int i = 0; i < edades.length ; i++)
     System.out.println ( "edades["+i+"]: "+  edades[i]);

 
 
 
 /*2. CONFIGURACION */
 int resultado = BusquedaAlgoritmo.buscar(edades, 9);

 
 
 if (resultado != -1) {
     System.out.println ( "Encontrado en: "+  resultado);
 } else {
     System.out.println ( "El dato no se encuentra en el arreglo, o el arreglo no estÃ¡ ordenado."  );
 }
 
    }
}

class BusquedaAlgoritmo {
   
    public static int buscar(int[] a, int num) {
        int I = 0;
        int F = a.length - 1;
        int po=0;
        
        //INICIO
        while (I <= F) {
            po = (I + F) / 2;
            if (a[po] == num) {
                return po;
            } else if (a[po] < num) {
                I = po + 1;
            } else {
                F = po - 1;
            }
        } //while
        return -1;
    }//METODO
}
