/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.math.BigDecimal;
import java.util.Date;
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
@Table(name = "SIPRE_CALCULO_QUINTA_CATEGORIA")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreCalculoQuintaCategoria.findAll", query = "SELECT s FROM SipreCalculoQuintaCategoria s")})
public class SipreCalculoQuintaCategoria implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreCalculoQuintaCategoriaPK sipreCalculoQuintaCategoriaPK;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Column(name = "NCQC_REMUN")
    private BigDecimal ncqcRemun;
    @Column(name = "NCQC_BONIF")
    private BigDecimal ncqcBonif;
    @Column(name = "NCQC_COMB")
    private BigDecimal ncqcComb;
    @Column(name = "NCQC_ADSTO")
    private BigDecimal ncqcAdsto;
    @Column(name = "NCQC_REING")
    private BigDecimal ncqcReing;
    @Column(name = "NCQC_IMP_RENTA")
    private BigDecimal ncqcImpRenta;
    @Column(name = "CCQC_TIPO_PERSONA")
    private Character ccqcTipoPersona;
    @Column(name = "CUSUARIO_CODIGO")
    private String cusuarioCodigo;
    @Column(name = "CQC_USU_MOD")
    private String cqcUsuMod;
    @Column(name = "DCQC_FEC_REG")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dcqcFecReg;
    @Column(name = "DCQC_FEC_MOD")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dcqcFecMod;

    public SipreCalculoQuintaCategoria() {
    }

    public SipreCalculoQuintaCategoria(SipreCalculoQuintaCategoriaPK sipreCalculoQuintaCategoriaPK) {
        this.sipreCalculoQuintaCategoriaPK = sipreCalculoQuintaCategoriaPK;
    }

    public SipreCalculoQuintaCategoria(String cpersonaNroAdm, String cplanillaMesProceso, short nplanillaNumProceso) {
        this.sipreCalculoQuintaCategoriaPK = new SipreCalculoQuintaCategoriaPK(cpersonaNroAdm, cplanillaMesProceso, nplanillaNumProceso);
    }

    public SipreCalculoQuintaCategoriaPK getSipreCalculoQuintaCategoriaPK() {
        return sipreCalculoQuintaCategoriaPK;
    }

    public void setSipreCalculoQuintaCategoriaPK(SipreCalculoQuintaCategoriaPK sipreCalculoQuintaCategoriaPK) {
        this.sipreCalculoQuintaCategoriaPK = sipreCalculoQuintaCategoriaPK;
    }

    public BigDecimal getNcqcRemun() {
        return ncqcRemun;
    }

    public void setNcqcRemun(BigDecimal ncqcRemun) {
        this.ncqcRemun = ncqcRemun;
    }

    public BigDecimal getNcqcBonif() {
        return ncqcBonif;
    }

    public void setNcqcBonif(BigDecimal ncqcBonif) {
        this.ncqcBonif = ncqcBonif;
    }

    public BigDecimal getNcqcComb() {
        return ncqcComb;
    }

    public void setNcqcComb(BigDecimal ncqcComb) {
        this.ncqcComb = ncqcComb;
    }

    public BigDecimal getNcqcAdsto() {
        return ncqcAdsto;
    }

    public void setNcqcAdsto(BigDecimal ncqcAdsto) {
        this.ncqcAdsto = ncqcAdsto;
    }

    public BigDecimal getNcqcReing() {
        return ncqcReing;
    }

    public void setNcqcReing(BigDecimal ncqcReing) {
        this.ncqcReing = ncqcReing;
    }

    public BigDecimal getNcqcImpRenta() {
        return ncqcImpRenta;
    }

    public void setNcqcImpRenta(BigDecimal ncqcImpRenta) {
        this.ncqcImpRenta = ncqcImpRenta;
    }

    public Character getCcqcTipoPersona() {
        return ccqcTipoPersona;
    }

    public void setCcqcTipoPersona(Character ccqcTipoPersona) {
        this.ccqcTipoPersona = ccqcTipoPersona;
    }

    public String getCusuarioCodigo() {
        return cusuarioCodigo;
    }

    public void setCusuarioCodigo(String cusuarioCodigo) {
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public String getCqcUsuMod() {
        return cqcUsuMod;
    }

    public void setCqcUsuMod(String cqcUsuMod) {
        this.cqcUsuMod = cqcUsuMod;
    }

    public Date getDcqcFecReg() {
        return dcqcFecReg;
    }

    public void setDcqcFecReg(Date dcqcFecReg) {
        this.dcqcFecReg = dcqcFecReg;
    }

    public Date getDcqcFecMod() {
        return dcqcFecMod;
    }

    public void setDcqcFecMod(Date dcqcFecMod) {
        this.dcqcFecMod = dcqcFecMod;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (sipreCalculoQuintaCategoriaPK != null ? sipreCalculoQuintaCategoriaPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreCalculoQuintaCategoria)) {
            return false;
        }
        SipreCalculoQuintaCategoria other = (SipreCalculoQuintaCategoria) object;
        if ((this.sipreCalculoQuintaCategoriaPK == null && other.sipreCalculoQuintaCategoriaPK != null) || (this.sipreCalculoQuintaCategoriaPK != null && !this.sipreCalculoQuintaCategoriaPK.equals(other.sipreCalculoQuintaCategoriaPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreCalculoQuintaCategoria[ sipreCalculoQuintaCategoriaPK=" + sipreCalculoQuintaCategoriaPK + " ]";
    }
    
}
