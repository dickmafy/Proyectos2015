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
public class Student implements Comparable<Student> {

    private int id;
    private String name;
    private int age;

    public Student(int id, String name, int age) {
        this.id = id;
        this.name = name;
        this.age = age;
    }

    @Override
    public int compareTo(Student o) {
        Student otroUsuario = (Student) o;
        //podemos hacer esto porque String implementa Comparable
        if(this.getAge() > otroUsuario.getAge())
        {
            System.out.println(this.getName() +" es mayor que " + o.getName() );
            return 1;
        }
        if(this.getAge() < otroUsuario.getAge()){
            System.out.println(this.getName() +" es menor que " + o.getName() );
            return -1;
        }
        System.out.println(this.getName() +" es igual " + o.getName() );
        return 0;
    }

    /**
     * @return the id
     */
    public int getId() {
        return id;
    }

    /**
     * @param id the id to set
     */
    public void setId(int id) {
        this.id = id;
    }

    /**
     * @return the name
     */
    public String getName() {
        return name;
    }

    /**
     * @param name the name to set
     */
    public void setName(String name) {
        this.name = name;
    }

    /**
     * @return the age
     */
    public int getAge() {
        return age;
    }

    /**
     * @param age the age to set
     */
    public void setAge(int age) {
        this.age = age;
    }

}
