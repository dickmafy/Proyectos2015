/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package proxy;

public class SubjectProxy implements Subject {

  private final Subject _subjectReal;

  private boolean _connected = false;

  public SubjectProxy() {
      _subjectReal = new SubjectReal();
  }

  @Override
  public void doOperation(String username) {
      // Control de Acceso simple
      if (!username.isEmpty() && "admin".equals(username)) {
          System.out.println("doOperacion proxied");
          if (_connected) {
              _subjectReal.doOperation(username);
          } else {
              connectToRemote();
              _subjectReal.doOperation(username);
          }
      } else {
          System.out.println("Access Denied");
      }
  }

  private void connectToRemote() {
      System.out.println("Connecting to remote");
      _connected = true;
  }
}