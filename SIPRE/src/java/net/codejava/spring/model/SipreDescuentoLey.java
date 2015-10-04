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
@Table(name = "SIPRE_DESCUENTO_LEY")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreDescuentoLey.findAll", query = "SELECT s FROM SipreDescuentoLey s")})
public class SipreDescuentoLey implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CDL_CODIGO")
    private String cdlCodigo;
    @Column(name = "VDL_DSC")
    private String vdlDsc;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreDescuentoLey")
    private List<SipreDescuentoLeyDet> sipreDescuentoLeyDetList;

    public SipreDescuentoLey() {
    }

    public SipreDescuentoLey(String cdlCodigo) {
        this.cdlCodigo = cdlCodigo;
    }

    public String getCdlCodigo() {
        return cdlCodigo;
    }

    public void setCdlCodigo(String cdlCodigo) {
        this.cdlCodigo = cdlCodigo;
    }

    public String getVdlDsc() {
        return vdlDsc;
    }

    public void setVdlDsc(String vdlDsc) {
        this.vdlDsc = vdlDsc;
    }

    @XmlTransient
    public List<SipreDescuentoLeyDet> getSipreDescuentoLeyDetList() {
        return sipreDescuentoLeyDetList;
    }

    public void setSipreDescuentoLeyDetList(List<SipreDescuentoLeyDet> sipreDescuentoLeyDetList) {
        this.sipreDescuentoLeyDetList = sipreDescuentoLeyDetList;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cdlCodigo != null ? cdlCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreDescuentoLey)) {
            return false;
        }
        SipreDescuentoLey other = (SipreDescuentoLey) object;
        if ((this.cdlCodigo == null && other.cdlCodigo != null) || (this.cdlCodigo != null && !this.cdlCodigo.equals(other.cdlCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreDescuentoLey[ cdlCodigo=" + cdlCodigo + " ]";
    }
    
}
