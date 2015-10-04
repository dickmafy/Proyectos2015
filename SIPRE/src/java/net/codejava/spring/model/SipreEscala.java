/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.math.BigDecimal;
import java.util.List;
import javax.persistence.Basic;
import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlTransient;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_ESCALA")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreEscala.findAll", query = "SELECT s FROM SipreEscala s")})
public class SipreEscala implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreEscalaPK sipreEscalaPK;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Basic(optional = false)
    @Column(name = "NESCALA_MONTO")
    private BigDecimal nescalaMonto;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreEscala")
    private List<SipreDocente> sipreDocenteList;

    public SipreEscala() {
    }

    public SipreEscala(SipreEscalaPK sipreEscalaPK) {
        this.sipreEscalaPK = sipreEscalaPK;
    }

    public SipreEscala(SipreEscalaPK sipreEscalaPK, BigDecimal nescalaMonto) {
        this.sipreEscalaPK = sipreEscalaPK;
        this.nescalaMonto = nescalaMonto;
    }

    public SipreEscala(String cescalaCodigo, String cescalaHora) {
        this.sipreEscalaPK = new SipreEscalaPK(cescalaCodigo, cescalaHora);
    }

    public SipreEscalaPK getSipreEscalaPK() {
        return sipreEscalaPK;
    }

    public void setSipreEscalaPK(SipreEscalaPK sipreEscalaPK) {
        this.sipreEscalaPK = sipreEscalaPK;
    }

    public BigDecimal getNescalaMonto() {
        return nescalaMonto;
    }

    public void setNescalaMonto(BigDecimal nescalaMonto) {
        this.nescalaMonto = nescalaMonto;
    }

    @XmlTransient
    public List<SipreDocente> getSipreDocenteList() {
        return sipreDocenteList;
    }

    public void setSipreDocenteList(List<SipreDocente> sipreDocenteList) {
        this.sipreDocenteList = sipreDocenteList;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (sipreEscalaPK != null ? sipreEscalaPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreEscala)) {
            return false;
        }
        SipreEscala other = (SipreEscala) object;
        if ((this.sipreEscalaPK == null && other.sipreEscalaPK != null) || (this.sipreEscalaPK != null && !this.sipreEscalaPK.equals(other.sipreEscalaPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreEscala[ sipreEscalaPK=" + sipreEscalaPK + " ]";
    }
    
}
