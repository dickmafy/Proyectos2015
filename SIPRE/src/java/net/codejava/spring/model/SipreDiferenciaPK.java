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
public class SipreDiferenciaPK implements Serializable {
    @Basic(optional = false)
    @Column(name = "CDIFERENCIA_MES_PROCESO")
    private String cdiferenciaMesProceso;
    @Basic(optional = false)
    @Column(name = "NDIFERENCIA_NUM_PROCESO")
    private short ndiferenciaNumProceso;

    public SipreDiferenciaPK() {
    }

    public SipreDiferenciaPK(String cdiferenciaMesProceso, short ndiferenciaNumProceso) {
        this.cdiferenciaMesProceso = cdiferenciaMesProceso;
        this.ndiferenciaNumProceso = ndiferenciaNumProceso;
    }

    public String getCdiferenciaMesProceso() {
        return cdiferenciaMesProceso;
    }

    public void setCdiferenciaMesProceso(String cdiferenciaMesProceso) {
        this.cdiferenciaMesProceso = cdiferenciaMesProceso;
    }

    public short getNdiferenciaNumProceso() {
        return ndiferenciaNumProceso;
    }

    public void setNdiferenciaNumProceso(short ndiferenciaNumProceso) {
        this.ndiferenciaNumProceso = ndiferenciaNumProceso;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cdiferenciaMesProceso != null ? cdiferenciaMesProceso.hashCode() : 0);
        hash += (int) ndiferenciaNumProceso;
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreDiferenciaPK)) {
            return false;
        }
        SipreDiferenciaPK other = (SipreDiferenciaPK) object;
        if ((this.cdiferenciaMesProceso == null && other.cdiferenciaMesProceso != null) || (this.cdiferenciaMesProceso != null && !this.cdiferenciaMesProceso.equals(other.cdiferenciaMesProceso))) {
            return false;
        }
        if (this.ndiferenciaNumProceso != other.ndiferenciaNumProceso) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreDiferenciaPK[ cdiferenciaMesProceso=" + cdiferenciaMesProceso + ", ndiferenciaNumProceso=" + ndiferenciaNumProceso + " ]";
    }
    
}
