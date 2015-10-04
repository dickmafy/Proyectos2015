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
import net.codejava.spring.bean.PerfilFacade;
import net.codejava.spring.model.util.JsfUtil;
import net.codejava.spring.model.util.PagingInfo;

/**
 *
 * @author DIEGO
 */
public class PerfilController {

    public PerfilController() {
        pagingInfo = new PagingInfo();
        converter = new PerfilConverter();
    }
    private Perfil perfil = null;
    private List<Perfil> perfilItems = null;
    private PerfilFacade jpaController = null;
    private PerfilConverter converter = null;
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

    public PerfilFacade getJpaController() {
        if (jpaController == null) {
            FacesContext facesContext = FacesContext.getCurrentInstance();
            jpaController = (PerfilFacade) facesContext.getApplication().getELResolver().getValue(facesContext.getELContext(), null, "perfilJpa");
        }
        return jpaController;
    }

    public SelectItem[] getPerfilItemsAvailableSelectMany() {
        return JsfUtil.getSelectItems(getJpaController().findAll(), false);
    }

    public SelectItem[] getPerfilItemsAvailableSelectOne() {
        return JsfUtil.getSelectItems(getJpaController().findAll(), true);
    }

    public Perfil getPerfil() {
        if (perfil == null) {
            perfil = (Perfil) JsfUtil.getObjectFromRequestParameter("jsfcrud.currentPerfil", converter, null);
        }
        if (perfil == null) {
            perfil = new Perfil();
        }
        return perfil;
    }

    public String listSetup() {
        reset(true);
        return "perfil_list";
    }

    public String createSetup() {
        reset(false);
        perfil = new Perfil();
        return "perfil_create";
    }

    public String create() {
        try {
            utx.begin();
        } catch (Exception ex) {
        }
        try {
            Exception transactionException = null;
            getJpaController().create(perfil);
            try {
                utx.commit();
            } catch (javax.transaction.RollbackException ex) {
                transactionException = ex;
            } catch (Exception ex) {
            }
            if (transactionException == null) {
                JsfUtil.addSuccessMessage("Perfil was successfully created.");
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
        return scalarSetup("perfil_detail");
    }

    public String editSetup() {
        return scalarSetup("perfil_edit");
    }

    private String scalarSetup(String destination) {
        reset(false);
        perfil = (Perfil) JsfUtil.getObjectFromRequestParameter("jsfcrud.currentPerfil", converter, null);
        if (perfil == null) {
            String requestPerfilString = JsfUtil.getRequestParameter("jsfcrud.currentPerfil");
            JsfUtil.addErrorMessage("The perfil with id " + requestPerfilString + " no longer exists.");
            return relatedOrListOutcome();
        }
        return destination;
    }

    public String edit() {
        String perfilString = converter.getAsString(FacesContext.getCurrentInstance(), null, perfil);
        String currentPerfilString = JsfUtil.getRequestParameter("jsfcrud.currentPerfil");
        if (perfilString == null || perfilString.length() == 0 || !perfilString.equals(currentPerfilString)) {
            String outcome = editSetup();
            if ("perfil_edit".equals(outcome)) {
                JsfUtil.addErrorMessage("Could not edit perfil. Try again.");
            }
            return outcome;
        }
        try {
            utx.begin();
        } catch (Exception ex) {
        }
        try {
            Exception transactionException = null;
            getJpaController().edit(perfil);
            try {
                utx.commit();
            } catch (javax.transaction.RollbackException ex) {
                transactionException = ex;
            } catch (Exception ex) {
            }
            if (transactionException == null) {
                JsfUtil.addSuccessMessage("Perfil was successfully updated.");
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
        String idAsString = JsfUtil.getRequestParameter("jsfcrud.currentPerfil");
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
                JsfUtil.addSuccessMessage("Perfil was successfully deleted.");
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

    public List<Perfil> getPerfilItems() {
        if (perfilItems == null) {
            getPagingInfo();
            perfilItems = getJpaController().findRange(new int[]{pagingInfo.getFirstItem(), pagingInfo.getFirstItem() + pagingInfo.getBatchSize()});
        }
        return perfilItems;
    }

    public String next() {
        reset(false);
        getPagingInfo().nextPage();
        return "perfil_list";
    }

    public String prev() {
        reset(false);
        getPagingInfo().previousPage();
        return "perfil_list";
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
        perfil = null;
        perfilItems = null;
        pagingInfo.setItemCount(-1);
        if (resetFirstItem) {
            pagingInfo.setFirstItem(0);
        }
    }

    public void validateCreate(FacesContext facesContext, UIComponent component, Object value) {
        Perfil newPerfil = new Perfil();
        String newPerfilString = converter.getAsString(FacesContext.getCurrentInstance(), null, newPerfil);
        String perfilString = converter.getAsString(FacesContext.getCurrentInstance(), null, perfil);
        if (!newPerfilString.equals(perfilString)) {
            createSetup();
        }
    }

    public Converter getConverter() {
        return converter;
    }
    
}
