<%@page contentType="text/html"%>
<%@page pageEncoding="UTF-8"%>
<%@taglib uri="http://java.sun.com/jsf/core" prefix="f" %>
<%@taglib uri="http://java.sun.com/jsf/html" prefix="h" %>
<f:view>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Usuario Detail</title>
            <link rel="stylesheet" type="text/css" href="/angularMYSQL/faces/jsfcrud.css" />
        </head>
        <body>
            <h:panelGroup id="messagePanel" layout="block">
                <h:messages errorStyle="color: red" infoStyle="color: green" layout="table"/>
            </h:panelGroup>
            <h1>Usuario Detail</h1>
            <h:form>
                <h:panelGrid columns="2">
                    <h:outputText value="PkUsuario:"/>
                    <h:outputText value="#{usuario.usuario.pkUsuario}" title="PkUsuario" />
                    <h:outputText value="Nombre:"/>
                    <h:outputText value="#{usuario.usuario.nombre}" title="Nombre" />
                    <h:outputText value="Correo:"/>
                    <h:outputText value="#{usuario.usuario.correo}" title="Correo" />
                    <h:outputText value="Estado:"/>
                    <h:outputText value="#{usuario.usuario.estado}" title="Estado" />
                    <h:outputText value="FecCreacion:"/>
                    <h:outputText value="#{usuario.usuario.fecCreacion}" title="FecCreacion" >
                        <f:convertDateTime pattern="MM/dd/yyyy HH:mm:ss" />
                    </h:outputText>


                </h:panelGrid>
                <br />
                <h:commandLink action="#{usuario.remove}" value="Destroy">
                    <f:param name="jsfcrud.currentUsuario" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][usuario.usuario][usuario.converter].jsfcrud_invoke}" />
                </h:commandLink>
                <br />
                <br />
                <h:commandLink action="#{usuario.editSetup}" value="Edit">
                    <f:param name="jsfcrud.currentUsuario" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][usuario.usuario][usuario.converter].jsfcrud_invoke}" />
                </h:commandLink>
                <br />
                <h:commandLink action="#{usuario.createSetup}" value="New Usuario" />
                <br />
                <h:commandLink action="#{usuario.listSetup}" value="Show All Usuario Items"/>
                <br />
                <br />
                <h:commandLink value="Index" action="welcome" immediate="true" />

            </h:form>
        </body>
    </html>
</f:view>
