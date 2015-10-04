/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.util.Date;
import javax.persistence.Column;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
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
@Table(name = "SIPRE_PLANILLA_OTRO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SiprePlanillaOtro.findAll", query = "SELECT s FROM SiprePlanillaOtro s")})
public class SiprePlanillaOtro implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SiprePlanillaOtroPK siprePlanillaOtroPK;
    @Column(name = "CPO_EST")
    private Character cpoEst;
    @Column(name = "CPO_USU_MOD")
    private String cpoUsuMod;
    @Column(name = "DPO_FEC_REG")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dpoFecReg;
    @Column(name = "DPD_FEC_MOD")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dpdFecMod;
    @JoinColumn(name = "CUSUARIO_CODIGO", referencedColumnName = "CUSUARIO_CODIGO")
    @ManyToOne(optional = false)
    private SipreUsuario cusuarioCodigo;
    @JoinColumn(name = "CTP_CODIGO", referencedColumnName = "CTP_CODIGO", insertable = false, updatable = false)
    @ManyToOne(optional = false)
    private SipreTipoPlanilla sipreTipoPlanilla;

    public SiprePlanillaOtro() {
    }

    public SiprePlanillaOtro(SiprePlanillaOtroPK siprePlanillaOtroPK) {
        this.siprePlanillaOtroPK = siprePlanillaOtroPK;
    }

    public SiprePlanillaOtro(String cpersonaNroAdm, String ctpCodigo) {
        this.siprePlanillaOtroPK = new SiprePlanillaOtroPK(cpersonaNroAdm, ctpCodigo);
    }

    public SiprePlanillaOtroPK getSiprePlanillaOtroPK() {
        return siprePlanillaOtroPK;
    }

    public void setSiprePlanillaOtroPK(SiprePlanillaOtroPK siprePlanillaOtroPK) {
        this.siprePlanillaOtroPK = siprePlanillaOtroPK;
    }

    public Character getCpoEst() {
        return cpoEst;
    }

    public void setCpoEst(Character cpoEst) {
        this.cpoEst = cpoEst;
    }

    public String getCpoUsuMod() {
        return cpoUsuMod;
    }

    public void setCpoUsuMod(String cpoUsuMod) {
        this.cpoUsuMod = cpoUsuMod;
    }

    public Date getDpoFecReg() {
        return dpoFecReg;
    }

    public void setDpoFecReg(Date dpoFecReg) {
        this.dpoFecReg = dpoFecReg;
    }

    public Date getDpdFecMod() {
        return dpdFecMod;
    }

    public void setDpdFecMod(Date dpdFecMod) {
        this.dpdFecMod = dpdFecMod;
    }

    public SipreUsuario getCusuarioCodigo() {
        return cusuarioCodigo;
    }

    public void setCusuarioCodigo(SipreUsuario cusuarioCodigo) {
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public SipreTipoPlanilla getSipreTipoPlanilla() {
        return sipreTipoPlanilla;
    }

    public void setSipreTipoPlanilla(SipreTipoPlanilla sipreTipoPlanilla) {
        this.sipreTipoPlanilla = sipreTipoPlanilla;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (siprePlanillaOtroPK != null ? siprePlanillaOtroPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SiprePlanillaOtro)) {
            return false;
        }
        SiprePlanillaOtro other = (SiprePlanillaOtro) object;
        if ((this.siprePlanillaOtroPK == null && other.siprePlanillaOtroPK != null) || (this.siprePlanillaOtroPK != null && !this.siprePlanillaOtroPK.equals(other.siprePlanillaOtroPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SiprePlanillaOtro[ siprePlanillaOtroPK=" + siprePlanillaOtroPK + " ]";
    }
    
}
