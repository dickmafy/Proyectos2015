<%@page contentType="text/html"%>
<%@page pageEncoding="UTF-8"%>
<%@taglib uri="http://java.sun.com/jsf/core" prefix="f" %>
<%@taglib uri="http://java.sun.com/jsf/html" prefix="h" %>
<f:view>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Book Detail</title>
            <link rel="stylesheet" type="text/css" href="/angularMYSQL/faces/jsfcrud.css" />
        </head>
        <body>
            <h:panelGroup id="messagePanel" layout="block">
                <h:messages errorStyle="color: red" infoStyle="color: green" layout="table"/>
            </h:panelGroup>
            <h1>Book Detail</h1>
            <h:form>
                <h:panelGrid columns="2">
                    <h:outputText value="BookId:"/>
                    <h:outputText value="#{book.book.bookId}" title="BookId" />
                    <h:outputText value="Email:"/>
                    <h:outputText value="#{book.book.email}" title="Email" />
                    <h:outputText value="FirstName:"/>
                    <h:outputText value="#{book.book.firstName}" title="FirstName" />
                    <h:outputText value="LastName:"/>
                    <h:outputText value="#{book.book.lastName}" title="LastName" />
                    <h:outputText value="Phone:"/>
                    <h:outputText value="#{book.book.phone}" title="Phone" />


                </h:panelGrid>
                <br />
                <h:commandLink action="#{book.remove}" value="Destroy">
                    <f:param name="jsfcrud.currentBook" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][book.book][book.converter].jsfcrud_invoke}" />
                </h:commandLink>
                <br />
                <br />
                <h:commandLink action="#{book.editSetup}" value="Edit">
                    <f:param name="jsfcrud.currentBook" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][book.book][book.converter].jsfcrud_invoke}" />
                </h:commandLink>
                <br />
                <h:commandLink action="#{book.createSetup}" value="New Book" />
                <br />
                <h:commandLink action="#{book.listSetup}" value="Show All Book Items"/>
                <br />
                <br />
                <h:commandLink value="Index" action="welcome" immediate="true" />

            </h:form>
        </body>
    </html>
</f:view>
