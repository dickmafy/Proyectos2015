package net.codejava.spring.model;

import java.math.BigInteger;
import javax.annotation.Generated;
import javax.persistence.metamodel.SingularAttribute;
import javax.persistence.metamodel.StaticMetamodel;

@Generated(value="EclipseLink-2.5.2.v20140319-rNA", date="2015-02-17T14:03:48")
@StaticMetamodel(Variable.class)
public class Variable_ { 

    public static volatile SingularAttribute<Variable, BigInteger> codigo;
    public static volatile SingularAttribute<Variable, String> nombre;
    public static volatile SingularAttribute<Variable, BigInteger> estado;
    public static volatile SingularAttribute<Variable, Long> pkVariable;
    public static volatile SingularAttribute<Variable, String> valor;
    public static volatile SingularAttribute<Variable, String> descripcion;

}