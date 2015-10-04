<%@page contentType="text/html"%>
<%@page pageEncoding="UTF-8"%>
<%@taglib uri="http://java.sun.com/jsf/core" prefix="f" %>
<%@taglib uri="http://java.sun.com/jsf/html" prefix="h" %>
<f:view>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Listing Acceso Items</title>
            <link rel="stylesheet" type="text/css" href="/angularMYSQL/faces/jsfcrud.css" />
        </head>
        <body>
            <h:panelGroup id="messagePanel" layout="block">
                <h:messages errorStyle="color: red" infoStyle="color: green" layout="table"/>
            </h:panelGroup>
            <h1>Listing Acceso Items</h1>
            <h:form styleClass="jsfcrud_list_form">
                <h:outputText escape="false" value="(No Acceso Items Found)<br />" rendered="#{acceso.pagingInfo.itemCount == 0}" />
                <h:panelGroup rendered="#{acceso.pagingInfo.itemCount > 0}">
                    <h:outputText value="Item #{acceso.pagingInfo.firstItem + 1}..#{acceso.pagingInfo.lastItem} of #{acceso.pagingInfo.itemCount}"/>&nbsp;
                    <h:commandLink action="#{acceso.prev}" value="Previous #{acceso.pagingInfo.batchSize}" rendered="#{acceso.pagingInfo.firstItem >= acceso.pagingInfo.batchSize}"/>&nbsp;
                    <h:commandLink action="#{acceso.next}" value="Next #{acceso.pagingInfo.batchSize}" rendered="#{acceso.pagingInfo.lastItem + acceso.pagingInfo.batchSize <= acceso.pagingInfo.itemCount}"/>&nbsp;
                    <h:commandLink action="#{acceso.next}" value="Remaining #{acceso.pagingInfo.itemCount - acceso.pagingInfo.lastItem}"
                                   rendered="#{acceso.pagingInfo.lastItem < acceso.pagingInfo.itemCount && acceso.pagingInfo.lastItem + acceso.pagingInfo.batchSize > acceso.pagingInfo.itemCount}"/>
                    <h:dataTable value="#{acceso.accesoItems}" var="item" border="0" cellpadding="2" cellspacing="0" rowClasses="jsfcrud_odd_row,jsfcrud_even_row" rules="all" style="border:solid 1px">
                        <h:column>
                            <f:facet name="header">
                                <h:outputText value="PkPerfil"/>
                            </f:facet>
                            <h:outputText value="#{item.pkPerfil}"/>
                        </h:column>
                        <h:column>
                            <f:facet name="header">
                                <h:outputText value="PkMenu"/>
                            </f:facet>
                            <h:outputText value="#{item.pkMenu}"/>
                        </h:column>
                        <h:column>
                            <f:facet name="header">
                                <h:outputText value="Permiso"/>
                            </f:facet>
                            <h:outputText value="#{item.permiso}"/>
                        </h:column>
                        <h:column>
                            <f:facet name="header">
                                <h:outputText escape="false" value="&nbsp;"/>
                            </f:facet>
                            <h:commandLink value="Show" action="#{acceso.detailSetup}">
                                <f:param name="jsfcrud.currentAcceso" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][item][acceso.converter].jsfcrud_invoke}"/>
                            </h:commandLink>
                            <h:outputText value=" "/>
                            <h:commandLink value="Edit" action="#{acceso.editSetup}">
                                <f:param name="jsfcrud.currentAcceso" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][item][acceso.converter].jsfcrud_invoke}"/>
                            </h:commandLink>
                            <h:outputText value=" "/>
                            <h:commandLink value="Destroy" action="#{acceso.remove}">
                                <f:param name="jsfcrud.currentAcceso" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][item][acceso.converter].jsfcrud_invoke}"/>
                            </h:commandLink>
                        </h:column>

                    </h:dataTable>
                </h:panelGroup>
                <br />
                <h:commandLink action="#{acceso.createSetup}" value="New Acceso"/>
                <br />
                <br />
                <h:commandLink value="Index" action="welcome" immediate="true" />


            </h:form>
        </body>
    </html>
</f:view>
