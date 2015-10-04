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
@Table(name = "SIPRE_SITUACION_CAUSAL")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreSituacionCausal.findAll", query = "SELECT s FROM SipreSituacionCausal s")})
public class SipreSituacionCausal implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CSC_CODIGO")
    private String cscCodigo;
    @Column(name = "VSC_DSC_LARGA")
    private String vscDscLarga;
    @Column(name = "VSC_DSC_CORTA")
    private String vscDscCorta;
    @OneToMany(mappedBy = "cscCodigo")
    private List<SiprePersona> siprePersonaList;
    @OneToMany(mappedBy = "cscCodigo")
    private List<SiprePlanilla> siprePlanillaList;

    public SipreSituacionCausal() {
    }

    public SipreSituacionCausal(String cscCodigo) {
        this.cscCodigo = cscCodigo;
    }

    public String getCscCodigo() {
        return cscCodigo;
    }

    public void setCscCodigo(String cscCodigo) {
        this.cscCodigo = cscCodigo;
    }

    public String getVscDscLarga() {
        return vscDscLarga;
    }

    public void setVscDscLarga(String vscDscLarga) {
        this.vscDscLarga = vscDscLarga;
    }

    public String getVscDscCorta() {
        return vscDscCorta;
    }

    public void setVscDscCorta(String vscDscCorta) {
        this.vscDscCorta = vscDscCorta;
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
        hash += (cscCodigo != null ? cscCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreSituacionCausal)) {
            return false;
        }
        SipreSituacionCausal other = (SipreSituacionCausal) object;
        if ((this.cscCodigo == null && other.cscCodigo != null) || (this.cscCodigo != null && !this.cscCodigo.equals(other.cscCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreSituacionCausal[ cscCodigo=" + cscCodigo + " ]";
    }
    
}
