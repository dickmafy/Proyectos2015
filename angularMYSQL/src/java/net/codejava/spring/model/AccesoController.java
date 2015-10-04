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
import net.codejava.spring.bean.AccesoFacade;
import net.codejava.spring.model.util.JsfUtil;
import net.codejava.spring.model.util.PagingInfo;

/**
 *
 * @author DIEGO
 */
public class AccesoController {

    public AccesoController() {
        pagingInfo = new PagingInfo();
        converter = new AccesoConverter();
    }
    private Acceso acceso = null;
    private List<Acceso> accesoItems = null;
    private AccesoFacade jpaController = null;
    private AccesoConverter converter = null;
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

    public AccesoFacade getJpaController() {
        if (jpaController == null) {
            FacesContext facesContext = FacesContext.getCurrentInstance();
            jpaController = (AccesoFacade) facesContext.getApplication().getELResolver().getValue(facesContext.getELContext(), null, "accesoJpa");
        }
        return jpaController;
    }

    public SelectItem[] getAccesoItemsAvailableSelectMany() {
        return JsfUtil.getSelectItems(getJpaController().findAll(), false);
    }

    public SelectItem[] getAccesoItemsAvailableSelectOne() {
        return JsfUtil.getSelectItems(getJpaController().findAll(), true);
    }

    public Acceso getAcceso() {
        if (acceso == null) {
            acceso = (Acceso) JsfUtil.getObjectFromRequestParameter("jsfcrud.currentAcceso", converter, null);
        }
        if (acceso == null) {
            acceso = new Acceso();
        }
        return acceso;
    }

    public String listSetup() {
        reset(true);
        return "acceso_list";
    }

    public String createSetup() {
        reset(false);
        acceso = new Acceso();
        return "acceso_create";
    }

    public String create() {
        try {
            utx.begin();
        } catch (Exception ex) {
        }
        try {
            Exception transactionException = null;
            getJpaController().create(acceso);
            try {
                utx.commit();
            } catch (javax.transaction.RollbackException ex) {
                transactionException = ex;
            } catch (Exception ex) {
            }
            if (transactionException == null) {
                JsfUtil.addSuccessMessage("Acceso was successfully created.");
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
        return scalarSetup("acceso_detail");
    }

    public String editSetup() {
        return scalarSetup("acceso_edit");
    }

    private String scalarSetup(String destination) {
        reset(false);
        acceso = (Acceso) JsfUtil.getObjectFromRequestParameter("jsfcrud.currentAcceso", converter, null);
        if (acceso == null) {
            String requestAccesoString = JsfUtil.getRequestParameter("jsfcrud.currentAcceso");
            JsfUtil.addErrorMessage("The acceso with id " + requestAccesoString + " no longer exists.");
            return relatedOrListOutcome();
        }
        return destination;
    }

    public String edit() {
        String accesoString = converter.getAsString(FacesContext.getCurrentInstance(), null, acceso);
        String currentAccesoString = JsfUtil.getRequestParameter("jsfcrud.currentAcceso");
        if (accesoString == null || accesoString.length() == 0 || !accesoString.equals(currentAccesoString)) {
            String outcome = editSetup();
            if ("acceso_edit".equals(outcome)) {
                JsfUtil.addErrorMessage("Could not edit acceso. Try again.");
            }
            return outcome;
        }
        try {
            utx.begin();
        } catch (Exception ex) {
        }
        try {
            Exception transactionException = null;
            getJpaController().edit(acceso);
            try {
                utx.commit();
            } catch (javax.transaction.RollbackException ex) {
                transactionException = ex;
            } catch (Exception ex) {
            }
            if (transactionException == null) {
                JsfUtil.addSuccessMessage("Acceso was successfully updated.");
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
        String idAsString = JsfUtil.getRequestParameter("jsfcrud.currentAcceso");
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
                JsfUtil.addSuccessMessage("Acceso was successfully deleted.");
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

    public List<Acceso> getAccesoItems() {
        if (accesoItems == null) {
            getPagingInfo();
            accesoItems = getJpaController().findRange(new int[]{pagingInfo.getFirstItem(), pagingInfo.getFirstItem() + pagingInfo.getBatchSize()});
        }
        return accesoItems;
    }

    public String next() {
        reset(false);
        getPagingInfo().nextPage();
        return "acceso_list";
    }

    public String prev() {
        reset(false);
        getPagingInfo().previousPage();
        return "acceso_list";
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
        acceso = null;
        accesoItems = null;
        pagingInfo.setItemCount(-1);
        if (resetFirstItem) {
            pagingInfo.setFirstItem(0);
        }
    }

    public void validateCreate(FacesContext facesContext, UIComponent component, Object value) {
        Acceso newAcceso = new Acceso();
        String newAccesoString = converter.getAsString(FacesContext.getCurrentInstance(), null, newAcceso);
        String accesoString = converter.getAsString(FacesContext.getCurrentInstance(), null, acceso);
        if (!newAccesoString.equals(accesoString)) {
            createSetup();
        }
    }

    public Converter getConverter() {
        return converter;
    }
    
}
