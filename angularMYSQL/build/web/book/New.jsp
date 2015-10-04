<%@page contentType="text/html"%>
<%@page pageEncoding="UTF-8"%>
<%@taglib uri="http://java.sun.com/jsf/core" prefix="f" %>
<%@taglib uri="http://java.sun.com/jsf/html" prefix="h" %>
<f:view>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>New Book</title>
            <link rel="stylesheet" type="text/css" href="/angularMYSQL/faces/jsfcrud.css" />
        </head>
        <body>
            <h:panelGroup id="messagePanel" layout="block">
                <h:messages errorStyle="color: red" infoStyle="color: green" layout="table"/>
            </h:panelGroup>
            <h1>New Book</h1>
            <h:form>
                <h:inputHidden id="validateCreateField" validator="#{book.validateCreate}" value="value"/>
                <h:panelGrid columns="2">
                    <h:outputText value="Email:"/>
                    <h:inputText id="email" value="#{book.book.email}" title="Email" />
                    <h:outputText value="FirstName:"/>
                    <h:inputText id="firstName" value="#{book.book.firstName}" title="FirstName" />
                    <h:outputText value="LastName:"/>
                    <h:inputText id="lastName" value="#{book.book.lastName}" title="LastName" />
                    <h:outputText value="Phone:"/>
                    <h:inputText id="phone" value="#{book.book.phone}" title="Phone" />

                </h:panelGrid>
                <br />
                <h:commandLink action="#{book.create}" value="Create"/>
                <br />
                <br />
                <h:commandLink action="#{book.listSetup}" value="Show All Book Items" immediate="true"/>
                <br />
                <br />
                <h:commandLink value="Index" action="welcome" immediate="true" />

            </h:form>
        </body>
    </html>
</f:view>
