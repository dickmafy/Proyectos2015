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
public class SipreDescuentoLeyDetPK implements Serializable {
    @Basic(optional = false)
    @Column(name = "CDL_CODIGO")
    private String cdlCodigo;
    @Basic(optional = false)
    @Column(name = "CDLD_CODIGO")
    private String cdldCodigo;

    public SipreDescuentoLeyDetPK() {
    }

    public SipreDescuentoLeyDetPK(String cdlCodigo, String cdldCodigo) {
        this.cdlCodigo = cdlCodigo;
        this.cdldCodigo = cdldCodigo;
    }

    public String getCdlCodigo() {
        return cdlCodigo;
    }

    public void setCdlCodigo(String cdlCodigo) {
        this.cdlCodigo = cdlCodigo;
    }

    public String getCdldCodigo() {
        return cdldCodigo;
    }

    public void setCdldCodigo(String cdldCodigo) {
        this.cdldCodigo = cdldCodigo;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cdlCodigo != null ? cdlCodigo.hashCode() : 0);
        hash += (cdldCodigo != null ? cdldCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreDescuentoLeyDetPK)) {
            return false;
        }
        SipreDescuentoLeyDetPK other = (SipreDescuentoLeyDetPK) object;
        if ((this.cdlCodigo == null && other.cdlCodigo != null) || (this.cdlCodigo != null && !this.cdlCodigo.equals(other.cdlCodigo))) {
            return false;
        }
        if ((this.cdldCodigo == null && other.cdldCodigo != null) || (this.cdldCodigo != null && !this.cdldCodigo.equals(other.cdldCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreDescuentoLeyDetPK[ cdlCodigo=" + cdlCodigo + ", cdldCodigo=" + cdldCodigo + " ]";
    }
    
}
