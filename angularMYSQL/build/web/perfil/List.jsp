<%@page contentType="text/html"%>
<%@page pageEncoding="UTF-8"%>
<%@taglib uri="http://java.sun.com/jsf/core" prefix="f" %>
<%@taglib uri="http://java.sun.com/jsf/html" prefix="h" %>
<f:view>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Listing Perfil Items</title>
            <link rel="stylesheet" type="text/css" href="/angularMYSQL/faces/jsfcrud.css" />
        </head>
        <body>
            <h:panelGroup id="messagePanel" layout="block">
                <h:messages errorStyle="color: red" infoStyle="color: green" layout="table"/>
            </h:panelGroup>
            <h1>Listing Perfil Items</h1>
            <h:form styleClass="jsfcrud_list_form">
                <h:outputText escape="false" value="(No Perfil Items Found)<br />" rendered="#{perfil.pagingInfo.itemCount == 0}" />
                <h:panelGroup rendered="#{perfil.pagingInfo.itemCount > 0}">
                    <h:outputText value="Item #{perfil.pagingInfo.firstItem + 1}..#{perfil.pagingInfo.lastItem} of #{perfil.pagingInfo.itemCount}"/>&nbsp;
                    <h:commandLink action="#{perfil.prev}" value="Previous #{perfil.pagingInfo.batchSize}" rendered="#{perfil.pagingInfo.firstItem >= perfil.pagingInfo.batchSize}"/>&nbsp;
                    <h:commandLink action="#{perfil.next}" value="Next #{perfil.pagingInfo.batchSize}" rendered="#{perfil.pagingInfo.lastItem + perfil.pagingInfo.batchSize <= perfil.pagingInfo.itemCount}"/>&nbsp;
                    <h:commandLink action="#{perfil.next}" value="Remaining #{perfil.pagingInfo.itemCount - perfil.pagingInfo.lastItem}"
                                   rendered="#{perfil.pagingInfo.lastItem < perfil.pagingInfo.itemCount && perfil.pagingInfo.lastItem + perfil.pagingInfo.batchSize > perfil.pagingInfo.itemCount}"/>
                    <h:dataTable value="#{perfil.perfilItems}" var="item" border="0" cellpadding="2" cellspacing="0" rowClasses="jsfcrud_odd_row,jsfcrud_even_row" rules="all" style="border:solid 1px">
                        <h:column>
                            <f:facet name="header">
                                <h:outputText value="PkPerfil"/>
                            </f:facet>
                            <h:outputText value="#{item.pkPerfil}"/>
                        </h:column>
                        <h:column>
                            <f:facet name="header">
                                <h:outputText value="Descripcion"/>
                            </f:facet>
                            <h:outputText value="#{item.descripcion}"/>
                        </h:column>
                        <h:column>
                            <f:facet name="header">
                                <h:outputText value="Estado"/>
                            </f:facet>
                            <h:outputText value="#{item.estado}"/>
                        </h:column>
                        <h:column>
                            <f:facet name="header">
                                <h:outputText value="Nombre"/>
                            </f:facet>
                            <h:outputText value="#{item.nombre}"/>
                        </h:column>
                        <h:column>
                            <f:facet name="header">
                                <h:outputText value="Tipo"/>
                            </f:facet>
                            <h:outputText value="#{item.tipo}"/>
                        </h:column>
                        <h:column>
                            <f:facet name="header">
                                <h:outputText escape="false" value="&nbsp;"/>
                            </f:facet>
                            <h:commandLink value="Show" action="#{perfil.detailSetup}">
                                <f:param name="jsfcrud.currentPerfil" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][item][perfil.converter].jsfcrud_invoke}"/>
                            </h:commandLink>
                            <h:outputText value=" "/>
                            <h:commandLink value="Edit" action="#{perfil.editSetup}">
                                <f:param name="jsfcrud.currentPerfil" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][item][perfil.converter].jsfcrud_invoke}"/>
                            </h:commandLink>
                            <h:outputText value=" "/>
                            <h:commandLink value="Destroy" action="#{perfil.remove}">
                                <f:param name="jsfcrud.currentPerfil" value="#{jsfcrud_class['net.codejava.spring.model.util.JsfUtil'].jsfcrud_method['getAsConvertedString'][item][perfil.converter].jsfcrud_invoke}"/>
                            </h:commandLink>
                        </h:column>

                    </h:dataTable>
                </h:panelGroup>
                <br />
                <h:commandLink action="#{perfil.createSetup}" value="New Perfil"/>
                <br />
                <br />
                <h:commandLink value="Index" action="welcome" immediate="true" />


            </h:form>
        </body>
    </html>
</f:view>
