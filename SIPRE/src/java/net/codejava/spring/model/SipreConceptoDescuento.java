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
@Table(name = "SIPRE_CONCEPTO_DESCUENTO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreConceptoDescuento.findAll", query = "SELECT s FROM SipreConceptoDescuento s")})
public class SipreConceptoDescuento implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CCD_CODIGO")
    private String ccdCodigo;
    @Column(name = "VCD_DSC")
    private String vcdDsc;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreConceptoDescuento")
    private List<SipreConceptoDescuentoLey> sipreConceptoDescuentoLeyList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreConceptoDescuento")
    private List<SipreDescuentoIngreso> sipreDescuentoIngresoList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreConceptoDescuento")
    private List<SipreCalculoDescuentoLey> sipreCalculoDescuentoLeyList;

    public SipreConceptoDescuento() {
    }

    public SipreConceptoDescuento(String ccdCodigo) {
        this.ccdCodigo = ccdCodigo;
    }

    public String getCcdCodigo() {
        return ccdCodigo;
    }

    public void setCcdCodigo(String ccdCodigo) {
        this.ccdCodigo = ccdCodigo;
    }

    public String getVcdDsc() {
        return vcdDsc;
    }

    public void setVcdDsc(String vcdDsc) {
        this.vcdDsc = vcdDsc;
    }

    @XmlTransient
    public List<SipreConceptoDescuentoLey> getSipreConceptoDescuentoLeyList() {
        return sipreConceptoDescuentoLeyList;
    }

    public void setSipreConceptoDescuentoLeyList(List<SipreConceptoDescuentoLey> sipreConceptoDescuentoLeyList) {
        this.sipreConceptoDescuentoLeyList = sipreConceptoDescuentoLeyList;
    }

    @XmlTransient
    public List<SipreDescuentoIngreso> getSipreDescuentoIngresoList() {
        return sipreDescuentoIngresoList;
    }

    public void setSipreDescuentoIngresoList(List<SipreDescuentoIngreso> sipreDescuentoIngresoList) {
        this.sipreDescuentoIngresoList = sipreDescuentoIngresoList;
    }

    @XmlTransient
    public List<SipreCalculoDescuentoLey> getSipreCalculoDescuentoLeyList() {
        return sipreCalculoDescuentoLeyList;
    }

    public void setSipreCalculoDescuentoLeyList(List<SipreCalculoDescuentoLey> sipreCalculoDescuentoLeyList) {
        this.sipreCalculoDescuentoLeyList = sipreCalculoDescuentoLeyList;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (ccdCodigo != null ? ccdCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreConceptoDescuento)) {
            return false;
        }
        SipreConceptoDescuento other = (SipreConceptoDescuento) object;
        if ((this.ccdCodigo == null && other.ccdCodigo != null) || (this.ccdCodigo != null && !this.ccdCodigo.equals(other.ccdCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreConceptoDescuento[ ccdCodigo=" + ccdCodigo + " ]";
    }
    
}
