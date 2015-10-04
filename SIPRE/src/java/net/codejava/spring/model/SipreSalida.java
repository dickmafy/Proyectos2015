/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.util.Date;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_SALIDA")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreSalida.findAll", query = "SELECT s FROM SipreSalida s")})
public class SipreSalida implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreSalidaPK sipreSalidaPK;
    @Column(name = "VSALIDA_DSC")
    private String vsalidaDsc;
    @Column(name = "CSALIDA_ID_ARC")
    private String csalidaIdArc;
    @Column(name = "VSALIDA_RUT")
    private String vsalidaRut;
    @Basic(optional = false)
    @Column(name = "CUSUARIO_CODIGO")
    private String cusuarioCodigo;
    @Column(name = "CSALIDA_USU_MOD")
    private String csalidaUsuMod;
    @Column(name = "DSALIDA_FEC_REG")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dsalidaFecReg;
    @Column(name = "DSALIDA_FEC_MOD")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dsalidaFecMod;

    public SipreSalida() {
    }

    public SipreSalida(SipreSalidaPK sipreSalidaPK) {
        this.sipreSalidaPK = sipreSalidaPK;
    }

    public SipreSalida(SipreSalidaPK sipreSalidaPK, String cusuarioCodigo) {
        this.sipreSalidaPK = sipreSalidaPK;
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public SipreSalida(String csalidaMesProceso, String csalidaEntidad, String csalidaSec) {
        this.sipreSalidaPK = new SipreSalidaPK(csalidaMesProceso, csalidaEntidad, csalidaSec);
    }

    public SipreSalidaPK getSipreSalidaPK() {
        return sipreSalidaPK;
    }

    public void setSipreSalidaPK(SipreSalidaPK sipreSalidaPK) {
        this.sipreSalidaPK = sipreSalidaPK;
    }

    public String getVsalidaDsc() {
        return vsalidaDsc;
    }

    public void setVsalidaDsc(String vsalidaDsc) {
        this.vsalidaDsc = vsalidaDsc;
    }

    public String getCsalidaIdArc() {
        return csalidaIdArc;
    }

    public void setCsalidaIdArc(String csalidaIdArc) {
        this.csalidaIdArc = csalidaIdArc;
    }

    public String getVsalidaRut() {
        return vsalidaRut;
    }

    public void setVsalidaRut(String vsalidaRut) {
        this.vsalidaRut = vsalidaRut;
    }

    public String getCusuarioCodigo() {
        return cusuarioCodigo;
    }

    public void setCusuarioCodigo(String cusuarioCodigo) {
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public String getCsalidaUsuMod() {
        return csalidaUsuMod;
    }

    public void setCsalidaUsuMod(String csalidaUsuMod) {
        this.csalidaUsuMod = csalidaUsuMod;
    }

    public Date getDsalidaFecReg() {
        return dsalidaFecReg;
    }

    public void setDsalidaFecReg(Date dsalidaFecReg) {
        this.dsalidaFecReg = dsalidaFecReg;
    }

    public Date getDsalidaFecMod() {
        return dsalidaFecMod;
    }

    public void setDsalidaFecMod(Date dsalidaFecMod) {
        this.dsalidaFecMod = dsalidaFecMod;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (sipreSalidaPK != null ? sipreSalidaPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreSalida)) {
            return false;
        }
        SipreSalida other = (SipreSalida) object;
        if ((this.sipreSalidaPK == null && other.sipreSalidaPK != null) || (this.sipreSalidaPK != null && !this.sipreSalidaPK.equals(other.sipreSalidaPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreSalida[ sipreSalidaPK=" + sipreSalidaPK + " ]";
    }
    
}
