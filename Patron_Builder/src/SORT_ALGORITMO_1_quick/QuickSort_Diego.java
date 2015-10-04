/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SORT_ALGORITMO_1_quick;

/**
 *
 * @author DIEGO
 */
public class QuickSort_Diego {

    private static int[] A;
    
    public static void main(String[] args) {
         A = new int[6];
         A[0] = 10;
         A[1] = 40;
         A[2] = 7;
         A[3] = 9;
         A[4] = 15;
         A[5] = 27;

         
  
        
         printArray();
         System.out.println(" ---------------- ");
        quicksort(A, 0, 5);
        System.out.println(" ---------------- ");
        printArray();
       
    }

    public static void printArray(){
        
		for(int i : A){
			System.out.print(i+" ");
		}
                
	}
    
    public static void quicksort(int A[], int izq, int der) {
        int pivote = A[izq]; // tomamos primer elemento como pivote
        int I = izq; // I realiza la búsqueda de I a D
        int D = der; // D realiza la búsqueda de D a I
        int ayuda;
        
        while (I < D) {            // mientras no se crucen las búsquedas
            while (A[I] <= pivote && I < D) {
                //1) 10<=10, si y 0 < 5 , entonces eel cursor avanza ->
                I++; // busca elemento mayor que pivote
            }
            // busca elemento menor que pivote
            while (A[D] > pivote) {
                //1) 10>27, si, se queda en su lugar y se mueve cursor  a la I <-
                D--;         
            }
            //Como encontro a uno MENOR que el pivote lo INTERCAMBIA.
            if (I < D) {                      // si no se han cruzado                      
                ayuda = A[I];                  // los intercambia
                A[I] = A[D];
                A[D] = ayuda;
            }
        }

        A[izq] = A[D]; // se coloca el pivote en su lugar de forma que tendremos
        A[D] = pivote; // los menores a su I y los mayores a su D
        if (izq < D - 1) {
            quicksort(A, izq, D - 1); // ordenamos subarray izquierdo
        }
        if (D + 1 < der) {
            quicksort(A, D + 1, der); // ordenamos subarray derecho
        }
    }
    
    
    
}
