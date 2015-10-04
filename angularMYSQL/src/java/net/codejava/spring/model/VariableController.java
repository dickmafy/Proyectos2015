/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.lang.reflect.InvocationTargetException;
import java.lang.reflect.Method;
import java.util.List;
import javax.faces.FacesException;
import javax.annotation.Resource;
import javax.faces.component.UIComponent;
import javax.faces.context.FacesContext;
import javax.faces.convert.Converter;
import javax.faces.model.SelectItem;
import javax.persistence.EntityManagerFactory;
import javax.persistence.PersistenceUnit;
import javax.transaction.UserTransaction;
import net.codejava.spring.bean.VariableFacade;
import net.codejava.spring.model.util.JsfUtil;
import net.codejava.spring.model.util.PagingInfo;

/**
 *
 * @author DIEGO
 */
public class VariableController {

    public VariableController() {
        pagingInfo = new PagingInfo();
        converter = new VariableConverter();
    }
    private Variable variable = null;
    private List<Variable> variableItems = null;
    private VariableFacade jpaController = null;
    private VariableConverter converter = null;
    private PagingInfo pagingInfo = null;
    @Resource
    private UserTransaction utx = null;
    @PersistenceUnit(unitName = "angularMYSQLPU")
    private EntityManagerFactory emf = null;

    public PagingInfo getPagingInfo() {
        if (pagingInfo.getItemCount() == -1) {
            pagingInfo.setItemCount(getJpaController().count());
        }
        return pagingInfo;
    }

    public VariableFacade getJpaController() {
        if (jpaController == null) {
            FacesContext facesContext = FacesContext.getCurrentInstance();
            jpaController = (VariableFacade) facesContext.getApplication().getELResolver().getValue(facesContext.getELContext(), null, "variableJpa");
        }
        return jpaController;
    }

    public SelectItem[] getVariableItemsAvailableSelectMany() {
        return JsfUtil.getSelectItems(getJpaController().findAll(), false);
    }

    public SelectItem[] getVariableItemsAvailableSelectOne() {
        return JsfUtil.getSelectItems(getJpaController().findAll(), true);
    }

    public Variable getVariable() {
        if (variable == null) {
            variable = (Variable) JsfUtil.getObjectFromRequestParameter("jsfcrud.currentVariable", converter, null);
        }
        if (variable == null) {
            variable = new Variable();
        }
        return variable;
    }

    public String listSetup() {
        reset(true);
        return "variable_list";
    }

    public String createSetup() {
        reset(false);
        variable = new Variable();
        return "variable_create";
    }

    public String create() {
        try {
            utx.begin();
        } catch (Exception ex) {
        }
        try {
            Exception transactionException = null;
            getJpaController().create(variable);
            try {
                utx.commit();
            } catch (javax.transaction.RollbackException ex) {
                transactionException = ex;
            } catch (Exception ex) {
            }
            if (transactionException == null) {
                JsfUtil.addSuccessMessage("Variable was successfully created.");
            } else {
                JsfUtil.ensureAddErrorMessage(transactionException, "A persistence error occurred.");
            }
        } catch (Exception e) {
            try {
                utx.rollback();
            } catch (Exception ex) {
            }
            JsfUtil.ensureAddErrorMessage(e, "A persistence error occurred.");
            return null;
        }
        return listSetup();
    }

    public String detailSetup() {
        return scalarSetup("variable_detail");
    }

    public String editSetup() {
        return scalarSetup("variable_edit");
    }

    private String scalarSetup(String destination) {
        reset(false);
        variable = (Variable) JsfUtil.getObjectFromRequestParameter("jsfcrud.currentVariable", converter, null);
        if (variable == null) {
            String requestVariableString = JsfUtil.getRequestParameter("jsfcrud.currentVariable");
            JsfUtil.addErrorMessage("The variable with id " + requestVariableString + " no longer exists.");
            return relatedOrListOutcome();
        }
        return destination;
    }

