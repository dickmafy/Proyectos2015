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
@Table(name = "SIPRE_ESTADO_CIVIL")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreEstadoCivil.findAll", query = "SELECT s FROM SipreEstadoCivil s")})
public class SipreEstadoCivil implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CEC_CODIGO")
    private String cecCodigo;
    @Column(name = "VEC_DSC")
    private String vecDsc;
    @Column(name = "CEC_IND_COB")
    private Character cecIndCob;
    @OneToMany(mappedBy = "cecCodigo")
    private List<SiprePersona> siprePersonaList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "cecCodigo")
    private List<SiprePlanilla> siprePlanillaList;

    public SipreEstadoCivil() {
    }

    public SipreEstadoCivil(String cecCodigo) {
        this.cecCodigo = cecCodigo;
    }

    public String getCecCodigo() {
        return cecCodigo;
    }

    public void setCecCodigo(String cecCodigo) {
        this.cecCodigo = cecCodigo;
    }

    public String getVecDsc() {
        return vecDsc;
    }

    public void setVecDsc(String vecDsc) {
        this.vecDsc = vecDsc;
    }

    public Character getCecIndCob() {
        return cecIndCob;
    }

    public void setCecIndCob(Character cecIndCob) {
        this.cecIndCob = cecIndCob;
    }

    @XmlTransient
    public List<SiprePersona> getSiprePersonaList() {
        return siprePersonaList;
    }

    public void setSiprePersonaList(List<SiprePersona> siprePersonaList) {
        this.siprePersonaList = siprePersonaList;
    }

    @XmlTransient
    public List<SiprePlanilla> getSiprePlanillaList() {
        return siprePlanillaList;
    }

    public void setSiprePlanillaList(List<SiprePlanilla> siprePlanillaList) {
        this.siprePlanillaList = siprePlanillaList;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cecCodigo != null ? cecCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreEstadoCivil)) {
            return false;
        }
        SipreEstadoCivil other = (SipreEstadoCivil) object;
        if ((this.cecCodigo == null && other.cecCodigo != null) || (this.cecCodigo != null && !this.cecCodigo.equals(other.cecCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreEstadoCivil[ cecCodigo=" + cecCodigo + " ]";
    }
    
}
