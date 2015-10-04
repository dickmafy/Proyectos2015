<%@page contentType="text/html" pageEncoding="UTF-8"%>

<%@taglib prefix="f" uri="http://java.sun.com/jsf/core"%>
<%@taglib prefix="h" uri="http://java.sun.com/jsf/html"%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<%--
    This file is an entry point for JavaServer Faces application.
--%>
<f:view>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <title>JSP Page</title>
<link rel="stylesheet" type="text/css" href="/angularMYSQL/faces/jsfcrud.css" />
        </head>
        <body>
            <h1><h:outputText value="JavaServer Faces"/></h1>
                <h:form>
                    <h:commandLink action="#{variable.listSetup}" value="Show All Variable Items"/>
                </h:form>

                <h:form>
                    <h:commandLink action="#{usuario.listSetup}" value="Show All Usuario Items"/>
                </h:form>

                <h:form>
                    <h:commandLink action="#{perfil.listSetup}" value="Show All Perfil Items"/>
                </h:form>

                <h:form>
                    <h:commandLink action="#{menu.listSetup}" value="Show All Menu Items"/>
                </h:form>

                <h:form>
                    <h:commandLink action="#{book.listSetup}" value="Show All Book Items"/>
                </h:form>

                <h:form>
                    <h:commandLink action="#{acceso.listSetup}" value="Show All Acceso Items"/>
                </h:form>

        </body>
    </html>
</f:view>
