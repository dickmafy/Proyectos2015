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
@Table(name = "SIPRE_ESPECIALIDAD_ALTERNA")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreEspecialidadAlterna.findAll", query = "SELECT s FROM SipreEspecialidadAlterna s")})
public class SipreEspecialidadAlterna implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CEA_CODIGO")
    private String ceaCodigo;
    @Column(name = "VEA_DSC_LARGA")
    private String veaDscLarga;
    @Column(name = "VEA_DSC_CORTA")
    private String veaDscCorta;
    @OneToMany(mappedBy = "ceaCodigo")
    private List<SiprePersona> siprePersonaList;
    @OneToMany(mappedBy = "ceaCodigo")
    private List<SiprePlanilla> siprePlanillaList;

    public SipreEspecialidadAlterna() {
    }

    public SipreEspecialidadAlterna(String ceaCodigo) {
        this.ceaCodigo = ceaCodigo;
    }

    public String getCeaCodigo() {
        return ceaCodigo;
    }

    public void setCeaCodigo(String ceaCodigo) {
        this.ceaCodigo = ceaCodigo;
    }

    public String getVeaDscLarga() {
        return veaDscLarga;
    }

    public void setVeaDscLarga(String veaDscLarga) {
        this.veaDscLarga = veaDscLarga;
    }

    public String getVeaDscCorta() {
        return veaDscCorta;
    }

    public void setVeaDscCorta(String veaDscCorta) {
        this.veaDscCorta = veaDscCorta;
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
        hash += (ceaCodigo != null ? ceaCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreEspecialidadAlterna)) {
            return false;
        }
        SipreEspecialidadAlterna other = (SipreEspecialidadAlterna) object;
        if ((this.ceaCodigo == null && other.ceaCodigo != null) || (this.ceaCodigo != null && !this.ceaCodigo.equals(other.ceaCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreEspecialidadAlterna[ ceaCodigo=" + ceaCodigo + " ]";
    }
    
}
