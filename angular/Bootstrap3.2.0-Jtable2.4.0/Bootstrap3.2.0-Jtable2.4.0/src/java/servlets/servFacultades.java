package servlets;

import Clases.Facultad;
import Objetos.ObjetoFacultad;
import java.io.IOException;
import java.util.ArrayList;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.google.gson.Gson;
import com.google.gson.GsonBuilder;

@WebServlet(name = "servFacultades", urlPatterns = {"/servFacultades"})
public class servFacultades extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {

        //Declaracion de variables
        ObjetoFacultad of = new ObjetoFacultad();
        ArrayList<Facultad> listFacultades;
        Facultad facultad;
        Gson gson = new GsonBuilder().setPrettyPrinting().create();
        //Tipo de Accion
        if (request.getParameter("action") != null) {
            switch ((String) request.getParameter("action")) {
                case "list":
                    try {
                        String jtStartIndex = request.getParameter("jtStartIndex");
                        String jtPageSize = request.getParameter("jtPageSize");
                        String jtSorting = request.getParameter("jtSorting");
                        int rowcount = of.getFacultadesCount();
                        listFacultades = of.getFacultades(jtStartIndex, jtPageSize, jtSorting);
                        String jsonArray = gson.toJson(listFacultades);
                        jsonArray = "{\"Result\":\"OK\",\"Records\":" + jsonArray + ",\"TotalRecordCount\":" + rowcount + " }";
                        response.getWriter().print(jsonArray);
                    } catch (Exception e) {
                        String error = "{\"Result\":\"ERROR\",\"Message\":" + e.getMessage() + "\"\"}";
                        response.getWriter().print(error);
                        System.err.println(e.getMessage());
                    }
                    break;
                case "create":
                    facultad = new Facultad();
                    if (request.getParameter("nombre") != null) {
                        facultad.setNombre(request.getParameter("nombre"));
                    }
                    if (request.getParameter("descripcion") != null) {
                        facultad.setDescripcion(request.getParameter("descripcion"));
                    }
                    try {
                        of.addFacultad(facultad);
                        String json = gson.toJson(facultad);
                        String jsonData = "{\"Result\":\"OK\",\"Record\":" + json + "}";
                        response.getWriter().print(jsonData);
                    } catch (Exception e) {
                        String error = "{\"Result\":\"ERROR\",\"Message\":" + e.getMessage() + "\"\"}";
                        response.getWriter().print(error);
                        System.err.println(e.getMessage());
                    }
                    break;
                case "update":
                    facultad = new Facultad();
                    if (request.getParameter("idfacultad") != null) {
                        facultad.setIdfacultad(Integer.parseInt(request.getParameter("idfacultad")));
                    }
                    if (request.getParameter("nombre") != null) {
                        facultad.setNombre(request.getParameter("nombre"));
                    }
                    if (request.getParameter("descripcion") != null) {
                        facultad.setDescripcion(request.getParameter("descripcion"));
                    }
                    try {
                        of.updateFacultad(facultad);
                        String json = gson.toJson(facultad);
                        String jsonData = "{\"Result\":\"OK\",\"Record\":" + json + "}";
                        response.getWriter().print(jsonData);
                    } catch (Exception e) {
                        String error = "{\"Result\":\"ERROR\",\"Message\":" + e.getMessage() + "\"\"}";
                        response.getWriter().print(error);
                        System.err.println(e.getMessage());
                    }
                    break;
                case "delete":
                    try {
                        if (request.getParameter("idfacultad") != null) {
                            int idfacultad = Integer.parseInt(request.getParameter("idfacultad"));
                            of.deleteFacultad(idfacultad);
                            String jsonData = "{\"Result\":\"OK\"}";
                            response.getWriter().print(jsonData);
                        }
                    } catch (NumberFormatException | IOException e) {
                        String error = "{\"Result\":\"ERROR\",\"Message\":" + e.getMessage() + "\"\"}";
                        response.getWriter().print(error);
                        System.err.println(e.getMessage());
                    }
                    break;
                default:
                    break;
            }

        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
