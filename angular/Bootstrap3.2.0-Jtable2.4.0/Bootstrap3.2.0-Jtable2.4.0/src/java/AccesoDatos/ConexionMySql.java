package AccesoDatos;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class ConexionMySql {

    private static Connection connection = null;
    private static final String DB_DRIVER = "com.mysql.jdbc.Driver";
    private static final String DB_CONNECTION = "jdbc:mysql://localhost:3306/sigera4";
    private static final String DB_USER = "root";
    private static final String DB_PASSWORD = "admin";
    private static String ERROR;
    
    public static Connection getConnection() {
        if (connection != null) {
            return connection;
        } else {
            try {
                Class.forName(DB_DRIVER);
                connection = DriverManager.getConnection(DB_CONNECTION, DB_USER, DB_PASSWORD);
            } catch (ClassNotFoundException | SQLException e) {
                ERROR = e.getMessage();
            }
            return connection;
        }
    }
    
    public String getError() {
        return ERROR;
    }
}
