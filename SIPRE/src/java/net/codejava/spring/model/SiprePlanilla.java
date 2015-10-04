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
import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
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
@Table(name = "SIPRE_PLANILLA")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SiprePlanilla.findAll", query = "SELECT s FROM SiprePlanilla s")})
public class SiprePlanilla implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SiprePlanillaPK siprePlanillaPK;
    @Column(name = "CPLANILLA_DNI")
    private String cplanillaDni;
    @Column(name = "CPLANILLA_IND_QUI")
    private Character cplanillaIndQui;
    @Column(name = "DPLANILLA_FEC_FAL")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dplanillaFecFal;
    @Column(name = "DPLANILLA_FEC_ING")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dplanillaFecIng;
    @Column(name = "VPLANILLA_DOC_ALTA")
    private String vplanillaDocAlta;
    @Column(name = "VPLANILLA_APE_NOM")
    private String vplanillaApeNom;
    @Column(name = "CPLANILLA_SEXO")
    private Character cplanillaSexo;
    @Column(name = "DPLANILLA_FEC_NAC")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dplanillaFecNac;
    @Column(name = "NPLANILLA_NRO_HIJO")
    private Short nplanillaNroHijo;
    @Column(name = "CPLANILLA_COD_GRA_PEN")
    private String cplanillaCodGraPen;
    @Column(name = "CPLANILLA_IND_ONP")
    private Character cplanillaIndOnp;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Column(name = "NPLANILLA_POR_UNIF")
    private BigDecimal nplanillaPorUnif;
    @Column(name = "VPLANILLA_CAD_FUNC")
    private String vplanillaCadFunc;
    @Column(name = "VPLANILLA_COD_ESSALUD")
    private String vplanillaCodEssalud;
    @Column(name = "VPLANILLA_CUSPP")
    private String vplanillaCuspp;
    @Column(name = "CPLANILLA_IND_AGUIN")
    private Character cplanillaIndAguin;
    @Column(name = "DPLANILLA_FEC_AFI_AFP")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dplanillaFecAfiAfp;
    @Column(name = "DPLANILLA_FEC_FIN_CONTR")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dplanillaFecFinContr;
    @Column(name = "DPLANILLA_FEC_PROMO")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dplanillaFecPromo;
    @Column(name = "NPLANILLA_RET_ASCENSO")
    private Short nplanillaRetAscenso;
    @Column(name = "CPLANILLA_IND_LICENCIA")
    private String cplanillaIndLicencia;
    @Column(name = "DPLANILLA_FEC_RETIRO")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dplanillaFecRetiro;
    @Column(name = "VPLANILLA_DOC_RETIRO")
    private String vplanillaDocRetiro;
    @Column(name = "CPLANILLA_SER_RECON")
    private String cplanillaSerRecon;
    @Column(name = "VPLANILLA_DOC_RECON")
    private String vplanillaDocRecon;
    @Column(name = "NPLANILLA_POR_PENSION")
    private BigDecimal nplanillaPorPension;
    @Column(name = "CPLANILLA_SEX_PENSION")
    private Character cplanillaSexPension;
    @Column(name = "VPLANILLA_NOM_CAUSANTE")
    private String vplanillaNomCausante;
    @Column(name = "CPLANILLA_IND_ACT_PEN")
    private Character cplanillaIndActPen;
    @Column(name = "CPLANILLA_IND_CALCULO")
    private Character cplanillaIndCalculo;
    @Column(name = "NPLANILLA_TIE_SERVICIO")
    private String nplanillaTieServicio;
    @Column(name = "CPLANILLA_USU_MOD")
    private String cplanillaUsuMod;
    @Column(name = "DPLANILLA_FEC_REG")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dplanillaFecReg;
    @Column(name = "DPLANILLA_FEC_MOD")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dplanillaFecMod;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "siprePlanilla")
    private List<SiprePlanillaDescuento> siprePlanillaDescuentoList;
    @JoinColumn(name = "CUSUARIO_CODIGO", referencedColumnName = "CUSUARIO_CODIGO")
    @ManyToOne(optional = false)
    private SipreUsuario cusuarioCodigo;
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
    @ManyToOne(optional = false)
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
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "siprePlanilla")
    private List<SiprePlanillaDetalle> siprePlanillaDetalleList;

    public SiprePlanilla() {
    }

    public SiprePlanilla(SiprePlanillaPK siprePlanillaPK) {
        this.siprePlanillaPK = siprePlanillaPK;
    }

    public SiprePlanilla(String cpersonaNroAdm, String cplanillaMesProceso, short nplanillaNumProceso) {
        this.siprePlanillaPK = new SiprePlanillaPK(cpersonaNroAdm, cplanillaMesProceso, nplanillaNumProceso);
    }

    public SiprePlanillaPK getSiprePlanillaPK() {
        return siprePlanillaPK;
    }

    public void setSiprePlanillaPK(SiprePlanillaPK siprePlanillaPK) {
        this.siprePlanillaPK = siprePlanillaPK;
    }

    public String getCplanillaDni() {
        return cplanillaDni;
    }

    public void setCplanillaDni(String cplanillaDni) {
        this.cplanillaDni = cplanillaDni;
    }

    public Character getCplanillaIndQui() {
        return cplanillaIndQui;
    }

    public void setCplanillaIndQui(Character cplanillaIndQui) {
        this.cplanillaIndQui = cplanillaIndQui;
    }

    public Date getDplanillaFecFal() {
        return dplanillaFecFal;
    }

    public void setDplanillaFecFal(Date dplanillaFecFal) {
        this.dplanillaFecFal = dplanillaFecFal;
    }

    public Date getDplanillaFecIng() {
        return dplanillaFecIng;
    }

    public void setDplanillaFecIng(Date dplanillaFecIng) {
        this.dplanillaFecIng = dplanillaFecIng;
    }

    public String getVplanillaDocAlta() {
        return vplanillaDocAlta;
    }

    public void setVplanillaDocAlta(String vplanillaDocAlta) {
        this.vplanillaDocAlta = vplanillaDocAlta;
    }

    public String getVplanillaApeNom() {
        return vplanillaApeNom;
    }

    public void setVplanillaApeNom(String vplanillaApeNom) {
        this.vplanillaApeNom = vplanillaApeNom;
    }

    public Character getCplanillaSexo() {
        return cplanillaSexo;
    }

    public void setCplanillaSexo(Character cplanillaSexo) {
        this.cplanillaSexo = cplanillaSexo;
    }

    public Date getDplanillaFecNac() {
        return dplanillaFecNac;
    }

    public void setDplanillaFecNac(Date dplanillaFecNac) {
        this.dplanillaFecNac = dplanillaFecNac;
    }

    public Short getNplanillaNroHijo() {
        return nplanillaNroHijo;
    }

    public void setNplanillaNroHijo(Short nplanillaNroHijo) {
        this.nplanillaNroHijo = nplanillaNroHijo;
    }

    public String getCplanillaCodGraPen() {
        return cplanillaCodGraPen;
    }

    public void setCplanillaCodGraPen(String cplanillaCodGraPen) {
        this.cplanillaCodGraPen = cplanillaCodGraPen;
    }

    public Character getCplanillaIndOnp() {
        return cplanillaIndOnp;
    }

    public void setCplanillaIndOnp(Character cplanillaIndOnp) {
        this.cplanillaIndOnp = cplanillaIndOnp;
    }

    public BigDecimal getNplanillaPorUnif() {
        return nplanillaPorUnif;
    }

    public void setNplanillaPorUnif(BigDecimal nplanillaPorUnif) {
        this.nplanillaPorUnif = nplanillaPorUnif;
    }

    public String getVplanillaCadFunc() {
        return vplanillaCadFunc;
    }

    public void setVplanillaCadFunc(String vplanillaCadFunc) {
        this.vplanillaCadFunc = vplanillaCadFunc;
    }

    public String getVplanillaCodEssalud() {
        return vplanillaCodEssalud;
    }

    public void setVplanillaCodEssalud(String vplanillaCodEssalud) {
        this.vplanillaCodEssalud = vplanillaCodEssalud;
    }

    public String getVplanillaCuspp() {
        return vplanillaCuspp;
    }

    public void setVplanillaCuspp(String vplanillaCuspp) {
        this.vplanillaCuspp = vplanillaCuspp;
    }

    public Character getCplanillaIndAguin() {
        return cplanillaIndAguin;
    }

    public void setCplanillaIndAguin(Character cplanillaIndAguin) {
        this.cplanillaIndAguin = cplanillaIndAguin;
    }

    public Date getDplanillaFecAfiAfp() {
        return dplanillaFecAfiAfp;
    }

    public void setDplanillaFecAfiAfp(Date dplanillaFecAfiAfp) {
        this.dplanillaFecAfiAfp = dplanillaFecAfiAfp;
    }

    public Date getDplanillaFecFinContr() {
        return dplanillaFecFinContr;
    }

    public void setDplanillaFecFinContr(Date dplanillaFecFinContr) {
        this.dplanillaFecFinContr = dplanillaFecFinContr;
    }

    public Date getDplanillaFecPromo() {
        return dplanillaFecPromo;
    }

    public void setDplanillaFecPromo(Date dplanillaFecPromo) {
        this.dplanillaFecPromo = dplanillaFecPromo;
    }

    public Short getNplanillaRetAscenso() {
        return nplanillaRetAscenso;
    }

    public void setNplanillaRetAscenso(Short nplanillaRetAscenso) {
        this.nplanillaRetAscenso = nplanillaRetAscenso;
    }

    public String getCplanillaIndLicencia() {
        return cplanillaIndLicencia;
    }

    public void setCplanillaIndLicencia(String cplanillaIndLicencia) {
        this.cplanillaIndLicencia = cplanillaIndLicencia;
    }

    public Date getDplanillaFecRetiro() {
        return dplanillaFecRetiro;
    }

    public void setDplanillaFecRetiro(Date dplanillaFecRetiro) {
        this.dplanillaFecRetiro = dplanillaFecRetiro;
    }

    public String getVplanillaDocRetiro() {
        return vplanillaDocRetiro;
    }

    public void setVplanillaDocRetiro(String vplanillaDocRetiro) {
        this.vplanillaDocRetiro = vplanillaDocRetiro;
    }

    public String getCplanillaSerRecon() {
        return cplanillaSerRecon;
    }

    public void setCplanillaSerRecon(String cplanillaSerRecon) {
        this.cplanillaSerRecon = cplanillaSerRecon;
    }

    public String getVplanillaDocRecon() {
        return vplanillaDocRecon;
    }

    public void setVplanillaDocRecon(String vplanillaDocRecon) {
        this.vplanillaDocRecon = vplanillaDocRecon;
    }

    public BigDecimal getNplanillaPorPension() {
        return nplanillaPorPension;
    }

    public void setNplanillaPorPension(BigDecimal nplanillaPorPension) {
        this.nplanillaPorPension = nplanillaPorPension;
    }

    public Character getCplanillaSexPension() {
        return cplanillaSexPension;
    }

    public void setCplanillaSexPension(Character cplanillaSexPension) {
        this.cplanillaSexPension = cplanillaSexPension;
    }

    public String getVplanillaNomCausante() {
        return vplanillaNomCausante;
    }

    public void setVplanillaNomCausante(String vplanillaNomCausante) {
        this.vplanillaNomCausante = vplanillaNomCausante;
    }

    public Character getCplanillaIndActPen() {
        return cplanillaIndActPen;
    }

    public void setCplanillaIndActPen(Character cplanillaIndActPen) {
        this.cplanillaIndActPen = cplanillaIndActPen;
    }

    public Character getCplanillaIndCalculo() {
        return cplanillaIndCalculo;
    }

    public void setCplanillaIndCalculo(Character cplanillaIndCalculo) {
        this.cplanillaIndCalculo = cplanillaIndCalculo;
    }

    public String getNplanillaTieServicio() {
        return nplanillaTieServicio;
    }

    public void setNplanillaTieServicio(String nplanillaTieServicio) {
        this.nplanillaTieServicio = nplanillaTieServicio;
    }

    public String getCplanillaUsuMod() {
        return cplanillaUsuMod;
    }

    public void setCplanillaUsuMod(String cplanillaUsuMod) {
        this.cplanillaUsuMod = cplanillaUsuMod;
    }

    public Date getDplanillaFecReg() {
        return dplanillaFecReg;
    }

    public void setDplanillaFecReg(Date dplanillaFecReg) {
        this.dplanillaFecReg = dplanillaFecReg;
    }

    public Date getDplanillaFecMod() {
        return dplanillaFecMod;
    }

    public void setDplanillaFecMod(Date dplanillaFecMod) {
        this.dplanillaFecMod = dplanillaFecMod;
    }

    @XmlTransient
    public List<SiprePlanillaDescuento> getSiprePlanillaDescuentoList() {
        return siprePlanillaDescuentoList;
    }

    public void setSiprePlanillaDescuentoList(List<SiprePlanillaDescuento> siprePlanillaDescuentoList) {
        this.siprePlanillaDescuentoList = siprePlanillaDescuentoList;
    }

    public SipreUsuario getCusuarioCodigo() {
        return cusuarioCodigo;
    }

    public void setCusuarioCodigo(SipreUsuario cusuarioCodigo) {
        this.cusuarioCodigo = cusuarioCodigo;
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

    @XmlTransient
    public List<SiprePlanillaDetalle> getSiprePlanillaDetalleList() {
        return siprePlanillaDetalleList;
    }

    public void setSiprePlanillaDetalleList(List<SiprePlanillaDetalle> siprePlanillaDetalleList) {
        this.siprePlanillaDetalleList = siprePlanillaDetalleList;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (siprePlanillaPK != null ? siprePlanillaPK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SiprePlanilla)) {
            return false;
        }
        SiprePlanilla other = (SiprePlanilla) object;
        if ((this.siprePlanillaPK == null && other.siprePlanillaPK != null) || (this.siprePlanillaPK != null && !this.siprePlanillaPK.equals(other.siprePlanillaPK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SiprePlanilla[ siprePlanillaPK=" + siprePlanillaPK + " ]";
    }
    
}
