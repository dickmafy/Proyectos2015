/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import org.junit.Test;
import proxy.Subject;
import proxy.SubjectProxy;

public class ProxyTest {

    @Test
    public void testSubjectSimpleUser() {
        System.out.println("INICIANDO : testSubjectSimpleUser");
        Subject subjectProxied = new SubjectProxy();
        subjectProxied.doOperation("user");
    }

    @Test
    public void testSubjectAdmin() {
        System.out.println("INICIANDO : testSubjectAdmin");

        Subject subjectProxied = new SubjectProxy();
        subjectProxied.doOperation("admin");
        subjectProxied.doOperation("admin");
    }

}
