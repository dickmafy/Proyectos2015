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
public class SipreConceptoDescuentoLeyPK implements Serializable {
    @Basic(optional = false)
    @Column(name = "CDL_CODIGO")
    private String cdlCodigo;
    @Basic(optional = false)
    @Column(name = "CDLD_CODIGO")
    private String cdldCodigo;
    @Basic(optional = false)
    @Column(name = "CCD_CODIGO")
    private String ccdCodigo;

    public SipreConceptoDescuentoLeyPK() {
    }

    public SipreConceptoDescuentoLeyPK(String cdlCodigo, String cdldCodigo, String ccdCodigo) {
        this.cdlCodigo = cdlCodigo;
        this.cdldCodigo = cdldCodigo;
        this.ccdCodigo = ccdCodigo;
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

    public String getCcdCodigo() {
        return ccdCodigo;
    }

    public void setCcdCodigo(String ccdCodigo) {
        this.ccdCodigo = ccdCodigo;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cdlCodigo != null ? cdlCodigo.hashCode() : 0);
        hash += (cdldCodigo != null ? cdldCodigo.hashCode() : 0);
        hash += (ccdCodigo != null ? ccdCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreConceptoDescuentoLeyPK)) {
            return false;
        }
        SipreConceptoDescuentoLeyPK other = (SipreConceptoDescuentoLeyPK) object;
        if ((this.cdlCodigo == null && other.cdlCodigo != null) || (this.cdlCodigo != null && !this.cdlCodigo.equals(other.cdlCodigo))) {
            return false;
        }
        if ((this.cdldCodigo == null && other.cdldCodigo != null) || (this.cdldCodigo != null && !this.cdldCodigo.equals(other.cdldCodigo))) {
            return false;
        }
        if ((this.ccdCodigo == null && other.ccdCodigo != null) || (this.ccdCodigo != null && !this.ccdCodigo.equals(other.ccdCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreConceptoDescuentoLeyPK[ cdlCodigo=" + cdlCodigo + ", cdldCodigo=" + cdldCodigo + ", ccdCodigo=" + ccdCodigo + " ]";
    }
    
}
