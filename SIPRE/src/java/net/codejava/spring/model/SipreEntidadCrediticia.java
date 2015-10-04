/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.util.List;
import javax.persistence.Basic;
import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlTransient;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_ENTIDAD_CREDITICIA")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreEntidadCrediticia.findAll", query = "SELECT s FROM SipreEntidadCrediticia s")})
public class SipreEntidadCrediticia implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CEC_CODIGO")
    private String cecCodigo;
    @Column(name = "VEC_DSC_LARGA")
    private String vecDscLarga;
    @Column(name = "VEC_DSC_CORTA")
    private String vecDscCorta;
    @Column(name = "CEC_COD_DESTINO")
    private String cecCodDestino;
    @Column(name = "CEC_IND_PRIO")
    private String cecIndPrio;
    @Column(name = "CEC_TIPO_DCTO")
    private Character cecTipoDcto;
    @Column(name = "CEC_IND_REDONDEO")
    private Character cecIndRedondeo;
    @Column(name = "CEC_IND_CLAS")
    private Character cecIndClas;
    @Column(name = "CEC_COD_MEF")
    private String cecCodMef;
    @OneToMany(mappedBy = "cecCodigo")
    private List<SipreConceptoDescuentoLey> sipreConceptoDescuentoLeyList;
    @JoinColumn(name = "CCP_CODIGO", referencedColumnName = "CCP_CODIGO")
    @ManyToOne
    private SipreCostoProceso ccpCodigo;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreEntidadCrediticia")
    private List<SipreDescuentoNoprocesado> sipreDescuentoNoprocesadoList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreEntidadCrediticia")
    private List<SiprePlanillaDescuento> siprePlanillaDescuentoList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "sipreEntidadCrediticia")
    private List<SipreTmpJudicial> sipreTmpJudicialList;

    public SipreEntidadCrediticia() {
    }

    public SipreEntidadCrediticia(String cecCodigo) {
        this.cecCodigo = cecCodigo;
    }

    public String getCecCodigo() {
        return cecCodigo;
    }

    public void setCecCodigo(String cecCodigo) {
        this.cecCodigo = cecCodigo;
    }

    public String getVecDscLarga() {
        return vecDscLarga;
    }

    public void setVecDscLarga(String vecDscLarga) {
        this.vecDscLarga = vecDscLarga;
    }

    public String getVecDscCorta() {
        return vecDscCorta;
    }

    public void setVecDscCorta(String vecDscCorta) {
        this.vecDscCorta = vecDscCorta;
    }

    public String getCecCodDestino() {
        return cecCodDestino;
    }

    public void setCecCodDestino(String cecCodDestino) {
        this.cecCodDestino = cecCodDestino;
    }

    public String getCecIndPrio() {
        return cecIndPrio;
    }

    public void setCecIndPrio(String cecIndPrio) {
        this.cecIndPrio = cecIndPrio;
    }

    public Character getCecTipoDcto() {
        return cecTipoDcto;
    }

    public void setCecTipoDcto(Character cecTipoDcto) {
        this.cecTipoDcto = cecTipoDcto;
    }

    public Character getCecIndRedondeo() {
        return cecIndRedondeo;
    }

    public void setCecIndRedondeo(Character cecIndRedondeo) {
        this.cecIndRedondeo = cecIndRedondeo;
    }

    public Character getCecIndClas() {
        return cecIndClas;
    }

    public void setCecIndClas(Character cecIndClas) {
        this.cecIndClas = cecIndClas;
    }

    public String getCecCodMef() {
        return cecCodMef;
    }

    public void setCecCodMef(String cecCodMef) {
        this.cecCodMef = cecCodMef;
    }

    @XmlTransient
    public List<SipreConceptoDescuentoLey> getSipreConceptoDescuentoLeyList() {
        return sipreConceptoDescuentoLeyList;
    }

    public void setSipreConceptoDescuentoLeyList(List<SipreConceptoDescuentoLey> sipreConceptoDescuentoLeyList) {
        this.sipreConceptoDescuentoLeyList = sipreConceptoDescuentoLeyList;
    }

    public SipreCostoProceso getCcpCodigo() {
        return ccpCodigo;
    }

    public void setCcpCodigo(SipreCostoProceso ccpCodigo) {
        this.ccpCodigo = ccpCodigo;
    }

    @XmlTransient
    public List<SipreDescuentoNoprocesado> getSipreDescuentoNoprocesadoList() {
        return sipreDescuentoNoprocesadoList;
    }

    public void setSipreDescuentoNoprocesadoList(List<SipreDescuentoNoprocesado> sipreDescuentoNoprocesadoList) {
        this.sipreDescuentoNoprocesadoList = sipreDescuentoNoprocesadoList;
    }

    @XmlTransient
    public List<SiprePlanillaDescuento> getSiprePlanillaDescuentoList() {
        return siprePlanillaDescuentoList;
    }

    public void setSiprePlanillaDescuentoList(List<SiprePlanillaDescuento> siprePlanillaDescuentoList) {
        this.siprePlanillaDescuentoList = siprePlanillaDescuentoList;
    }

    @XmlTransient
    public List<SipreTmpJudicial> getSipreTmpJudicialList() {
        return sipreTmpJudicialList;
    }

    public void setSipreTmpJudicialList(List<SipreTmpJudicial> sipreTmpJudicialList) {
        this.sipreTmpJudicialList = sipreTmpJudicialList;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cecCodigo != null ? cecCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreEntidadCrediticia)) {
            return false;
        }
        SipreEntidadCrediticia other = (SipreEntidadCrediticia) object;
        if ((this.cecCodigo == null && other.cecCodigo != null) || (this.cecCodigo != null && !this.cecCodigo.equals(other.cecCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreEntidadCrediticia[ cecCodigo=" + cecCodigo + " ]";
    }
    
}
