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
import javax.persistence.JoinColumn;
import javax.persistence.JoinColumns;
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
@Table(name = "SIPRE_PLANILLA_DESCUENTO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SiprePlanillaDescuento.findAll", query = "SELECT s FROM SiprePlanillaDescuento s")})
public class SiprePlanillaDescuento implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SiprePlanillaDescuentoPK siprePlanillaDescuentoPK;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Column(name = "NPD_MTO_EMPLEADO")
    private BigDecimal npdMtoEmpleado;
    @Column(name = "NPD_MTO_EMPLEADOR")
    private BigDecimal npdMtoEmpleador;
    @Column(name = "NPD_NUM_CUOTA")
    private Short npdNumCuota;
    @Column(name = "CPD_NRO_CHEQUE")
    private String cpdNroCheque;
    @Column(name = "NPD_MTO_DESCONTADO")
    private BigDecimal npdMtoDescontado;
    @Column(name = "NPD_NUM_TOT_CUOTA")
    private Short npdNumTotCuota;
    @Column(name = "CPD_USU_MOD")
    private String cpdUsuMod;
    @Column(name = "DPD_FEC_REG")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dpdFecReg;
    @Column(name = "DPD_FEC_MOD")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dpdFecMod;
    @JoinColumn(name = "CUSUARIO_CODIGO", referencedColumnName = "CUSUARIO_CODIGO")
    @ManyToOne(optional = false)
    private SipreUsuario cusuarioCodigo;
    @JoinColumn(name = "CTP_CODIGO", referencedColumnName = "CTP_CODIGO", insertable = false, updatable = false)
    @ManyToOne(optional = false)
    private SipreTipoPlanilla sipreTipoPlanilla;
    @JoinColumns({
        @JoinColumn(name = "CPLANILLA_MES_PROCESO", referencedColumnName = "CPLANILLA_MES_PROCESO", insertable = false, updatable = false),
        @JoinColumn(name = "CPERSONA_NRO_ADM", referencedColumnName = "CPERSONA_NRO_ADM", insertable = false, updatable = false),
        @JoinColumn(name = "NPLANILLA_NUM_PROCESO", referencedColumnName = "NPLANILLA_NUM_PROCESO", insertable = false, updatable = false)})
    @ManyToOne(optional = false)
    private SiprePlanilla siprePlanilla;
    @JoinColumn(name = "CEC_CODIGO", referencedColumnName = "CEC_CODIGO", insertable = false, updatable = false)
    @ManyToOne(optional = false)
    private SipreEntidadCrediticia sipreEntidadCrediticia;
    @JoinColumns({
        @JoinColumn(name = "CDL_CODIGO", referencedColumnName = "CDL_CODIGO"),
        @JoinColumn(name = "CDLD_CODIGO", referencedColumnName = "CDLD_CODIGO"),
        @JoinColumn(name = "CCD_CODIGO", referencedColumnName = "CCD_CODIGO")})
    @ManyToOne
    private SipreConceptoDescuentoLey sipreConceptoDescuentoLey;

    public SiprePlanillaDescuento() {
    }

    public SiprePlanillaDescuento(SiprePlanillaDescuentoPK siprePlanillaDescuentoPK) {
        this.siprePlanillaDescuentoPK = siprePlanillaDescuentoPK;
    }

    public SiprePlanillaDescuento(short npdCodSec, String ctpCodigo, String cecCodigo, String cpersonaNroAdm, String cplanillaMesProceso, short nplanillaNumProceso) {
        this.siprePlanillaDescuentoPK = new SiprePlanillaDescuentoPK(npdCodSec, ctpCodigo, cecCodigo, cpersonaNroAdm, cplanillaMesProceso, nplanillaNumProceso);
    }

    public SiprePlanillaDescuentoPK getSiprePlanillaDescuentoPK() {
        return siprePlanillaDescuentoPK;
    }

    public void setSiprePlanillaDescuentoPK(SiprePlanillaDescuentoPK siprePlanillaDescuentoPK) {
        this.siprePlanillaDescuentoPK = siprePlanillaDescuentoPK;
    }

    public BigDecimal getNpdMtoEmpleado() {
        return npdMtoEmpleado;
    }

    public void setNpdMtoEmpleado(BigDecimal npdMtoEmpleado) {
        this.npdMtoEmpleado = npdMtoEmpleado;
    }

    public BigDecimal getNpdMtoEmpleador() {
        return npdMtoEmpleador;
    }

    public void setNpdMtoEmpleador(BigDecimal npdMtoEmpleador) {
        this.npdMtoEmpleador = npdMtoEmpleador;
    }

    public Short getNpdNumCuota() {
        return npdNumCuota;
    }

    public void setNpdNumCuota(Short npdNumCuota) {
        this.npdNumCuota = npdNumCuota;
    }

    public String getCpdNroCheque() {
        return cpdNroCheque;
    }

    public void setCpdNroCheque(String cpdNroCheque) {
        this.cpdNroCheque = cpdNroCheque;
    }

    public BigDecimal getNpdMtoDescontado() {
        return npdMtoDescontado;
    }

    public void setNpdMtoDescontado(BigDecimal npdMtoDescontado) {
        this.npdMtoDescontado = npdMtoDescontado;
    }

    public Short getNpdNumTotCuota() {
        return npdNumTotCuota;
    }

    public void setNpdNumTotCuota(Short npdNumTotCuota) {
        this.npdNumTotCuota = npdNumTotCuota;
    }

    public String getCpdUsuMod() {
        return cpdUsuMod;
    }

    public void setCpdUsuMod(String cpdUsuMod) {
        this.cpdUsuMod = cpdUsuMod;
    }

    public Date getDpdFecReg() {
        return dpdFecReg;
    }

    public void setDpdFecReg(Date dpdFecReg) {
        this.dpdFecReg = dpdFecReg;
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

    public SiprePlanilla getSiprePlanilla() {
        return siprePlanilla;
    }

    public void setSiprePlanilla(SiprePlanilla siprePlanilla) {
        this.siprePlanilla = siprePlanilla;
    }

    public SipreEntidadCrediticia getSipreEntidadCrediticia() {
        return sipreEntidadCrediticia;
    }

    public void setSipreEntidadCrediticia(SipreEntidadCrediticia sipreEntidadCrediticia) {
        this.sipreEntidadCrediticia = sipreEntidadCrediticia;
    }

    public SipreConceptoDescuentoLey getSipreConceptoDescuentoLey() {
        return sipreConceptoDescuentoLey;
    }

    public void setSipreConceptoDescuentoLey(SipreConceptoDescuentoLey sipreConceptoDescuentoLey) {
        this.sipreConceptoDescuentoLey = sipreConceptoDescuentoLey;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (siprePlanillaDescuentoPK != null ? siprePlanillaDescuentoPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SiprePlanillaDescuento)) {
            return false;
        }
        SiprePlanillaDescuento other = (SiprePlanillaDescuento) object;
        if ((this.siprePlanillaDescuentoPK == null && other.siprePlanillaDescuentoPK != null) || (this.siprePlanillaDescuentoPK != null && !this.siprePlanillaDescuentoPK.equals(other.siprePlanillaDescuentoPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SiprePlanillaDescuento[ siprePlanillaDescuentoPK=" + siprePlanillaDescuentoPK + " ]";
    }
    
}
