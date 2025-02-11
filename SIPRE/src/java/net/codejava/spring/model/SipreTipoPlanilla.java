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
@Table(name = "SIPRE_TIPO_PLANILLA")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreTipoPlanilla.findAll", query = "SELECT s FROM SipreTipoPlanilla s")})
public class SipreTipoPlanilla implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CTP_CODIGO")
    private String ctpCodigo;
    @Column(name = "VTP_DSC")
    private String vtpDsc;
    @Column(name = "CTP_IND_AFE_NETO")
    private Character ctpIndAfeNeto;
    @Column(name = "CTP_IND_AFE_IRENTA")
    private Character ctpIndAfeIrenta;
    @OneToMany(mappedBy = "ctpCodigo")
    private List<SipreConceptoIngreso> sipreConceptoIngresoList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "ctpCodigo")
    private List<SipreTmpBonificacion> sipreTmpBonificacionList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreTipoPlanilla")
    private List<SipreDescuentoNoprocesado> sipreDescuentoNoprocesadoList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreTipoPlanilla")
    private List<SipreCalculoDescuentoLey> sipreCalculoDescuentoLeyList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreTipoPlanilla")
    private List<SiprePlanillaDescuento> siprePlanillaDescuentoList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreTipoPlanilla")
    private List<SiprePlanillaOtro> siprePlanillaOtroList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreTipoPlanilla")
    private List<SipreTmpJudicial> sipreTmpJudicialList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreTipoPlanilla")
    private List<SipreExcepcion> sipreExcepcionList;

    public SipreTipoPlanilla() {
    }

    public SipreTipoPlanilla(String ctpCodigo) {
        this.ctpCodigo = ctpCodigo;
    }

    public String getCtpCodigo() {
        return ctpCodigo;
    }

    public void setCtpCodigo(String ctpCodigo) {
        this.ctpCodigo = ctpCodigo;
    }

    public String getVtpDsc() {
        return vtpDsc;
    }

    public void setVtpDsc(String vtpDsc) {
        this.vtpDsc = vtpDsc;
    }

    public Character getCtpIndAfeNeto() {
        return ctpIndAfeNeto;
    }

    public void setCtpIndAfeNeto(Character ctpIndAfeNeto) {
        this.ctpIndAfeNeto = ctpIndAfeNeto;
    }

    public Character getCtpIndAfeIrenta() {
        return ctpIndAfeIrenta;
    }

    public void setCtpIndAfeIrenta(Character ctpIndAfeIrenta) {
        this.ctpIndAfeIrenta = ctpIndAfeIrenta;
    }

    @XmlTransient
    public List<SipreConceptoIngreso> getSipreConceptoIngresoList() {
        return sipreConceptoIngresoList;
    }

    public void setSipreConceptoIngresoList(List<SipreConceptoIngreso> sipreConceptoIngresoList) {
        this.sipreConceptoIngresoList = sipreConceptoIngresoList;
    }

    @XmlTransient
    public List<SipreTmpBonificacion> getSipreTmpBonificacionList() {
        return sipreTmpBonificacionList;
    }

    public void setSipreTmpBonificacionList(List<SipreTmpBonificacion> sipreTmpBonificacionList) {
        this.sipreTmpBonificacionList = sipreTmpBonificacionList;
    }

    @XmlTransient
    public List<SipreDescuentoNoprocesado> getSipreDescuentoNoprocesadoList() {
        return sipreDescuentoNoprocesadoList;
    }

    public void setSipreDescuentoNoprocesadoList(List<SipreDescuentoNoprocesado> sipreDescuentoNoprocesadoList) {
        this.sipreDescuentoNoprocesadoList = sipreDescuentoNoprocesadoList;
    }

    @XmlTransient
    public List<SipreCalculoDescuentoLey> getSipreCalculoDescuentoLeyList() {
        return sipreCalculoDescuentoLeyList;
    }

    public void setSipreCalculoDescuentoLeyList(List<SipreCalculoDescuentoLey> sipreCalculoDescuentoLeyList) {
        this.sipreCalculoDescuentoLeyList = sipreCalculoDescuentoLeyList;
    }

    @XmlTransient
    public List<SiprePlanillaDescuento> getSiprePlanillaDescuentoList() {
        return siprePlanillaDescuentoList;
    }

    public void setSiprePlanillaDescuentoList(List<SiprePlanillaDescuento> siprePlanillaDescuentoList) {
        this.siprePlanillaDescuentoList = siprePlanillaDescuentoList;
    }

    @XmlTransient
    public List<SiprePlanillaOtro> getSiprePlanillaOtroList() {
        return siprePlanillaOtroList;
    }

    public void setSiprePlanillaOtroList(List<SiprePlanillaOtro> siprePlanillaOtroList) {
        this.siprePlanillaOtroList = siprePlanillaOtroList;
    }

    @XmlTransient
    public List<SipreTmpJudicial> getSipreTmpJudicialList() {
        return sipreTmpJudicialList;
    }

    public void setSipreTmpJudicialList(List<SipreTmpJudicial> sipreTmpJudicialList) {
        this.sipreTmpJudicialList = sipreTmpJudicialList;
    }

    @XmlTransient
    public List<SipreExcepcion> getSipreExcepcionList() {
        return sipreExcepcionList;
    }

    public void setSipreExcepcionList(List<SipreExcepcion> sipreExcepcionList) {
        this.sipreExcepcionList = sipreExcepcionList;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (ctpCodigo != null ? ctpCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreTipoPlanilla)) {
            return false;
        }
        SipreTipoPlanilla other = (SipreTipoPlanilla) object;
        if ((this.ctpCodigo == null && other.ctpCodigo != null) || (this.ctpCodigo != null && !this.ctpCodigo.equals(other.ctpCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreTipoPlanilla[ ctpCodigo=" + ctpCodigo + " ]";
    }
    
}
