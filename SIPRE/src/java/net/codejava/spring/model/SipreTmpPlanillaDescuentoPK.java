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
public class SipreTmpPlanillaDescuentoPK implements Serializable {
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
    @Column(name = "CEC_CODIGO")
    private String cecCodigo;
    @Basic(optional = false)
    @Column(name = "NPD_COD_SEC")
    private short npdCodSec;

    public SipreTmpPlanillaDescuentoPK() {
    }

    public SipreTmpPlanillaDescuentoPK(String cplanillaMesProceso, String cpersonaNroAdm, short nplanillaNumProceso, String ctpCodigo, String cecCodigo, short npdCodSec) {
        this.cplanillaMesProceso = cplanillaMesProceso;
        this.cpersonaNroAdm = cpersonaNroAdm;
        this.nplanillaNumProceso = nplanillaNumProceso;
        this.ctpCodigo = ctpCodigo;
        this.cecCodigo = cecCodigo;
        this.npdCodSec = npdCodSec;
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

    public String getCecCodigo() {
        return cecCodigo;
    }

    public void setCecCodigo(String cecCodigo) {
        this.cecCodigo = cecCodigo;
    }

    public short getNpdCodSec() {
        return npdCodSec;
    }

    public void setNpdCodSec(short npdCodSec) {
        this.npdCodSec = npdCodSec;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cplanillaMesProceso != null ? cplanillaMesProceso.hashCode() : 0);
        hash += (cpersonaNroAdm != null ? cpersonaNroAdm.hashCode() : 0);
        hash += (int) nplanillaNumProceso;
        hash += (ctpCodigo != null ? ctpCodigo.hashCode() : 0);
        hash += (cecCodigo != null ? cecCodigo.hashCode() : 0);
        hash += (int) npdCodSec;
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreTmpPlanillaDescuentoPK)) {
            return false;
        }
        SipreTmpPlanillaDescuentoPK other = (SipreTmpPlanillaDescuentoPK) object;
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
        if ((this.cecCodigo == null && other.cecCodigo != null) || (this.cecCodigo != null && !this.cecCodigo.equals(other.cecCodigo))) {
            return false;
        }
        if (this.npdCodSec != other.npdCodSec) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreTmpPlanillaDescuentoPK[ cplanillaMesProceso=" + cplanillaMesProceso + ", cpersonaNroAdm=" + cpersonaNroAdm + ", nplanillaNumProceso=" + nplanillaNumProceso + ", ctpCodigo=" + ctpCodigo + ", cecCodigo=" + cecCodigo + ", npdCodSec=" + npdCodSec + " ]";
    }
    
}
