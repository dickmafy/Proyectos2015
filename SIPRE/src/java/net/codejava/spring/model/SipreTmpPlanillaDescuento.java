/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.math.BigDecimal;
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
@Table(name = "SIPRE_TMP_PLANILLA_DESCUENTO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreTmpPlanillaDescuento.findAll", query = "SELECT s FROM SipreTmpPlanillaDescuento s")})
public class SipreTmpPlanillaDescuento implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreTmpPlanillaDescuentoPK sipreTmpPlanillaDescuentoPK;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Column(name = "NTPD_MTO_EMPLEADO")
    private BigDecimal ntpdMtoEmpleado;
    @Column(name = "NTPD_MTO_EMPLEADOR")
    private BigDecimal ntpdMtoEmpleador;
    @Column(name = "NTPD_NUM_CUOTA")
    private Short ntpdNumCuota;
    @Column(name = "CTPD_NRO_CHEQUE")
    private String ctpdNroCheque;
    @Column(name = "NTPD_MTO_DESCONTADO")
    private BigDecimal ntpdMtoDescontado;
    @Column(name = "NTPD_NUM_TOT_CUOTA")
    private Short ntpdNumTotCuota;
    @JoinColumns({
        @JoinColumn(name = "CDL_CODIGO", referencedColumnName = "CDL_CODIGO"),
        @JoinColumn(name = "CDLD_CODIGO", referencedColumnName = "CDLD_CODIGO"),
        @JoinColumn(name = "CCD_CODIGO", referencedColumnName = "CCD_CODIGO")})
    @ManyToOne
    private SipreConceptoDescuentoLey sipreConceptoDescuentoLey;

    public SipreTmpPlanillaDescuento() {
    }

    public SipreTmpPlanillaDescuento(SipreTmpPlanillaDescuentoPK sipreTmpPlanillaDescuentoPK) {
        this.sipreTmpPlanillaDescuentoPK = sipreTmpPlanillaDescuentoPK;
    }

    public SipreTmpPlanillaDescuento(String cplanillaMesProceso, String cpersonaNroAdm, short nplanillaNumProceso, String ctpCodigo, String cecCodigo, short npdCodSec) {
        this.sipreTmpPlanillaDescuentoPK = new SipreTmpPlanillaDescuentoPK(cplanillaMesProceso, cpersonaNroAdm, nplanillaNumProceso, ctpCodigo, cecCodigo, npdCodSec);
    }

    public SipreTmpPlanillaDescuentoPK getSipreTmpPlanillaDescuentoPK() {
        return sipreTmpPlanillaDescuentoPK;
    }

    public void setSipreTmpPlanillaDescuentoPK(SipreTmpPlanillaDescuentoPK sipreTmpPlanillaDescuentoPK) {
        this.sipreTmpPlanillaDescuentoPK = sipreTmpPlanillaDescuentoPK;
    }

    public BigDecimal getNtpdMtoEmpleado() {
        return ntpdMtoEmpleado;
    }

    public void setNtpdMtoEmpleado(BigDecimal ntpdMtoEmpleado) {
        this.ntpdMtoEmpleado = ntpdMtoEmpleado;
    }

    public BigDecimal getNtpdMtoEmpleador() {
        return ntpdMtoEmpleador;
    }

    public void setNtpdMtoEmpleador(BigDecimal ntpdMtoEmpleador) {
        this.ntpdMtoEmpleador = ntpdMtoEmpleador;
    }

    public Short getNtpdNumCuota() {
        return ntpdNumCuota;
    }

    public void setNtpdNumCuota(Short ntpdNumCuota) {
        this.ntpdNumCuota = ntpdNumCuota;
    }

    public String getCtpdNroCheque() {
        return ctpdNroCheque;
    }

    public void setCtpdNroCheque(String ctpdNroCheque) {
        this.ctpdNroCheque = ctpdNroCheque;
    }

    public BigDecimal getNtpdMtoDescontado() {
        return ntpdMtoDescontado;
    }

    public void setNtpdMtoDescontado(BigDecimal ntpdMtoDescontado) {
        this.ntpdMtoDescontado = ntpdMtoDescontado;
    }

    public Short getNtpdNumTotCuota() {
        return ntpdNumTotCuota;
    }

    public void setNtpdNumTotCuota(Short ntpdNumTotCuota) {
        this.ntpdNumTotCuota = ntpdNumTotCuota;
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
        hash += (sipreTmpPlanillaDescuentoPK != null ? sipreTmpPlanillaDescuentoPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreTmpPlanillaDescuento)) {
            return false;
        }
        SipreTmpPlanillaDescuento other = (SipreTmpPlanillaDescuento) object;
        if ((this.sipreTmpPlanillaDescuentoPK == null && other.sipreTmpPlanillaDescuentoPK != null) || (this.sipreTmpPlanillaDescuentoPK != null && !this.sipreTmpPlanillaDescuentoPK.equals(other.sipreTmpPlanillaDescuentoPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreTmpPlanillaDescuento[ sipreTmpPlanillaDescuentoPK=" + sipreTmpPlanillaDescuentoPK + " ]";
    }
    
}
