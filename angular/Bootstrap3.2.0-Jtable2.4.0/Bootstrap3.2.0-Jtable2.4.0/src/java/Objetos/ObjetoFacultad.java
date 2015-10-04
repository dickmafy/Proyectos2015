package Objetos;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;

import AccesoDatos.ConexionMySql;
import Clases.Facultad;

public class ObjetoFacultad {

    private Connection dbConnection;
    private PreparedStatement pstmt;
    private Statement stmt;
    private ResultSet rs;

    public ObjetoFacultad() {
        dbConnection = ConexionMySql.getConnection();
    }

    public void addFacultad(Facultad facultad) {
        String query = "INSERT INTO facultad(nombre, descripcion) VALUES (?,?)";
        try {
            pstmt = dbConnection.prepareStatement(query);
            pstmt.setString(1, facultad.getNombre());
            pstmt.setString(2, facultad.getDescripcion());
            pstmt.executeUpdate();
        } catch (SQLException e) {
            System.err.println(e.getMessage());
        }
    }

    public void deleteFacultad(int idfacultad) {
        String query = "UPDATE facultad WHERE idfacultad = ?";
        try {
            pstmt = dbConnection.prepareStatement(query);
            pstmt.setInt(1, idfacultad);
            pstmt.executeUpdate();
        } catch (SQLException e) {
            System.err.println(e.getMessage());
        }
    }

    public void updateFacultad(Facultad facultad) {
        String query = "UPDATE facultad SET nombre = ?, descripcion = ? WHERE idfacultad = ?";
        try {
            pstmt = dbConnection.prepareStatement(query);
            pstmt.setString(1, facultad.getNombre());
            pstmt.setString(2, facultad.getDescripcion());
            pstmt.setInt(3, facultad.getIdfacultad());
            pstmt.executeUpdate();
        } catch (SQLException e) {
            System.err.println(e.getMessage());
        }
    }

    public ArrayList<Facultad> getFacultades(String jtStartIndex, String jtPageSize, String jtSorting) {
        ArrayList<Facultad> facultades = new ArrayList<>();
        String query = "SELECT * FROM facultad ORDER BY " + jtSorting + " LIMIT " + jtStartIndex + ", " + jtPageSize + ";";
        try {
            stmt = dbConnection.createStatement();
            rs = stmt.executeQuery(query);
            while (rs.next()) {
                Facultad facultad = new Facultad();
                facultad.setIdfacultad(rs.getInt("idfacultad"));
                facultad.setNombre(rs.getString("nombre"));
                facultad.setDescripcion(rs.getString("descripcion"));
                facultades.add(facultad);
            }
        } catch (SQLException e) {
            System.err.println(e.getMessage());
        }
        return facultades;
    }

    public int getFacultadesCount() {
        int rowcount = 0;
        String query = "SELECT COUNT(*) AS rowcount FROM facultad";
        try {
            stmt = dbConnection.createStatement();
            rs = stmt.executeQuery(query);
            rs.next();
            rowcount = rs.getInt("rowcount");
            rs.close();
        } catch (SQLException e) {
            System.err.println(e.getMessage());
        }
        return rowcount;
    }

}
