package net.codejava.spring.model;

import java.util.Date;
import javax.annotation.Generated;
import javax.persistence.metamodel.SingularAttribute;
import javax.persistence.metamodel.StaticMetamodel;

@Generated(value="EclipseLink-2.5.2.v20140319-rNA", date="2015-02-17T14:03:48")
@StaticMetamodel(Usuario.class)
public class Usuario_ { 

    public static volatile SingularAttribute<Usuario, String> nombre;
    public static volatile SingularAttribute<Usuario, Integer> estado;
    public static volatile SingularAttribute<Usuario, Long> pkUsuario;
    public static volatile SingularAttribute<Usuario, Date> fecCreacion;
    public static volatile SingularAttribute<Usuario, String> correo;

}