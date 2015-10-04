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
import javax.persistence.Entity;
import javax.persistence.Id;
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
@Table(name = "SIPRE_PERSONA")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SiprePersona.findAll", query = "SELECT s FROM SiprePersona s")})
public class SiprePersona implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CPERSONA_NRO_ADM")
    private String cpersonaNroAdm;
    @Column(name = "CPERSONA_DNI")
    private String cpersonaDni;
    @Column(name = "CPERSONA_IND_QUI")
    private Character cpersonaIndQui;
    @Column(name = "DPERSONA_FEC_FAL")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dpersonaFecFal;
    @Column(name = "DPERSONA_FEC_ING")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dpersonaFecIng;
    @Column(name = "VPERSONA_DOC_ALTA")
    private String vpersonaDocAlta;
    @Column(name = "VPERSONA_APE_NOM")
    private String vpersonaApeNom;
    @Column(name = "CPERSONA_SEXO")
    private Character cpersonaSexo;
    @Column(name = "DPERSONA_FEC_NAC")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dpersonaFecNac;
    @Column(name = "NPERSONA_NRO_HIJO")
    private Short npersonaNroHijo;
    @Column(name = "CPERSONA_COD_GRA_PEN")
    private String cpersonaCodGraPen;
    @Column(name = "CPERSONA_IND_ONP")
    private Character cpersonaIndOnp;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Column(name = "NPERSONA_POR_UNIF")
    private BigDecimal npersonaPorUnif;
    @Column(name = "VPERSONA_CAD_FUNC")
    private String vpersonaCadFunc;
    @Column(name = "VPERSONA_COD_ESSALUD")
    private String vpersonaCodEssalud;
    @Column(name = "VPERSONA_CUSPP")
    private String vpersonaCuspp;
    @Column(name = "CPERSONA_IND_AGUIN")
    private Character cpersonaIndAguin;
    @Column(name = "DPERSONA_FEC_AFI_AFP")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dpersonaFecAfiAfp;
    @Column(name = "DPERSONA_FEC_FIN_CONTR")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dpersonaFecFinContr;
    @Column(name = "DPERSONA_FEC_PROMO")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dpersonaFecPromo;
    @Column(name = "NPERSONA_RET_ASCENSO")
    private Short npersonaRetAscenso;
    @Column(name = "CPERSONA_IND_LICENCIA")
    private String cpersonaIndLicencia;
    @Column(name = "DPERSONA_FEC_RETIRO")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dpersonaFecRetiro;
    @Column(name = "VPERSONA_DOC_RETIRO")
    private String vpersonaDocRetiro;
    @Column(name = "CPERSONA_SER_RECON")
    private String cpersonaSerRecon;
    @Column(name = "VPERSONA_DOC_RECON")
    private String vpersonaDocRecon;
    @Column(name = "NPERSONA_POR_PENSION")
    private BigDecimal npersonaPorPension;
    @Column(name = "CPERSONA_SEX_PENSION")
    private Character cpersonaSexPension;
    @Column(name = "VPERSONA_NOM_CAUSANTE")
    private String vpersonaNomCausante;
    @JoinColumn(name = "CUNIDAD_CODIGO", referencedColumnName = "CUNIDAD_CODIGO")
    @ManyToOne(optional = false)
    private SipreUnidad cunidadCodigo;
    @JoinColumn(name = "CSC_CODIGO", referencedColumnName = "CSC_CODIGO")
    @ManyToOne
    private SipreSituacionCausal cscCodigo;
    @JoinColumn(name = "CSA_CODIGO", referencedColumnName = "CSA_CODIGO")
    @ManyToOne
    private SipreSituacionAdm csaCodigo;
    @JoinColumn(name = "CGRADO_CODIGO", referencedColumnName = "CGRADO_CODIGO")
    @ManyToOne(optional = false)
    private SipreGrado cgradoCodigo;
    @JoinColumn(name = "CEC_CODIGO", referencedColumnName = "CEC_CODIGO")
    @ManyToOne
    private SipreEstadoCivil cecCodigo;
    @JoinColumn(name = "CEA_CODIGO", referencedColumnName = "CEA_CODIGO")
    @ManyToOne
    private SipreEspecialidadAlterna ceaCodigo;
    @JoinColumn(name = "CCEDULA_CODIGO", referencedColumnName = "CCEDULA_CODIGO")
    @ManyToOne
    private SipreCedula ccedulaCodigo;
    @JoinColumn(name = "CCARGO_CODIGO", referencedColumnName = "CCARGO_CODIGO")
    @ManyToOne
    private SipreCargo ccargoCodigo;
    @JoinColumn(name = "CBANCO_CODIGO", referencedColumnName = "CBANCO_CODIGO")
    @ManyToOne
    private SipreBanco cbancoCodigo;
    @JoinColumn(name = "CARMA_CODIGO", referencedColumnName = "CARMA_CODIGO")
    @ManyToOne
    private SipreArma carmaCodigo;
    @JoinColumn(name = "CAGRUPADOR_CODIGO", referencedColumnName = "CAGRUPADOR_CODIGO")
    @ManyToOne
    private SipreAgrupador cagrupadorCodigo;

    public SiprePersona() {
    }

    public SiprePersona(String cpersonaNroAdm) {
        this.cpersonaNroAdm = cpersonaNroAdm;
    }

    public String getCpersonaNroAdm() {
        return cpersonaNroAdm;
    }

    public void setCpersonaNroAdm(String cpersonaNroAdm) {
        this.cpersonaNroAdm = cpersonaNroAdm;
    }

    public String getCpersonaDni() {
        return cpersonaDni;
    }

    public void setCpersonaDni(String cpersonaDni) {
        this.cpersonaDni = cpersonaDni;
    }

    public Character getCpersonaIndQui() {
        return cpersonaIndQui;
    }

    public void setCpersonaIndQui(Character cpersonaIndQui) {
        this.cpersonaIndQui = cpersonaIndQui;
    }

    public Date getDpersonaFecFal() {
        return dpersonaFecFal;
    }

    public void setDpersonaFecFal(Date dpersonaFecFal) {
        this.dpersonaFecFal = dpersonaFecFal;
    }

    public Date getDpersonaFecIng() {
        return dpersonaFecIng;
    }

    public void setDpersonaFecIng(Date dpersonaFecIng) {
        this.dpersonaFecIng = dpersonaFecIng;
    }

    public String getVpersonaDocAlta() {
        return vpersonaDocAlta;
    }

    public void setVpersonaDocAlta(String vpersonaDocAlta) {
        this.vpersonaDocAlta = vpersonaDocAlta;
    }

    public String getVpersonaApeNom() {
        return vpersonaApeNom;
    }

    public void setVpersonaApeNom(String vpersonaApeNom) {
        this.vpersonaApeNom = vpersonaApeNom;
    }

    public Character getCpersonaSexo() {
        return cpersonaSexo;
    }

    public void setCpersonaSexo(Character cpersonaSexo) {
        this.cpersonaSexo = cpersonaSexo;
    }

    public Date getDpersonaFecNac() {
        return dpersonaFecNac;
    }

    public void setDpersonaFecNac(Date dpersonaFecNac) {
        this.dpersonaFecNac = dpersonaFecNac;
    }

    public Short getNpersonaNroHijo() {
        return npersonaNroHijo;
    }

    public void setNpersonaNroHijo(Short npersonaNroHijo) {
        this.npersonaNroHijo = npersonaNroHijo;
    }

    public String getCpersonaCodGraPen() {
        return cpersonaCodGraPen;
    }

    public void setCpersonaCodGraPen(String cpersonaCodGraPen) {
        this.cpersonaCodGraPen = cpersonaCodGraPen;
    }

    public Character getCpersonaIndOnp() {
        return cpersonaIndOnp;
    }

    public void setCpersonaIndOnp(Character cpersonaIndOnp) {
        this.cpersonaIndOnp = cpersonaIndOnp;
    }

    public BigDecimal getNpersonaPorUnif() {
        return npersonaPorUnif;
    }

    public void setNpersonaPorUnif(BigDecimal npersonaPorUnif) {
        this.npersonaPorUnif = npersonaPorUnif;
    }

    public String getVpersonaCadFunc() {
        return vpersonaCadFunc;
    }

    public void setVpersonaCadFunc(String vpersonaCadFunc) {
        this.vpersonaCadFunc = vpersonaCadFunc;
    }

    public String getVpersonaCodEssalud() {
        return vpersonaCodEssalud;
    }

    public void setVpersonaCodEssalud(String vpersonaCodEssalud) {
        this.vpersonaCodEssalud = vpersonaCodEssalud;
    }

    public String getVpersonaCuspp() {
        return vpersonaCuspp;
    }

    public void setVpersonaCuspp(String vpersonaCuspp) {
        this.vpersonaCuspp = vpersonaCuspp;
    }

    public Character getCpersonaIndAguin() {
        return cpersonaIndAguin;
    }

    public void setCpersonaIndAguin(Character cpersonaIndAguin) {
        this.cpersonaIndAguin = cpersonaIndAguin;
    }

    public Date getDpersonaFecAfiAfp() {
        return dpersonaFecAfiAfp;
    }

    public void setDpersonaFecAfiAfp(Date dpersonaFecAfiAfp) {
        this.dpersonaFecAfiAfp = dpersonaFecAfiAfp;
    }

    public Date getDpersonaFecFinContr() {
        return dpersonaFecFinContr;
    }

    public void setDpersonaFecFinContr(Date dpersonaFecFinContr) {
        this.dpersonaFecFinContr = dpersonaFecFinContr;
    }

    public Date getDpersonaFecPromo() {
        return dpersonaFecPromo;
    }

    public void setDpersonaFecPromo(Date dpersonaFecPromo) {
        this.dpersonaFecPromo = dpersonaFecPromo;
    }

    public Short getNpersonaRetAscenso() {
        return npersonaRetAscenso;
    }

    public void setNpersonaRetAscenso(Short npersonaRetAscenso) {
        this.npersonaRetAscenso = npersonaRetAscenso;
    }

    public String getCpersonaIndLicencia() {
        return cpersonaIndLicencia;
    }

    public void setCpersonaIndLicencia(String cpersonaIndLicencia) {
        this.cpersonaIndLicencia = cpersonaIndLicencia;
    }

    public Date getDpersonaFecRetiro() {
        return dpersonaFecRetiro;
    }

    public void setDpersonaFecRetiro(Date dpersonaFecRetiro) {
        this.dpersonaFecRetiro = dpersonaFecRetiro;
    }

    public String getVpersonaDocRetiro() {
        return vpersonaDocRetiro;
    }

    public void setVpersonaDocRetiro(String vpersonaDocRetiro) {
        this.vpersonaDocRetiro = vpersonaDocRetiro;
    }

    public String getCpersonaSerRecon() {
        return cpersonaSerRecon;
    }

    public void setCpersonaSerRecon(String cpersonaSerRecon) {
        this.cpersonaSerRecon = cpersonaSerRecon;
    }

    public String getVpersonaDocRecon() {
        return vpersonaDocRecon;
    }

    public void setVpersonaDocRecon(String vpersonaDocRecon) {
        this.vpersonaDocRecon = vpersonaDocRecon;
    }

    public BigDecimal getNpersonaPorPension() {
        return npersonaPorPension;
    }

    public void setNpersonaPorPension(BigDecimal npersonaPorPension) {
        this.npersonaPorPension = npersonaPorPension;
    }

    public Character getCpersonaSexPension() {
        return cpersonaSexPension;
    }

    public void setCpersonaSexPension(Character cpersonaSexPension) {
        this.cpersonaSexPension = cpersonaSexPension;
    }

    public String getVpersonaNomCausante() {
        return vpersonaNomCausante;
    }

    public void setVpersonaNomCausante(String vpersonaNomCausante) {
        this.vpersonaNomCausante = vpersonaNomCausante;
    }

    public SipreUnidad getCunidadCodigo() {
        return cunidadCodigo;
    }

    public void setCunidadCodigo(SipreUnidad cunidadCodigo) {
        this.cunidadCodigo = cunidadCodigo;
    }

    public SipreSituacionCausal getCscCodigo() {
        return cscCodigo;
    }

    public void setCscCodigo(SipreSituacionCausal cscCodigo) {
        this.cscCodigo = cscCodigo;
    }

    public SipreSituacionAdm getCsaCodigo() {
        return csaCodigo;
    }

    public void setCsaCodigo(SipreSituacionAdm csaCodigo) {
        this.csaCodigo = csaCodigo;
    }

    public SipreGrado getCgradoCodigo() {
        return cgradoCodigo;
    }

    public void setCgradoCodigo(SipreGrado cgradoCodigo) {
        this.cgradoCodigo = cgradoCodigo;
    }

    public SipreEstadoCivil getCecCodigo() {
        return cecCodigo;
    }

    public void setCecCodigo(SipreEstadoCivil cecCodigo) {
        this.cecCodigo = cecCodigo;
    }

    public SipreEspecialidadAlterna getCeaCodigo() {
        return ceaCodigo;
    }

    public void setCeaCodigo(SipreEspecialidadAlterna ceaCodigo) {
        this.ceaCodigo = ceaCodigo;
    }

    public SipreCedula getCcedulaCodigo() {
        return ccedulaCodigo;
    }

    public void setCcedulaCodigo(SipreCedula ccedulaCodigo) {
        this.ccedulaCodigo = ccedulaCodigo;
    }

    public SipreCargo getCcargoCodigo() {
        return ccargoCodigo;
    }

    public void setCcargoCodigo(SipreCargo ccargoCodigo) {
        this.ccargoCodigo = ccargoCodigo;
    }

    public SipreBanco getCbancoCodigo() {
        return cbancoCodigo;
    }

    public void setCbancoCodigo(SipreBanco cbancoCodigo) {
        this.cbancoCodigo = cbancoCodigo;
    }

    public SipreArma getCarmaCodigo() {
        return carmaCodigo;
    }

    public void setCarmaCodigo(SipreArma carmaCodigo) {
        this.carmaCodigo = carmaCodigo;
    }

    public SipreAgrupador getCagrupadorCodigo() {
        return cagrupadorCodigo;
    }

    public void setCagrupadorCodigo(SipreAgrupador cagrupadorCodigo) {
        this.cagrupadorCodigo = cagrupadorCodigo;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cpersonaNroAdm != null ? cpersonaNroAdm.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SiprePersona)) {
            return false;
        }
        SiprePersona other = (SiprePersona) object;
        if ((this.cpersonaNroAdm == null && other.cpersonaNroAdm != null) || (this.cpersonaNroAdm != null && !this.cpersonaNroAdm.equals(other.cpersonaNroAdm))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SiprePersona[ cpersonaNroAdm=" + cpersonaNroAdm + " ]";
    }
    
}
