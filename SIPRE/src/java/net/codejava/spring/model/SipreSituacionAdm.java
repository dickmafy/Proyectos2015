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
@Table(name = "SIPRE_SITUACION_ADM")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreSituacionAdm.findAll", query = "SELECT s FROM SipreSituacionAdm s")})
public class SipreSituacionAdm implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CSA_CODIGO")
    private String csaCodigo;
    @Column(name = "VSA_DSC_LARGA")
    private String vsaDscLarga;
    @Column(name = "VSA_DSC_CORTA")
    private String vsaDscCorta;
    @Column(name = "CSA_TIPO_PERSONA")
    private Character csaTipoPersona;
    @Column(name = "CSA_IND_PAGO")
    private Character csaIndPago;
    @OneToMany(mappedBy = "csaCodigo")
    private List<SiprePersona> siprePersonaList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreSituacionAdm")
    private List<SipreSituacionCedula> sipreSituacionCedulaList;
    @OneToMany(mappedBy = "csaCodigo")
    private List<SiprePlanilla> siprePlanillaList;

    public SipreSituacionAdm() {
    }

    public SipreSituacionAdm(String csaCodigo) {
        this.csaCodigo = csaCodigo;
    }

    public String getCsaCodigo() {
        return csaCodigo;
    }

    public void setCsaCodigo(String csaCodigo) {
        this.csaCodigo = csaCodigo;
    }

    public String getVsaDscLarga() {
        return vsaDscLarga;
    }

    public void setVsaDscLarga(String vsaDscLarga) {
        this.vsaDscLarga = vsaDscLarga;
    }

    public String getVsaDscCorta() {
        return vsaDscCorta;
    }

    public void setVsaDscCorta(String vsaDscCorta) {
        this.vsaDscCorta = vsaDscCorta;
    }

    public Character getCsaTipoPersona() {
        return csaTipoPersona;
    }

    public void setCsaTipoPersona(Character csaTipoPersona) {
        this.csaTipoPersona = csaTipoPersona;
    }

    public Character getCsaIndPago() {
        return csaIndPago;
    }

    public void setCsaIndPago(Character csaIndPago) {
        this.csaIndPago = csaIndPago;
    }

    @XmlTransient
    public List<SiprePersona> getSiprePersonaList() {
        return siprePersonaList;
    }

    public void setSiprePersonaList(List<SiprePersona> siprePersonaList) {
        this.siprePersonaList = siprePersonaList;
    }

    @XmlTransient
    public List<SipreSituacionCedula> getSipreSituacionCedulaList() {
        return sipreSituacionCedulaList;
    }

    public void setSipreSituacionCedulaList(List<SipreSituacionCedula> sipreSituacionCedulaList) {
        this.sipreSituacionCedulaList = sipreSituacionCedulaList;
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
        hash += (csaCodigo != null ? csaCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreSituacionAdm)) {
            return false;
        }
        SipreSituacionAdm other = (SipreSituacionAdm) object;
        if ((this.csaCodigo == null && other.csaCodigo != null) || (this.csaCodigo != null && !this.csaCodigo.equals(other.csaCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreSituacionAdm[ csaCodigo=" + csaCodigo + " ]";
    }
    
}
