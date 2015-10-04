/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.math.BigDecimal;
import java.util.Date;
import java.util.List;
import javax.persistence.Basic;
import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlTransient;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_BOLETA_CABECERA")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreBoletaCabecera.findAll", query = "SELECT s FROM SipreBoletaCabecera s")})
public class SipreBoletaCabecera implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreBoletaCabeceraPK sipreBoletaCabeceraPK;
    @Column(name = "CBC_COD_GRA_EFEC")
    private String cbcCodGraEfec;
    @Column(name = "VBC_DES_GRA_EFEC")
    private String vbcDesGraEfec;
    @Column(name = "CBC_COD_GRA_PENS")
    private String cbcCodGraPens;
    @Column(name = "VBC_DES_GRA_PENS")
    private String vbcDesGraPens;
    @Column(name = "CBC_COD_UNIDAD")
    private String cbcCodUnidad;
    @Column(name = "VBC_DES_UNIDAD")
    private String vbcDesUnidad;
    @Column(name = "TCB_TIP_PERSONA")
    private Character tcbTipPersona;
    @Column(name = "NBC_NUM_BOLETA")
    private Integer nbcNumBoleta;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Column(name = "NBC_MTO_INGRESO")
    private BigDecimal nbcMtoIngreso;
    @Column(name = "NBC_MTO_EGRESO")
    private BigDecimal nbcMtoEgreso;
    @Column(name = "CBC_IND_ACT_PENS")
    private Character cbcIndActPens;
    @Column(name = "VBC_LUGAR")
    private String vbcLugar;
    @Column(name = "CBC_DNI")
    private String cbcDni;
    @Column(name = "VBC_DES_BANCO")
    private String vbcDesBanco;
    @Column(name = "VBC_REG_REMUN")
    private String vbcRegRemun;
    @Column(name = "VBC_REG_PENS")
    private String vbcRegPens;
    @Basic(optional = false)
    @Column(name = "CUSUARIO_CODIGO")
    private String cusuarioCodigo;
    @Column(name = "CBC_USU_MOD")
    private String cbcUsuMod;
    @Column(name = "DBC_FEC_REG")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dbcFecReg;
    @Column(name = "DBC_FEC_MOD")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dbcFecMod;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreBoletaCabecera")
    private List<SipreBoletaDetalle> sipreBoletaDetalleList;

    public SipreBoletaCabecera() {
    }

    public SipreBoletaCabecera(SipreBoletaCabeceraPK sipreBoletaCabeceraPK) {
        this.sipreBoletaCabeceraPK = sipreBoletaCabeceraPK;
    }

    public SipreBoletaCabecera(SipreBoletaCabeceraPK sipreBoletaCabeceraPK, String cusuarioCodigo) {
        this.sipreBoletaCabeceraPK = sipreBoletaCabeceraPK;
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public SipreBoletaCabecera(String cbcMesProceso, short nbcNumProceso, String cbcNroAdm) {
        this.sipreBoletaCabeceraPK = new SipreBoletaCabeceraPK(cbcMesProceso, nbcNumProceso, cbcNroAdm);
    }

    public SipreBoletaCabeceraPK getSipreBoletaCabeceraPK() {
        return sipreBoletaCabeceraPK;
    }

    public void setSipreBoletaCabeceraPK(SipreBoletaCabeceraPK sipreBoletaCabeceraPK) {
        this.sipreBoletaCabeceraPK = sipreBoletaCabeceraPK;
    }

    public String getCbcCodGraEfec() {
        return cbcCodGraEfec;
    }

    public void setCbcCodGraEfec(String cbcCodGraEfec) {
        this.cbcCodGraEfec = cbcCodGraEfec;
    }

    public String getVbcDesGraEfec() {
        return vbcDesGraEfec;
    }

    public void setVbcDesGraEfec(String vbcDesGraEfec) {
        this.vbcDesGraEfec = vbcDesGraEfec;
    }

    public String getCbcCodGraPens() {
        return cbcCodGraPens;
    }

    public void setCbcCodGraPens(String cbcCodGraPens) {
        this.cbcCodGraPens = cbcCodGraPens;
    }

    public String getVbcDesGraPens() {
        return vbcDesGraPens;
    }

    public void setVbcDesGraPens(String vbcDesGraPens) {
        this.vbcDesGraPens = vbcDesGraPens;
    }

    public String getCbcCodUnidad() {
        return cbcCodUnidad;
    }

    public void setCbcCodUnidad(String cbcCodUnidad) {
        this.cbcCodUnidad = cbcCodUnidad;
    }

    public String getVbcDesUnidad() {
        return vbcDesUnidad;
    }

    public void setVbcDesUnidad(String vbcDesUnidad) {
        this.vbcDesUnidad = vbcDesUnidad;
    }

    public Character getTcbTipPersona() {
        return tcbTipPersona;
    }

    public void setTcbTipPersona(Character tcbTipPersona) {
        this.tcbTipPersona = tcbTipPersona;
    }

    public Integer getNbcNumBoleta() {
        return nbcNumBoleta;
    }

    public void setNbcNumBoleta(Integer nbcNumBoleta) {
        this.nbcNumBoleta = nbcNumBoleta;
    }

    public BigDecimal getNbcMtoIngreso() {
        return nbcMtoIngreso;
    }

    public void setNbcMtoIngreso(BigDecimal nbcMtoIngreso) {
        this.nbcMtoIngreso = nbcMtoIngreso;
    }

    public BigDecimal getNbcMtoEgreso() {
        return nbcMtoEgreso;
    }

    public void setNbcMtoEgreso(BigDecimal nbcMtoEgreso) {
        this.nbcMtoEgreso = nbcMtoEgreso;
    }

    public Character getCbcIndActPens() {
        return cbcIndActPens;
    }

    public void setCbcIndActPens(Character cbcIndActPens) {
        this.cbcIndActPens = cbcIndActPens;
    }

    public String getVbcLugar() {
        return vbcLugar;
    }

    public void setVbcLugar(String vbcLugar) {
        this.vbcLugar = vbcLugar;
    }

    public String getCbcDni() {
        return cbcDni;
    }

    public void setCbcDni(String cbcDni) {
        this.cbcDni = cbcDni;
    }

    public String getVbcDesBanco() {
        return vbcDesBanco;
    }

    public void setVbcDesBanco(String vbcDesBanco) {
        this.vbcDesBanco = vbcDesBanco;
    }

    public String getVbcRegRemun() {
        return vbcRegRemun;
    }

    public void setVbcRegRemun(String vbcRegRemun) {
        this.vbcRegRemun = vbcRegRemun;
    }

    public String getVbcRegPens() {
        return vbcRegPens;
    }

    public void setVbcRegPens(String vbcRegPens) {
        this.vbcRegPens = vbcRegPens;
    }

    public String getCusuarioCodigo() {
        return cusuarioCodigo;
    }

    public void setCusuarioCodigo(String cusuarioCodigo) {
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public String getCbcUsuMod() {
        return cbcUsuMod;
    }

    public void setCbcUsuMod(String cbcUsuMod) {
        this.cbcUsuMod = cbcUsuMod;
    }

    public Date getDbcFecReg() {
        return dbcFecReg;
    }

    public void setDbcFecReg(Date dbcFecReg) {
        this.dbcFecReg = dbcFecReg;
    }

    public Date getDbcFecMod() {
        return dbcFecMod;
    }

    public void setDbcFecMod(Date dbcFecMod) {
        this.dbcFecMod = dbcFecMod;
    }

    @XmlTransient
    public List<SipreBoletaDetalle> getSipreBoletaDetalleList() {
        return sipreBoletaDetalleList;
    }

    public void setSipreBoletaDetalleList(List<SipreBoletaDetalle> sipreBoletaDetalleList) {
        this.sipreBoletaDetalleList = sipreBoletaDetalleList;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (sipreBoletaCabeceraPK != null ? sipreBoletaCabeceraPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreBoletaCabecera)) {
            return false;
        }
        SipreBoletaCabecera other = (SipreBoletaCabecera) object;
        if ((this.sipreBoletaCabeceraPK == null && other.sipreBoletaCabeceraPK != null) || (this.sipreBoletaCabeceraPK != null && !this.sipreBoletaCabeceraPK.equals(other.sipreBoletaCabeceraPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreBoletaCabecera[ sipreBoletaCabeceraPK=" + sipreBoletaCabeceraPK + " ]";
    }
    
}
