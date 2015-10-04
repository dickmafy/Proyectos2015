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
@Table(name = "SIPRE_DESCUENTO_NOPROCESADO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreDescuentoNoprocesado.findAll", query = "SELECT s FROM SipreDescuentoNoprocesado s")})
public class SipreDescuentoNoprocesado implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreDescuentoNoprocesadoPK sipreDescuentoNoprocesadoPK;
    @Column(name = "CDN_NRO_CHEQUE")
    private String cdnNroCheque;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Column(name = "NDN_MONTO")
    private BigDecimal ndnMonto;
    @Column(name = "CDN_IND_TIPO")
    private Character cdnIndTipo;
    @JoinColumn(name = "CTP_CODIGO", referencedColumnName = "CTP_CODIGO", insertable = false, updatable = false)
    @ManyToOne(optional = false)
    private SipreTipoPlanilla sipreTipoPlanilla;
    @JoinColumn(name = "CEC_CODIGO", referencedColumnName = "CEC_CODIGO", insertable = false, updatable = false)
    @ManyToOne(optional = false)
    private SipreEntidadCrediticia sipreEntidadCrediticia;

    public SipreDescuentoNoprocesado() {
    }

    public SipreDescuentoNoprocesado(SipreDescuentoNoprocesadoPK sipreDescuentoNoprocesadoPK) {
        this.sipreDescuentoNoprocesadoPK = sipreDescuentoNoprocesadoPK;
    }

    public SipreDescuentoNoprocesado(String cdnMesProceso, String cpersonaNroAdm, short ndnNumProceso, String ctpCodigo, String cecCodigo, short ndnCodSec) {
        this.sipreDescuentoNoprocesadoPK = new SipreDescuentoNoprocesadoPK(cdnMesProceso, cpersonaNroAdm, ndnNumProceso, ctpCodigo, cecCodigo, ndnCodSec);
    }

    public SipreDescuentoNoprocesadoPK getSipreDescuentoNoprocesadoPK() {
        return sipreDescuentoNoprocesadoPK;
    }

    public void setSipreDescuentoNoprocesadoPK(SipreDescuentoNoprocesadoPK sipreDescuentoNoprocesadoPK) {
        this.sipreDescuentoNoprocesadoPK = sipreDescuentoNoprocesadoPK;
    }

    public String getCdnNroCheque() {
        return cdnNroCheque;
    }

    public void setCdnNroCheque(String cdnNroCheque) {
        this.cdnNroCheque = cdnNroCheque;
    }

    public BigDecimal getNdnMonto() {
        return ndnMonto;
    }

    public void setNdnMonto(BigDecimal ndnMonto) {
        this.ndnMonto = ndnMonto;
    }

    public Character getCdnIndTipo() {
        return cdnIndTipo;
    }

    public void setCdnIndTipo(Character cdnIndTipo) {
        this.cdnIndTipo = cdnIndTipo;
    }

    public SipreTipoPlanilla getSipreTipoPlanilla() {
        return sipreTipoPlanilla;
    }

    public void setSipreTipoPlanilla(SipreTipoPlanilla sipreTipoPlanilla) {
        this.sipreTipoPlanilla = sipreTipoPlanilla;
    }

    public SipreEntidadCrediticia getSipreEntidadCrediticia() {
        return sipreEntidadCrediticia;
    }

    public void setSipreEntidadCrediticia(SipreEntidadCrediticia sipreEntidadCrediticia) {
        this.sipreEntidadCrediticia = sipreEntidadCrediticia;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (sipreDescuentoNoprocesadoPK != null ? sipreDescuentoNoprocesadoPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreDescuentoNoprocesado)) {
            return false;
        }
        SipreDescuentoNoprocesado other = (SipreDescuentoNoprocesado) object;
        if ((this.sipreDescuentoNoprocesadoPK == null && other.sipreDescuentoNoprocesadoPK != null) || (this.sipreDescuentoNoprocesadoPK != null && !this.sipreDescuentoNoprocesadoPK.equals(other.sipreDescuentoNoprocesadoPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreDescuentoNoprocesado[ sipreDescuentoNoprocesadoPK=" + sipreDescuentoNoprocesadoPK + " ]";
    }
    
}
