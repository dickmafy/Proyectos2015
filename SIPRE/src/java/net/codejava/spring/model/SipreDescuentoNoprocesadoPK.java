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
public class SipreDescuentoNoprocesadoPK implements Serializable {
    @Basic(optional = false)
    @Column(name = "CDN_MES_PROCESO")
    private String cdnMesProceso;
    @Basic(optional = false)
    @Column(name = "CPERSONA_NRO_ADM")
    private String cpersonaNroAdm;
    @Basic(optional = false)
    @Column(name = "NDN_NUM_PROCESO")
    private short ndnNumProceso;
    @Basic(optional = false)
    @Column(name = "CTP_CODIGO")
    private String ctpCodigo;
    @Basic(optional = false)
    @Column(name = "CEC_CODIGO")
    private String cecCodigo;
    @Basic(optional = false)
    @Column(name = "NDN_COD_SEC")
    private short ndnCodSec;

    public SipreDescuentoNoprocesadoPK() {
    }

    public SipreDescuentoNoprocesadoPK(String cdnMesProceso, String cpersonaNroAdm, short ndnNumProceso, String ctpCodigo, String cecCodigo, short ndnCodSec) {
        this.cdnMesProceso = cdnMesProceso;
        this.cpersonaNroAdm = cpersonaNroAdm;
        this.ndnNumProceso = ndnNumProceso;
        this.ctpCodigo = ctpCodigo;
        this.cecCodigo = cecCodigo;
        this.ndnCodSec = ndnCodSec;
    }

    public String getCdnMesProceso() {
        return cdnMesProceso;
    }

    public void setCdnMesProceso(String cdnMesProceso) {
        this.cdnMesProceso = cdnMesProceso;
    }

    public String getCpersonaNroAdm() {
        return cpersonaNroAdm;
    }

    public void setCpersonaNroAdm(String cpersonaNroAdm) {
        this.cpersonaNroAdm = cpersonaNroAdm;
    }

    public short getNdnNumProceso() {
        return ndnNumProceso;
    }

    public void setNdnNumProceso(short ndnNumProceso) {
        this.ndnNumProceso = ndnNumProceso;
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

    public short getNdnCodSec() {
        return ndnCodSec;
    }

    public void setNdnCodSec(short ndnCodSec) {
        this.ndnCodSec = ndnCodSec;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cdnMesProceso != null ? cdnMesProceso.hashCode() : 0);
        hash += (cpersonaNroAdm != null ? cpersonaNroAdm.hashCode() : 0);
        hash += (int) ndnNumProceso;
        hash += (ctpCodigo != null ? ctpCodigo.hashCode() : 0);
        hash += (cecCodigo != null ? cecCodigo.hashCode() : 0);
        hash += (int) ndnCodSec;
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreDescuentoNoprocesadoPK)) {
            return false;
        }
        SipreDescuentoNoprocesadoPK other = (SipreDescuentoNoprocesadoPK) object;
        if ((this.cdnMesProceso == null && other.cdnMesProceso != null) || (this.cdnMesProceso != null && !this.cdnMesProceso.equals(other.cdnMesProceso))) {
            return false;
        }
        if ((this.cpersonaNroAdm == null && other.cpersonaNroAdm != null) || (this.cpersonaNroAdm != null && !this.cpersonaNroAdm.equals(other.cpersonaNroAdm))) {
            return false;
        }
        if (this.ndnNumProceso != other.ndnNumProceso) {
            return false;
        }
        if ((this.ctpCodigo == null && other.ctpCodigo != null) || (this.ctpCodigo != null && !this.ctpCodigo.equals(other.ctpCodigo))) {
            return false;
        }
        if ((this.cecCodigo == null && other.cecCodigo != null) || (this.cecCodigo != null && !this.cecCodigo.equals(other.cecCodigo))) {
            return false;
        }
        if (this.ndnCodSec != other.ndnCodSec) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreDescuentoNoprocesadoPK[ cdnMesProceso=" + cdnMesProceso + ", cpersonaNroAdm=" + cpersonaNroAdm + ", ndnNumProceso=" + ndnNumProceso + ", ctpCodigo=" + ctpCodigo + ", cecCodigo=" + cecCodigo + ", ndnCodSec=" + ndnCodSec + " ]";
    }
    
}