    public String edit() {
        String variableString = converter.getAsString(FacesContext.getCurrentInstance(), null, variable);
        String currentVariableString = JsfUtil.getRequestParameter("jsfcrud.currentVariable");
        if (variableString == null || variableString.length() == 0 || !variableString.equals(currentVariableString)) {
            String outcome = editSetup();
            if ("variable_edit".equals(outcome)) {
                JsfUtil.addErrorMessage("Could not edit variable. Try again.");
            }
            return outcome;
        }
        try {
            utx.begin();
        } catch (Exception ex) {
        }
        try {
            Exception transactionException = null;
            getJpaController().edit(variable);
            try {
                utx.commit();
            } catch (javax.transaction.RollbackException ex) {
                transactionException = ex;
            } catch (Exception ex) {
            }
            if (transactionException == null) {
                JsfUtil.addSuccessMessage("Variable was successfully updated.");
            } else {
                JsfUtil.ensureAddErrorMessage(transactionException, "A persistence error occurred.");
            }
        } catch (Exception e) {
            try {
                utx.rollback();
            } catch (Exception ex) {
            }
            JsfUtil.ensureAddErrorMessage(e, "A persistence error occurred.");
            return null;
        }
        return detailSetup();
    }

    public String remove() {
        String idAsString = JsfUtil.getRequestParameter("jsfcrud.currentVariable");
        Long id = new Long(idAsString);
        try {
            utx.begin();
        } catch (Exception ex) {
        }
        try {
            Exception transactionException = null;
            getJpaController().remove(getJpaController().find(id));
            try {
                utx.commit();
            } catch (javax.transaction.RollbackException ex) {
                transactionException = ex;
            } catch (Exception ex) {
            }
            if (transactionException == null) {
                JsfUtil.addSuccessMessage("Variable was successfully deleted.");
            } else {
                JsfUtil.ensureAddErrorMessage(transactionException, "A persistence error occurred.");
            }
        } catch (Exception e) {
            try {
                utx.rollback();
            } catch (Exception ex) {
            }
            JsfUtil.ensureAddErrorMessage(e, "A persistence error occurred.");
            return null;
        }
        return relatedOrListOutcome();
    }

    private String relatedOrListOutcome() {
        String relatedControllerOutcome = relatedControllerOutcome();
        if (relatedControllerOutcome != null) {
            return relatedControllerOutcome;
        }
        return listSetup();
    }

    public List<Variable> getVariableItems() {
        if (variableItems == null) {
            getPagingInfo();
            variableItems = getJpaController().findRange(new int[]{pagingInfo.getFirstItem(), pagingInfo.getFirstItem() + pagingInfo.getBatchSize()});
        }
        return variableItems;
    }

    public String next() {
        reset(false);
        getPagingInfo().nextPage();
        return "variable_list";
    }

    public String prev() {
        reset(false);
        getPagingInfo().previousPage();
        return "variable_list";
    }

    private String relatedControllerOutcome() {
        String relatedControllerString = JsfUtil.getRequestParameter("jsfcrud.relatedController");
        String relatedControllerTypeString = JsfUtil.getRequestParameter("jsfcrud.relatedControllerType");
        if (relatedControllerString != null && relatedControllerTypeString != null) {
            FacesContext context = FacesContext.getCurrentInstance();
            Object relatedController = context.getApplication().getELResolver().getValue(context.getELContext(), null, relatedControllerString);
            try {
                Class<?> relatedControllerType = Class.forName(relatedControllerTypeString);
                Method detailSetupMethod = relatedControllerType.getMethod("detailSetup");
                return (String) detailSetupMethod.invoke(relatedController);
            } catch (ClassNotFoundException e) {
                throw new FacesException(e);
            } catch (NoSuchMethodException e) {
                throw new FacesException(e);
            } catch (IllegalAccessException e) {
                throw new FacesException(e);
            } catch (InvocationTargetException e) {
                throw new FacesException(e);
            }
        }
        return null;
    }

    private void reset(boolean resetFirstItem) {
        variable = null;
        variableItems = null;
        pagingInfo.setItemCount(-1);
        if (resetFirstItem) {
            pagingInfo.setFirstItem(0);
        }
    }

    public void validateCreate(FacesContext facesContext, UIComponent component, Object value) {
        Variable newVariable = new Variable();
        String newVariableString = converter.getAsString(FacesContext.getCurrentInstance(), null, newVariable);
        String variableString = converter.getAsString(FacesContext.getCurrentInstance(), null, variable);
        if (!newVariableString.equals(variableString)) {
            createSetup();
        }
    }

    public Converter getConverter() {
        return converter;
    }
    
}
