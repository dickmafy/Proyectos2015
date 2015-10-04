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
@Table(name = "SIPRE_AGRUPADOR")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreAgrupador.findAll", query = "SELECT s FROM SipreAgrupador s")})
public class SipreAgrupador implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CAGRUPADOR_CODIGO")
    private String cagrupadorCodigo;
    @Column(name = "VAGRUPADOR_DSC")
    private String vagrupadorDsc;
    @OneToMany(mappedBy = "cagrupadorCodigo")
    private List<SiprePersona> siprePersonaList;
    @OneToMany(mappedBy = "cagrupadorCodigo")
    private List<SiprePlanilla> siprePlanillaList;

    public SipreAgrupador() {
    }

    public SipreAgrupador(String cagrupadorCodigo) {
        this.cagrupadorCodigo = cagrupadorCodigo;
    }

    public String getCagrupadorCodigo() {
        return cagrupadorCodigo;
    }

    public void setCagrupadorCodigo(String cagrupadorCodigo) {
        this.cagrupadorCodigo = cagrupadorCodigo;
    }

    public String getVagrupadorDsc() {
        return vagrupadorDsc;
    }

    public void setVagrupadorDsc(String vagrupadorDsc) {
        this.vagrupadorDsc = vagrupadorDsc;
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
        hash += (cagrupadorCodigo != null ? cagrupadorCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreAgrupador)) {
            return false;
        }
        SipreAgrupador other = (SipreAgrupador) object;
        if ((this.cagrupadorCodigo == null && other.cagrupadorCodigo != null) || (this.cagrupadorCodigo != null && !this.cagrupadorCodigo.equals(other.cagrupadorCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreAgrupador[ cagrupadorCodigo=" + cagrupadorCodigo + " ]";
    }
    
}
