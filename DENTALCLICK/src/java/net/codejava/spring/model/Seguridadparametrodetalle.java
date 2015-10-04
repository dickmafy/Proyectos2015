/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.math.BigDecimal;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;

/**
 *
 * @author DIEGO
 */
@Entity
@NamedQueries({
    @NamedQuery(name = "Seguridadparametrodetalle.findAll", query = "SELECT s FROM Seguridadparametrodetalle s")})
public class Seguridadparametrodetalle implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CPARAMETRO_MES_PROCESO")
    private String cparametroMesProceso;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Column(name = "NPARAMETRO_VAL")
    private BigDecimal nparametroVal;
    @JoinColumn(name = "CPD_CODIGO", referencedColumnName = "CPD_CODIGO")
    @ManyToOne
    private Seguridadparametro cpdCodigo;

    public Seguridadparametrodetalle() {
    }

    public Seguridadparametrodetalle(String cparametroMesProceso) {
        this.cparametroMesProceso = cparametroMesProceso;
    }

    public String getCparametroMesProceso() {
        return cparametroMesProceso;
    }

    public void setCparametroMesProceso(String cparametroMesProceso) {
        this.cparametroMesProceso = cparametroMesProceso;
    }

    public BigDecimal getNparametroVal() {
        return nparametroVal;
    }

    public void setNparametroVal(BigDecimal nparametroVal) {
        this.nparametroVal = nparametroVal;
    }

    public Seguridadparametro getCpdCodigo() {
        return cpdCodigo;
    }

    public void setCpdCodigo(Seguridadparametro cpdCodigo) {
        this.cpdCodigo = cpdCodigo;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cparametroMesProceso != null ? cparametroMesProceso.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Seguridadparametrodetalle)) {
            return false;
        }
        Seguridadparametrodetalle other = (Seguridadparametrodetalle) object;
        if ((this.cparametroMesProceso == null && other.cparametroMesProceso != null) || (this.cparametroMesProceso != null && !this.cparametroMesProceso.equals(other.cparametroMesProceso))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Seguridadparametrodetalle[ cparametroMesProceso=" + cparametroMesProceso + " ]";
    }
    
}
