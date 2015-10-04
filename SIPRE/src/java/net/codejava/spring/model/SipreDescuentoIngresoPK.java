/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Embeddable;

/**
 *
 * @author DIEGO
 */
@Embeddable
public class SipreDescuentoIngresoPK implements Serializable {
    @Basic(optional = false)
    @Column(name = "CCD_CODIGO")
    private String ccdCodigo;
    @Basic(optional = false)
    @Column(name = "CCI_CODIGO")
    private String cciCodigo;

    public SipreDescuentoIngresoPK() {
    }

    public SipreDescuentoIngresoPK(String ccdCodigo, String cciCodigo) {
        this.ccdCodigo = ccdCodigo;
        this.cciCodigo = cciCodigo;
    }

    public String getCcdCodigo() {
        return ccdCodigo;
    }

    public void setCcdCodigo(String ccdCodigo) {
        this.ccdCodigo = ccdCodigo;
    }

    public String getCciCodigo() {
        return cciCodigo;
    }

    public void setCciCodigo(String cciCodigo) {
        this.cciCodigo = cciCodigo;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (ccdCodigo != null ? ccdCodigo.hashCode() : 0);
        hash += (cciCodigo != null ? cciCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreDescuentoIngresoPK)) {
            return false;
        }
        SipreDescuentoIngresoPK other = (SipreDescuentoIngresoPK) object;
        if ((this.ccdCodigo == null && other.ccdCodigo != null) || (this.ccdCodigo != null && !this.ccdCodigo.equals(other.ccdCodigo))) {
            return false;
        }
        if ((this.cciCodigo == null && other.cciCodigo != null) || (this.cciCodigo != null && !this.cciCodigo.equals(other.cciCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreDescuentoIngresoPK[ ccdCodigo=" + ccdCodigo + ", cciCodigo=" + cciCodigo + " ]";
    }
    
}
