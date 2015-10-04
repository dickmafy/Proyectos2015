<%@page contentType="text/html"%>
<%@page pageEncoding="UTF-8"%>
<%@taglib uri="http://java.sun.com/jsf/core" prefix="f" %>
<%@taglib uri="http://java.sun.com/jsf/html" prefix="h" %>
<f:view>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>New Usuario</title>
            <link rel="stylesheet" type="text/css" href="/angularMYSQL/faces/jsfcrud.css" />
        </head>
        <body>
            <h:panelGroup id="messagePanel" layout="block">
                <h:messages errorStyle="color: red" infoStyle="color: green" layout="table"/>
            </h:panelGroup>
            <h1>New Usuario</h1>
            <h:form>
                <h:inputHidden id="validateCreateField" validator="#{usuario.validateCreate}" value="value"/>
                <h:panelGrid columns="2">
                    <h:outputText value="Nombre:"/>
                    <h:inputText id="nombre" value="#{usuario.usuario.nombre}" title="Nombre" />
                    <h:outputText value="Correo:"/>
                    <h:inputText id="correo" value="#{usuario.usuario.correo}" title="Correo" />
                    <h:outputText value="Estado:"/>
                    <h:inputText id="estado" value="#{usuario.usuario.estado}" title="Estado" />
                    <h:outputText value="FecCreacion (MM/dd/yyyy HH:mm:ss):"/>
                    <h:inputText id="fecCreacion" value="#{usuario.usuario.fecCreacion}" title="FecCreacion" >
                        <f:convertDateTime pattern="MM/dd/yyyy HH:mm:ss" />
                    </h:inputText>

                </h:panelGrid>
                <br />
                <h:commandLink action="#{usuario.create}" value="Create"/>
                <br />
                <br />
                <h:commandLink action="#{usuario.listSetup}" value="Show All Usuario Items" immediate="true"/>
                <br />
                <br />
                <h:commandLink value="Index" action="welcome" immediate="true" />

            </h:form>
        </body>
    </html>
</f:view>
