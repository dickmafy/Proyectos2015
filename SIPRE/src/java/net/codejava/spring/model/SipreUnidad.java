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
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
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
@Table(name = "SIPRE_UNIDAD")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreUnidad.findAll", query = "SELECT s FROM SipreUnidad s")})
public class SipreUnidad implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CUNIDAD_CODIGO")
    private String cunidadCodigo;
    @Column(name = "VUNIDAD_DSC_LARGA")
    private String vunidadDscLarga;
    @Column(name = "VUNIDAD_DSC_CORTA")
    private String vunidadDscCorta;
    @Column(name = "CUNIDAD_ESTADO")
    private Character cunidadEstado;
    @Basic(optional = false)
    @Column(name = "CACTIVIDAD_CODIGO")
    private String cactividadCodigo;
    @Column(name = "CUNIDAD_IND_ZONA")
    private Character cunidadIndZona;
    @Column(name = "CUNIDAD_COD_GUAR")
    private String cunidadCodGuar;
    @Column(name = "VUNIDAD_DSC_GUAR")
    private String vunidadDscGuar;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "cunidadCodigo")
    private List<SiprePersona> siprePersonaList;
    @JoinColumn(name = "CNUCLEO_CODIGO", referencedColumnName = "CNUCLEO_CODIGO")
    @ManyToOne(optional = false)
    private SipreNucleo cnucleoCodigo;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "cunidadCodigo")
    private List<SiprePlanilla> siprePlanillaList;

    public SipreUnidad() {
    }

    public SipreUnidad(String cunidadCodigo) {
        this.cunidadCodigo = cunidadCodigo;
    }

    public SipreUnidad(String cunidadCodigo, String cactividadCodigo) {
        this.cunidadCodigo = cunidadCodigo;
        this.cactividadCodigo = cactividadCodigo;
    }

    public String getCunidadCodigo() {
        return cunidadCodigo;
    }

    public void setCunidadCodigo(String cunidadCodigo) {
        this.cunidadCodigo = cunidadCodigo;
    }

    public String getVunidadDscLarga() {
        return vunidadDscLarga;
    }

    public void setVunidadDscLarga(String vunidadDscLarga) {
        this.vunidadDscLarga = vunidadDscLarga;
    }

    public String getVunidadDscCorta() {
        return vunidadDscCorta;
    }

    public void setVunidadDscCorta(String vunidadDscCorta) {
        this.vunidadDscCorta = vunidadDscCorta;
    }

    public Character getCunidadEstado() {
        return cunidadEstado;
    }

    public void setCunidadEstado(Character cunidadEstado) {
        this.cunidadEstado = cunidadEstado;
    }

    public String getCactividadCodigo() {
        return cactividadCodigo;
    }

    public void setCactividadCodigo(String cactividadCodigo) {
        this.cactividadCodigo = cactividadCodigo;
    }

    public Character getCunidadIndZona() {
        return cunidadIndZona;
    }

    public void setCunidadIndZona(Character cunidadIndZona) {
        this.cunidadIndZona = cunidadIndZona;
    }

    public String getCunidadCodGuar() {
        return cunidadCodGuar;
    }

    public void setCunidadCodGuar(String cunidadCodGuar) {
        this.cunidadCodGuar = cunidadCodGuar;
    }

    public String getVunidadDscGuar() {
        return vunidadDscGuar;
    }

    public void setVunidadDscGuar(String vunidadDscGuar) {
        this.vunidadDscGuar = vunidadDscGuar;
    }

    @XmlTransient
    public List<SiprePersona> getSiprePersonaList() {
        return siprePersonaList;
    }

    public void setSiprePersonaList(List<SiprePersona> siprePersonaList) {
        this.siprePersonaList = siprePersonaList;
    }

    public SipreNucleo getCnucleoCodigo() {
        return cnucleoCodigo;
    }

    public void setCnucleoCodigo(SipreNucleo cnucleoCodigo) {
        this.cnucleoCodigo = cnucleoCodigo;
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
        hash += (cunidadCodigo != null ? cunidadCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreUnidad)) {
            return false;
        }
        SipreUnidad other = (SipreUnidad) object;
        if ((this.cunidadCodigo == null && other.cunidadCodigo != null) || (this.cunidadCodigo != null && !this.cunidadCodigo.equals(other.cunidadCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreUnidad[ cunidadCodigo=" + cunidadCodigo + " ]";
    }
    
}
