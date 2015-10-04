/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package belatrix_operations;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

/**
 *
 * @author DIEGO MATOS BALDEON
 */
public class Operacion {

    public Operacion() {
    }

    public static void main(String[] args) {
        operacion();
    }

    public static void operacion() {
        char operacion = '_';
        List<Float> numeroList = new ArrayList<Float>();
        List<String> operacionList = new ArrayList<String>();
        boolean preguntarSiVerResultado = false;
        while (true) {
            Scanner scanner = new Scanner(System.in);
            //METODO PARA CAPTURAR EL VALOR NUMERICO
            System.out.println("Mensaje : Numero  - Ingrese un numero a operar.");
            try {
                numeroList.add(scanner.nextFloat());

                if (preguntarSiVerResultado) {
                    System.out.println("OPCIONES : 0 para salir,cualquier otra tecla para Continuar.");
                    int salir;
                    try {
                        salir = scanner.nextInt();
                        if (salir == 0) {
                            System.out.println("Mensaje : Saliendo y Calculando..");
                            break;
                        }
                    } catch (Exception e) {
                    }
                }
                System.out.println("Mensaje : Escriba la operacion(+,-,*,/)  ");
                try {
                    operacion = (char) System.in.read();
                    if (operacion == '+' || operacion == '-' || operacion == '*' || operacion == '/') {
                        operacionList.add(String.valueOf(operacion));
                    } else {
                        System.err.println("Error Operador : Ingrese un operador valido");
                    }

                } catch (Exception e) {
                    System.err.println("Operador Error: Ingrese un operador valido");
                }

            } catch (Exception e) {
                System.err.println("Error : Escriba un Numero Valido");
            }

            preguntarSiVerResultado = true;
        }

        calcularResultado(numeroList, operacionList);
        imprimirResultado(numeroList, operacionList);
    }

    public static double calcularResultado(List<Float> numeroList, List<String> operacionList) {
        double resultado = 0.00;
        float numero1 = numeroList.size();
        float numero2 = 2;
        resultado = numeroList.get(0);
        for (int i = 1; i < (Math.ceil(numero1 / numero2)) + 1; i++) {
            String operacion = operacionList.get(i - 1);
            switch (operacion) {
                case "+":
                    try {
                        resultado = resultado + numeroList.get(i);
                    } catch (Exception e) {
                        System.err.println("fuera indice +");
                    }

                    break;
                case "-":
                    try {
                        resultado = resultado - numeroList.get(i);
                    } catch (Exception e) {
                        System.err.println("fuera indice -");
                    }

                    break;
                case "*":
                    try {
                        resultado = resultado * numeroList.get(i);
                    } catch (Exception e) {
                        System.err.println("fuera indice *");
                    }

                    break;
                case "/":
                    try {
                        resultado = resultado / numeroList.get(i);
                    } catch (Exception e) {
                        System.err.println("fuera indice /");
                    }

                    break;
                case "_":
                    System.exit(0);
                    break;
                default:
                    System.out.println("La opcion no es valida");
                    break;
            }
        }
        System.out.println("1)RESULTADO DE LA OPERACION : " + resultado);
        return resultado;
    }

    public static String imprimirResultado(List<Float> numeroList, List<String> operacionList) {
        System.out.println(" 2) SEQUENCIA IMPRESA : ");
        StringBuilder sb = new StringBuilder();
        for (int i = 0; i < numeroList.size() - 1; i++) {
            sb.append(" " + numeroList.get(i));
            sb.append(" " + operacionList.get(i));
        }
        sb.append(" " + numeroList.get(numeroList.size() - 1));
        sb.append(" ");
        System.out.println(sb.toString());
        return sb.toString();
    }

}
