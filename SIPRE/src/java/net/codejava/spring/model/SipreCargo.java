/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.util.List;
import javax.persistence.Basic;
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
@Table(name = "SIPRE_CARGO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreCargo.findAll", query = "SELECT s FROM SipreCargo s")})
public class SipreCargo implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CCARGO_CODIGO")
    private String ccargoCodigo;
    @Column(name = "VCARGO_DSC")
    private String vcargoDsc;
    @OneToMany(mappedBy = "ccargoCodigo")
    private List<SiprePersona> siprePersonaList;
    @OneToMany(mappedBy = "ccargoCodigo")
    private List<SiprePlanilla> siprePlanillaList;

    public SipreCargo() {
    }

    public SipreCargo(String ccargoCodigo) {
        this.ccargoCodigo = ccargoCodigo;
    }

    public String getCcargoCodigo() {
        return ccargoCodigo;
    }

    public void setCcargoCodigo(String ccargoCodigo) {
        this.ccargoCodigo = ccargoCodigo;
    }

    public String getVcargoDsc() {
        return vcargoDsc;
    }

    public void setVcargoDsc(String vcargoDsc) {
        this.vcargoDsc = vcargoDsc;
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
        hash += (ccargoCodigo != null ? ccargoCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreCargo)) {
            return false;
        }
        SipreCargo other = (SipreCargo) object;
        if ((this.ccargoCodigo == null && other.ccargoCodigo != null) || (this.ccargoCodigo != null && !this.ccargoCodigo.equals(other.ccargoCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreCargo[ ccargoCodigo=" + ccargoCodigo + " ]";
    }
    
}
