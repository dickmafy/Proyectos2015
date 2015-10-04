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
@Table(name = "SIPRE_INGRESO_OTRO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreIngresoOtro.findAll", query = "SELECT s FROM SipreIngresoOtro s")})
public class SipreIngresoOtro implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreIngresoOtroPK sipreIngresoOtroPK;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Column(name = "NIO_MTO")
    private BigDecimal nioMto;
    @Basic(optional = false)
    @Column(name = "CUSUARIO_CODIGO")
    private String cusuarioCodigo;
    @Column(name = "CIO_USU_MOD")
    private String cioUsuMod;
    @Column(name = "DIO_FEC_REG")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dioFecReg;
    @Column(name = "DIO_FEC_MOD")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dioFecMod;

    public SipreIngresoOtro() {
    }

    public SipreIngresoOtro(SipreIngresoOtroPK sipreIngresoOtroPK) {
        this.sipreIngresoOtroPK = sipreIngresoOtroPK;
    }

    public SipreIngresoOtro(SipreIngresoOtroPK sipreIngresoOtroPK, String cusuarioCodigo) {
        this.sipreIngresoOtroPK = sipreIngresoOtroPK;
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public SipreIngresoOtro(String cpersonaNroAdm, String cciCodigo) {
        this.sipreIngresoOtroPK = new SipreIngresoOtroPK(cpersonaNroAdm, cciCodigo);
    }

    public SipreIngresoOtroPK getSipreIngresoOtroPK() {
        return sipreIngresoOtroPK;
    }

    public void setSipreIngresoOtroPK(SipreIngresoOtroPK sipreIngresoOtroPK) {
        this.sipreIngresoOtroPK = sipreIngresoOtroPK;
    }

    public BigDecimal getNioMto() {
        return nioMto;
    }

    public void setNioMto(BigDecimal nioMto) {
        this.nioMto = nioMto;
    }

    public String getCusuarioCodigo() {
        return cusuarioCodigo;
    }

    public void setCusuarioCodigo(String cusuarioCodigo) {
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public String getCioUsuMod() {
        return cioUsuMod;
    }

    public void setCioUsuMod(String cioUsuMod) {
        this.cioUsuMod = cioUsuMod;
    }

    public Date getDioFecReg() {
        return dioFecReg;
    }

    public void setDioFecReg(Date dioFecReg) {
        this.dioFecReg = dioFecReg;
    }

    public Date getDioFecMod() {
        return dioFecMod;
    }

    public void setDioFecMod(Date dioFecMod) {
        this.dioFecMod = dioFecMod;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (sipreIngresoOtroPK != null ? sipreIngresoOtroPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreIngresoOtro)) {
            return false;
        }
        SipreIngresoOtro other = (SipreIngresoOtro) object;
        if ((this.sipreIngresoOtroPK == null && other.sipreIngresoOtroPK != null) || (this.sipreIngresoOtroPK != null && !this.sipreIngresoOtroPK.equals(other.sipreIngresoOtroPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreIngresoOtro[ sipreIngresoOtroPK=" + sipreIngresoOtroPK + " ]";
    }
    
}
