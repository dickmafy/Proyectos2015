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
@Table(name = "SIPRE_ARMA")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreArma.findAll", query = "SELECT s FROM SipreArma s")})
public class SipreArma implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CARMA_CODIGO")
    private String carmaCodigo;
    @Column(name = "VARMA_DSC_LARGA")
    private String varmaDscLarga;
    @Column(name = "VARMA_DSC_CORTA")
    private String varmaDscCorta;
    @OneToMany(mappedBy = "carmaCodigo")
    private List<SiprePersona> siprePersonaList;
    @OneToMany(mappedBy = "carmaCodigo")
    private List<SiprePlanilla> siprePlanillaList;

    public SipreArma() {
    }

    public SipreArma(String carmaCodigo) {
        this.carmaCodigo = carmaCodigo;
    }

    public String getCarmaCodigo() {
        return carmaCodigo;
    }

    public void setCarmaCodigo(String carmaCodigo) {
        this.carmaCodigo = carmaCodigo;
    }

    public String getVarmaDscLarga() {
        return varmaDscLarga;
    }

    public void setVarmaDscLarga(String varmaDscLarga) {
        this.varmaDscLarga = varmaDscLarga;
    }

    public String getVarmaDscCorta() {
        return varmaDscCorta;
    }

    public void setVarmaDscCorta(String varmaDscCorta) {
        this.varmaDscCorta = varmaDscCorta;
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
        hash += (carmaCodigo != null ? carmaCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreArma)) {
            return false;
        }
        SipreArma other = (SipreArma) object;
        if ((this.carmaCodigo == null && other.carmaCodigo != null) || (this.carmaCodigo != null && !this.carmaCodigo.equals(other.carmaCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreArma[ carmaCodigo=" + carmaCodigo + " ]";
    }
    
}
