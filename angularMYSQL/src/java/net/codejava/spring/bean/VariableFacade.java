/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.bean;

import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import net.codejava.spring.model.Variable;

/**
 *
 * @author DIEGO
 */
@Stateless
public class VariableFacade extends AbstractFacade<Variable> {
    @PersistenceContext(unitName = "angularMYSQLPU")
    private EntityManager em;

    @Override
    protected EntityManager getEntityManager() {
        return em;
    }

    public VariableFacade() {
        super(Variable.class);
    }
    
}
