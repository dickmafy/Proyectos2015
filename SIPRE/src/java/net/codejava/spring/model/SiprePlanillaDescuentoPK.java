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
public class SiprePlanillaDescuentoPK implements Serializable {
    @Basic(optional = false)
    @Column(name = "NPD_COD_SEC")
    private short npdCodSec;
    @Basic(optional = false)
    @Column(name = "CTP_CODIGO")
    private String ctpCodigo;
    @Basic(optional = false)
    @Column(name = "CEC_CODIGO")
    private String cecCodigo;
    @Basic(optional = false)
    @Column(name = "CPERSONA_NRO_ADM")
    private String cpersonaNroAdm;
    @Basic(optional = false)
    @Column(name = "CPLANILLA_MES_PROCESO")
    private String cplanillaMesProceso;
    @Basic(optional = false)
    @Column(name = "NPLANILLA_NUM_PROCESO")
    private short nplanillaNumProceso;

    public SiprePlanillaDescuentoPK() {
    }

    public SiprePlanillaDescuentoPK(short npdCodSec, String ctpCodigo, String cecCodigo, String cpersonaNroAdm, String cplanillaMesProceso, short nplanillaNumProceso) {
        this.npdCodSec = npdCodSec;
        this.ctpCodigo = ctpCodigo;
        this.cecCodigo = cecCodigo;
        this.cpersonaNroAdm = cpersonaNroAdm;
        this.cplanillaMesProceso = cplanillaMesProceso;
        this.nplanillaNumProceso = nplanillaNumProceso;
    }

    public short getNpdCodSec() {
        return npdCodSec;
    }

    public void setNpdCodSec(short npdCodSec) {
        this.npdCodSec = npdCodSec;
    }

    public String getCtpCodigo() {
        return ctpCodigo;
    }

    public void setCtpCodigo(String ctpCodigo) {
        this.ctpCodigo = ctpCodigo;
    }

    public String getCecCodigo() {
        return cecCodigo;
    }

    public void setCecCodigo(String cecCodigo) {
        this.cecCodigo = cecCodigo;
    }

    public String getCpersonaNroAdm() {
        return cpersonaNroAdm;
    }

    public void setCpersonaNroAdm(String cpersonaNroAdm) {
        this.cpersonaNroAdm = cpersonaNroAdm;
    }

    public String getCplanillaMesProceso() {
        return cplanillaMesProceso;
    }

    public void setCplanillaMesProceso(String cplanillaMesProceso) {
        this.cplanillaMesProceso = cplanillaMesProceso;
    }

    public short getNplanillaNumProceso() {
        return nplanillaNumProceso;
    }

    public void setNplanillaNumProceso(short nplanillaNumProceso) {
        this.nplanillaNumProceso = nplanillaNumProceso;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (int) npdCodSec;
        hash += (ctpCodigo != null ? ctpCodigo.hashCode() : 0);
        hash += (cecCodigo != null ? cecCodigo.hashCode() : 0);
        hash += (cpersonaNroAdm != null ? cpersonaNroAdm.hashCode() : 0);
        hash += (cplanillaMesProceso != null ? cplanillaMesProceso.hashCode() : 0);
        hash += (int) nplanillaNumProceso;
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SiprePlanillaDescuentoPK)) {
            return false;
        }
        SiprePlanillaDescuentoPK other = (SiprePlanillaDescuentoPK) object;
        if (this.npdCodSec != other.npdCodSec) {
            return false;
        }
        if ((this.ctpCodigo == null && other.ctpCodigo != null) || (this.ctpCodigo != null && !this.ctpCodigo.equals(other.ctpCodigo))) {
            return false;
        }
        if ((this.cecCodigo == null && other.cecCodigo != null) || (this.cecCodigo != null && !this.cecCodigo.equals(other.cecCodigo))) {
            return false;
        }
        if ((this.cpersonaNroAdm == null && other.cpersonaNroAdm != null) || (this.cpersonaNroAdm != null && !this.cpersonaNroAdm.equals(other.cpersonaNroAdm))) {
            return false;
        }
        if ((this.cplanillaMesProceso == null && other.cplanillaMesProceso != null) || (this.cplanillaMesProceso != null && !this.cplanillaMesProceso.equals(other.cplanillaMesProceso))) {
            return false;
        }
        if (this.nplanillaNumProceso != other.nplanillaNumProceso) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SiprePlanillaDescuentoPK[ npdCodSec=" + npdCodSec + ", ctpCodigo=" + ctpCodigo + ", cecCodigo=" + cecCodigo + ", cpersonaNroAdm=" + cpersonaNroAdm + ", cplanillaMesProceso=" + cplanillaMesProceso + ", nplanillaNumProceso=" + nplanillaNumProceso + " ]";
    }
    
}
