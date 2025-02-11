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
public class SiprePlanillaAdicionalPK implements Serializable {
    @Basic(optional = false)
    @Column(name = "CPA_MES_ADICIONAL")
    private String cpaMesAdicional;
    @Basic(optional = false)
    @Column(name = "CCI_CODIGO")
    private String cciCodigo;
    @Basic(optional = false)
    @Column(name = "CTP_CODIGO")
    private String ctpCodigo;
    @Basic(optional = false)
    @Column(name = "CPERSONA_NRO_ADM")
    private String cpersonaNroAdm;
    @Basic(optional = false)
    @Column(name = "CPLANILLA_MES_PROCESO")
    private String cplanillaMesProceso;
    @Basic(optional = false)
    @Column(name = "NPLANILLA_NUM_PROCESO")
    private short nplanillaNumProceso;

    public SiprePlanillaAdicionalPK() {
    }

    public SiprePlanillaAdicionalPK(String cpaMesAdicional, String cciCodigo, String ctpCodigo, String cpersonaNroAdm, String cplanillaMesProceso, short nplanillaNumProceso) {
        this.cpaMesAdicional = cpaMesAdicional;
        this.cciCodigo = cciCodigo;
        this.ctpCodigo = ctpCodigo;
        this.cpersonaNroAdm = cpersonaNroAdm;
        this.cplanillaMesProceso = cplanillaMesProceso;
        this.nplanillaNumProceso = nplanillaNumProceso;
    }

    public String getCpaMesAdicional() {
        return cpaMesAdicional;
    }

    public void setCpaMesAdicional(String cpaMesAdicional) {
        this.cpaMesAdicional = cpaMesAdicional;
    }

    public String getCciCodigo() {
        return cciCodigo;
    }

    public void setCciCodigo(String cciCodigo) {
        this.cciCodigo = cciCodigo;
    }

    public String getCtpCodigo() {
        return ctpCodigo;
    }

    public void setCtpCodigo(String ctpCodigo) {
        this.ctpCodigo = ctpCodigo;
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
        hash += (cpaMesAdicional != null ? cpaMesAdicional.hashCode() : 0);
        hash += (cciCodigo != null ? cciCodigo.hashCode() : 0);
        hash += (ctpCodigo != null ? ctpCodigo.hashCode() : 0);
        hash += (cpersonaNroAdm != null ? cpersonaNroAdm.hashCode() : 0);
        hash += (cplanillaMesProceso != null ? cplanillaMesProceso.hashCode() : 0);
        hash += (int) nplanillaNumProceso;
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SiprePlanillaAdicionalPK)) {
            return false;
        }
        SiprePlanillaAdicionalPK other = (SiprePlanillaAdicionalPK) object;
        if ((this.cpaMesAdicional == null && other.cpaMesAdicional != null) || (this.cpaMesAdicional != null && !this.cpaMesAdicional.equals(other.cpaMesAdicional))) {
            return false;
        }
        if ((this.cciCodigo == null && other.cciCodigo != null) || (this.cciCodigo != null && !this.cciCodigo.equals(other.cciCodigo))) {
            return false;
        }
        if ((this.ctpCodigo == null && other.ctpCodigo != null) || (this.ctpCodigo != null && !this.ctpCodigo.equals(other.ctpCodigo))) {
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
        return "net.codejava.spring.model.SiprePlanillaAdicionalPK[ cpaMesAdicional=" + cpaMesAdicional + ", cciCodigo=" + cciCodigo + ", ctpCodigo=" + ctpCodigo + ", cpersonaNroAdm=" + cpersonaNroAdm + ", cplanillaMesProceso=" + cplanillaMesProceso + ", nplanillaNumProceso=" + nplanillaNumProceso + " ]";
    }
    
}
