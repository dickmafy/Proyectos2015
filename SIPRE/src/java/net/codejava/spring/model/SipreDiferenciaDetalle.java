/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import javax.persistence.Column;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.JoinColumns;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_DIFERENCIA_DETALLE")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreDiferenciaDetalle.findAll", query = "SELECT s FROM SipreDiferenciaDetalle s")})
public class SipreDiferenciaDetalle implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreDiferenciaDetallePK sipreDiferenciaDetallePK;
    @Column(name = "CDD_ESTADO")
    private Character cddEstado;
    @Column(name = "VDD_OBS")
    private String vddObs;
    @JoinColumns({
        @JoinColumn(name = "CDIFERENCIA_MES_PROCESO", referencedColumnName = "CDIFERENCIA_MES_PROCESO", insertable = false, updatable = false),
        @JoinColumn(name = "NDIFERENCIA_NUM_PROCESO", referencedColumnName = "NDIFERENCIA_NUM_PROCESO", insertable = false, updatable = false)})
    @ManyToOne(optional = false)
    private SipreDiferencia sipreDiferencia;

    public SipreDiferenciaDetalle() {
    }

    public SipreDiferenciaDetalle(SipreDiferenciaDetallePK sipreDiferenciaDetallePK) {
        this.sipreDiferenciaDetallePK = sipreDiferenciaDetallePK;
    }

    public SipreDiferenciaDetalle(String cdiferenciaMesProceso, short ndiferenciaNumProceso, String cpersonaNroAdm) {
        this.sipreDiferenciaDetallePK = new SipreDiferenciaDetallePK(cdiferenciaMesProceso, ndiferenciaNumProceso, cpersonaNroAdm);
    }

    public SipreDiferenciaDetallePK getSipreDiferenciaDetallePK() {
        return sipreDiferenciaDetallePK;
    }

    public void setSipreDiferenciaDetallePK(SipreDiferenciaDetallePK sipreDiferenciaDetallePK) {
        this.sipreDiferenciaDetallePK = sipreDiferenciaDetallePK;
    }

    public Character getCddEstado() {
        return cddEstado;
    }

    public void setCddEstado(Character cddEstado) {
        this.cddEstado = cddEstado;
    }

    public String getVddObs() {
        return vddObs;
    }

    public void setVddObs(String vddObs) {
        this.vddObs = vddObs;
    }

    public SipreDiferencia getSipreDiferencia() {
        return sipreDiferencia;
    }

    public void setSipreDiferencia(SipreDiferencia sipreDiferencia) {
        this.sipreDiferencia = sipreDiferencia;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (sipreDiferenciaDetallePK != null ? sipreDiferenciaDetallePK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreDiferenciaDetalle)) {
            return false;
        }
        SipreDiferenciaDetalle other = (SipreDiferenciaDetalle) object;
        if ((this.sipreDiferenciaDetallePK == null && other.sipreDiferenciaDetallePK != null) || (this.sipreDiferenciaDetallePK != null && !this.sipreDiferenciaDetallePK.equals(other.sipreDiferenciaDetallePK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreDiferenciaDetalle[ sipreDiferenciaDetallePK=" + sipreDiferenciaDetallePK + " ]";
    }
    
}
