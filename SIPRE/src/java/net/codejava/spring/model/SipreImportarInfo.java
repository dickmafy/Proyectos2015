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
@Table(name = "SIPRE_IMPORTAR_INFO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreImportarInfo.findAll", query = "SELECT s FROM SipreImportarInfo s")})
public class SipreImportarInfo implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SipreImportarInfoPK sipreImportarInfoPK;
    @Column(name = "DII_FEC_CORTE")
    @Temporal(TemporalType.TIMESTAMP)
    private Date diiFecCorte;
    @Column(name = "NII_CAN_REG_ORIG")
    private Integer niiCanRegOrig;
    @Column(name = "NII_CAN_REG_IMPO")
    private Integer niiCanRegImpo;
    @Column(name = "VII_OBS")
    private String viiObs;
    @Basic(optional = false)
    @Column(name = "CUSUARIO_CODIGO")
    private String cusuarioCodigo;
    @Column(name = "CII_USU_MOD")
    private String ciiUsuMod;
    @Column(name = "DII_FEC_REG")
    @Temporal(TemporalType.TIMESTAMP)
    private Date diiFecReg;
    @Column(name = "DII_FEC_MOD")
    @Temporal(TemporalType.TIMESTAMP)
    private Date diiFecMod;

    public SipreImportarInfo() {
    }

    public SipreImportarInfo(SipreImportarInfoPK sipreImportarInfoPK) {
        this.sipreImportarInfoPK = sipreImportarInfoPK;
    }

    public SipreImportarInfo(SipreImportarInfoPK sipreImportarInfoPK, String cusuarioCodigo) {
        this.sipreImportarInfoPK = sipreImportarInfoPK;
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public SipreImportarInfo(String ciiMesProceso, short niiNumProceso) {
        this.sipreImportarInfoPK = new SipreImportarInfoPK(ciiMesProceso, niiNumProceso);
    }

    public SipreImportarInfoPK getSipreImportarInfoPK() {
        return sipreImportarInfoPK;
    }

    public void setSipreImportarInfoPK(SipreImportarInfoPK sipreImportarInfoPK) {
        this.sipreImportarInfoPK = sipreImportarInfoPK;
    }

    public Date getDiiFecCorte() {
        return diiFecCorte;
    }

    public void setDiiFecCorte(Date diiFecCorte) {
        this.diiFecCorte = diiFecCorte;
    }

    public Integer getNiiCanRegOrig() {
        return niiCanRegOrig;
    }

    public void setNiiCanRegOrig(Integer niiCanRegOrig) {
        this.niiCanRegOrig = niiCanRegOrig;
    }

    public Integer getNiiCanRegImpo() {
        return niiCanRegImpo;
    }

    public void setNiiCanRegImpo(Integer niiCanRegImpo) {
        this.niiCanRegImpo = niiCanRegImpo;
    }

    public String getViiObs() {
        return viiObs;
    }

    public void setViiObs(String viiObs) {
        this.viiObs = viiObs;
    }

    public String getCusuarioCodigo() {
        return cusuarioCodigo;
    }

    public void setCusuarioCodigo(String cusuarioCodigo) {
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public String getCiiUsuMod() {
        return ciiUsuMod;
    }

    public void setCiiUsuMod(String ciiUsuMod) {
        this.ciiUsuMod = ciiUsuMod;
    }

    public Date getDiiFecReg() {
        return diiFecReg;
    }

    public void setDiiFecReg(Date diiFecReg) {
        this.diiFecReg = diiFecReg;
    }

    public Date getDiiFecMod() {
        return diiFecMod;
    }

    public void setDiiFecMod(Date diiFecMod) {
        this.diiFecMod = diiFecMod;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (sipreImportarInfoPK != null ? sipreImportarInfoPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreImportarInfo)) {
            return false;
        }
        SipreImportarInfo other = (SipreImportarInfo) object;
        if ((this.sipreImportarInfoPK == null && other.sipreImportarInfoPK != null) || (this.sipreImportarInfoPK != null && !this.sipreImportarInfoPK.equals(other.sipreImportarInfoPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreImportarInfo[ sipreImportarInfoPK=" + sipreImportarInfoPK + " ]";
    }
    
}
