<%@page contentType="text/html"%>
<%@page pageEncoding="UTF-8"%>
<%@taglib uri="http://java.sun.com/jsf/core" prefix="f" %>
<%@taglib uri="http://java.sun.com/jsf/html" prefix="h" %>
<f:view>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Editing Acceso</title>
            <link rel="stylesheet" type="text/css" href="/angularMYSQL/faces/jsfcrud.css" />
        </head>
        <body>
            <h:panelGroup id="messagePanel" layout="block">
                <h:messages errorStyle="color: red" infoStyle="color: green" layout="table"/>
            </h:panelGroup>
            <h1>Editing Acceso</h1>
            <h:form>
                <h:panelGrid columns="2">
                    <h:outputText value="PkPerfil:"/>
                    <h:outputText value="#{acceso.acceso.pkPerfil}" title="PkPerfil" />
                    <h:outputText value="PkMenu:"/>
                    <h:inputText id="pkMenu" value="#{acceso.acceso.pkMenu}" title="PkMenu" />
                    <h:outputText value="Permiso:"/>
                    <h:inputText id="permiso" value="#{acceso.acceso.permiso}" title="Permiso" />

                </h:panelGrid>
                <br />
                <h:commandLink action="#{acceso.edit}" value="Save">
                    <f:param name="jsfcrud.currentAcceso" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][acceso.acceso][acceso.converter].jsfcrud_invoke}"/>
                </h:commandLink>
                <br />
                <br />
                <h:commandLink action="#{acceso.detailSetup}" value="Show" immediate="true">
                    <f:param name="jsfcrud.currentAcceso" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][acceso.acceso][acceso.converter].jsfcrud_invoke}"/>
                </h:commandLink>
                <br />
                <h:commandLink action="#{acceso.listSetup}" value="Show All Acceso Items" immediate="true"/>
                <br />
                <br />
                <h:commandLink value="Index" action="welcome" immediate="true" />

            </h:form>
        </body>
    </html>
</f:view>
