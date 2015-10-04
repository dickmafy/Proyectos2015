package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class ejemplo_002dfacultades3_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("<!DOCTYPE html>\r\n");
      out.write("<html>\r\n");
      out.write("    <head>\r\n");
      out.write("        <title>TODO supply a title</title>\r\n");
      out.write("        <meta charset=\"UTF-8\">\r\n");
      out.write("        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n");
      out.write("\r\n");
      out.write("        <link href=\"jtable-2.4.0/themes/lightcolor/gray/jtable.css\" rel=\"stylesheet\" type=\"text/css\" />\r\n");
      out.write("        <link href=\"jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css\" rel=\"stylesheet\" type=\"text/css\" /> \r\n");
      out.write("        <link href=\"validation-engine-2.6.2/css/validationEngine.jquery.css\" rel=\"stylesheet\" type=\"text/css\" />\r\n");
      out.write("\r\n");
      out.write("\r\n");
      out.write("        <script src=\"jquery-1.11.1/jquery-1.11.1.js\" type=\"text/javascript\"></script>\r\n");
      out.write("        <script src=\"validation-engine-2.6.2/js/jquery.validationEngine.js\" type=\"text/javascript\"></script>\r\n");
      out.write("        <script src=\"validation-engine-2.6.2/js/jquery.validationEngine-es.js\" type=\"text/javascript\"></script>\r\n");
      out.write("        <script src=\"jquery-ui-bootstrap/js/jquery-ui-1.9.2.custom.min.js\" type=\"text/javascript\"></script>\r\n");
      out.write("        <script src=\"jtable-2.4.0/jquery.jtable.js\" type=\"text/javascript\"></script>\r\n");
      out.write("        <script src=\"jtable-2.4.0/localization/jquery.jtable.es.js\" type=\"text/javascript\"></script>\r\n");
      out.write("    </head>\r\n");
      out.write("    <body>\r\n");
      out.write("        <div style=\"width:60%;margin-right:20%;margin-left:20%;text-align:center;\">\r\n");
      out.write("            <div id=\"FacultadTableContainer\"></div>\r\n");
      out.write("        </div>\r\n");
      out.write("\r\n");
      out.write("        <script type=\"text/javascript\">\r\n");
      out.write("            $(document).ready(function () {\r\n");
      out.write("                $('#FacultadTableContainer').jtable({\r\n");
      out.write("                    useBootstrap: true,\r\n");
      out.write("                    title: 'Administración de Facultades',\r\n");
      out.write("                    paging: true,\r\n");
      out.write("                    pageSize: 5,\r\n");
      out.write("                    sorting: true,\r\n");
      out.write("                    defaultSorting: 'nombre ASC',\r\n");
      out.write("                    actions: {\r\n");
      out.write("                        listAction: 'servFacultades?action=list',\r\n");
      out.write("                        createAction: 'servFacultades?action=create',\r\n");
      out.write("                        updateAction: 'servFacultades?action=update',\r\n");
      out.write("                        deleteAction: 'servFacultades?action=delete'\r\n");
      out.write("                    },\r\n");
      out.write("                    fields: {\r\n");
      out.write("                        idfacultad: {\r\n");
      out.write("                            key: true,\r\n");
      out.write("                            create: false,\r\n");
      out.write("                            edit: false,\r\n");
      out.write("                            list: false\r\n");
      out.write("                        },\r\n");
      out.write("                        nombre: {\r\n");
      out.write("                            title: 'Nombre',\r\n");
      out.write("                            inputClass: 'validate[required]'\r\n");
      out.write("                        },\r\n");
      out.write("                        descripcion: {\r\n");
      out.write("                            title: 'Descripción',\r\n");
      out.write("                            type: 'textarea',\r\n");
      out.write("                            sorting: false\r\n");
      out.write("                        }\r\n");
      out.write("                    },\r\n");
      out.write("                    //Initialize validation logic when a form is created\r\n");
      out.write("                    formCreated: function (event, data) {\r\n");
      out.write("                        data.form.validationEngine();\r\n");
      out.write("                    },\r\n");
      out.write("                    //Validate form when it is being submitted\r\n");
      out.write("                    formSubmitting: function (event, data) {\r\n");
      out.write("                        return data.form.validationEngine('validate');\r\n");
      out.write("                    },\r\n");
      out.write("                    //Dispose validation logic when form is closed\r\n");
      out.write("                    formClosed: function (event, data) {\r\n");
      out.write("                        data.form.validationEngine('hide');\r\n");
      out.write("                        data.form.validationEngine('detach');\r\n");
      out.write("                    }\r\n");
      out.write("\r\n");
      out.write("                });\r\n");
      out.write("                $('#FacultadTableContainer').jtable('load');\r\n");
      out.write("            });\r\n");
      out.write("        </script> \r\n");
      out.write("    </body>\r\n");
      out.write("</html>\r\n");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
