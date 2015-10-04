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
public class SipreCalculoDescuentoLeyPK implements Serializable {
    @Basic(optional = false)
    @Column(name = "CPLANILLA_MES_PROCESO")
    private String cplanillaMesProceso;
    @Basic(optional = false)
    @Column(name = "CPERSONA_NRO_ADM")
    private String cpersonaNroAdm;
    @Basic(optional = false)
    @Column(name = "NPLANILLA_NUM_PROCESO")
    private short nplanillaNumProceso;
    @Basic(optional = false)
    @Column(name = "CTP_CODIGO")
    private String ctpCodigo;
    @Basic(optional = false)
    @Column(name = "CCD_CODIGO")
    private String ccdCodigo;

    public SipreCalculoDescuentoLeyPK() {
    }

    public SipreCalculoDescuentoLeyPK(String cplanillaMesProceso, String cpersonaNroAdm, short nplanillaNumProceso, String ctpCodigo, String ccdCodigo) {
        this.cplanillaMesProceso = cplanillaMesProceso;
        this.cpersonaNroAdm = cpersonaNroAdm;
        this.nplanillaNumProceso = nplanillaNumProceso;
        this.ctpCodigo = ctpCodigo;
        this.ccdCodigo = ccdCodigo;
    }

    public String getCplanillaMesProceso() {
        return cplanillaMesProceso;
    }

    public void setCplanillaMesProceso(String cplanillaMesProceso) {
        this.cplanillaMesProceso = cplanillaMesProceso;
    }

    public String getCpersonaNroAdm() {
        return cpersonaNroAdm;
    }

    public void setCpersonaNroAdm(String cpersonaNroAdm) {
        this.cpersonaNroAdm = cpersonaNroAdm;
    }

    public short getNplanillaNumProceso() {
        return nplanillaNumProceso;
    }

    public void setNplanillaNumProceso(short nplanillaNumProceso) {
        this.nplanillaNumProceso = nplanillaNumProceso;
    }

    public String getCtpCodigo() {
        return ctpCodigo;
    }

    public void setCtpCodigo(String ctpCodigo) {
        this.ctpCodigo = ctpCodigo;
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
        hash += (cplanillaMesProceso != null ? cplanillaMesProceso.hashCode() : 0);
        hash += (cpersonaNroAdm != null ? cpersonaNroAdm.hashCode() : 0);
        hash += (int) nplanillaNumProceso;
        hash += (ctpCodigo != null ? ctpCodigo.hashCode() : 0);
        hash += (ccdCodigo != null ? ccdCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreCalculoDescuentoLeyPK)) {
            return false;
        }
        SipreCalculoDescuentoLeyPK other = (SipreCalculoDescuentoLeyPK) object;
        if ((this.cplanillaMesProceso == null && other.cplanillaMesProceso != null) || (this.cplanillaMesProceso != null && !this.cplanillaMesProceso.equals(other.cplanillaMesProceso))) {
            return false;
        }
        if ((this.cpersonaNroAdm == null && other.cpersonaNroAdm != null) || (this.cpersonaNroAdm != null && !this.cpersonaNroAdm.equals(other.cpersonaNroAdm))) {
            return false;
        }
        if (this.nplanillaNumProceso != other.nplanillaNumProceso) {
            return false;
        }
        if ((this.ctpCodigo == null && other.ctpCodigo != null) || (this.ctpCodigo != null && !this.ctpCodigo.equals(other.ctpCodigo))) {
            return false;
        }
        if ((this.ccdCodigo == null && other.ccdCodigo != null) || (this.ccdCodigo != null && !this.ccdCodigo.equals(other.ccdCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreCalculoDescuentoLeyPK[ cplanillaMesProceso=" + cplanillaMesProceso + ", cpersonaNroAdm=" + cpersonaNroAdm + ", nplanillaNumProceso=" + nplanillaNumProceso + ", ctpCodigo=" + ctpCodigo + ", ccdCodigo=" + ccdCodigo + " ]";
    }
    
}
