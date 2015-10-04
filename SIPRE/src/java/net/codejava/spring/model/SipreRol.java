/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.util.List;
import javax.persistence.Basic;
import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
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
@Table(name = "SIPRE_ROL")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreRol.findAll", query = "SELECT s FROM SipreRol s")})
public class SipreRol implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CROL_CODIGO")
    private String crolCodigo;
    @Column(name = "VROL_DSC")
    private String vrolDsc;
    @Column(name = "CROL_EST")
    private Character crolEst;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreRol")
    private List<SipreUsuarioRol> sipreUsuarioRolList;

    public SipreRol() {
    }

    public SipreRol(String crolCodigo) {
        this.crolCodigo = crolCodigo;
    }

    public String getCrolCodigo() {
        return crolCodigo;
    }

    public void setCrolCodigo(String crolCodigo) {
        this.crolCodigo = crolCodigo;
    }

    public String getVrolDsc() {
        return vrolDsc;
    }

    public void setVrolDsc(String vrolDsc) {
        this.vrolDsc = vrolDsc;
    }

    public Character getCrolEst() {
        return crolEst;
    }

    public void setCrolEst(Character crolEst) {
        this.crolEst = crolEst;
    }

    @XmlTransient
    public List<SipreUsuarioRol> getSipreUsuarioRolList() {
        return sipreUsuarioRolList;
    }

    public void setSipreUsuarioRolList(List<SipreUsuarioRol> sipreUsuarioRolList) {
        this.sipreUsuarioRolList = sipreUsuarioRolList;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (crolCodigo != null ? crolCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreRol)) {
            return false;
        }
        SipreRol other = (SipreRol) object;
        if ((this.crolCodigo == null && other.crolCodigo != null) || (this.crolCodigo != null && !this.crolCodigo.equals(other.crolCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreRol[ crolCodigo=" + crolCodigo + " ]";
    }
    
}
