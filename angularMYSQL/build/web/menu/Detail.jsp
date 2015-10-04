<%@page contentType="text/html"%>
<%@page pageEncoding="UTF-8"%>
<%@taglib uri="http://java.sun.com/jsf/core" prefix="f" %>
<%@taglib uri="http://java.sun.com/jsf/html" prefix="h" %>
<f:view>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Menu Detail</title>
            <link rel="stylesheet" type="text/css" href="/angularMYSQL/faces/jsfcrud.css" />
        </head>
        <body>
            <h:panelGroup id="messagePanel" layout="block">
                <h:messages errorStyle="color: red" infoStyle="color: green" layout="table"/>
            </h:panelGroup>
            <h1>Menu Detail</h1>
            <h:form>
                <h:panelGrid columns="2">
                    <h:outputText value="PkMenu:"/>
                    <h:outputText value="#{menu.menu.pkMenu}" title="PkMenu" />
                    <h:outputText value="Accion:"/>
                    <h:outputText value="#{menu.menu.accion}" title="Accion" />
                    <h:outputText value="Descripcion:"/>
                    <h:outputText value="#{menu.menu.descripcion}" title="Descripcion" />
                    <h:outputText value="Estado:"/>
                    <h:outputText value="#{menu.menu.estado}" title="Estado" />
                    <h:outputText value="Menu:"/>
                    <h:outputText value="#{menu.menu.menu}" title="Menu" />
                    <h:outputText value="Metodo:"/>
                    <h:outputText value="#{menu.menu.metodo}" title="Metodo" />
                    <h:outputText value="Modulo:"/>
                    <h:outputText value="#{menu.menu.modulo}" title="Modulo" />
                    <h:outputText value="Sistema:"/>
                    <h:outputText value="#{menu.menu.sistema}" title="Sistema" />
                    <h:outputText value="Titulo:"/>
                    <h:outputText value="#{menu.menu.titulo}" title="Titulo" />


                </h:panelGrid>
                <br />
                <h:commandLink action="#{menu.remove}" value="Destroy">
                    <f:param name="jsfcrud.currentMenu" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][menu.menu][menu.converter].jsfcrud_invoke}" />
                </h:commandLink>
                <br />
                <br />
                <h:commandLink action="#{menu.editSetup}" value="Edit">
                    <f:param name="jsfcrud.currentMenu" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][menu.menu][menu.converter].jsfcrud_invoke}" />
                </h:commandLink>
                <br />
                <h:commandLink action="#{menu.createSetup}" value="New Menu" />
                <br />
                <h:commandLink action="#{menu.listSetup}" value="Show All Menu Items"/>
                <br />
                <br />
                <h:commandLink value="Index" action="welcome" immediate="true" />

            </h:form>
        </body>
    </html>
</f:view>
