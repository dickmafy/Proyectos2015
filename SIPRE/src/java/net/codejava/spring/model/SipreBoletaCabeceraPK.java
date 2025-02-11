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
public class SipreBoletaCabeceraPK implements Serializable {
    @Basic(optional = false)
    @Column(name = "CBC_MES_PROCESO")
    private String cbcMesProceso;
    @Basic(optional = false)
    @Column(name = "NBC_NUM_PROCESO")
    private short nbcNumProceso;
    @Basic(optional = false)
    @Column(name = "CBC_NRO_ADM")
    private String cbcNroAdm;

    public SipreBoletaCabeceraPK() {
    }

    public SipreBoletaCabeceraPK(String cbcMesProceso, short nbcNumProceso, String cbcNroAdm) {
        this.cbcMesProceso = cbcMesProceso;
        this.nbcNumProceso = nbcNumProceso;
        this.cbcNroAdm = cbcNroAdm;
    }

    public String getCbcMesProceso() {
        return cbcMesProceso;
    }

    public void setCbcMesProceso(String cbcMesProceso) {
        this.cbcMesProceso = cbcMesProceso;
    }

    public short getNbcNumProceso() {
        return nbcNumProceso;
    }

    public void setNbcNumProceso(short nbcNumProceso) {
        this.nbcNumProceso = nbcNumProceso;
    }

    public String getCbcNroAdm() {
        return cbcNroAdm;
    }

    public void setCbcNroAdm(String cbcNroAdm) {
        this.cbcNroAdm = cbcNroAdm;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cbcMesProceso != null ? cbcMesProceso.hashCode() : 0);
        hash += (int) nbcNumProceso;
        hash += (cbcNroAdm != null ? cbcNroAdm.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreBoletaCabeceraPK)) {
            return false;
        }
        SipreBoletaCabeceraPK other = (SipreBoletaCabeceraPK) object;
        if ((this.cbcMesProceso == null && other.cbcMesProceso != null) || (this.cbcMesProceso != null && !this.cbcMesProceso.equals(other.cbcMesProceso))) {
            return false;
        }
        if (this.nbcNumProceso != other.nbcNumProceso) {
            return false;
        }
        if ((this.cbcNroAdm == null && other.cbcNroAdm != null) || (this.cbcNroAdm != null && !this.cbcNroAdm.equals(other.cbcNroAdm))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreBoletaCabeceraPK[ cbcMesProceso=" + cbcMesProceso + ", nbcNumProceso=" + nbcNumProceso + ", cbcNroAdm=" + cbcNroAdm + " ]";
    }
    
}
