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
public class SipreTmpBonificacionPK implements Serializable {
    @Basic(optional = false)
    @Column(name = "CPERSONA_NRO_ADM")
    private String cpersonaNroAdm;
    @Basic(optional = false)
    @Column(name = "CCI_CODIGO")
    private String cciCodigo;
    @Basic(optional = false)
    @Column(name = "CTB_MES_BONIFICACION")
    private String ctbMesBonificacion;
    @Basic(optional = false)
    @Column(name = "MES_PROCESO")
    private String mesProceso;

    public SipreTmpBonificacionPK() {
    }

    public SipreTmpBonificacionPK(String cpersonaNroAdm, String cciCodigo, String ctbMesBonificacion, String mesProceso) {
        this.cpersonaNroAdm = cpersonaNroAdm;
        this.cciCodigo = cciCodigo;
        this.ctbMesBonificacion = ctbMesBonificacion;
        this.mesProceso = mesProceso;
    }

    public String getCpersonaNroAdm() {
        return cpersonaNroAdm;
    }

    public void setCpersonaNroAdm(String cpersonaNroAdm) {
        this.cpersonaNroAdm = cpersonaNroAdm;
    }

    public String getCciCodigo() {
        return cciCodigo;
    }

    public void setCciCodigo(String cciCodigo) {
        this.cciCodigo = cciCodigo;
    }

    public String getCtbMesBonificacion() {
        return ctbMesBonificacion;
    }

    public void setCtbMesBonificacion(String ctbMesBonificacion) {
        this.ctbMesBonificacion = ctbMesBonificacion;
    }

    public String getMesProceso() {
        return mesProceso;
    }

    public void setMesProceso(String mesProceso) {
        this.mesProceso = mesProceso;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cpersonaNroAdm != null ? cpersonaNroAdm.hashCode() : 0);
        hash += (cciCodigo != null ? cciCodigo.hashCode() : 0);
        hash += (ctbMesBonificacion != null ? ctbMesBonificacion.hashCode() : 0);
        hash += (mesProceso != null ? mesProceso.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreTmpBonificacionPK)) {
            return false;
        }
        SipreTmpBonificacionPK other = (SipreTmpBonificacionPK) object;
        if ((this.cpersonaNroAdm == null && other.cpersonaNroAdm != null) || (this.cpersonaNroAdm != null && !this.cpersonaNroAdm.equals(other.cpersonaNroAdm))) {
            return false;
        }
        if ((this.cciCodigo == null && other.cciCodigo != null) || (this.cciCodigo != null && !this.cciCodigo.equals(other.cciCodigo))) {
            return false;
        }
        if ((this.ctbMesBonificacion == null && other.ctbMesBonificacion != null) || (this.ctbMesBonificacion != null && !this.ctbMesBonificacion.equals(other.ctbMesBonificacion))) {
            return false;
        }
        if ((this.mesProceso == null && other.mesProceso != null) || (this.mesProceso != null && !this.mesProceso.equals(other.mesProceso))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreTmpBonificacionPK[ cpersonaNroAdm=" + cpersonaNroAdm + ", cciCodigo=" + cciCodigo + ", ctbMesBonificacion=" + ctbMesBonificacion + ", mesProceso=" + mesProceso + " ]";
    }
    
}
