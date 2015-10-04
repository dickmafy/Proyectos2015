/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.math.BigDecimal;
import java.util.Date;
import javax.persistence.Basic;
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
@Table(name = "SIPRE_EXCEPCION")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreExcepcion.findAll", query = "SELECT s FROM SipreExcepcion s")})
public class SipreExcepcion implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreExcepcionPK sipreExcepcionPK;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Column(name = "NEXCEPCION_MTO")
    private BigDecimal nexcepcionMto;
    @Column(name = "CEXCEPCION_EST")
    private Character cexcepcionEst;
    @Basic(optional = false)
    @Column(name = "CUSUARIO_CODIGO")
    private String cusuarioCodigo;
    @Column(name = "CEXCEPCION_USU_MOD")
    private String cexcepcionUsuMod;
    @Column(name = "DEXCEPCION_FEC_REG")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dexcepcionFecReg;
    @Column(name = "DEXCEPCION_FEC_MOD")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dexcepcionFecMod;
    @JoinColumn(name = "CTP_CODIGO", referencedColumnName = "CTP_CODIGO", insertable = false, updatable = false)
    @ManyToOne(optional = false)
    private SipreTipoPlanilla sipreTipoPlanilla;

    public SipreExcepcion() {
    }

    public SipreExcepcion(SipreExcepcionPK sipreExcepcionPK) {
        this.sipreExcepcionPK = sipreExcepcionPK;
    }

    public SipreExcepcion(SipreExcepcionPK sipreExcepcionPK, String cusuarioCodigo) {
        this.sipreExcepcionPK = sipreExcepcionPK;
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public SipreExcepcion(String cpersonaNroAdm, String ctpCodigo, String cciCodigo) {
        this.sipreExcepcionPK = new SipreExcepcionPK(cpersonaNroAdm, ctpCodigo, cciCodigo);
    }

    public SipreExcepcionPK getSipreExcepcionPK() {
        return sipreExcepcionPK;
    }

    public void setSipreExcepcionPK(SipreExcepcionPK sipreExcepcionPK) {
        this.sipreExcepcionPK = sipreExcepcionPK;
    }

    public BigDecimal getNexcepcionMto() {
        return nexcepcionMto;
    }

    public void setNexcepcionMto(BigDecimal nexcepcionMto) {
        this.nexcepcionMto = nexcepcionMto;
    }

    public Character getCexcepcionEst() {
        return cexcepcionEst;
    }

    public void setCexcepcionEst(Character cexcepcionEst) {
        this.cexcepcionEst = cexcepcionEst;
    }

    public String getCusuarioCodigo() {
        return cusuarioCodigo;
    }

    public void setCusuarioCodigo(String cusuarioCodigo) {
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public String getCexcepcionUsuMod() {
        return cexcepcionUsuMod;
    }

    public void setCexcepcionUsuMod(String cexcepcionUsuMod) {
        this.cexcepcionUsuMod = cexcepcionUsuMod;
    }

    public Date getDexcepcionFecReg() {
        return dexcepcionFecReg;
    }

    public void setDexcepcionFecReg(Date dexcepcionFecReg) {
        this.dexcepcionFecReg = dexcepcionFecReg;
    }

    public Date getDexcepcionFecMod() {
        return dexcepcionFecMod;
    }

    public void setDexcepcionFecMod(Date dexcepcionFecMod) {
        this.dexcepcionFecMod = dexcepcionFecMod;
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
        hash += (sipreExcepcionPK != null ? sipreExcepcionPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreExcepcion)) {
            return false;
        }
        SipreExcepcion other = (SipreExcepcion) object;
        if ((this.sipreExcepcionPK == null && other.sipreExcepcionPK != null) || (this.sipreExcepcionPK != null && !this.sipreExcepcionPK.equals(other.sipreExcepcionPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreExcepcion[ sipreExcepcionPK=" + sipreExcepcionPK + " ]";
    }
    
}
