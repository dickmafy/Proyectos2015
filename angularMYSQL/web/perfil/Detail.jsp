<%@page contentType="text/html"%>
<%@page pageEncoding="UTF-8"%>
<%@taglib uri="http://java.sun.com/jsf/core" prefix="f" %>
<%@taglib uri="http://java.sun.com/jsf/html" prefix="h" %>
<f:view>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Perfil Detail</title>
            <link rel="stylesheet" type="text/css" href="/angularMYSQL/faces/jsfcrud.css" />
        </head>
        <body>
            <h:panelGroup id="messagePanel" layout="block">
                <h:messages errorStyle="color: red" infoStyle="color: green" layout="table"/>
            </h:panelGroup>
            <h1>Perfil Detail</h1>
            <h:form>
                <h:panelGrid columns="2">
                    <h:outputText value="PkPerfil:"/>
                    <h:outputText value="#{perfil.perfil.pkPerfil}" title="PkPerfil" />
                    <h:outputText value="Descripcion:"/>
                    <h:outputText value="#{perfil.perfil.descripcion}" title="Descripcion" />
                    <h:outputText value="Estado:"/>
                    <h:outputText value="#{perfil.perfil.estado}" title="Estado" />
                    <h:outputText value="Nombre:"/>
                    <h:outputText value="#{perfil.perfil.nombre}" title="Nombre" />
                    <h:outputText value="Tipo:"/>
                    <h:outputText value="#{perfil.perfil.tipo}" title="Tipo" />


                </h:panelGrid>
                <br />
                <h:commandLink action="#{perfil.remove}" value="Destroy">
                    <f:param name="jsfcrud.currentPerfil" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][perfil.perfil][perfil.converter].jsfcrud_invoke}" />
                </h:commandLink>
                <br />
                <br />
                <h:commandLink action="#{perfil.editSetup}" value="Edit">
                    <f:param name="jsfcrud.currentPerfil" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][perfil.perfil][perfil.converter].jsfcrud_invoke}" />
                </h:commandLink>
                <br />
                <h:commandLink action="#{perfil.createSetup}" value="New Perfil" />
                <br />
                <h:commandLink action="#{perfil.listSetup}" value="Show All Perfil Items"/>
                <br />
                <br />
                <h:commandLink value="Index" action="welcome" immediate="true" />

            </h:form>
        </body>
    </html>
</f:view>
