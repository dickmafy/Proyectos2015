/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proxy;

public class SubjectReal implements Subject {

  @Override
  public void doOperation(String username) {
      System.out.println("doOperation Real");
  }

}