/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Comparable;

/**
 *
 * @author DIEGO
 */
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Student diego = new Student(1001, "Diego", 28);
        Student mavel = new Student(1002, "Mavel", 30);
        System.out.println(diego.compareTo(mavel));

        diego = new Student(1001, "Diego", 30);
        mavel = new Student(1002, "Mavel", 30);
        System.out.println(diego.compareTo(mavel));

        diego = new Student(1001, "Diego", 31);
        mavel = new Student(1002, "Mavel", 30);
        System.out.println(diego.compareTo(mavel));

    }

}
