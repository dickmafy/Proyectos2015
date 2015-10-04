/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_DESCUENTO_INGRESO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreDescuentoIngreso.findAll", query = "SELECT s FROM SipreDescuentoIngreso s")})
public class SipreDescuentoIngreso implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreDescuentoIngresoPK sipreDescuentoIngresoPK;
    @JoinColumn(name = "CCD_CODIGO", referencedColumnName = "CCD_CODIGO", insertable = false, updatable = false)
    @ManyToOne(optional = false)
    private SipreConceptoDescuento sipreConceptoDescuento;

    public SipreDescuentoIngreso() {
    }

    public SipreDescuentoIngreso(SipreDescuentoIngresoPK sipreDescuentoIngresoPK) {
        this.sipreDescuentoIngresoPK = sipreDescuentoIngresoPK;
    }

    public SipreDescuentoIngreso(String ccdCodigo, String cciCodigo) {
        this.sipreDescuentoIngresoPK = new SipreDescuentoIngresoPK(ccdCodigo, cciCodigo);
    }

    public SipreDescuentoIngresoPK getSipreDescuentoIngresoPK() {
        return sipreDescuentoIngresoPK;
    }

    public void setSipreDescuentoIngresoPK(SipreDescuentoIngresoPK sipreDescuentoIngresoPK) {
        this.sipreDescuentoIngresoPK = sipreDescuentoIngresoPK;
    }

    public SipreConceptoDescuento getSipreConceptoDescuento() {
        return sipreConceptoDescuento;
    }

    public void setSipreConceptoDescuento(SipreConceptoDescuento sipreConceptoDescuento) {
        this.sipreConceptoDescuento = sipreConceptoDescuento;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (sipreDescuentoIngresoPK != null ? sipreDescuentoIngresoPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreDescuentoIngreso)) {
            return false;
        }
        SipreDescuentoIngreso other = (SipreDescuentoIngreso) object;
        if ((this.sipreDescuentoIngresoPK == null && other.sipreDescuentoIngresoPK != null) || (this.sipreDescuentoIngresoPK != null && !this.sipreDescuentoIngresoPK.equals(other.sipreDescuentoIngresoPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreDescuentoIngreso[ sipreDescuentoIngresoPK=" + sipreDescuentoIngresoPK + " ]";
    }
    
}
