package net.codejava.spring.model;

import java.math.BigInteger;
import javax.annotation.Generated;
import javax.persistence.metamodel.SingularAttribute;
import javax.persistence.metamodel.StaticMetamodel;

@Generated(value="EclipseLink-2.5.2.v20140319-rNA", date="2015-02-17T14:03:48")
@StaticMetamodel(Perfil.class)
public class Perfil_ { 

    public static volatile SingularAttribute<Perfil, String> nombre;
    public static volatile SingularAttribute<Perfil, BigInteger> estado;
    public static volatile SingularAttribute<Perfil, BigInteger> tipo;
    public static volatile SingularAttribute<Perfil, String> descripcion;
    public static volatile SingularAttribute<Perfil, Long> pkPerfil;

}